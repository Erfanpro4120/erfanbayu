<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        function greetings($nama){
            echo "hallo $nama, selamat datang di Penus"."<br>";
        }
        
        greetings("abduh");
        greetings("bagas");
        greetings("wahyu");
        greetings("abdul");

        echo "<h3>Soal No 2 Reverse String</h3>";
        //code function disini
        function reverseString($str){
            $i = strlen($str) - 1;
            for ($j = 0; $j < $i; $j++) {
                $temp = $str[$i];
                $str[$i] = $str[$j];
                $str[$j] = $temp;
                $i--;
            } ;
            echo "$str <br>";
        }

        //hapus komentar dibawah ini untuk jalankan code
        reverseString("abduh");
        reverseString("Penus");
        reverseString("We Are Developers");
        echo "<br>";

        echo "<h3>Soal No 3 Palindrome </h3>";
        function palindrome($str){
            $old_str = $str;
            $i = strlen($str) - 1;
            for ($j = 0; $j < $i; $j++) {
                $temp = $str[$i];
                $str[$i] = $str[$j];
                $str[$j] = $temp;
                $i--; 
            };

            if ($str == $old_str) {
                echo "kata $old_str merupakan kalimat palindrome <br>";
            } else {
                echo "kata $old_str bukan kalimat palindrome <br>";
            };
        };
        //hapus komentar dibawah ini untuk jalankan code
        palindrome("civic") ; // true
        palindrome("nababan") ; // true
        palindrome("jambaban"); // false
        palindrome("racecar"); // true


        ?>
        </body>
        </html>
            