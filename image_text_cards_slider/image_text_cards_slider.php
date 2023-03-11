<?php
/*
Block Name: Image Text Cards Slider
Block Slug: image_text_cards_slider
Block Version: 1.0.0
ACF: group_640ce98a41a27
Description: Slider for cards composed of image and text
Author: Michael Presečan @ Klick17.com
Author URI: https://klick17.com/michael
Options: slider
*/
?>
<div class="image-text-cards slider">
	<?php foreach ( $cards as $card ): ?>
        <div class="suggestion">
            <div class="image"><?php k17_display_image( $card['image'], $card['image_resolution'] ); ?></div>
            <div class="text"><?php echo $card["text"]; ?></div>
        </div>
	<?php endforeach; ?>
</div>
<script>
    jQuery('.image-text-cards').slick({
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
