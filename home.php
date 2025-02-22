<?php
// Array with names
$a[] = "SHIRTS";
$a[] = "SHUITS";
$a[] = "COAT";
$a[] = "Diana";
$a[] = "SHREE";
$a[] = "PAINTS";
$a[] = "JACKET";
$a[] = "SANDELS";
$a[] = "BAG";
$a[] = "SHOES";
$a[] = "T-SHIRTS";
$a[] = "SHOCKS";
$a[] = "PURSE";
$a[] = "TOOLS";
$a[] = "BELT";
// $a[] = "Amanda";
// $a[] = "Raquel";
// $a[] = "Cindy";
// $a[] = "Doris";
// $a[] = "Eve";
// $a[] = "Evita";
// $a[] = "Sunniva";
// $a[] = "Tove";
// $a[] = "Unni";
// $a[] = "Violet";
// $a[] = "Liza";
// $a[] = "Elizabeth";
// $a[] = "Ellen";
// $a[] = "Wenche";
// $a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= "<br>$name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;

?>