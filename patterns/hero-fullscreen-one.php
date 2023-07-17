<?php
/**
 * Title: Hero full screen one
 * Slug: mapo/hero-fullscreen-one
 * Categories: hero
 * Description: Hero full screen width header and video background
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-video.mp4' ?>","dimRatio":50,"backgroundType":"video","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-video.mp4' ?>" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0px"}},"dimensions":{"minHeight":"100vh"}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color" style="min-height:100vh;margin-top:0px;padding-top:30px;padding-bottom:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"var:preset|spacing|small","bottom":"0","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:var(--wp--preset--spacing--small);padding-bottom:0;padding-left:var(--wp--preset--spacing--small)"><!-- wp:site-title /-->

<!-- wp:navigation {"ref":2851,"layout":{"type":"flex","setCascadingProperties":true}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"fontSize":"max-120"} -->
<h2 class="wp-block-heading has-max-120-font-size"><?php echo esc_html( 'Welcome to my website', 'mapo' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph -->
<p><?php echo esc_html( 'Hello World!!', 'mapo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( 'Bye World!!', 'mapo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->