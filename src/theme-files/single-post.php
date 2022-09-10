<?php
get_header();
get_template_part('parts/section', 'banner');
$fields = get_fields(get_the_ID());
?>

<?php
get_footer();
?>