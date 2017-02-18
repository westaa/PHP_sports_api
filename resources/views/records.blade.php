<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Team Records</title>
    <link rel="stylesheet" type=“text/css” href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <h1 class="text-center">Team Records</h1>
    <h1 class="text-center"><a href="/">Home</a></h1>
    @for ($i = 0; $i < count($data); $i++)
    <h2 class="text-center"> {{$teamName[$i]}} : {{ $data[$i] }}  </h2>
    @endfor
</html>
