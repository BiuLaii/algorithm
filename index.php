<?php
function randomNumber($rannum){
    $Numbers = []; 
    for ($i = 0; $i < $rannum; $i++) {
        $Numbers[] = rand(1, 100);
    }
    return $Numbers;
}

$num = randomNumber(5);

print_r($num);

function miniMaxSum($num) {
    sort($num); 
    
    $numMin = $num[0] + $num[1] + $num[2] + $num[3];
    $numMax = $num[count($num) - 1] + $num[count($num) - 2] + $num[count($num) - 3] + $num[count($num) - 4];

    echo "Giá trị tối thiểu: " . $numMin;
    echo "Giá trị tối đa: " . $numMax;
}

miniMaxSum($num);

?>
