<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Team Data</title>
    <link rel="stylesheet" type=“text/css” href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <style type="text/css">
      h1 {
        text-align: center;
      }
      h2 {
        text-align: center
      }
      h3 {
        text-align: center;
      }
      form {
        padding-top: 20px;
      }
      label {
        margin-left:auto;
        margin-right: auto;
      }
    </style>

    <h1> Information for the <?= $team; ?> </h1>
    <h3><a href="/">Home</a></h3>

    <form action="/frontEnd/team/<?= $ID; ?>" method="post">
      {{ csrf_field() }}
      <label for="team">Team
      <input type="text" name="team" value="<?= $team; ?>" id="team">
      </label>
      <label for="league">League
      <input type="text" name="league" value="<?= $league; ?>" id="league">
      </label>
      <label for="record">Record
      <input type="text" name="record" value="<?= $record; ?>" id="record">
      </label>
      <input type="submit" value="Update Team Information" class='bg-success'>
    </form>

  </body>
</html>
