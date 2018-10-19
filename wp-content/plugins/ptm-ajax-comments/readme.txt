=== PTM AJAX Comments ===
Contributors: TacoCode, Flowdrops
Donate link: http://tacocode.com/donate/
Tags: jquery, ajax, comments
Requires at least: 3.0.1
Tested up to: 3.0.3
Stable tag: trunk

This plugin will enable AJAX commenting in your WordPress blog.

== Description ==

AJAX enabled commenting based on the jQuery framework. This plugin will hook into the comments form and posts the user comment the AJAX way without reloading the whole page.

== Installation ==
1. Upload the full directory into your wp-content/plugins directory
2. Activate the plugin on the Plugins page
3. Open the settings page at Comments -> AJAX Comments to set the default options (initial options are set automatic) or further customize the look & feel of the plugin.

== Frequently Asked Questions ==

= I've tried everything, the plugin does not work =

Try the plugin with the default 'twentyten' theme. If it works, your theme is missing one or more of the following tags:

* <code><ol class="**commentlist**"></code>
* <code><h3 id="**respond**"> or <div id="**respond**"></code>
* <code><form action="wp-comments-post.php" method="post" id="**commentform**"></code>
* <code><textarea name="comment" id="**comment**" title="Your comment" title="Please enter a comment"></code>

**Note**: pay attention to the id & class names. Also make sure that you set the [callback function name](http://codex.wordpress.org/Function_Reference/wp_list_comments#Comments_Only_With_A_Custom_Comment_Display "callback function name") if used by your theme.

= I've tried to run the plugin with the 'twentyten' theme, still no luck =

Do you have other plugins activated? Try to deactivate another plugin, and run the test again. If my plugin works after deactivating a certain plugin,
you have just found an incompatability between my plugin and the one you deactivated. Please [inform me about this](http://www.flowdrops.com/contact/ "Contact"), thanks!

= Tried with the 'twentyten' theme and deactivated all other plugins. Still doesn't work. =

Please [open a new thread](http://wordpress.org/tags/ptm-ajax-comments?forum_id=10 "open a new thread") in the support forums and include a link to your website on which the plugin is not working.
Please leave the plugin activated. I will have a look at your site and will let you know about the next steps.

= Where can I get more information? =

Please visit [the official website](http://www.flowdrops.com/code/wordpress/plugin/ptm-ajax-comments/ "PTM AJAX Comments") for the latest information on this plugin.

== Known Issues ==

* So far no known issues

== Changelog ==

= Version 1.0.2 - April 11, 2011 =
* Fixed Authors & outdated links

= Version 1.0.1 - December 23, 2010 =
* Updated README
* Fixed settings update bug when upgrading plugin
* Admin: edited notice messages
* Admin: fixed unclosed DIV
* Admin: prevent frontend class from load while in /wp-admin
* Admin: added missing CSS
* Admin: added 'Support' tab

= Version 1.0.0 - December 14, 2010 =
* Initial release
