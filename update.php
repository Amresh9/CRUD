<html>

<body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <section class="m-3">
        <div class="">
            <form action="" method="post">

                <div class="mb-3">
                    <label" class="form-label">Book Name</label>
                        <input type="text" class="form-control" name="bname" value="<?php
                                                                                    require_once 'result.php';
                                                                                    echo $row['book_name']; ?>" placeholder="Book Name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" value="<?php
                                                                                    require_once 'result.php';
                                                                                    echo $row['price']; ?>" placeholder="Price" required />
                </div>

                <button type="submit" class="btn btn-primary" name="update" value="">Update</button>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





    <?php


    $mysqli = new mysqli('localhost', 'root', '', 'mybookdb') or die(mysqli_connect_error());

    $tid = $_GET['id'];



    if (isset($_POST['update'])) {

        // $id = $_POST['id'];
        $bname = $_POST['bname'];
        $price = $_POST['price'];

        $upsql = "UPDATE product SET  book_name='$bname', price=$price WHERE id=$tid";

        if (mysqli_query($mysqli, $upsql)) {

            echo 'updated sucesfully';
            header('location:index.php');
        } else {
            echo 'update query error';
        }



        header('location:index.php');
    }
    ?>

</body>

</html>