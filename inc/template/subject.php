  <?php
    $counter = 1;
    if (have_posts()) : while (have_posts()) : the_post();
    $counter = $counter + 1;
  ?>
   <div class="postBox">
    <div class="authorInner">
      <figure class="authorPhoto">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos.jpg" alt="">
      </figure>
      <header class="authorName">
        <?php the_author_posts_link(); ?>
        <div class="postStatics">
          <ul>
            <li><i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' önce'; ?></li>
          </ul>
        </div>
      </header>
      <div class="clearfix"></div>
    </div>
    <hr>
    <div class="postInner">
      <header class="postHead">
        <h1>
          <a href="<?php the_permalink(); ?>">
           <?php the_title(); ?>
          </a>
        </h1>
      </header>
      <figure class="postImage">
        <a href="<?php the_permalink(); ?>">
          <?php
            if(has_post_thumbnail()){
              the_post_thumbnail('medium_large');
            }
            else{
              echo '<img src="'.get_bloginfo('stylesheet_directory').'/assets/img/resimyok.jpg"/>';
            }
          ?>
        </a>
      </figure>
      <div class="postStatics">
        <ul>
          <li><i class="fa fa-comments-o"></i><?php comments_number('0 yorum', '1 yorum', '% yorum' );?></li>
           <li>
            <i class="fa fa-folder-o"></i>
            <?php
              $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
              }
             ?>
          </li>
          <li class="postShare">
            <i class="fa fa-share"></i>
            <span>Paylaş</span>
            <ul class="socialOpen">
              <li><a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;" target="_blank">Facebook</a></li>
              <li><a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank">Twitter</a></li>
              <li><a class="whatsapp" href="whatsapp://send?text=<?php the_permalink();?>&t=<?php the_title(); ?>” data-action=”share/whatsapp/share" target="_blank">Whatsapp</a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/shareArticle?&title=<?php echo get_the_title(''); ?>&url=<?php echo get_permalink(); ?>" title="Linkedin'de Paylaş" target="_blank">Linkedin</a></li>
              <li><a class="googleplus" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" title="Google Plus'da Paylaş" target="_blank">Google+</a></li>
              <li><a class="pinterest" href="http://pinterest.com/pinthis?url=<?php echo get_permalink(); ?>" title="Pinterest'te Paylaş" target="_blank">Pinterest</a></li>
             </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
   <?php if($counter==2 ){?>
   <div class="postBox">
    adsense kodu
   </div>
   <?php } ?>
   <?php if($counter==5){?>
   <div class="postBox">
     adsense kodu
   </div>
   <?php } ?>
   <?php if($counter==8){?>
   <div class="postBox">
     adsense kodu
   </div>
   <?php } ?>
  <?php endwhile; endif; $counter++; ?>
