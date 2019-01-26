<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="./script.js"></script>

    <title>Horoscope</title>

  </head>

  <body>
      <div class="container">
        <input id="user_date" value="" type="date"><br>
        <button class="Add" type="submit" onclick="addHoroscope()">Add</button>
        <button class="update" type="submit" onclick="updateHoroscope()">Update</button>
        <button class="delete" type="submit" onclick="deleteHoroscope()">Delete</button>
      </div>
      <div>
        <table id="table-id">
        </table>
      </div>
  </body>
</html>