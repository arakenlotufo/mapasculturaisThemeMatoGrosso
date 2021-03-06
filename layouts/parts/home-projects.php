<?php 

if(!$app->isEnabled('projects')){
    return;
}

$class_project = 'MapasCulturais\Entities\Project';
$class_file = 'MapasCulturais\Entities\File';
$num_projects           = $this->getNumEntities($class_project);
$num_verified_projects  = $this->getNumEntities($class_project, true);

$project_types = $app->getRegisteredEntityTypes($class_project);

$project = $this->getOneVerifiedEntity($class_project);
if($project && $img_url = $this->getEntityFeaturedImageUrl($project)){
    $project_img_attributes = 'class="random-feature" style="background-image: url(' . $img_url . ');"';
}

$url_search_projects = $this->searchProjectsUrl;

$project_img_attributes = 'class="random-feature no-image"';
?>
<article id="home-projects" class="js-page-menu-item home-entity clearfix">
    <div class="box">
          <div class="box-content">
          <h1><span class="icon icon-project"></span> Projetos</h1>
            <div class="clearfix">
                <div class="statistics">
                    <div class="statistic"><?php echo $num_projects; ?></div>
                    <div class="statistic-label">projetos cadastrados</div>
                </div> 
                <div class="statistics">
                    <div class="statistic"><?php echo $num_verified_projects; ?></div>
                    <div class="statistic-label">projetos da <?php $this->dict('home: abbreviation'); ?></div>
                </div>
            </div>
         <p><?php $this->dict('home: projects') ?></p>
         <!--   <h4>Encontre projetos por</h4>
            <ul class="abas clearfix">
                <li class="active"><a href="#project-types">Tipo</a></li>
            </ul>
            <div id="project-types"  class="tag-box">
                <div>
                    <?php foreach ($project_types as $t): ?>
                        <a class="tag" href="<?php echo $app->createUrl('site', 'search') ?>##(project:(types:!(<?php echo $t->id ?>)),global:(enabled:(project:!t),filterEntity:project,viewMode:list))"><?php echo $t->name ?></a>
                    <?php endforeach; ?>
                </div> 
            </div>  -->
        </div>
    </div>

    <div class="box">
         <a class="btn btn-accent btn-large add" href="<?php echo $app->createUrl('project', 'create') ?>">Adicionar projeto</a>
         <a class="btn btn-accent btn-large" href="<?php echo $url_search_projects ?>">Ver tudo</a>
		<div class="box-content">
            <?php if($project): ?>
                <a href="<?php echo $project->singleUrl ?>">
                    <div <?php echo $project_img_attributes;?>>
                        <div class="feature-content">
                            <h3>destaque</h3>
                            <h2><?php echo $project->name ?></h2>
                            <p><?php echo $project->shortDescription ?></p>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
       <!--     <a class="btn btn-accent btn-large add" href="<?php echo $app->createUrl('project', 'create') ?>">Adicionar projeto</a>
            <a class="btn btn-accent btn-large" href="<?php echo $url_search_projects ?>">Ver tudo</a>
   -->
        </div>
    </div>
</article>
