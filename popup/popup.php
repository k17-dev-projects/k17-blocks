<?php
/*
Block Name: Popup
Block Slug: popup
Block Version: 1.0.0
ACF: group_64105dffdabee
Description: Builds popup
Author: Michael Presečan @ Klick17.com
Author URI: https://klick17.com/michael
Type: custom
*/

?>

<div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" aria-labelledby="<?php echo $id ?>-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<?php if ( ! empty( $title ) ): ?>
                    <h5 class="modal-title" id="<?php echo $id ?>-label"><?php echo $title ?></h5>
				<?php endif; ?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<?php k17_display_block_builder( $popup_builder ); ?>
            </div>
            <div class="modal-footer">
				<?php if ( ! empty( $footer_text ) ): ?>
                    <p class="footer-text"><?php echo $footer_text ?></p>
				<?php endif; ?>
				<?php if ( ! empty( $cta[ 'text' ] ) ): ?>
                    <a href="<?php echo ! empty( $cta[ 'url' ] ) ? $cta[ 'url' ] : '#'; ?>" class="btn btn-primary"><?php echo $cta['text'] ?></a>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>
