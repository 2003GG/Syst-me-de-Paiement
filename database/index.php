<?php
 
include_once __DIR__ . "/../Repository/clientRepository.php";
include_once __DIR__ . "/../src/client.php";
include_once __DIR__ . "/consolePayement.php";
$cl =new ConsolePaymentApp();
$cl->showMenu();    