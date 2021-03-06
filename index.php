<?php
include 'includes/class-autoload.inc.php' ?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container shadow">
    <h1> my calculator </h1>
    <form action="includes/calculator.inc.php" method="POST">
      <div class="form-group">
        <input type="text" name="firstNumber" id="" class="form-control" placeholder="enter first number" aria-describedby="helpId">
      </div>
      <div class="form-group">
        <input type="text" name="secondNumber" id="" class="form-control" placeholder="second number" aria-describedby="helpId">
      </div>
      <div class="form-froup">
        <select name="select_operation" class="mdb-select md-form">
          <option value="" disabled selected>Choose your option</option>
          <option value="add">add</option>

          <option value="subtract">subtract</option>
        </select>
      </div>
      <button type="submit" class=" mt-2 btn btn-info">submit</button>
    </form>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>