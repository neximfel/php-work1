<!-- 1 задание -->
 
<?php 
    echo "Задание 1 <br>"; 
    for($i = 1; $i < 100; $i++){
        if($i % 3 === 0){
            echo $i . " ";
        }
    }
    echo "<br>";
?>

<!-- 2 задание -->

<?php
    echo "Задание 2 <br>"; 
    $num = 0;
    $sum = 0;
    while($num <= 50){
        $sum = $sum + $num++;
    }
    echo $sum . "<br>";
?>

<!-- 3 задание -->

<?php
    echo "Задание 3 <br>";
    for($i = 1, $j = 7; $i <= 10; $i++){
        echo $i . " * " . $j . " = " . $i * $j . "<br>";
    }
    echo "<br>";
?>

<!-- 4 задание -->

<?php
    echo "Задание 4 <br>";
    $numbers = [4, 8, 15, 16, 23, 42, 100, 7];
    foreach($numbers as $number){
        if ($number % 2 !== 0){
            continue;
        }
        echo $number . " - ";
    }
    echo "<br>";
?>
<!-- 5 задание -->
<?php
    echo "Задание 5 <br>";
    $i = 5;
    do{
        echo $i . "<br>";
        $i--;
    } while ($i >= 1);
    echo "Старт! <br>";
?>

<!-- 6 задание -->

<?php
    echo "Задание 6 <br>";
    $height = 5;
    while ($height >= 1){
        switch($height){
            case "5":
                echo "* <br>";
                break;
            case "4":
                echo "** <br>";
                break;
            case "3":
                echo "*** <br>";
                break;
            case "2":
                echo "**** <br>";
                break;
            case "1":
                echo "***** <br>";
                break;
        }
        $height--;
    }
?>