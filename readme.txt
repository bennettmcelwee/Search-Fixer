=== Search Fixer ===
Contributors: bennettmcelwee
Donate link: http://www.thunderguy.com/semicolon/donate/
Tags: search, search-meter, permalink, space, pretty
Requires at least: 3.0
Tested up to: 3.1.3
Stable tag: 2.0

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

Search Fixer makes "pretty" search links work properly. A pretty search link usually looks like this:
http://example.com/search/waldo
Because of a bug in WordPress, pretty search links with spaces in them do not work. Search Fixer fixes that bug.

If you use [Search Meter](http://wordpress.org/extend/plugins/search-meter/)'s widgets, you should install Search Fixer too.

= Technical details =

The bug is [WordPress bug 13961](http://core.trac.wordpress.org/ticket/13961). This prevents "pretty" search URLs from working properly. For example, http://example.com/search/hello%20world should search the example.com blog for "hello world", but because of the bug it actually searches for "hello%20world" and fails to find anything.

When the WordPress bug is fixed (probably sometime in 2011) Search Fixer will no longer be necessary. I will keep Search Fixer up to date so it won't take effect if the bug has already been fixed.

== Installation ==

Simply install and activate through the 'Plugins' menu in WordPress.

If you want to install manually:
1. Upload `search-fixer.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 2.0 =
* Pretty search links now search for individual words, exactly the same as "ugly" search links.

= 1.0 =
* Internal version, not publicly released.
* Fixed search, but forces all searches to be phrase searches instead of word searches.
