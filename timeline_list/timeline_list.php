<?php
/*
Block Name: Timeline List
Block Version: 1.0.0
ACF: group_63a1d5ef9110a
Description: Timeline List - block shows an ordered list with a list item title and list item content
Author: Michael Presečan @ Klick17.com
Options: paddings
Author URI: https://klick17.com/michael
*/

/** @noinspection PhpUndefinedVariableInspection */
$number = 0;
?>
<?php foreach ( $list as $item ): ?>
    <?php $number++; ?>
    <div class="item row">
        <div class="number col-2"><?php echo $number ?></div>
        <div class="content col-10">
            <div class="item_title"><?php echo $item['title']; ?></div>
            <div class="item_content"><?php echo $item['content']; ?></div>
        </div>
    </div>

<?php endforeach; ?>
<?php