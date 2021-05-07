<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
echo "<h3> Ascending </h3>";
    for($i = 2; $i <= 20 ; $i+=2 ){
        echo "$i - I Love PHP";
        echo "<br>";
      }
      ?>

      <?php
      echo "<h3> Descending </h3>";
      for($i = 20; $i > 0 ; $i-=2 ){
        echo "$i - I Love PHP";
        echo "<br>";
      }
      ?>

      <?php
      echo "<h3>Soal No 2 Looping Array Modulo </h3>";
$numbers = [18, 45, 29, 61, 47, 34];
print_r($numbers);
echo "<br>";
echo "<br>";
for ($i=0; $i < count($numbers); $i++) {
    echo "array numbers: ". $numbers[$i]. "<br>";
    $rest[$i] = $numbers[$i] % 5;
    echo "array sisa baginya adalah: ". $rest[$i] . "<br><br>";
}
?>

<?php
echo "<h3> Soal No 3 Looping Asociative Array </h3>";
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 30000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pintar', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    // Output:
    $arr_socc = [];
    foreach ($items as $itm) {
        $arr_socc[] = array(
            'id' => $itm[0],
            'name' => $itm[1],
            'price' => $itm[2],
            'description' => $itm[3],
            'source' => $itm[4]
        );
    };
    ?>
    <?php
    echo "<h3>Soal No 4 Asterix </h3>";
    echo "asterix: <br>";
    for ($i=0; $i < 5 ; $i++) {
        for ($j=0; $j < 5; $j++) {
            if ($j <= $i) {
                echo '*';
            } else{
                echo '';
            }
        }
        echo '<br>';
    }
    echo "<br>;


       