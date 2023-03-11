<?php
/*
Block Name: 3 Col Row
Block Version: 1.0.0
ACF: group_62f41c17c7053
Description: Three Column Row content
Author: Michael Presečan @ Klick17.com
Options: alignment
Author URI: https://klick17.com/michael
*/
?>
<?php
  switch ($mobile_order) {
    case '1':
      $mobile_order_left = ' order-sm-0';
      $mobile_order_center = ' order-sm-1';
      $mobile_order_right = ' order-sm-2';
      break;
    case '2':
      $mobile_order_left = ' order-sm-2';
      $mobile_order_center = ' order-sm-1';
      $mobile_order_right =  ' order-sm-0';
      break;
    case '3':
      $mobile_order_left = ' order-sm-0';
      $mobile_order_center = ' order-sm-2';
      $mobile_order_right =  ' order-sm-1';
      break;
    case '4':
      $mobile_order_left = ' order-sm-1';
      $mobile_order_center = ' order-sm-2';
      $mobile_order_right =  ' order-sm-0';
      break;
    case '5':
      $mobile_order_left = ' order-sm-1';
      $mobile_order_center = ' order-sm-0';
      $mobile_order_right =  ' order-sm-2';
      break;
    case '6':
      $mobile_order_left = ' order-sm-2';
      $mobile_order_center = ' order-sm-0';
      $mobile_order_right =  ' order-sm-1';
      break;
    default:
      $mobile_order_left = '';
      $mobile_order_center = '';
      $mobile_order_right =  '';
      break;
  }
?>

<div class="col-md-<?php echo $left['grid_size'] ?> offset-md-<?php echo $left['grid_offset']; ?><?php echo $mobile_order_left; ?>">
  <?php echo $left['content']; ?>
</div>
<div class="col-md-<?php echo $center['grid_size'] ?> offset-md-<?php echo $center['grid_offset']; ?><?php echo $mobile_order_center; ?>">
  <?php echo $center['content']; ?>
</div>
<div class="col-md-<?php echo $right['grid_size'] ?> offset-md-<?php echo $right['grid_offset']; ?><?php echo $mobile_order_right; ?>">
  <?php echo $right['content']; ?>
</div>
