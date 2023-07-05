<?php
function check_vote(){
    $name="suba";
    $age=25;
    if($age >=18){
        echo $name." you are  eligible for vote";
    }else{
        echo $name." ,you are not eligible for vote";
    }
}
check_vote();



?>