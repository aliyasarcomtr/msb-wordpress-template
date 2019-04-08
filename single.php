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
          <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
              echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
            }
           ?>
        </li>
        <li>
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php the_title() ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </li>
      </ul>
    </div>
    <div class="singleInner">
      <ul class="subjectInfo">
        <li>
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' önce'; ?>
        </li>
        <li>
            <i class="fa fa-comment-o" aria-hidden="true"></i>
            <a href="<?php the_permalink() ?>#CommentList">
                <?php comments_number('0 yorum', '1 yorum', '% yorum' );?>
            </a>
        </li>
      </ul>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <header class="singleHead"><h1><?php the_title(); ?></h1></header>
      <figure class="singleImage">
        <?php
          if(has_post_thumbnail()){
            the_post_thumbnail('medium_large');
          }
          else{
            echo '<img src="'.get_bloginfo('stylesheet_directory').'/assets/img/resimyok.jpg"/>';
          }
        ?>
      </figure>
      <article class="singleTxt">
        <?php the_content('');?>
      </article>
      <div class="singleTags">
        <header class="innerHead">Etiketler</header>
        <?php the_tags('#','#',''); ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <?php comments_template(); ?>
   </div>
<?php get_footer(); ?>
