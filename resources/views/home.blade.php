@extends('navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    {{-- De esta manera estoy llamando a la vista de cards --}}
    @section('content-card')
        @include('cards')
    @endsection
</body>

</html>
