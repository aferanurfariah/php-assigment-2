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

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini
function reverseString($aldo) {
    $length = strlen($aldo);
    $bolakBalikHuruf = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $bolakBalikHuruf .= $aldo[$i];
    }
    
    echo($bolakBalikHuruf . "<br>");
}

// Hapus komentar di bawah ini untuk jalankan Code
reverseString("abduh");
reverseString("Bootcamp");
reverseString("We Are JCC Developers");

echo "<br>";
