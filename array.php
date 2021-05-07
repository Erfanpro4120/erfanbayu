<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
        print_r($kids);
      
        $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
        print_r($adults);
     
        echo "<h3> Soal 2</h3>";
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
        // menampilkan panjang array $keranjang
echo count($kids);

echo "<br>";
        $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
// menampilkan panjang array $keranjang
echo count($adults);

echo "<br>";
echo "Cast Stranger Things: ";
echo "<br>";
echo "Total Kids: " ; // Berapa panjang array kids
echo "<br>";
echo "<ol>"; 
echo "<li> $kids[0] </li>";
