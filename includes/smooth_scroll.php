<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/8/16
 * Time: 10:05 AM
 *
 * A function that provides smooth animated scrolling. Code by Chris Coyier: https://css-tricks.com/snippets/jquery/smooth-scrolling/
 */
require_once ('head_files.php')
?>
<script>
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
