<?php
/*
Block Name: Downloads
Block Slug: downloads
Block Version: 1.0.0
ACF: group_6383cc4a1bd19
Description: Displays list of downloads in the frontend
Author: Michael Presečan @ Klick17.com
Options: paddings
Author URI: https://klick17.com/michael
*/

$icon_img = content_url() . str_replace(WP_CONTENT_DIR, '', pathinfo(__FILE__, PATHINFO_DIRNAME)) . '/pdf-icon.svg';
// TODO: $icon_img = k17_block_path('/pdf-icon.svg')

?>
  <?php foreach ($items as $item): ?>
    <?php $file = $item['file']; ?>
    <a href="<?php echo $file['url'] ?>" target="_blank">
      <div class="row">
        <div class="col-1">
          <img src="<?php echo $icon_img ?>" alt="pdf-icon">
        </div>
        <div class="col-8 file-name">
          <?php echo $file['filename'] ?>
        </div>
        <div class="col-3 file-size">
          <?php
          $file_size = $file['filesize'];
          if ($file_size > 1048576) {
            $file_size = round($file_size / 1048576) . ' MB';
          }
          elseif ($file_size > 1024) {
            $file_size = round($file_size / 1024) . ' KB';
          }
          else {
            $file_size = $file_size . ' B';
          }

          echo $file_size;
           ?>
        </div>
      </div>
    </a>
  <?php endforeach; ?>

<?php
