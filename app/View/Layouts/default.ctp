<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('style-user');


		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
       <!-- NAV SECTION -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home"><?php echo $this->Html->image("OMA_logo.png",array('class' => 'img-logo','alt' => "logo")) ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home#about">Info</a></li>
        <li><a href="/home#servicios">Servicios</a></li>
        <?php if(!$isLogin){ ?>
          <li><a href="/home/login">Iniciar Sesión / Registrarse</a></li>
        <?php  }else{ ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $userLogin['name']." ".$userLogin['last_name']; ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="/admin">Panel</a></li>
              <li><a href="/home/logout">Cerrar Sesi&oacute;n</a></li>
            </ul>
          </li>          
        <?php  } ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     <!--END NAV SECTION -->
        <div id="content">
            <?php echo $this->Flash->render('positive') ?>
            <?php echo $this->fetch('content'); ?>

        </div>      
    <!--FOOTER SECTION -->
    <div id="footer">
        2017 OMA Envios | TODOS LOS DERECHOS RESERVADOS
         
    </div>
    <!-- END FOOTER SECTION -->

            <div class="right_col" role="main">
            	<div class="row tile_count">
            		<?php //echo $this->element('sql_dump'); ?>
 				</div>
    		</div>
        </div>
  </div>


<?php 
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('custom-user');
  echo $this->Html->script('jqueryForm');
  echo $this->Html->script('functionsShipments');
?>
</body>
</html>
