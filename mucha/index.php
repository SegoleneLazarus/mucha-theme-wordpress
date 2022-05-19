

    <?php get_header();?>

        

        <main class="parallax">

<!--        <?php get_sidebar('gauche');?>-->

            <div class="principal">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'content', get_post_format() ); endwhile; endif; ?>

                <!-- <?php get_template_part( 'content', get_post_format() );?> -->

            </div>

            <?php get_sidebar();?>



        </main>

        <?php get_footer();?>

    </body>

</html>