<?php get_header();?>
<div class="about-grid">
<aside class="about-aside">
    <div class="about-aboutme">
        <img src="<?php echo get_field('avatar'); ?>"alt="avatar">
    </div>
</aside>

<main class="about-main">
    <p>
        <?php echo get_field('line1'); ?>
        <br>
        <br><?php echo get_field('line2'); ?>
        <br>
        <br><?php echo get_field('line3'); ?>
        <br>
        <br><?php echo get_field('line4'); ?>
        <br>
        <br><?php echo get_field('line5'); ?>
        <br>
        <br><?php echo get_field('line6'); ?>
    </p>
</main>
<?php get_footer();?>