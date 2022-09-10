<?php
get_header();
get_template_part('parts/section', 'banner');
?>
<div class="container">
    <h1><?= the_title() ?></h1>
</div>
<?php
get_footer();
?>