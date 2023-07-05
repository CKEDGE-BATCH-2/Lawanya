<?php
$m=5;
for($i=1;$i<=$m;    $i++){
for($j=1;$j<=$i;$j++){
echo ' * ';
}
echo '<br>';
}
for($i=$m;$i>=1;$i--){
for($j=1;$j<=$i;$j++){
echo ' * ';
}
echo '<br> ';
}
?>