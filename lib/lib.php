<?php

include_once('./lib/class.php');


function clearTabs($data) {    
    return str_replace("\t", "", $data);
}


function getSecavis($numeroFiscal, $referenceAvis) {
    $url = 'https://cfsmsp.impots.gouv.fr/secavis/faces/commun/index.jsf';
    $spi = 'j_id_7:spi';
    $facture = 'j_id_7:num_facture';
    $javax = 'javax.faces.ViewState';
    $submit = 'j_id_7_SUBMIT';
    $button = 'j_id_7:j_id_l';
        $data = array(
            $spi => $numeroFiscal,
            $facture => $referenceAvis,
            $submit => '1',
            $javax => 'RxJe/1JKTJSr3aiM3H9DqZq0DrwqEXsY7Rw4eLRgEBsCF1IALJGqVgWTaQkiKbbdcGDWW774BWUCa/+j2CDznhw1/3bxJteY6ZCui66yNevhkej4xuyrFMte5KQnKORt9JZrOQ==',
            $button => 'submit'
        );

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { echo 'Une erreur est survenu?'; }
        
        $textExport = var_export($result, true);
        file_put_contents('./bulk/contentPost.html', $textExport); 
        
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $html = $dom->loadHTMLFile('./bulk/contentPost.html');
        $dom->preserveWhiteSpace = false;

        $tables = $dom->getElementsByTagName('table');
        $rows = $tables->item(0)->getElementsByTagName('tr');

        $parseDebug = 0;
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            if ($cols->item(0)->nodeValue != null) {

                switch($parseDebug) {
                    case 1:
                        $nameDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 2:
                        $birthnameDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 3:
                        $firstnameDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 4:
                        $birthdayDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 5:
                        $addressStreetDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 6:
                        $addressCityDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 9:
                        $partsDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 10:
                        $situationDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 11:
                        $dependentsDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 12:
                        $incomeDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 13:
                        $taxableDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 15:
                        $amountOfTaxeDeclarant = clearTabs($cols->item(1)->nodeValue);
                        break;
                    case 16:
                        $referenceIncomeDeclarant = clearTabs($cols->item(1)->nodeValue);                 
                        break;
                    
                    
                    
                }
                $parseDebug++;
            }
        }

        $declarant = new Declarant($nameDeclarant,$birthnameDeclarant,$firstnameDeclarant,$birthdayDeclarant,$addressStreetDeclarant,$addressCityDeclarant,$partsDeclarant,$situationDeclarant,$dependentsDeclarant,$incomeDeclarant,$taxableDeclarant,$amountOfTaxeDeclarant,$referenceIncomeDeclarant,$numeroFiscal,$referenceAvis);

        var_dump($declarant);       
        
}



?>