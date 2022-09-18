<?php 
function triangle($val){
     for($i=0;$i<$val;$i++)
     {
         echo str_repeat("*",$i)."<br>"; 
         }
} 

triangle(15); ?>