
 
<?php
    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if ( post_password_required() )
        return;

        /**
 * Load Custom Comments Layout file.
 */
 require get_template_directory() . '/inc/comments-helper.php'; 
?>
 
    <div id="comments" class="comments-area">
 
    <?php // You can start editing here -- including this comment! ?>
 
    <?php if ( have_comments() ) : ?>



        <h2 class="comments-title">
            <?php echo get_comments_number();?>
        </h2>
 
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
        <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
            <h1 class="assistive-text"><?php _e( 'Comment navigation', 'shape' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'shape' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'shape' ) ); ?></div>
        </nav><!-- #comment-nav-before .site-navigation .comment-navigation -->
        <?php endif; // check for comment navigation ?>
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                  'style'      => 'ul',
                  'short_ping' => true,
                        'callback' => 'better_comments'
              ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
        <nav role="navigation" id="comment-nav-below" class="site-navigation comment-navigation">
            <h1 class="assistive-text"><?php _e( 'Comment navigation', 'shape' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'shape' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'shape' ) ); ?></div>
        </nav><!-- #comment-nav-below .site-navigation .comment-navigation -->
        <?php endif; // check for comment navigation ?>
 
    <?php endif; // have_comments() ?>
 
    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="nocomments"><?php _e( 'Comments are closed.', 'shape' ); ?></p>
    <?php endif; ?>


    <?php 

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$req = get_option( 'require_comment_note' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
 
        $fields =  array(
            'author' =>
              '<p class="comment-form-author"> 
              <input id="author" placeholder="NAME" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
              '" size="30"' . $aria_req . ' /></p>',
          
            'email' =>
              '<p class="comment-form-email">
              <input id="email" placeholder="EMAIL" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
              '" size="30"' . $aria_req . ' /></p>',
          
          );  
    
          $args = array(
            'id_form'           => 'commentform',
            'class_form'      => 'comment-form',
            'id_submit'         => 'submit',
            'label_submit'=>'Send',
            'class_submit'      => 'submit',
            'name_submit'       => 'submit',
            'title_reply'       => __( 'Leave a Reply' ),
            'title_reply_to'    => __( 'Leave a Reply to %s' ),
            'cancel_reply_link' => __( 'Cancel Reply' ),
            'label_submit'      => __( 'Post Comment' ),
            'format'            => 'xhtml',

            'fields' => apply_filters( 'comment_form_default_fields', $fields ),
          
            'comment_field' =>  '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
              '</textarea></p>',
          
            'must_log_in' => '<p class="must-log-in">' .
              sprintf(
                __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
              ) . '</p>',
          
            'logged_in_as' => '<p class="logged-in-as">' .
              sprintf(
              __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                admin_url( 'profile.php' ),
                $user_identity,
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
              ) . '</p>',
          
            'comment_notes_before' => '<p class="comment-notes">' .
              __( 'Thanks for choosing to leave a comment. Please keep in mind that all comments are moderated according to our comment policy, and your email address will NOT be published. Please Do NOT use keywords in the name field. Lets have a personal and meaningful conversation.' ) . ( $req ? $required_text : '' ) .
              '</p>',
          
            'comment_notes_after' => '<p class="form-allowed-tags">' .
              sprintf(
                __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
                ' <code>' . allowed_tags() . '</code>'
              ) . '</p>',
          
            
          );
    
        comment_form($args); 
        
    
    
    ?>
 
</div><!-- #comments .comments-area -->