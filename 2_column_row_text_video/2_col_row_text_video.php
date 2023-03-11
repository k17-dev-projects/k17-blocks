<?php
/*
Block Name: 2 Col Row Text Video
Block Slug: 2_column_row_text_video
Block Version: 1.0.0
ACF: group_64020930955ab
Description: Two Column Row content and video
Author: Michael Presečan @ Klick17.com
Options: alignment, grid
Author URI: https://klick17.com/michael
*/

$video = k17_is_enabled('k7vp') ? k7vp_render_acf_video_player($video) : $video;

?>
<div class="row">
    <div class="col-md-6">
	    <?php echo $video_first ? $video : $content; ?>
    </div>
    <div class="col-md-6">
		<?php echo ! $video_first ? $video : $content; ?>
    </div>
</div>
<?php
