<?php
/*
 * Intro blurb for a page. Includes title and text
 */

$title = get_field('intro_title');
$text = get_field('intro_text');
?>

<div class="intro__wrapper padding-site">
  <header class="intro container-site color-secondary">
    <h2 class="intro__title"><?php echo esc_html($title); ?></h2>
    <?php if ($text): ?>
      <p class="intro__text"><?php echo esc_html($text); ?></p>
    <?php endif; ?>
  </header>
</div>
