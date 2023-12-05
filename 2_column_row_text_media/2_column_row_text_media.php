<?php /** @noinspection PhpUndefinedVariableInspection */
/*
Block Name: 2 Col Row Text Media
Block Slug: 2_column_row_text_media
Block Version: 1.0.0
ACF: group_656f19e224517
Description: Two Column Row content with text and media
Author: Michael Presečan @ Klick17.com
Author URI: https://klick17.com/michael
*/

$media = $media_type === true ? $video : k17_render_image($image, 'full');

?>
  <div class="row">
    <div class="col-md-6 <?php echo !$media_first ? 'pe-7' : '' ?>">
        <?php echo $media_first ? $media : $content ?>
    </div>
    <div class="col-md-6 <?php echo $media_first ? 'ps-7' : ''?>">
        <?php echo $media_first ? $content : $media; ?>
    </div>
  </div>
<?php
