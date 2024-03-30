<?php 
$i = 1;
while ($i <=10){
    echo $i++;
};

echo"<br>Tidak mencetak karena nilai kembalian false di iterasi pertama:";

$i = 0;
while ($i > 0) {
    echo $i;
};