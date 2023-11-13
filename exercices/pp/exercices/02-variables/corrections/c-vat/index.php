<?php 

define('VAT',  0.205);

$costVATE = (float)($_GET['cost'] ?? 0);
$numberOfItems = (float)($_GET['number'] ?? 0);

$totalVATE = $numberOfItems * $costVATE;
$totalVATI = $totalVATE + ($totalVATE * VAT);

var_dump($costVATE, $numberOfItems, $totalVATE, $totalVATI);
