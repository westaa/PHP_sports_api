<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel - Sports Data API</title>
    <link rel="stylesheet" type=“text/css” href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <h1 class="text-center">Laravel Sports Data API</h1>
    <h4 class="text-center"><a href="/frontEnd/team">View Team Records</a></h4>
    <form action="/frontEnd/team" method="post">
      {{ csrf_field() }}
      <h3 class="text-center">Submit Team Information to Database</h3>
      <input type="text" name="team" placeholder="Team Name">
      <input type="text" name="league" placeholder="League">
      <input type="text" name="record" placeholder="Record">
      <input type="submit" value="Submit Information" class=
      "bg-success">
    </form>

    <div class="centeringDiv">
      <style type = "text/css">
      table tr {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
      }
      table {
        margin-left: auto;
        margin-right: auto;
        width: 80%
      }
      table tr th {
        background: lightblue;
        border-radius: 8px;
        border-style: solid;
        border-color: black;
        border-width: thin;
        text-align: center;
        width: 19%
      }
      table tr td {
        text-align: center;
        width: 19%;
      }
      h6 {
        margin: 0;
        margin-top: 4px;
      }
      </style>
        <table  class="text-center">
        <tr class="row">
          <th class="col-md-2"><h4 class="text-center">Edit</h4></th>
          <th class="col-md-2"><h4 class="text-center">Team Name</h4></th>
          <th class="col-md-2"><h4 class="text-center">League</h4></th>
          <th class="col-md-2"><h4 class="text-center">Record</h4></th>
          <th class="col-md-2"><h4 class="text-center">Delete</h4></th>
        </tr>
          @foreach ($data as $row)
        <tr class="row">
          <td class="col-md-2">  <a href="/frontEnd/team/{{ $row->id }}" class="text-center">Edit</a></td>
          <td class="col-md-2" class="teamName">  <h6>{{ $row->team }}</h6> </td>
          <td class="col-md-2"> <a href="/frontEnd/team/league={{ $row->league }}">{{ $row->league }}</a></td>
          <td class="col-md-2">  {{ $row->record }} </td>
          <td class="col-md-2">  <a href="/frontEnd/delete/{{ $row->id }}">Delete</a></td>
        </tr>
            @endforeach
      </table>
    </div>
  </body>
</html>
