<?php
/*
Plugin Name: Search Fixer
Plugin URI: http://www.thunderguy.com/semicolon/
Description: Attempt to fix a WordPress bug (http://core.trac.wordpress.org/ticket/13961)
Version: 1.0
Author: Bennett McElwee
Author URI: http://www.thunderguy.com/semicolon/
*/

add_filter('posts_search', 'smcln_fix_search', 10, 2);

function smcln_fix_search($search, $wp_query) {
	if ($GLOBALS['wp_query'] !== $wp_query) {
		return $search;
	}
    // Decode search query for displaying on the search results page
	$wp_query->query_vars['s'] = urldecode($wp_query->query_vars['s']);
	// Decode each individual term in the SQL query
	$modifiedSearch = preg_replace_callback("/LIKE '(%?)(.+?)\\1'/", "smcln_fix_search_term", $search);
	return $modifiedSearch;
}

function smcln_fix_search_term($matches) {
	$wildcard = $matches[1];
	$term = $matches[2];
	$modifiedTerm = urldecode($term);
	return "LIKE '{$wildcard}{$modifiedTerm}{$wildcard}'";
}
