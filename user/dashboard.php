<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font/all.min.css">
    <link rel="stylesheet" href="../css/font/fontawesome.min.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Dashboard </title>
    <style>
  label,
input[type='radio'] {
    margin-top: 0.4em;
    margin-left: 0.4em;

}

input:checked {
    border: none;
    outline: 1px solid red;
}

  #mg
  {
    margin-top:20px;
  }
  
  .form-outer
{
height:auto;
width:100%;
overflow: hidden;
position:relative;
}
.red
{
top:0;
}

.red-stat
{
  position:relative;
top:1000;
height:auto;

}

.blue
{
position:absolute;
top:1000;
height:auto;


}


.yellow
{
position:absolute;
top:1500;
height:auto;

}

.blue-stat
{
  position:relative;
top:2000;
height:auto;

}

.yellow-stat
{
  position:relative;
top:1000;
height:auto;

}





.green
{
position:absolute;
top:2000;
height:auto;

}


.blue-ab
{
position:absolute;
top:0;
height:auto;

}

.yellow-ab
{
position:absolute;
top:0;
height:auto;

}

.red-ab
{
position:absolute;
top:0;
height:auto;


}




.green-ab
{
position:absolute;
top:0;
height:auto;

}


.container
{
width:100%;
overflow: hidden;


}
button
{

margin-left:20px;
}

</style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        
        <div class="bg-white" id="sidebar-wrapper">
         <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom bg-secondary text-white"><i
         class="fa fa-university me-2"></i>Mku</div>
        <div class="list-group list-group-flush my-3">
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
         class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
         class="fa-solid fa-registered me-2"></i>Register</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
         class="fa fa-address-card me-2"></i>Admission</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
        class="fa-solid fa-graduation-cap me-2"></i>Student</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fa-solid fa-right-from-bracket me-2"></i>Exit</a>
                
        </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3 text-primary" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-primary">Dashboard</h2>
                </div>

 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
  aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle second-text fw-bold text-white" href="#" id="navbarDropdown"
     role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fas fa-user me-2"></i>User Name </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <li><a class="dropdown-item" href="#">Profile</a></li>
               <li><a class="dropdown-item" href="#">Edit</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
               </li>
             </ul>
              </div>
              </nav>
              
              <?php include 'application.php';?>

    </div>

    </div>

    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>