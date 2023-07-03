<?php

function jquery_sites() {
	static $sites;
	if ( isset( $sites ) )
		return $sites;

	$sites = array( /* blog_id, cookie domain */
		'jquery.com' => array(
			'blog_id' => 1,
			'cookie_domain' => '.jquery.com',
			'body_class' => 'jquery',
			'xfn-rel-me' => array(
				'https://social.lfx.dev/@jquery',
			),
			'algolia_docsearch' => array(
				'apiKey' => '3cfde9aca378c8aab554d5bf1b23489b',
				'indexName' => 'jquery',
			),
			'options' => array(
				'blogname' => 'jQuery',
				'description' => 'jQuery: The Write Less, Do More, JavaScript Library',
				'stylesheet' => 'jquery.com',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		'blog.jquery.com' => array(
			'blog_id' => 2,
			'cookie_domain' => '.jquery.com',
			'body_class' => 'jquery',
			'options' => array(
				'blogname' => 'jQuery Blog',
				'stylesheet' => 'blog-jquery-com',
				// 'permalink_structure' => '/%category%/%postname%/',
			),
		),
		'api.jquery.com' => array(
			'blog_id' => 3,
			'cookie_domain' => '.jquery.com',
			'body_class' => 'jquery',
			'logo_link' => 'https://jquery.com/',
			'algolia_docsearch' => array(
				'apiKey' => '3cfde9aca378c8aab554d5bf1b23489b',
				'indexName' => 'jquery',
			),
			'options' => array(
				'blogname' => 'jQuery API Documentation',
				'stylesheet' => 'api.jquery.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
				),
			),
		),
		'plugins.jquery.com' => array(
			'blog_id' => 4,
			'cookie_domain' => '.jquery.com',
			'body_class' => 'jquery',
			'options' => array(
				'blogname' => 'jQuery Plugin Registry',
				'stylesheet' => 'plugins.jquery.com',
			),
		),
		'learn.jquery.com' => array(
			'blog_id' => 5,
			'cookie_domain' => '.jquery.com',
			'body_class' => 'jquery-learn',
			'options' => array(
				'blogname' => 'jQuery Learning Center',
				'stylesheet' => 'learn.jquery.com',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		'jqueryui.com' => array(
			'blog_id' => 6,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI',
				'description' => 'jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library. Whether you\'re building highly interactive web applications or you just need to add a date picker to a form control, jQuery UI is the perfect choice.',
				'stylesheet' => 'jqueryui.com',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		'blog.jqueryui.com' => array(
			'blog_id' => 7,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'options' => array(
				'blogname' => 'jQuery UI Blog',
				'stylesheet' => 'blog.jqueryui.com',
			),
		),
		'api.jqueryui.com' => array(
			'subsites' => 1, // Has one level of sub-sites (api.jqueryui.com/([^/]+))
			'blog_id' => 8,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'logo_link' => 'https://jqueryui.com/',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI API Documentation',
				'stylesheet' => 'api.jqueryui.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
				),
			),
		),
		'api.jqueryui.com/1.8' => array(
			'blog_id' => 17,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'logo_link' => 'https://jqueryui.com/',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI 1.8 Documentation',
				'stylesheet' => 'api.jqueryui.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
		'api.jqueryui.com/1.9' => array(
			'blog_id' => 21,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'logo_link' => 'https://jqueryui.com/',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI 1.9 Documentation',
				'stylesheet' => 'api.jqueryui.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
		'jquery.org' => array(
			'blog_id' => 9,
			'cookie_domain' => '.jquery.org',
			'body_class' => 'jquery-foundation',
			'options' => array(
				'blogname' => 'jQuery Foundation',
				'stylesheet' => 'jquery.org',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		# Historical: Database blog_id 10 is reserved for qunitjs.com.
		# Historical: Database blog_id 11 is reserved for sizzlejs.com.
		'jquerymobile.com' => array(
			'blog_id' => 12,
			'cookie_domain' => '.jquerymobile.com',
			'body_class' => 'jquery-mobile',
			'algolia_docsearch' => array(
				'apiKey' => '207328b0f1c18555c9021d05157dd651',
				'indexName' => 'jquerymobile',
			),
			'options' => array(
				'blogname' => 'jQuery Mobile',
				'stylesheet' => 'jquerymobile.com',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		'api.jquerymobile.com' => array(
			'subsites' => 1, // Has one level of sub-sites (api.jquerymobile.com/([^/]+))
			'blog_id' => 13,
			'cookie_domain' => '.jquerymobile.com',
			'body_class' => 'jquery-mobile',
			'logo_link' => 'https://jquerymobile.com/',
			'algolia_docsearch' => array(
				'apiKey' => '207328b0f1c18555c9021d05157dd651',
				'indexName' => 'jquerymobile',
			),
			'options' => array(
				'blogname' => 'jQuery Mobile API Documentation',
				'stylesheet' => 'api.jquerymobile.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
				),
			),
		),
		# Historical: Database blog_id 14 is reserved for api.qunitjs.com.
		# Historical: Database blog_id 15 is reserved for books.jquery.com
		# Historical: Database blog_id 16 is reserved for events.jquery.org
		'brand.jquery.org' => array(
			'blog_id' => 18,
			'cookie_domain' => '.jquery.org',
			'body_class' => 'jquery-foundation',
			'options' => array(
				'blogname' => 'jQuery Brand Guidelines',
				'stylesheet' => 'brand.jquery.org',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		'contribute.jquery.org' => array(
			'blog_id' => 19,
			'cookie_domain' => '.jquery.org',
			'body_class' => 'jquery-foundation',
			'options' => array(
				'blogname' => 'Contribute to jQuery',
				'stylesheet' => 'contribute.jquery.org',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		# Historical: Database blog_id 20 is reserved for irc.jquery.org.
		'meetings.jquery.org' => array(
			'blog_id' => 22,
			'cookie_domain' => '.jquery.org',
			'body_class' => 'jquery-foundation',
			'options' => array(
				'blogname' => 'jQuery Meetings',
				'stylesheet' => 'meetings.jquery.org',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		# Historical: Database blog_id 23 is reserved for codeorigin.jquery.com
		'api.jquerymobile.com/1.3' => array(
			'blog_id' => 24,
			'cookie_domain' => '.jquerymobile.com',
			'body_class' => 'jquery-mobile',
			'logo_link' => 'https://jquerymobile.com/',
			'algolia_docsearch' => array(
				'apiKey' => '207328b0f1c18555c9021d05157dd651',
				'indexName' => 'jquerymobile',
			),
			'options' => array(
				'blogname' => 'jQuery Mobile 1.3 Documentation',
				'stylesheet' => 'api.jquerymobile.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
		'api.jqueryui.com/1.10' => array(
			'blog_id' => 25,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'logo_link' => 'https://jqueryui.com/',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI 1.10 Documentation',
				'stylesheet' => 'api.jqueryui.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
		'api.jqueryui.com/1.12' => array(
			'blog_id' => 26,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'logo_link' => 'https://jqueryui.com/',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI 1.12 Documentation',
				'stylesheet' => 'api.jqueryui.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
		'api.jqueryui.com/1.11' => array(
			'blog_id' => 27,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'logo_link' => 'https://jqueryui.com/',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI 1.11 Documentation',
				'stylesheet' => 'api.jqueryui.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
		'api.jquerymobile.com/1.4' => array(
			'blog_id' => 28,
			'cookie_domain' => '.jquerymobile.com',
			'body_class' => 'jquery-mobile',
			'logo_link' => 'https://jquerymobile.com/',
			'algolia_docsearch' => array(
				'apiKey' => '207328b0f1c18555c9021d05157dd651',
				'indexName' => 'jquerymobile',
			),
			'options' => array(
				'blogname' => 'jQuery Mobile 1.4 Documentation',
				'stylesheet' => 'api.jquerymobile.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
		'releases.jquery.com' => array(
			'blog_id' => 29,
			'cookie_domain' => '.jquery.com',
			'body_class' => 'jquery',
			'options' => array(
				'blogname' => 'jQuery CDN',
				'stylesheet' => 'releases.jquery.com',
				'active_plugins' => array(
					'jquery-static-index.php',
				),
			),
		),
		'api.jqueryui.com/1.13' => array(
			'blog_id' => 30,
			'cookie_domain' => '.jqueryui.com',
			'body_class' => 'jquery-ui',
			'logo_link' => 'https://jqueryui.com/',
			'algolia_docsearch' => array(
				'apiKey' => '2fce35e56784bbb48c78d105739190c2',
				'indexName' => 'jqueryui',
			),
			'options' => array(
				'blogname' => 'jQuery UI 1.13 Documentation',
				'stylesheet' => 'api.jqueryui.com',
				'active_plugins' => array(
					'jquery-api-category-listing.php',
					'jquery-api-versioned-links.php',
				),
			),
		),
	);

	uasort( $sites, function( $a, $b ) {
		if ( $a['blog_id'] == $b['blog_id'] )
			die( 'Two sites have the same blog_id.' );
		if ( $a['blog_id'] > $b['blog_id'] )
			return 1;
		return -1;
	} );
	return $sites;
}

function jquery_default_site_options() {
	return array(
		'enable_xmlrpc' => 1,
		'template' => 'jquery',
		'blogdescription' => '',
		'permalink_structure' => '/%postname%/',
		'use_smilies' => 0,
	);

}
