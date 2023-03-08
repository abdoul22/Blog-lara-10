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
</body>
</html>
