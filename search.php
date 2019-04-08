<?php get_header(); ?>
  <div id="content" class="col-md-9">
    <div class="contentInner">
      <ul class="breadCrumb">
        <li>
          <a href="<?php bloginfo('url'); ?>">
            Anasayfa
          </a>
        </li>
        <li>
          Arama Sonuçları "<?php echo get_search_query(); ?>"
        </li>
      </ul>
    </div>
    <div class="randomGrid">
      <?php require('inc/template/subject.php') ?>
    </div>
  </div>
  <div class="clearfix"></div>
 <!-- Sayfalama -->
<?php sayfalama(); ?>
<?php get_footer(); ?>
