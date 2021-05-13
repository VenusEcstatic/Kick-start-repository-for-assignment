<?php 

$array = array(2, 3, 4, 6, 7, 9, 11, 20); 
// 
for ($i = 0; $i < count($array); $i++) 
{ 
        if ($array[$i]%2 ==0)   
        echo $array[$i]."<br>";  
}

?>