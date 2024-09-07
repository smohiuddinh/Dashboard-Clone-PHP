<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN FORM</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body style="background-color: #697ad1">
    <div
      class="container text-center d-flex flex-column align-items-center justify-content-center my-5"
      style="
        background-color: white;
        width: 30%;
        height: 50%;
        border-radius: 25px;
      "
    >
      <div class="row  d-flex flex-column align-items-center justify-content-center mb-2" style="
        background-color: white; ";>
        <form method = "post" >
          <img src="./images.jpeg" />
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              name = "email"
            />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              name = "password"
            />
          </div>
          <div class="mb-3 form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
              >Check me out</label
            >
          </div>
          <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
          <br>
        </form>
      </div>
    </div>
  </body>
</html>

<?php

include 'logindb.php';


if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Invalid username or password" ;
    }
    else {

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password)
            VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        header('Location: tasDashboard.php');
        //  echo "Successfully inserted record into users table";
        exit();
    } catch (mysqli_sql_exception $e) {
        echo "Failed to insert record into users table: " . $e->getMessage();
    }
}

}



?>
