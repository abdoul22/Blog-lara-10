<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(['index','show']);
        $this->middleware('auth')->only('edit','create','delete','update','store');
    }
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|mimes:jpeg,png,gif,svg|max:2048'
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $imagePath = 'images';
            $imagenameext = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($imagePath, $imagenameext);
            $input['image'] = $imagenameext;
        }
        Product::create($input);
        return redirect()->route('products.index')
            ->with('success', 'Product created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

         $input = $request->all();
        if ($image = $request->file('image')) {
            $imagePath = 'image/';
            $imagenameext = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($imagePath, $imagenameext);
            $input['image'] = $imagenameext;
        }else{
            unset($input['image']);
        }
        $product->update($input);

        return redirect()->route('products.index')
        ->with("success",'Product updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with("success", 'Product deleted successfuly');
    }
}
