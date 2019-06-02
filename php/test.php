<?php

echo "BONJOUR";
$x=2;
$y=5;
$res=1;
for ($i = 0; $i < $y; $i++) {
    $res=$res*$x;
}
echo ($res);
if ($res % 2 == 1)
{
   echo "$res est impair";
}
elseif ($res % 2 == 0)
{
   echo "$res est pair";
}
echo "<br>";
$n=$_POST['nom'];
$p=$_POST['prenom'];
$a=$_POST['age'];
echo "Je m'appelle $n $p j'ai $a";
?>
