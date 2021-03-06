<?php
/*
 * Breadcrumb. Includes Page title and breadcrumb
 * Requires Breadcrumb NavXT https://en-ca.wordpress.org/plugins/breadcrumb-navxt/
 */
?>
<div class="padding-site breadcrumb__wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/breadcrumb-bg.jpg)">
  <header class="breadcrumb color-white container-site">
    <h1 class="breadcrumb__title"><?php echo strtoupper(esc_html(get_the_title())); ?></h1>
    <nav class="breadcrumb__navigation"><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?></nav>
  </header>
</div>
