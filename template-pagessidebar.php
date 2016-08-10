<?php /* template name: Barra lateral */ ?>
<?php get_header() ?>

<section class="banner-blog">
  <?php echo do_shortcode('[rev_slider alias="blog"]') ?>
</section>

  <main class="main-site">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?php get_sidebar() ?>
        </div>
        <div class="col-md-9">
          <?php
            if (have_posts()):
              while (have_posts()): the_post();
          ?>
              <article class="bloco-noticia">
                <div class="row">
                  <div class="col-md-12">
                    <a href="'<?php the_permalink(); ?>'">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
                  </div>
                  <div class="col-md-12">
                    <h2 class="titulo-noticia">
                      <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                      </a>
                    </h2>
                    <div class="conteudo-artigo">
                      <?php the_content() ?>
                    </div>
                  </div>
                </div>
              </article>
          <?php
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer() ?>
