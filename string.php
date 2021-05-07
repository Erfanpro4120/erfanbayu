<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   

        echo "<h3> Soal No 1</h3>";
    
        $string = "PHP is never old";
        echo "<p>{$string}</p>";
echo "Panjang string: " . strlen($string) . "<br>"; # 16
echo "Panjang kata: " . str_word_count($string) . "<br>"; # 4

$firt_sentence = "Hello PHP!";
echo "<p>{$firt_sentence}</p>";
echo "Panjang string: " . strlen($firt_sentence) . "<br>"; # 10
echo "Panjang kata: " . str_word_count($firt_sentence) . "<br>"; # 2
 
$second_sentence = "I'm ready for the challenges";
echo "<p>{$second_sentence}</p>";
echo "Panjang string: " . strlen($second_sentence) . "<br>"; # 28
echo "Panjang kata: " . str_word_count($second_sentence) . "<br>"; # 5

echo "<h3> Soal No 2</h3>";
$string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 5) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 7, 10) . "<br>" ;

        echo "<h3> Soal No 3 </h3>";
        $string3 = "PHP is old but sexy!";

        echo "Judul asli : {$string) <br>";
        echo "Judul baru" : " .str_replace("sexy", "awesome", $string3) . "<br>";


 ?>
</body>
</html>

       