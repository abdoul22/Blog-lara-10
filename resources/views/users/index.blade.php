<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Users Page</h1>
    <h2>The current user is : {{ $user }}</h2>
    The current UNIX timestamp is {{ time() }}. <br>
    Hello, {!! $user !!}. <br>

    @if ( $user === 'Abdou')
    I have one record!
    @elseif ($user == 'Sidi')
    I have multiple records!
    @else
    I don't have any records!
    @endif
    <br>
    @unless (Auth::check())
    You are not signed in.
    @endunless
    <br>
    @isset($user)
    User is defined and is not null...
    @endisset
    <br>
    @empty($user)
    User is "empty"...
    @endempty
    <br>
    @auth
    // The user is authenticated...
    @endauth
    <br>
    @guest
    <h1>User is not a authenticated</h1>
    @endguest
    <br>
    @for ($i = 0; $i < 10; $i++)
     The current value is {{ $i }}
     <br>
    @endfor
 </body>

</html>
