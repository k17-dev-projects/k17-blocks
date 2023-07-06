<?php
/*
Block Name: Stats Count
Block Slug: stats_count
Block Version: 1.0.0
ACF: group_64021002a2e4a
Description: Stats with the count up
Author: Michael Presečan @ Klick17.com
Author URI: https://klick17.com/michael
*/

$columns = 12 / (int) $columns;

?>

<div class="row">
    <?php foreach ( $stats as $item ): ?>
        <div class="item col-md-<?php echo $columns ?> row">
            <div class="col-3 stat-icon">
                <img src="<?php echo $item['icon'] ?>" alt="stat icon">
            </div>
            <div class="col-9">
                <div class="stat-number h3 counting" data-count="<?php echo $item['number'] ?>">0</div>
                <div class="stat-text"><?php echo $item['text']; ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php
