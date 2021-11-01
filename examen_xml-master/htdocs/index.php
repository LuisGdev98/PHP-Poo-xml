<?php

include_once 'CFDI.php'; 


class Main 
{
    private $cfdi_xml;


    /*private static $array_data = [
        "Comprobante" => [
            "LugarExpedicion" => "64000",
            "TipoDeComprobante" => "i",
            "Moneda" => "MXN",
            "SubTotal" => "100",
            "Total" => "116",
            "FormaPago" => "01",
            "NoCertificado" => "00000010101010101",
            "Fecha" => "2021-10-06 11:00:00"
        ],
        "Emisor" => [
            "Rfc" => "TME960709LR2",
            "Nombre" => "Tracto Camiones s.a de c.v",
            "RegimenFiscal" => "612"
        ]
    ];*/

    function __construct()
    {
        $this->cfdi_xml = new CFDI;
    }

    public static function createXML($valor)
    {
       //Obtener el XML por medio de la clase XML
        foreach ($valor as $key => $value) :
            if ($key != (string) 'Comprobante') :
                foreach ($value as $attribute => $value) :
                //Setear attributos
                    $this->comprobante->atributos['Folio'] = 1854;
                endforeach;
            endif;
        endforeach;
    }
}
try {
    $main = new Main;
    $main->createXML($comprobante);

     print_r( $xml);
?>
<tr><?php print_r($main);  ?> </tr>
</br>
<tr><?php //echo $this->comprobante; ?></tr>

<?php
    
} catch (\Exception $error) {
    echo $error->getMessage();
}

?>