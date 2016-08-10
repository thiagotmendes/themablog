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
                  <div class="col-md-5">
                    <a href="'<?php the_permalink(); ?>'">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
                  </div>
                  <div class="col-md-7">
                    <h2 class="titulo-noticia">
                      <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                      </a>
                    </h2>
                    <p class="data-noticia"> <?php the_time('j \d\e F \d\e Y') ?> </p>
                    <p> <?php the_excerpt_limit(30) ?> </p>
                    <p align="center"> <a href="<?php the_permalink() ?>" class="btn btn-site"> Saiba mais </a> </p>
                  </div>
                </div>
              </article>
          <?php
              endwhile;
            endif;
          ?>
          <?php wp_pagination() ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer() ?>
