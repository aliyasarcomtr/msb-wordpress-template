<?php
   function wpdocs_filter_wp_title($title, $sep){
    global $paged, $page;
    if ( is_feed() )
    return $title;
    $title .= get_bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
    $title = "$title $sep $site_description";
    if ( $paged >= 2 || $page >= 2 )
    $title = "$title $sep " . sprintf( 'SAYFA %s' , max( $paged, $page ) );
     return $title;
  }
  add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );
  //Öne Çıkarılmış Görsel
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  if ( ! isset( $content_width ) ) $content_width = 1000;
  // Dinamik Menü
  register_nav_menu( 'menu1', 'Menu');
  // Sayfalama
  function sayfalama($pages = '', $range = 3){
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
      global $wp_query;
      $pages = $wp_query->max_num_pages;
    if(!$pages){
    $pages = 1;
    }
  }
  if(1 != $pages){
      echo "<div class='wp-pagenavi'>";
      if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>İlk</a>";
      if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
      for ($i=1; $i <= $pages; $i++){
        if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
          echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
        }
      }
      if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
      if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Son</a>";
      echo "</div>\n";
    }
  }
// admin bar kaldırma
add_filter( 'show_admin_bar', '__return_false' );
  // Dinamik Sidebar
  if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Sidebar Widget',
    'id'            => 'sidebar-widget',
    'before_widget' => '<div class="widgetInner">',
    'after_widget' => '</div>',
    'before_title' => '<h1 class="innerHead">',
    'after_title' => '</h1>'
  )); 
?>
