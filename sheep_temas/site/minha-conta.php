<?php 
require_once "header.php"
?>

<!--inicio minha conta-->
<div class="minha-conta">
    <div class="conteiner">
        <div class="linha">
            <div class="col-2">
                <img src="<?=CAMINHO_TEMAS?>/asset/img/banner-1.png" width="100%" alt="">
            </div>
            <div class="col-2">
                <div class="formulario">
                    <div class="btn-form">
                       
                        <span onclick="Entrar()">Entrar</span>
                        <span onclick="Cadastro()">Cadastro</span>
                        <hr id="Indicador">
                    </div>
                    <form action="" method="post" id="EntrarPainel">
                        <input type="email" name="email" placeholder="E-mail de acesso">
                        <input type="password" name="senha" placeholder="Digite sua senha">
                        <button type="submit" name="sendEntrar" class="btn">Entrar</button>
                        <a href="" title="">Esqueceu a sua senha?</a>
                    </form>


                    <form action="" method="post" id="CadastroSite">
                        <input type="text" name="nome" placeholder="Nome Completo">
                        <input type="email" name="email" placeholder="E-mail de acesso">
                        <input type="password" name="senha" placeholder="Digite sua senha">
                        <button type="submit" name="sendCad" class="btn">Cadastre-se</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fim minha conta-->






<script src="<?=CAMINHO_TEMAS?>/asset/js/login.js"></script>
<?php 
require_once "footer.php"
?>