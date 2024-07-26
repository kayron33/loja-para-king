<?php 
require_once "header.php"
?>
<!--INICIO CARRINHO DE COMPARS-->
<div class="corpo-categorias carrinho-compras">
<!--INICIO TABELA DO CARRINHO DE COMPARS-->
<table>
    <tr>
        <th>produto</th>
        <th>Quantidade</th>
        <th>Valor</th>
    </tr>


<!--INICIO DO ITEM DO CARRINHO-->
    <tr>
        <td>
            <div class="info-carrinho">
                <img src="<?=CAMINHO_TEMAS?>/asset/img/carrinho-1.jpg" alt="">
                <div><p>Item magico</p>
                <small>Valor:R$ 777</small>
                <br>

                <a href="" title="">Remover</a>
                
                </div>
            </div>
        </td>
        <td> <form action="" method="post">
            <input type="number" name="" id="" value="1">
        </form></td>
        <td>R$777</td>
    </tr>
    <!--FIM DO ITEM DO CARRINHO-->
<!--INICIO DO ITEM DO CARRINHO-->
    <tr>
        <td>
            <div class="info-carrinho">
                <img src="<?=CAMINHO_TEMAS?>/asset/img/carrinho-2.jpg" alt="">
                <div><p>Item magico</p>
                <small>Valor:R$ 777</small>
                <br>

                <a href="" title="">Remover</a>
                
                </div>
            </div>
        </td>
        <td> <form action="" method="post">
            <input type="number" name="" id="" value="1">
        </form></td>
        <td>R$777</td>
    </tr>
    <!--FIM DO ITEM DO CARRINHO-->
<!--INICIO DO ITEM DO CARRINHO-->
    <tr>
        <td>
            <div class="info-carrinho">
                <img src="<?=CAMINHO_TEMAS?>/asset/img/carrinho-3.jpg" alt="">
                <div><p>Item magico</p>
                <small>Valor:R$ 777</small>
                <br>

                <a href="" title="">Remover</a>
                
                </div>
            </div>
        </td>
        <td> <form action="" method="post">
            <input type="number" name="" id="" value="1">
        </form></td>
        <td>R$777</td>
    </tr>
    <!--FIM DO ITEM DO CARRINHO-->

</table>
<!--FIM TABELA DO CARRINHO DE COMPARS-->


<!--inicio valor total DO CARRINHO DE COMPARS-->
<div class="valor-total">
    <table>
        <tr>
            <td>Sub-Total</td>
            <td>R$ 700</td>
        </tr>


        <tr>
            <td>Frete</td>
            <td>R$ 77</td>
        </tr>

        <tr>
            <td>Total</td>
            <td>R$ 777</td>
        </tr>
    </table>
</div>

<!--fim valor total DO CARRINHO DE COMPARS-->

</div>
<!--FIM CARRINHO DE COMPARS-->





<?php 
require_once "footer.php"
?>