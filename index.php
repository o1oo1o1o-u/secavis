<?php
include_once('./lib/lib.php');
include_once('./lib/class.php');


if (isset($_GET['numFiscal']) && $_GET['refAvis']) {
    $spi = $_GET['numFiscal'];
    $facture = $_GET['refAvis'];

    getSecavis($spi, $facture);
}

    

?>