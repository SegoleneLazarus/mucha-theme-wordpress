<div class="sidebar">

<div class="lisible">
    <?php
        if( is_active_sidebar( 'blog-sidebar' ) ):
            dynamic_sidebar( 'blog-sidebar' );
        endif;
    ?>
</div>
</div>