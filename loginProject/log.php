<?php
        session_start();

if($_GET["p"]=="log_in"){
        $_SESSION["user"] = array("username"=>$_POST["username"] , "password" =>$_POST["password"]);
        if(!isset($_COOKIE["theme_mode"])){
                setcookie("theme_mode","light",time()+(9999*99999));
        }
        header("Location:index.php");
}
if($_GET["p"]=="log_out"){
        session_destroy();
        header("Location:login.php");
}
if($_GET["p"]=="user_desc"){
        setcookie("user_desc",$_POST["user_desc"],time()+(999*999));
        header("Location:index.php");
}

if($_GET["p"]=="dark_mode"){
        setcookie("theme_mode","dark",time()+(9999*99999));
        header("Location:index.php");
}
if($_GET["p"]=="light_mode"){
        setcookie("theme_mode","light",time()+(9999*99999));
        header("Location:index.php");
}


?>