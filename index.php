<?php

use App\Behavioral\Strategy\Compra;
use App\Behavioral\Strategy\PagamentoCartaoCredito;
use App\Behavioral\Strategy\PagamentoCartaoDebito;
use App\Creational\factory_method\Payment;
use App\Creational\factory_method\TypePayment;
use App\Creational\factory_method\TypePaymentFactory;
use App\Structural\BrigdeMethod\ArrayConverter;
use App\Structural\BrigdeMethod\ITGuy;
use App\Structural\BrigdeMethod\JsonConverter;
use App\Structural\BrigdeMethod\ProjectManager;
use App\Structural\Decorator\EnderecadorCaixaAlta;
use App\Structural\Decorator\EnderecadorComBorda;
use App\Structural\Decorator\EnderecadorSimples;
use App\Structural\Decorator\Endereco;

require_once __DIR__ . '/vendor/autoload.php';


$ITGuy = new ITGuy("Kanga Mateus", 29, 100_000);
$projectManager = new ProjectManager("Ayla Cristina", 1, 10_000);
$jsonConverter = new JsonConverter();
$arrayConverter = new ArrayConverter();
echo "ITGuy";
echo "<br>";
echo $jsonConverter->getEmployeeFormated($ITGuy);
echo "<br><pre>";
print_r($arrayConverter->getEmployeeFormated($ITGuy));
echo "<br>----------<br>";
echo "Project Manager";
echo "<br>";
echo $jsonConverter->getEmployeeFormated($projectManager);
echo "<br><pre>";
print_r($arrayConverter->getEmployeeFormated($projectManager));


//Structural Decorator

echo "----------------------- [STRUCTURAL] - DECORATOR ---------------------------";
echo "<br>";

$endereco = new Endereco("Rua 4 Casa 123", "Centro", "São José", "RN", "50930-123");
$enderecador = new EnderecadorSimples();
$enderecador = new EnderecadorCaixaAlta($enderecador);
$enderecador = new EnderecadorComBorda($enderecador);
echo $enderecador->preparaEndereco($endereco);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "-----------------------[BEHAVIORAL] - STRATEGY ---------------------------";
echo "<br>";

$compra = new Compra(20_000);
// $compra->processarCompra(new PagamentoCartaoDebito());
$compra->processarCompra(new PagamentoCartaoCredito());

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "-----------------------[CREATIONAL] - FACTORY_METHOD ---------------------------";
echo "<br>";


$typePayment = TypePaymentFactory::createTypePayment('DEBIT');
$payment = new Payment();
$payment->processPayment($typePayment);
