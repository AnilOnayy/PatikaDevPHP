<?php 
function randPlanet($planets,$val){

    $new_arr = array_filter($planets,function($item){
        if($item!="" || $item!=null){
            return $item;
        }
    });
    $randomize = array_rand($new_arr,$val);
    for($i=0; $i<$val;$i++){
        $posting[$i] = $new_arr[$randomize[$i]];
    }


    return $posting;
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(randPlanet($planets,3));
print_r(randPlanet($planets,4));
print_r(randPlanet($planets,5));
print_r(randPlanet($planets,6));
print_r(randPlanet($planets,7));
print_r(randPlanet($planets,5));


?>