 <?php $in1 = $_GET["1"]; ?><br>
 <?php $in2 = $_GET["2"]; ?>
 <?php $math = $_GET["math"];
 if($math=="add"){
    $output = $in1 + $in2;
    echo "The reseult is: ".$output;
 }elseif($math=="substract"){
    $output = $in1 - $in2;
    echo "The reseult is: ".$output;
 }elseif($math=="multiply"){
    $output = $in1 * $in2;
    echo "The reseult is: ".$output;
 }else{
    $output = $in1 / $in2;
    echo "The reseult is: ".$output;
 }
?>