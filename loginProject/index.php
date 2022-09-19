<?php

session_start();
if(!isset($_SESSION["user"])){
    header("Location:login.php");
}
else{
    
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="css/general.css">

  <?= $_COOKIE["theme_mode"]=="light"?'<link rel="stylesheet" href="css/light-mode.css">':'<link rel="stylesheet" href="css/dark-mode.css">'; ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="d-flex  align-items-center justify-content-center flex-column-reverse flex-md-row" style='height:100vh'>
      <div class="card theme-card col-10 col-md-8 col-lg-3">
        <div class="card-header ">
          Information
         
        </div>
        <div class="card-body  theme-card-body">
          <h1 class="theme-h1"><?=$_SESSION["user"]["username"]?></h1>
          <p class=" theme-muted"><?=$_SESSION["user"]["username"]?>@anilonay.com</p>
          <form action="log.php?p=user_desc" method="post">
              <textarea rows="10" cols="15" name="user_desc" class="form-control theme-form-control"><?= isset($_COOKIE["user_desc"])?$_COOKIE["user_desc"]:""; ?></textarea>
              <button class="btn me-auto theme-button  mt-1">Submit</button>
          </form>
        </div>
        <div class="card-footer text-end">
          <a href="log.php?p=log_out" class="btn d-inline-block ms-auto theme-button-danger">Log Out</a>
        </div>
        <div class=" card-footer d-flex">
            <div class="col-6"><a href="log.php?p=light_mode" class="btn w-100 theme-mode-light">Light Mode</a></div>
            <div class="col-6"><a href="log.php?p=dark_mode" class="btn w-100 theme-mode-dark">Dark Mode</a></div>
        </div>
      </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>





<?php } ?>