<?php
/*
Plugin Name: loop test
Description: sample plugin for loop test practice
Version: 1.0
Author: Raj
*/

function hwy_handle_test_shortcode($atts, $content = '')
{
    $atts = shortcode_atts(array(
        'color' => '#0a0a0a',
    ), $atts);
    ob_start();
?>
    <div class="test">
        <h2><?php echo $content; ?>(<?php echo get_the_ID() ?>)</h2>
        <span style="color:<?php echo $atts['color'] ?>">testing loop</span>
    </div>
<?php
    return ob_get_clean();
}

add_shortcode('my-test-shortcode', 'hwy_handle_test_shortcode');

