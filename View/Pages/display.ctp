<div id="slogan">
    <h2>Esta a procura de um desenvolvedor web?</h2>
    <p>Você esta no lugar certo! Trabalho com web há mais de 8 anos, com experiencia nas mais modernas tecnologias e ferramentas.</p>
    <p>Caso tenha se interessado no meu perfil, por favor, <?php echo $this->Html->link('entre em contato', '/contato', array('escape' => false));?> ou veja mais trabalhos no <?php echo $this->Html->link('meu portfolio &raquo;', '/curriculum', array('escape' => false));?></p>
</div>
<hr >
<!--<div class="row">
    <div class="span6">
        <h3>Web</h3>
    </div>
    <div class="span6">
        <h3>Redes Socias</h3>
    </div>
</div>-->
<div class="row"><h2 class="text-center"><span class="txt30cinza">&ldquo;<span class="txt30verde">&Uacute;ltimos</span> Projetos&rdquo;</span></h2></div>
<div class="row">
    <?php for ($i=1; $i < 5; $i++) { ?>
    <div class="span3">
        <a href="" class="txtcinza"><img src="http://placehold.it/220x140">
        <strong><i class="icon-briefcase"></i> Projeto <?php echo $i ?></strong><br /></a>
        <a href="http://projeto<?php echo $i ?>.com.br" class="txtcinza"><i class="icon-share-alt"></i> projeto<?php echo $i ?>.com.br</a>
    </div>
    <?php } ?>
</div>