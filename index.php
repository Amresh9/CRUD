<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>mycrud</title>
</head>

<body>


  <?php

  include_once "./insert.php";
  ?>













  <!-- ---------------------------------- my nav bar start---------------------------------- -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img width="45" height="45" style="border-radius: 50%" src="./images/download.png" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- --------------------------- my nav bar end ---------------------------- -->

  <!-- -------------------- table section where data show -------------------- -->

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Book Name</th>
        <th scope="col">Price</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $mysqli = new mysqli('localhost', 'root', '', 'mybookdb') or die(mysqli_connect_error());
      $result = $mysqli->query("SELECT * FROM product") or die(mysqli_connect_error());



      while ($row = $result->fetch_assoc()) {

        echo "

<tr>
<td>" . $row['id'] . "</td>
<td> " . $row['book_name'] . " </td>
<td>" . $row['price'] . " </td>


";
        echo "<td>";

        echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"name="upbtn"></span></a>';
        echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" name="del"></span></a>';
        echo "</td></tr>";
      }

      ?>







    </tbody>
  </table>

  <!-- ----------------------- table section end here ------------------------ -->

  <!-- -------------------- form section start from here --------------------- -->
  <section class="m-3">
    <h2 class="btn btn-primary" onclick="myform();">Add New Book Details</h2>
    <div class="" id="formdetail">
      <form action="" method="post">
        <div class="mb-3">
          <label" class="form-label">ID</label>
            <input type="number" class="form-control" name="id" placeholder="your id" />
        </div>
        <div class="mb-3">
          <label" class="form-label">Book Name</label>
            <input type="text" class="form-control" name="bname" placeholder="Book Name" />
        </div>
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="number" class="form-control" name="price" placeholder="Price" />
        </div>

        <button type="submit" class="btn btn-primary" name="save">Save</button>
      </form>
    </div>
  </section>
  <!-- --------- form section end from here ------------------------ --------- -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <style>
    input {
      width: 15em !important;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <style>
    body {
      background-color: lightpink;
    }

    #formdetail {
      display: none;
      visibility: hidden;
    }
  </style>
  <script>
    function myform() {
      var id = document.getElementById('formdetail');
      id.style.display = "block";
      id.style.visibility = "visible";
    }
  </script>
</body>

</html>