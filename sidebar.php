<aside class="btn-pages">
  <a href="<?php echo esc_url( home_url( 'inbound-marketing' ) ); ?>">
    INBOUND MARKETING
  </a>
  <a href="<?php echo esc_url( home_url( 'terceiro-setor' ) ); ?>">
    TERCEIRO SETOR
  </a>
  <a href="<?php echo esc_url( home_url( 'evidencia-de-impacto' ) ); ?>">
    EVIDÊNCIA DE IMPACTO
  </a>
</aside>
<aside class="">
<?php
// Inserindo uma área de Widgets
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral') ) :?>
  <p>Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
<?php
endif;
?>
</aside>
