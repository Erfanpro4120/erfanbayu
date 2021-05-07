<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i = 1; $i < 5 ; $i++ ){
        echo "ini adalah looping ke $i";
        echo "<br>";
      }
      ?>

      <?php
      echo "<br>";
      for($i = 0; $i < 100 ; $i+=2 ){
        echo "ini adalah looping ke $i";
        echo "<br>";
      }
      ?>

    <?php
      echo "<br>";
      for($i = 100; $i > 0 ; $i-=2 ){
        echo "ini adalah looping ke $i";
        echo "<br>";
      }
      ?>

      // tampilkan nilai dari 1 sampai dengan 100
      // jika habis dibagi 3 tampilkan fizz
      // jika habis dibagi 5 tampilkan buzz
      // jika habis dibagi 3 dan 5 tampilkan fizz dan buzz
      
      <?php
      echo "<br>";
      for($i = 1; $i <= 100 ; $i++ ){
        if ($i % 3 == 0 && $i % 5 == 0){
            echo "fizz buzz"."<br>";
        }else if($i % 5 ==0){
            echo "buzz"."<br>";
        }else if($i % 3 ==0){
            echo "fizz"."<br>";
        }else{
            echo $i. "<br>";
      }
      }
      ?>
    
</body>
</html>