<?php

function spsdev_mediamatic_core_init()
{
	if(class_exists('Spsdev_Mediamatic_Topbar'))
	{
		return;
	}
	add_action( 'wp_enqueue_scripts', 'spsdev_mediamatic_register_scripts', 20);
}


function spsdev_mediamatic_register_scripts()
{
	if (!is_user_logged_in())
	{
		return;
	}
	if (is_front_page())
	{
		return;
	}

	
	add_action('wp_enqueue_scripts', function(){wp_enqueue_media();});

	wp_enqueue_media();
	add_thickbox();
	
	wp_register_script( 'mediamatic-builder-util', SPSDEV_MEDIAMATIC_URL . '/assets/js/mediamatic-util.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'mediamatic-builder-util' );

	wp_register_script( 'mediamatic-builder-upload-hook', SPSDEV_MEDIAMATIC_URL . '/assets/js/hook-post-add-media.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'mediamatic-builder-upload-hook' );

};

call_user_func('spsdev_mediamatic_core_init');
