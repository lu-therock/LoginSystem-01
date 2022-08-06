<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>signUp</title>
</head>

<body>
    <?php require "partials/_nav.php" ?>
    <?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "user";

        $conn = mysqli_connect($server, $username, $password, $database);
        if(!$conn){
            die("Error due to " . myssqli_connect_error());
        }

        $name = $_POST['name'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $sql = "INSERT INTO `user` (`name`, `password`, `dt`) VALUES ('$name', '$password', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if ($password == $cpassword) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong> You are successfully signed in to the site.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
        else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR!!</strong> Enter the same password.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
    
?>
    <div class="container my-4">
        <form action="/LoginSystem/signup.php" method="post">
            <h2>SignUp To The Site</h2>
            <div class="form-group my-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="text" class="form-control" id="cpassword" name="cpassword">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>