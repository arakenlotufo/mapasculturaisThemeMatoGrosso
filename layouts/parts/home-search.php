<section id="home-intro" class="js-page-menu-item home-entity clearfix">
        <div class="branding">
        <span class="tipo">Mapa MT</span>
        <h1>Seja bem vind@!</h1>
        <p class="text">
          	<p style="text-align: justify; margin-left: 40px;">Mapas MT &eacute; um software livre para mapeamento colaborativo. O sistema &eacute; alimentado tanto pelas Secretarias de Estados e Munic&iacute;pios os quais inserem na plataforma informa&ccedil;&otilde;es sobre os equipamentos culturais, tur&iacute;sticos, programa&ccedil;&otilde;es oficiais, editais, e outros, como pela popula&ccedil;&atilde;o em geral, que se cadastra como agente (individual ou coletivo) e pode divulgar suas pr&oacute;prias programa&ccedil;&otilde;es. Esta ferramenta incorpora nos processos p&uacute;blicos as l&oacute;gicas do software livre, da colabora&ccedil;&atilde;o, da descentraliza&ccedil;&atilde;o, do uso de dados abertos e da transpar&ecirc;ncia. Al&eacute;m disso, fortalece o Plano Nacional e Estadual de Cultura, contribuindo para o seu cumprimento e acompanhamento de algumas de suas metas. Participe!</p>
			<p><iframe width='100%' height='250' src='https://www.youtube.com/embed/videoseries?list=PLJxEUm52CjMSH_byKXd14nlTdR0ZB2KeF' frameborder='0' allowfullscreen></iframe></p>
        </p>
    </div>
	
	<div class="box">
        <h1><?php $this->dict('home: title') ?></h1>
        <p><?php $this->dict('home: welcome') ?></p>
        <form id="home-search-form" class="clearfix" ng-non-bindable>
            <input tabindex="1" id="campo-de-busca" class="search-field" type="text" name="campo-de-busca" placeholder="Digite uma palavra-chave"/>
            <div id="home-search-filter" class="dropdown" data-searh-url-template="<?php echo $app->createUrl('site','search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}}),{{entity}}:(keyword:'{{keyword}}'))">
                <div class="placeholder"><span class="icon icon-search"></span> Buscar</div>
                <div class="submenu-dropdown">
                    <ul>
                        <?php if($app->isEnabled('events')): ?>
                            <li tabindex="2" id="events-filter"  data-entity="event"><span class="icon icon-event"></span> Eventos</li>
                        <?php endif; ?>
                        
                        <?php if($app->isEnabled('agents')): ?>
                            <li tabindex="3" id="agents-filter"  data-entity="agent"><span class="icon icon-agent"></span> Agentes</li>
                        <?php endif; ?>
                        
                        <?php if($app->isEnabled('spaces')): ?>
                            <li tabindex="4" id="spaces-filter"  data-entity="space"><span class="icon icon-space"></span> <?php $this->dict('entities: Spaces') ?></li>
                        <?php endif; ?>
                        
                        <?php if($app->isEnabled('projects')): ?>
                            <li tabindex="5" id="projects-filter" data-entity="project" data-searh-url-template="<?php echo $app->createUrl('site','search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}},viewMode:list),{{entity}}:(keyword:'{{keyword}}'))"><span class="icon icon-project"></span> Projetos</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </form>
        <a class="btn btn-accent btn-large" href="<?php echo $app->createUrl('panel') ?>"><?php $this->dict('home: colabore') ?></a>
    </div>
    <div class="view-more"><a class="hltip icon icon-select-arrow" href="#home-events" title="Saiba mais"></a></div>
</section>