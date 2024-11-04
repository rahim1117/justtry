<?php

$filename="C:\\Users\\MD ABDUR RAHIM\\Desktop\\vs code\\new\\text.txt";
$ra=fopen($filename,'r');
while($line=fgets($ra)){
    echo $line."<br>";
}

//$substring = substr($line, 0, 3);
echo $substring;
//echo $line;
fclose($ra);

