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
          <?php the_title(); ?>
        </li>
      </ul>
    </div>
    <div class="pageInner">
    <?php while ( have_posts() ): the_post(); ?>
      <h1 id="pageHead"><?php  the_title(); ?></h1>
        <time datetime="<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' önce'; ?>"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' önce'; ?></time>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </section>
<?php get_footer(); ?>
