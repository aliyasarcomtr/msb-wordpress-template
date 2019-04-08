<?php
/*
    Kategori listeleme
 */

class listeleme_2 extends WP_Widget {

    function __construct() {
        $widget_options = array( 'description' => 'Blog Kategori Yazıları Listeleme Modülü' );
        parent::WP_Widget(false,'* Blog Kategori Yazıları', $widget_options );
    }

    function widget($args, $instance) {
        extract($args);
        $title = $instance['title'];
        $sayi = $instance['sayi'];
        $category = $instance['category'];


        echo $before_widget;
        echo $before_title . $title . $after_title;
        ?>
            <?php
              $CatPosts = new WP_Query('cat='.$category.'&showposts='.$sayi.'');
              while($CatPosts->have_posts()) : $CatPosts->the_post();
            ?>
              <article class="articleInner">
                <a href="<?php the_permalink() ?>">
                  <figure class="articleImage">
                    <?php
                      if ( has_post_thumbnail() ) {
                          the_post_thumbnail('medium');
                      }
                      else {
                          echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
                              . '/assets/img/resimyok.jpg"  />';
                      }
                    ?>
                  </figure>
                </a>
                <header class="articleHead">
                  <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                  </a>
                  <span class="articleDate"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' önce'; ?></span>
                </header>
                <div class="clearfix"></div>
              </article>
             <?php endwhile; ?>
        <?php
            echo $after_widget;
            }
            function update($new_instance, $old_instance) {
                return $new_instance;
            }
            function form($instance) {
                if(isset($instance['title'])) {
                    $title = $instance['title'];
                }else {
                    $title = "";
                }
                if(isset($instance['sayi'])) {
                    $sayi = $instance['sayi'];
                }else {
                    $sayi = "";
                }
                if(isset($instance['category'])) {
                    $category = $instance['category'];
                }else {
                    $category = "";
                }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ) ;?>">Başlık:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ) ;?>"
                   class="widefat" value="<?php echo $title; ?>" name="<?php echo $this->get_field_name( 'title' ) ;?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'sayi' ) ;?>">Gösterilecek Konu Sayısı:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'sayi' ) ;?>"
                   class="widefat" value="<?php echo $sayi; ?>" name="<?php echo $this->get_field_name( 'sayi' ) ;?>" />
        </p>
          <p>
              <label for="<?php echo $this->get_field_id('category'); ?>"><?php _e( 'Kategori Seçin:' )?></label>
              <select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>">
                  <?php
                  $this->categories = get_categories();
                  foreach ( $this->categories as $cat ) {
                      $selected = ( $cat->term_id == esc_attr( $category ) ) ? ' selected = "selected" ' : '';
                      $option = '<option '.$selected .'value="' . $cat->term_id;
                      $option = $option .'">';
                      $option = $option .$cat->name;
                      $option = $option .'</option>';
                      echo $option;
                  }
                  ?>
              </select>
          </p>
        <?php
                }
            }
            register_widget( 'listeleme_2' );
        ?>
