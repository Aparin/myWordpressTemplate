<?php
/**
 *
 * comments.php
 *
 * The comments template. Used to display post or page comments and comment form.
 * 
 * Additional settings are available under the Appearance -> Theme Options -> Comments.
 *
 */
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die('Please do not load this page directly. Thanks!');
	
if (post_password_required()) {
?>
    <div class="comments">
        <?php _e('This post is password protected. Enter the password to view any comments.', THEME_NS) ?>
    </div>
<?php
	return;
}
if (have_comments()) {
?>
    <div class="comments">
        <?php printf(
            _n('One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), THEME_NS),
            number_format_i18n(get_comments_number()),  
            get_the_title()
        ); ?>
<?php	
    theme_ob_start();
    paginate_comments_links();
    $pagination = theme_stylize_pagination(theme_ob_get_clean());
    echo $pagination;		
?>
        <ul>
            <?php wp_list_comments('type=all&callback=theme_comment'); ?>
        </ul>
<?php echo $pagination; ?>
    </div>
<?php
}
if (!comments_open()) {
    return;
}
/* comment form */
theme_ob_start();
$args = array();
if (theme_get_option('theme_comment_use_smilies')) {

	function theme_comment_form_field_comment($form_field) {
    locate_template(array('library/smiley.php'), true);
		return theme_get_smilies_js() . '<p class="smilies">' . theme_get_smilies() . '</p>' . $form_field;
	}

	add_filter('comment_form_field_comment', 'theme_comment_form_field_comment');
}
comment_form();
echo str_replace(
    array('id="respond"', '<h3', 'id="reply-title"', '</h3>', 'logged-in-as', 'type="submit"'), 
    array('id="respond" class="art-commentsform"', '<h2', 'id="reply-title" class="art-postheader"', '</h2>', 'art-postcontent logged-in-as', 'class="art-button" type="submit"'), 
    theme_ob_get_clean());