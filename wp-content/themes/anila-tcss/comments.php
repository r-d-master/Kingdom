<?php
/* Comment Form */
$args = array(
	'id_form' => 'comment-form-container',
	'id_submit' => 'submit-btn',
	'title_reply' => __( '','textdomain_finale' ),
	'title_reply_to' => __( 'Leave a Reply to %s','textdomain_finale' ),
	'cancel_reply_link' => __( 'Cancel Reply','textdomain_finale' ),
	'label_submit' => __( 'SEND','textdomain_finale' ),
			   
	'comment_field' => '
		<div class="column_360 last">
		<textarea name="message" rows="11" cols="20" class="message rounded" placeholder="Message"></textarea>
		</div>
		<div class="clear"></div>',
		   
	'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		
	'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		
	'comment_notes_before' => '<p class="comment-notes"></p>',
		
	'comment_notes_after' => '<p class="form-allowed-tags"></p>',
	
	'fields' => apply_filters( 'comment_form_default_fields', array(
		
	'author' => '<div class="column_300">
				 <input type="text" name="author" class="name rounded" placeholder="Enter Name" ' . $aria_req . ' />',
			
	'email' => '<input type="text" name="email" class="email rounded" placeholder="Enter Email" ' . $aria_req . ' />',
		
	'url' => '<input type="text" name="url" class="subject rounded" placeholder="Enter Website URL" />
			 </div>'

		)
			)
				);
?>




<!-- Start Comments -->
<div class="post_comment m_right_40">
<h2 class="m_top_40">Comments</h2>

<ol class="commentlist">
<?php wp_list_comments('type=comment&callback=theme_comment'); ?>
</ol><br />

</div>
<!--end post_comment-->



<div class="add_post_comment">
    <h2 class="m_top_25">Add Comment</h2>               
        <div class="post_comment_form m_top_20 m_bottom_170">
        
        	<?php comment_form( $args ); ?>
        
        </div><!--end post_comment_form-->             
</div><!--end post-->