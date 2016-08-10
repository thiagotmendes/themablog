<?php get_header() ?>

  <section class="banner-blog">
    <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="" class="img-responsive" />
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
                    <p class="data-noticia"> <?php the_time('j \d\e F \d\e Y') ?> </p>
                    <div class="conteudo-artigo">
                      <?php the_content() ?>
                    </div>
                  </div>
                </div>
              </article>

              <article class="bloco-noticia">
                <div class="conteudo-artigo">
                  <?php $tag_single = get_the_tags( $post->ID ); ?>
                  <?php if (!empty($tag_single)): ?>
                    <hr>
                    <div class="tags">
                      <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
                    </div>
                    <hr>
                  <?php endif ?>

                  <div class="author">
                    <div class="row">
                      <div class="col-md-2 img-author">
                        <?php $email = get_the_author_email();
                        $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] );
                        $usegravatar = get_option('woo_gravatar');?>
                        <img src="<?php echo $grav_url; ?>" alt=""/>
                      </div>
                      <div class="col-md-10">
                        <h4 class="nome-author"><a href = "<?php the_author_url ();?>" itemprop="url"><?php the_author(); ?></a></h4>
                        <?php the_author_description();?>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <?php comments_template(); ?>
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
