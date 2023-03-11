<?php
/*
Block Name: FAQs
Block Slug: faqs
Block Version: 1.0.0
ACF: group_640cec6a47369
Description: Frequently Asked Questions Accordion
Author: Michael Presečan @ Klick17.com
Author URI: https://klick17.com/michael
Options: grid, alignment
*/

if ( empty( $faqs ) ) {
	return;
}
?>
<div class="accordion" id="accordion-faqs">
	<?php foreach ( $faqs as $i => $faq ): ?>
		<?php $collapsed = $i !== 0; ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading-<?php echo $i; ?>">
                <button class="accordion-button<?php echo $collapsed ? ' collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>"
                        aria-expanded="<?php echo $collapsed ? 'false' : 'true' ?>"
                        aria-controls="collapse-<?php echo $i; ?>">
					<?php echo $faq[ 'question' ] ?>
                </button>
            </h2>
            <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse<?php echo $collapsed ? '' : ' show' ?>" aria-labelledby="heading-<?php echo $i; ?>"
                 data-bs-parent="#accordion-faqs">
                <div class="accordion-body">
					<?php echo $faq[ 'answer' ]; ?>
                </div>
            </div>
        </div>
	<?php endforeach; ?>
</div>
