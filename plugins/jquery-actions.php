<?php
/**
 * Plugin Name: jQuery Actions
 * Description: Default actions for all jQuery sites.
 */

remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// Remove shortlink <head> and header.
remove_action( 'wp_head',             'wp_shortlink_wp_head', 10 );
remove_action( 'template_redirect',   'wp_shortlink_header',  11 );

/**
 * Add rel=canonical on singular pages (API pages, and blog posts)
 *
 * Derived from WordPress 6.3.1 rel_canonical:
 *
 * - Avoid applying esc_url and its 'clean_url' filter so that
 *   'https://' is not stripped, and thus the URL is actually canonical.
 */
function jq_rel_canonical() {
	if ( !is_singular() ) {
		return;
	}
	$id = get_queried_object_id();
	if ( $id === 0 ) {
		return;
	}

	$url = wp_get_canonical_url( $id );
	if ( $url) {
		echo '<link rel="canonical" href="' . esc_attr( $url ) . '" />' . "\n";
	}
}
remove_action( 'wp_head', 'rel_canonical' );
add_action( 'wp_head', 'jq_rel_canonical' );

// Add rel=me link to HTML head for Mastodon domain verification
//
// Usage:
//
// Put one or more comma-separated URLs in the 'jquery_xfn_rel_me' WordPress option.
//
// Example:
//
//     'jquery_xfn_rel_me' => 'https://example.org/@foo,https://social.example/@bar'
//
// See also:
//
// - https://docs.joinmastodon.org/user/profile/#verification
// - https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/me
// - https://microformats.org/wiki/rel-me
// - https://gmpg.org/xfn/
function jquery_xfnrelme_wp_head() {
	$option = get_option( 'jquery_xfn_rel_me' , '' );
	$links = $option !== '' ? explode( ',', $option ) : array();
	foreach ( $links as $url ) {
		// We use esc_attr instead of esc_url, as the latter would shorten
		// the URL to be scheme-less as "//example" instead of "https://example",
		// which prevents relation verification.
		echo '<link rel="me" href="' . esc_attr( trim( $url ) ) . '">' . "\n";
	}
}

add_action('wp_head', 'jquery_xfnrelme_wp_head');
