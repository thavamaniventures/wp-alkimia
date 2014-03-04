<?php
/**
 * The template for displaying all pages
 *
 * @package wp-alkimia
 * @since wp-alkimia 1.1
 */

get_header();
?>
  <!-- main wrapper -->
  <div class="column-group gutters">
    <!-- main content -->
    <section class="large-75">
    <?php get_template_part('breadcrumb'); ?>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            get_template_part('content', 'page');
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
        endwhile;
    endif;
    ?>
    </section>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
