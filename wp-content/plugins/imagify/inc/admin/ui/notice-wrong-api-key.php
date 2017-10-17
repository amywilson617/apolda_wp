<?php
defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );

$this->render_view( 'header', array(
	'title' => __( 'Your API key isn\'t valid!', 'imagify' ),
) );
?>
<p>
	<?php wp_nonce_field( 'imagify-signup', 'imagifysignupnonce', false ); ?>
	<?php
	printf(
		/* translators: 1 and 2 are link tag starts, 3 is a link tag end. */
		__( 'Go to your Imagify account page to get your API Key and specify it on %1$syour settings%3$s or %2$screate an account for free%3$s if you don\'t have one yet.', 'imagify' ),
		'<a href="' . esc_url( get_imagify_admin_url() ) . '">',
		'<a id="imagify-signup" target="_blank" href="' . IMAGIFY_WEB_MAIN . '">',
		'</a>'
	);
	?>
</p>
<?php
$this->render_view( 'footer', array(
	'dismissible' => 'wrong-api-key',
) );
