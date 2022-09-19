<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/light-mode.css">


</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="d-flex  align-items-center justify-content-center flex-column-reverse flex-md-row" style='height:100vh'>
      <img src="img/rlogo.png" width="500" alt="">
      <div class="card login-card col-10 col-md-8 col-lg-3">
        <div class="card-header">
          Log In Form
        </div>
        <div class="card-body login-body">
          <form action="log.php?p=log_in" method="post">
              <div class="form-group mb-1">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
              </div>
              <div class="form-group mb-1">
                <label for="Password" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="password" id="Password">
              </div>
              <div class="form-group">
                <button class="btn btn-success mt-3 ">Log In</button>
              </div>
            </form>
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