<?php
// Array with names
$a[] = "Anamica";
$a[] = "Bithi";
$a[] = "Choity";
$a[] = "Diganta";
$a[] = "Emi";
$a[] = "Farzana";
$a[] = "Gazi";
$a[] = "Harish";
$a[] = "Ishfaq";
$a[] = "Jhonny";
$a[] = "Kotha";
$a[] = "Lamia";
$a[] = "Nishi";
$a[] = "Oishi";
$a[] = "Poushi";
$a[] = "Alee";
$a[] = "Rahat";
$a[] = "Carryminati";
$a[] = "Dip";
$a[] = "Efty";
$a[] = "Emon";
$a[] = "Sayma";
$a[] = "Tanvir";
$a[] = "Urmi";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "Tom";
$a[] = "Ford";
$a[] = "Piggy";
$a[] = "Komola Shundori";
$a[] = "Harper";
$a[] = "Mason";
$a[] = "Ella";
$a[] = "Jackson";
$a[] = "Jack";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $username) {
        if (stristr($q, substr($username, 0, $len))) {
            if ($hint === "") {
                $hint = $username;
            } else {
                $hint .= ", $username";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>