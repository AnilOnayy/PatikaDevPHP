<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <div class="container d-flex flex-column justify-content-center align-items-center" style='height:100vh'>
    <form method="post">
        <div class="mb-3 row">
            <label for="inputName" class="pb-2">Magic Number</label>
            <div class="col-12">
                <input type="number" class="form-control" name="num" id="inputName" placeholder="Type Number !">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" name="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </form>
    <div class="alert alert-danger  w-100">
            <?php
            function multipleOfThree($num){
                if($num%3==0){
                    return "$num , divisible by 3";
                }
                else{
                    $myNumber = $num;
                    while($num%3!=0){
                        
                        $num++;
                        if($num%3==0){
                            return "$myNumber , your numbet cannot divisible 3 , Divisibled first number is $num";
                            break;
                        }
                    }
             
                   
                }
            }
            if(isset($_POST["submit"])){
               $num = $_POST["num"];
               if($num==""){
                echo "Cannot Enter Empty Value !";
               }
               else{
                echo multipleOfThree($num);
               }
            }
            
            
            ?>
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