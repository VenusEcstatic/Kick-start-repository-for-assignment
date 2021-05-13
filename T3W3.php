<?php 

function sum(...$numbers) 
{
    $total  = 0;
    foreach ($numbers as $n)
    {
        $total += $n;
    }
    return $total.'<br>';
}

echo sum(2,3);
echo sum(2,3,4);
echo sum(2,3,4,5);

?>