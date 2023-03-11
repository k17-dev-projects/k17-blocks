<?php
/*
Block Name: Timetable
Block Version: 1.0.0
ACF: group_6383bf2c9011f
Description: Lists items in timetable
Author: Michael Presečan @ Klick17.com
Options: paddings
Author URI: https://klick17.com/michael
*/

?>

<div class="row">
  <?php foreach ($items as $item): ?>
    <div class="col-md-8">
      <div class="item-name">
        <?php echo $item['name']; ?>
      </div>
      <div class="item-description">
        <?php echo $item['description']; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="item-duration text-end">
        <?php echo $item['duration']; ?>
      </div>
    </div>
  <?php endforeach; ?>

</div>

<?php
