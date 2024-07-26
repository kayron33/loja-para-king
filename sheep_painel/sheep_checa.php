<?php
ob_start();
session_cache_expire(60);
session_start();
require('../sheep_core/config.php');

//inicio proteção para o formulario
$_SESSION['_sheep-firewall']=(!isset($_SESSION['_sheep-firewall'])) ? hash('sha512',random_int(100, 5000)): $_SESSION['_sheep-firewall'];
//fim proteção para o formulario
//proteção para url do painel de controle
$_SESSION['timeWT']=(!isset($_SESSION['timeWT'])) ? time() : $_SESSION['timeWT'];
//fim proteção para url do painel de controle

$see_uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$ms = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>