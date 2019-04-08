<?php
 // Do not delete these lines
    if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Lütfen bu sayfayı direk açmaya çalışmayın.');

    if ( post_password_required() ) { ?>
        <div class="alert alert-info"><?php _e('Bu yazı şifre korumalıdır.Lütfen giriş yapınız.'); ?></div>
    <?php
        return;
    }
?>
    <?php if ( comments_open() ) : ?>
        <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
            <?php printf(_e('<div class="alert alert-warning">Yorum yazmak için <a href="%s">Giriş</a> yapmalısınız.</div>'), wp_login_url( get_permalink() )); ?>
    <?php else : ?>
    <div id="respond">
      <div class="Content-Widget">
        <header class="SectorHead">
          Yorumlar  ( <?php comments_number('Bu makaleye henüz yorum yapılmamış!', '1 Yorum', '% Yorum' );?> )
        </header>
        <p>
          <?php comment_form_title( 'Yazı hakkında görüşlerinizi belirtmek istermisiniz?', 'Şuanda %s adlı kişinin yorumuna cevap yazıyorsunuz.' ); ?>
        </p>
          <?php cancel_comment_reply_link(); ?>
      </div>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <!-- TextArea -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="comment" class="form-control" placeholder="Yorumunuzu Buraya Yazınız." required></textarea>
                    </div>
                </div>
            </div>
            <?php if ( is_user_logged_in() ) : ?>
            <?php do_action('comment_form', $post->ID); ?>
            <!-- Yorum Yapma Butonu -->
            <input name="submit" type="submit" class="btn btn-block btn-primary" value="Yorum Yap">
            <?php comment_id_fields(); ?>
        </form>
            <?php else : ?>
            <div class="row">
                <!-- İsim -->
                <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" name="author" placeholder="Adınız" type="text" required/>
                    </div>
                </div>
                <!-- E-mail -->
                <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" name="email"  placeholder="E-mail" type="email" required/>
                    </div>
                </div>
            </div>
            <?php do_action('comment_form', $post->ID); ?>
            <!-- Yorum Yapma Butonu -->
            <input name="submit" type="submit" class="btn btn-block btn-primary" value="Yorum Yap">
            <?php comment_id_fields(); ?>
        </form>
        <?php endif; ?>
    </div>
    <?php endif;?>
    <?php endif;?>
    <?php if ( have_comments() ) : ?>
    <div id="CommentList">
        <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
    </div>
    <?php else :  ?>
        <?php if ( comments_open() ) : ?>
        <?php else :  ?>
            <div class="alert alert-danger"><?php _e('Yoruma Kapalı!'); ?></div>
        <?php endif; ?>
    <?php endif; ?>


<?php
//Wordpress Yorumlar Kısmı
    function mytheme_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
?>
        <div class="Comments" id="comment-<?php comment_ID() ?>">
            <!-- Avatar -->
            <div class="UserAvatar">
                <?php $authID = get_the_author_meta('ID');
                    if ($authID == $comment->user_id){
                ?>
                <?php echo get_avatar($comment->comment_author_email, 58); ?>
            </div>
            <!-- Cevapla Butonu -->
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            <!-- Yorum Alanı -->
            <div class="UserCommentArea">
                <!-- Yorumu Yapan -->
                <h3><?php printf(__('%s'), get_comment_author_link()) ?></h3>
                <!-- Yorum Tarihi -->
                <span class="CommentDate">
                    <?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' önce'; ?>
                </span>
                <!-- Yorum -->
                <div class="UserComment">
                    <?php comment_text() ?>
                    <?php if ($comment->comment_approved == '0'): ?>
                        <?php _e('<div class="alert alert-info">Yorumunuz onay beklemektedir!</div>') ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php } else { ?>
            <?php echo get_avatar($comment->comment_author_email, 58); ?>
        </div>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            <!-- Yorum Alanı -->
            <div class="UserCommentArea">
                <!-- Yorumu Yapan -->
                <h3><?php printf(__('%s'), get_comment_author_link()) ?></h3>
                <!-- Yorum Tarihi -->
                <span class="CommentDate">
                    <?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' önce'; ?>
                </span>
                <!-- Yorum -->
                <div class="UserComment">
                    <?php comment_text() ?>
                    <?php if ($comment->comment_approved == '0'): ?>
                        <?php _e('<div class="alert alert-info">Yorumunuz onay beklemektedir!</div>') ?>
                    <?php endif; ?>
                </div>
            </div>
        <div class="clear"></div>
        <?php } ?>
        </div>
<?php
    }
    add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
    add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');
    function posts_link_attributes_1() {
    return 'id="prev-post"';
    }
    function posts_link_attributes_2() {
    return 'id="next-post"';
    }
?>
