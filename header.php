<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php
	      if ( is_single() ) {
	        bloginfo('name'); echo " | "; single_post_title();
	      }elseif ( is_home() || is_front_page() ) {
	        bloginfo('name'); echo ' | ';
	        bloginfo('description');
	      }elseif ( is_page() ) {
	        single_post_title('');
	      }elseif ( is_search() ) {
	        bloginfo('name');
	        echo ' | Search results for ' . wp_specialchars($s);
	      }elseif ( is_404() ) {
	        bloginfo('name');
	        print ' | Not Found';
	      }else {
	        bloginfo('name');
	        wp_title('|');
	      }
      	?>
    </title>

    <!-- Bootstrap -->
    <?php wp_head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header>
    <nav class="navbar navbar-cityhelp" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php logo_site() ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right fale-consultor">
            <li><a href="#" data-toggle="modal" data-target="#fale-consultor"> FALE COM UM CONSULTOR </a></li>
          </ul>
          <?php
            $args = array(
              'menu' => 'principal',
              'menu_class' => 'nav navbar-nav navbar-right',
              'walker'	 => new wp_bootstrap_navwalker()
            );
            wp_nav_menu($args);
          ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <!-- Modal -->
  <div class="modal fade" id="fale-consultor" tabindex="-1" role="dialog" aria-labelledby="Fale Com Consultor" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Formulário consultor') ) :?>
              <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
