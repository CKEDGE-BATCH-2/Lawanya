<?php
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
$var= "MADAM";
if(Palindrome($var)){ 
    echo "Palindrome"; 
    echo"<br>";
}
else { 
    echo "Not a Palindrome"; 
    
}
$Palindrome=array("malayalam","watermelon");
foreach($Palindrome as $lavs){
    if(strrev($lavs)==$lavs){
        echo $lavs."is a Palindrome";
        echo"<br>";
         }
         else{
            echo $lavs. " is Not a  Palindrome";
         }
}

?> 
