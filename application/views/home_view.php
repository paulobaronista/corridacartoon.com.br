<div class="home">
    <div class="container-fluid logo">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logo-cn.png" alt="Corrida Cartoon">
            </div>
        </div>
    </div>
    <div class="container-fluid a-corrida">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 padding-off box-1">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/cartoon-1.png" alt="Corrida Cartoon">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-7 col-lg-7 padding-off box-2">
                <p>
                    A CORRIDA<br>
                    CARTOON<br>
                    ESTÁ DE VOLTA!<br>
                    <span>O JEITO MAIS<br>
                        DIVERTIDO</span> DA SUA<br>
                    MARCA INTERAGIR!
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid video">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <p>100% DIGITAL! 100% SEGURA!</p>
                <p>200% ENGAJADA COM NOSSO PÚBLICO!</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <video width="100%" height="auto" controls>
                    <source src="<?= base_url(); ?>assets/video/brasileirao.mp4" type="video/mp4">
                    <source src="<?= base_url(); ?>assets/video/brasileirao.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<div class="phygital">
    <div class="container-fluid box-1">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 padding-off">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/cartoon-2.png" alt="Corrida Cartoon">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-7 col-lg-7 padding-off">
                <p>
                    NOSSA CORRIDA<br>
                    "PHYGITAL"<br>
                    ACONTECE DE<br>
                    <span>29 DE NOVEMBRO<br>
                        A 27 DE DEZEMBRO!</span>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid box-2">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding-off">
                <p>
                    TRAGA SUA MARCA<br>
                    PARA FAZER PARTE<br>
                    DESSE PROJETO INÉDITO: <br>
                    <span>
                        VAMOS LEVAR PARA<br>
                        NOSSOS FÃS A<br>
                        EXPERIÊNCIA DE<br>
                        CORREREM E SE<br>
                        DIVERTIREM DENTRO<br>
                        DE SUAS CASAS!</span>
                </p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding-off">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/cartoon-3.png" alt="Corrida Cartoon">
            </div>
        </div>
    </div>
</div>

<div class="paisefilhos">
    <div class="container-fluid box-1">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 padding-off">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/cartoon-4.png" alt="Corrida Cartoon">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-7 col-lg-7 padding-off">
                <p>
                    PAIS E FILHOS TERÃO<br>
                    A CHANCE DE<br>
                   <span>JOGAREM, REALIZAREM<br> 
                    ATIVIDADES FÍSICAS<br>
                    E BRINCAREM JUNTOS</span><br>
                    NA CIDADE CARTOON!
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid box-2">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 padding-off">
                <p>
                    E O MELHOR:<br> 
                    SUA MARCA PODE<br> 
                    TER UM ESPAÇO<br> 
                    100% CUSTOMIZADO<br> 
                    DENTRO DESSA<br> 
                    CIDADE INCRÍVEL!
                </p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 padding-off">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/cartoon-5.png" alt="Corrida Cartoon">
            </div>
        </div>
    </div>
</div>








<!-- 

-->












<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
            <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                <div class="group-form">
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Nome*" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <input id="empresa" type="text" class="empresa form-control" name="empresa" placeholder="Agência/Empresa" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="Email*" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <input id="telefone" class="phone form-control" type="tel" name="phone" placeholder="Telefone" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="cookies" class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 cookies">
                <div class="col-xs-12 col-sm-9 col-md-9">
                    <p>
                        Usamos cookies para garantir que obtém sempre a melhor experiência ao visitar o nosso website, para medir a utilização e o desempenho, bem como apresentar anúncios. Ao clicar em “Aceito”, concorda com as nossas configurações padrão.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a href="#" class="btn_cookie btn center-block">Aceito</a>
                </div>
            </div>
        </div> -->

    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>politicadeprivacidade">Política de privacidade</a></li>
                    <li><a href="<?php echo base_url(); ?>politicadecookies">Política de cookies</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus neque hic
                    corporis porro, nihil harum alias consectetur iste corrupti temporibus odio,
                    commodi velit minus, aperiam soluta. Veniam perspiciatis aut culpa.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>