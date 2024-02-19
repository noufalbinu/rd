<?php
if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment">
        <div class="comment-img-thumbnail">
            <?php echo get_avatar($comment,$size='80',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
        </div>
        <div class="comment-block">
            <div class="comment-arrow"></div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                    <br />
                <?php endif; ?>
                <span class="comment-by">
                    
                    <span class="date float-right"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></span>
                    
                </span>
            <div class="comment_text">
               <b class="comment-author-name"><?php echo get_comment_author() ?></b>
               <p> <?php comment_text() ?></p>
               <span class="float-right-replay">
                    <span> <a href="#"><?php comment_reply_link( array_merge($args, array(
    'reply_text' => __('<img src="' . get_template_directory_uri() . '/assets/images/reply.png" alt="">'),
    'depth'      => $depth,
    'max_depth'  => $args['max_depth']
    )
)); ?></a></span>
                </span>
                
            </div>
            
            
        </div>
        </div>

<?php
        }
endif; 