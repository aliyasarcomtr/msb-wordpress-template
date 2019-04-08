<?php get_header(); ?>
  <section id="content" class="col-md-9">
    <div class="contentInner">
      <ul class="breadCrumb">
        <li>
          <a href="<?php bloginfo('url'); ?>">
            Anasayfa
          </a>
        </li>
        <li>
          <?php the_author(); ?> 
        </li>
      </ul>
    </div>
    <div class="randomGrid">
      <?php require_once('inc/template/subject.php') ?>
    </div>
  </section>
  <div class="clearfix"></div>
 <!-- Sayfalama -->
<?php sayfalama(); ?>
<?php get_footer(); ?>
