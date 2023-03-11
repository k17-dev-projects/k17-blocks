<?php
/*
Block Name: 2 Col Row
Block Slug: 2_column_row
Block Version: 1.0.0
ACF: group_62f41dc2f12fe
Description: Two Column Row content
Author: Michael Presečan @ Klick17.com
Options: alignment, extra
Author URI: https://klick17.com/michael
*/

$mobile_order_left = $mobile_order == 1 ? ' order-sm-first' : ' order-sm-last';
$mobile_order_right = $mobile_order == 1 ? ' order-sm-last' : ' order-sm-first';
?>
<div class="col-md-<?php echo $left['grid_size'] ?> offset-md-<?php echo $left['grid_offset']; ?><?php echo $mobile_order_left; ?>">
  <?php echo $left['content']; ?>
</div>
<div class="col-md-<?php echo $right['grid_size'] ?> offset-md-<?php echo $right['grid_offset']; ?><?php echo $mobile_order_right; ?>">
  <?php echo $right['content']; ?>
</div>
