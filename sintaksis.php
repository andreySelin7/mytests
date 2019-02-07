<?php
header ("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv>
<?php
$firstName = "имя";
$lastName = "фамилия";
$fullName = $firstName . $lastName;
//$fullName = $firstName . " - " . $lastName; //
echo $fullName;
echo '</br> =========================================== </br>';
$a = 5;
$b = 5;
if ($a == $b) {
    echo 'A равно B';
}
echo '</br> =========================================== </br>';
$a = 5;
$b = 6;
if ($a == $b) {
    echo 'A равно B';
}
else {
    echo 'A не равно B';
   
    
}
echo '</br> =========================================== </br>';
$a = 5;
$b = 6;
$c = 10;
$d = 5;
if ($a == $b) {
    echo 'A равно B';
}
elseif ($a == $c) {
    echo 'A  равно C'; 
} 
elseif ($a == $d) {
    echo 'A  равно D';
}
else {
    echo 'A ничему не равно';
   
}
echo '</br> =========================================== </br>';
switch ($a) {
    case $b:
        echo 'A равно B';
        break;
        case $c:
            echo 'A равно C';
            case $d:
                echo 'A равно D';
                break;
            default :
                echo 'A ничему не равно';
                
}
echo '</br> =========================================== </br>';
for ($i = 1; $i < 101; $i = $i + 1) {
    echo $i . '<br>';
}
echo '</br> =========================================== </br>';
    $i = 1; 
    while ($i < 101) {
        echo $i . '<br>';
        $i = $i + 1;
}
echo '</br> =========================================== </br>';
$myArray = array('Привет','Мир','родился','новый','программист');
foreach ($myArray as $value) {
    echo $value . '<br>';

}        

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

