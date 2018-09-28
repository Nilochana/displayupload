<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <br>
    <h1 class="text-white bg-dark text-center">
    Register Form For Events
    </h1>
    <div class="col-lg-8 m-auto d-block">
    <form action="upload.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="user">Username:</label>
    <input type="text" name="username" id="user" class="form-control">
    </div>

    <div class="form-group">
    <label for="file">Profile pic:</label>
    <input type="file" name="file" id="file" class="form-control">
    </div>

    <input type="submit" name="submit" value="submit" class="btn 
    btn-success">


    </form>
    </div>

    </div>

</body>
</html>