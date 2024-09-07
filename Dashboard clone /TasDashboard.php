<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ERES Dashboard</title>
    <link rel="stylesheet" href="./TasDashobord.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>

  <body>

<!-- N
<!-- NAVBAR Start   -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="#" class="btn-expand-collapse">
    <span class="glyphicon glyphicon-menu-right"
      ><i
        class="bx bx-menu"
        id="btn"
        style="font-size: 50px; color: darkblue; margin-top: -30px"
      ></i
    ></span>
  </a>

  <a class="navbar-brand font-weight-bold" href="#">Dashboard</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span ><i class="bi bi-three-dots-vertical"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        </ul>
    <form class="form-inline my-2 my-lg-0" method = "post" action = "logout.php">
      <h2>Hello! admin </h2>
      
      <div class="dropdown">
        <button
          class="btn btn-white dropdown-toggle text-primary"
          type="button"
          id="dropdownMenuButton"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <img src="./robert.jpeg" /> Hello,
          <span class="font-weight-bold"> Roberto </span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#"
            ><i class="bi bi-person text-primary"></i> Profile
          </a>
          <a class="dropdown-item" href="#"
            ><i class="bi bi-chat text-warning"></i> Change Password</a
          >
          <a class="dropdown-item" href="#" name = "logout" >
            <i class="bi bi-box-arrow-right text-danger"></i> Logout
          </a>
        </div>
      </div>
      </div>
   
    </form>
  </div>
</nav>
<!-- navbar end  -->

<!-- VERTICAL NAVIGATION BAR  -->
<nav class="navbar-primary mt-5">
  <ul class="navbar-primary-menu">
    <h2 class="text-primary fw-bold text-center">
      <span class="nav-label text-center" style="width: 20px; font-size: 20px;">TECHONOLOGIC <br> -Advance Solutions-</span>
    </h2>

    <li>
      <a href="#"
        ><span class="glyphicon glyphicon-list-alt"></span
        ><i class="bi bi-peace text-black-50"></i
        ><span class="nav-label"> Dashboard</span></a
      >

      <a href="#"
        ><span class="glyphicon glyphicon-list-alt"></span>
        <i class="bi bi-0-square"></i
        ><span class="nav-label">Blogs</span></a
      >
      <a href="#"
        ><span class="glyphicon glyphicon-envelope"></span
        ><i class="bi bi-airplane-engines"></i
        ><span class="nav-label">Jobs</span></a
      >
      <a href="#"
        ><span class="glyphicon glyphicon-cog"></span
        ><i class="bi bi-amd"></i><span class="nav-label"> Projects</span></a
      >
      <a href="#"
        ><span class="glyphicon glyphicon-film"></span
        ><i class="bi bi-archive-fill"></i
        ><span class="nav-label"> Team</span></a
      >
      <a href="#"
        ><span class="glyphicon glyphicon-calendar"></span>
        <i class="bi bi-arrow-down-left-square"></i
        ><span class="nav-label">Mails</span></a
      >

      <a href="#"
        ><span class="glyphicon glyphicon-calendar"></span
        ><i class="bi bi-arrow-left-right"></i
        ><span class="nav-label">Users</span></a
      >

      <a href="#"
        ><span class="glyphicon glyphicon-calendar"></span
        ><i class="bi bi-bar-chart"></i
        ><span class="nav-label"> Event From</span></a
      >

    </li>
  </ul>
</nav>
  </div>
<!-- VERTICAL NAVIGATION BAR ENDED  -->

<!-- MAIN CONTENT SART -->
<div class="main-content">
  <div class="row">
    <div class="col-md-8">
      <h1>Dashboard</h1>
    </div>
    <div class="col-md-4">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <a>Home /</a>
            <a class="text-primary"> Dashboard </a>
            
             </form>
        </div>
      </nav>
    </div>
  </div>
 <div class="container my-4">
<div class="row my-2">
     <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Blogs</h5>
              <h6 class="card-text fw-bold mb-2 ">5</h6>
              <a href="#" class="card-link">View Blogs</a>
              <i class="bi bi-substack" style="color: skyblue;"></i>
              </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
             <div class="card-body">
              <h5 class="card-title">Jobs</h5>
              <h6 class="card-text fw-bold mb-2 ">5</h6>
              <a href="#" class="card-link">View Jobs</a>
              <i class="bi bi-briefcase-fill" style="color: blue;"></i>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
         <div class="card-body">
          <h5 class="card-title">Teams</h5>
          <h6 class="card-text fw-bold mb-2 ">22</h6>
          <a href="#" class="card-link">View Teams</a>
          <i class="bi bi-people-fill" style="color: green;"></i>
         </div>
       </div>
     </div>
</div>
<div class="row my-2">
  <div class="col-md-4">
     <div class="card" style="width: 18rem;">
         <div class="card-body">
           <h5 class="card-title">Projects</h5>
           <h6 class="card-text fw-bold mb-2 ">27</h6>
           <a href="#" class="card-link">View Projects </a>
           <i class="bi bi-substack" style="color: yellow;"></i>
           </div>
     </div>
   </div>
   <div class="col-md-4">
       <div class="card" style="width: 18rem;">
          <div class="card-body">
           <h5 class="card-title">Users</h5>
           <h6 class="card-text fw-bold mb-2 ">4</h6>
           <a href="#" class="card-link">View User</a>
           <i class="bi bi-android2" style="color: red;"></i>             </div>
       </div>
   </div>
   <div class="col-md-4">
     <div class="card" style="width: 18rem;">
      <div class="card-body">
       <h5 class="card-title">Mails</h5>
       <h6 class="card-text fw-bold mb-2 ">1</h6>
       <a href="#" class="card-link">View Mails</a>
       <i class="bi bi-chat-left-text"></i>          </div>
    </div>
  </div>
</div>

<div class="container">
<!-- RIGHT LIST START -->
<div class="row">
  <div class="col-lg-6 col-12 mt-5 mb-2" style="height: 50vh;background-color: white;">
    <div
      data-bs-spy="scroll"
      data-bs-target="#navbar-example2"
      data-bs-offset="0"
      class="scrollspy-example"
      tabindex="0"
    >
    <h4>All Dashboard Users </h4>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">USER</th>
          <th scope="col">DATE CREATED </th>
          <th scope="col">DASHBOARD RIGHTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Admin</td>
          <td>Friday,August,12,2022</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Mustakhim</td>
          <td>Friday,March,17,2023</td>
          <td>blogs objects team sales</td>
        </tr>
        <tr>
          <td>Shayan</td>
          <td>Friday,Augsut,11,2023</td>
          <td>Blogs job Projects Teams </td>
        </tr>
      </tbody>
    </table>
    </div>
    
  </div>

<div class="col-lg-6 col-md-12 col-sm-12 mt-5">
<ul class="list-group">
<h4>Recent Activity</h4>

<li class="list-group-item text-dark">Projects Wednesday December 20 , 2023 <a id="mydate" class="list-group-item disabled" >Shayan add a new project</a> </li>
<li class="list-group-item text-dark">Projects Wednesday December 20 , 2023 <a id="mydate" class="list-group-item disabled" >Shayan add a new project</a> </li>
<li class="list-group-item text-dark">Projects Wednesday December 20 , 2023 <a id="mydate" class="list-group-item disabled" >Shayan add a new project</a> </li>
<li class="list-group-item text-dark">Projects Wednesday December 20 , 2023 <a id="mydate" class="list-group-item disabled" >Shayan add a new project</a> </li>
<li class="list-group-item text-dark">Projects Wednesday December 20 , 2023 <a id="mydate" class="list-group-item disabled" >Shayan add a new project</a> </li>

</ul>
</div>
</div>

</div>

    </div>
  </div>
<!-- maincontent ended  -->
    <script>
      $(".btn-expand-collapse").click(function (e) {
        $(".navbar-primary").toggleClass("collapsed");
      });
    </script>
  </body>
</html>

<?php
include 'logindb.php';

if(isset($_POST['logout'])) { // You missed a closing bracket for isset()
  header('Location: loginform.php');
  exit(); // It's a good practice to include exit() after header redirect
}
?>





