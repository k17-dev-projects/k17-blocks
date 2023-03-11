<?php
/*
Block Name: Testimonial Slide
Block Version: 1.1.0
ACF: group_640387a5b011b
Description: Testimonial block with slider
Author: Michael Presečan @ Klick17.com
Options: paddings, slider
Author URI: https://klick17.com/michael
Include JS: slick.min.js (jquery)
Include CSS: slick.css
*/

/** @noinspection PhpUndefinedVariableInspection */

?>
<div class="testimonies slider">
	<?php foreach ( $testimonies as $testimony ): ?>
        <div class="testimony">
            <div class="testimony-text"><?php echo $testimony[ 'testimony' ] ?></div>
			<?php
			$image = ! empty( $testimony[ 'image' ] ) ? $testimony[ 'image' ] : k17_get_asset_url( '/quotation-mark.svg' );
			?>
            <div class="testimony-image <?php echo empty( $testimony[ 'image' ] ) ? 'not_img' : ''; ?>">
                <img src="<?php echo $image ?>" alt="testimony image">
                <span class="author-review"><?php echo $testimony[ 'author' ] ?></span>
				<?php if ( ! empty( $testimony[ 'position' ] ) ): ?>
                    <span class="author-position"><?php echo $testimony[ 'position' ]; ?></span>
				<?php endif; ?>
            </div>
        </div>
	<?php endforeach; ?>
</div>

<script>
    jQuery('.testimonies').slick({
        dots: <?php echo $dots ? 'true' : 'false'; ?>,
        arrows: <?php echo $arrows ? 'true' : 'false'; ?>,
        infinite: <?php echo $infinite ? 'true' : 'false' ?>,
        speed: 300,
        slidesToShow: <?php echo $slides_to_show?>,
        slidesToScroll: <?php echo $slides_to_scroll ?>,
        centerPadding: '<?php echo $center_padding ?>px',
        responsive: [
            {
                breakpoint: 1290,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

</script>
