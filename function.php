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
//pendeklasian function
function hello(){
echo "hello word, ";
}
//pemanggilan
hello();
echo "<br>";

//function dengan parameter
function nama($nama, $alamat){
    echo"hello nama saya adalah $nama, alamat saya di$alamat";
}
nama("erfan, bogor")

//function dengan return
function tambah ($nilai1, $nilai2){
    return $nilai1 + $nilai2;
}


</body>
</html>