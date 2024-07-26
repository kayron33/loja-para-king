<?php

/**********************************************************************
 * ********************************************************************
 * CAMADA PRINCIPAL MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
 * 
 * ********************************************************************
* MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
 * *************MAYKON***SILVEIRA**************************************
 * *************sheep**TECHNOLOGIES***********************************
 * ********************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 01-10-2021 POR MAYKON SILVEIRA EAD 
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ********************************************************************
 * ********************************************************************
*/
session_start();
ob_start();
require('./sheep_core/config.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CAMINHO_TEMAS?>/asset/css/style.css">
    <title>Loja</title>

 
 <?php
        //inicia a leitura geral
        $sheep = new Ler();

        $Link = new Link;
        $Link->getTags();

       
        
?>
   
</head>
<body>



<?php

if(!require_once($Link->getPatch())):
   echo 'Erro ao incluir arquivo de navegação!';
endif;
?>

    
 <!-- Plugins JS File -->
 <script  type = "módulo"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script>
<script  nomodule  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>
    <script src="<?=CAMINHO_TEMAS?>asset/js/loja.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>