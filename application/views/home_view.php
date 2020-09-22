<!-- <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/.png" alt=""> -->



<!-- 
    <video width="100%" height="auto" controls>
                <source src="<?= base_url(); ?>assets/video/brasileirao.mp4" type="video/mp4">
                <source src="<?= base_url(); ?>assets/video/brasileirao.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video> 
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