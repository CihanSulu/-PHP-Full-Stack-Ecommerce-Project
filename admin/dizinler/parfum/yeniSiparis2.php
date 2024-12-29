<?php
require 'pdfcrowd.php';

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("aykutunamk", "37cf3e92769dffe232a3214e4f1eb40b");

    // run the conversion and write the result to a file
    $client->convertUrlToFile("http://data.verims.com/dizinler/parfum/yeniSiparis", "yeniIcerik.pdf");
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}
header("Location: yeniIcerik.pdf");
?>