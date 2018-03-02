<?php

function angular_spa_get_additional_post_data($arr, $field_name, $request) {
	$user_id											= absint($arr['author']);
	$array_data										= [];

	// author data
	$array_data['user_nicename']	= get_the_author_meta( 'user_nicename', $user_id );
	$array_data['user_permalink'] = get_author_posts_url( $user_id );

	// featured image
	$array_data['thumbnail']			= get_the_post_thumbnail_url( $arr['id'], 'full' );

	return $array_data;
}