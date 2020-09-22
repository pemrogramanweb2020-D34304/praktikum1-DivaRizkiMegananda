<?php
echo "<center>";
echo "Soal 1" . "<br>";
$star = 5;
for ($a = 1; $a <= $star; $a++) {
  for ($i = 1; $i <= $a; $i++) {
    echo " &nbsp";
  }
  for ($c = $star; $c >= $a; $c -= 1) {
    echo "*";
  }
  echo "<br>";
}
echo "</center>";

echo "<center>";
echo "Soal 2" . "<br>";

$a = 10;
while ($a > 1) {
  $b = $a;
  while ($b >= 1) {
    echo "*";
    $b = $b - 1;
  }
  echo "<br>";
  $a = $a - 2;
}
echo "</center>";

echo "<center>";
echo " Soal 3" . "<br>";
$a = 10;
while ($a > 1) {
  $b = $a;
  while ($b >= 1) {
    echo $b;
    $b = $b - 1;
  }
  echo "<br>";
  $a = $a - 2;
}
echo "</center>";

echo "<center>";
echo "Soal 3 revisi";
echo "<br>";

$i = 10;
for ($i = 5; $i >= 1; $i--) {
  for ($j = 1; $j <= 1 - $i; $j++) {
    echo " ";
  }
  for ($k = 1; $k < $i; $k++) {
    echo "$k";
  }
  for ($l = $i; $l >= 1; $l--) {
    echo "$l";
  }
  echo "<br>";
}
echo "</center>";
