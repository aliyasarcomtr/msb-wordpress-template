<?php
/*
    DaCvBlog Kategoriler Widget
 */
class kategoriler extends WP_Widget {

    function __construct() {
        $widget_options = array( 'description' => 'Temaya Özel Kategori Bileşeni' );
        parent::WP_Widget(false,'* Kategoriler Bileşeni', $widget_options );
    }

    function widget($args, $instance) {
        extract($args);
        $title = $instance['title'];

        echo $before_widget;
        echo $before_title . $title . $after_title;
        ?>

        <?php
          $parametre = array (
            'orderby' => 'name',
            'order' => 'DESC',
            'hide_empty' =>0,
            'parent' => 0
          );
          $kategoriler = get_categories($parametre);
          $count = $category->category_count;
        ?>
        <ul>
        <?php foreach ($kategoriler as $kategori) {?>
          <li>
            <a href="<?php echo get_category_link($kategori->term_id);?>">
              <?php echo $kategori->name;?>
            </a>
            <span class="Count"><?php echo ($kategori->count); ?></span>
          </li>
        <?php }?>
        </ul>
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
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ) ;?>">Başlık:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ) ;?>"
                   class="widefat" value="<?php echo $title; ?>" name="<?php echo $this->get_field_name( 'title' ) ;?>" />
        </p>
        <?php
                }
            }
            register_widget( 'kategoriler' );
        ?>
