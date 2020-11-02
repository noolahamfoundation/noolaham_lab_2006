<?php
if(!extension_loaded("soap")){
  dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("test.wsdl");

function doHello($yourName){

if ($yourName=="mau")
{
  return "Hi, ".$yourName;
}
else
{
return "0";
}





}

$server->AddFunction("doHello");

$server->handle();
?>

