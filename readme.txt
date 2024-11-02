=== cleanSSL ===
Contributors: first10
Tags: ssl, https, insecure content
Requires at least: 3.0.1
Tested up to: 3.7.1
Stable tag: 0.1.3a
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Get rid off SSL warnings about insecure content ( mainly images, stylesheets and javascript files) on pages served via https.

== Description ==
If you serve part or all of your website over https then you'll likely have hit the scenario where the SSL certificate provides warnings about insecure content. This insecure content is usually the src of the files being called over http when the rest of the page is being called over https. We're now seeing certain browsers blocking these http calls from being executed as a default action which can lead to broken-ness. And no-one likes broken-ness!

This plugin will make sure that if your site is being viewed via https that src attributes of content is served in a protocol agnostic manner. This means that all those files are now being served over https as well. So instead of http://foo.com/foo.css you see //foo.com/foo.css which means your browser will call foo.css over https and no warnings on the padlock.

NOTE: Currently images that are set by css or js files are not fixed but we plan to fix this in a future release.

== Installation ==
1. Upload cleanSSL directory to your "/wp-content/plugins/" directory.
2. Activate the plugin through the "Plugins" menu in the WordPress dashboard.
3. Done

== Screenshots ==
Will come shortly

== Changelog ==
= 0.1.3a =
* updated readme.txt
= 0.1.3 =
* made plugin more reliable
= 0.1.2c =
* updated index.php version
= 0.1.2b =
* changed tested up to version
= 0.1.2a =
* forgotten to update readme.txt
= 0.1.2 =
* fixed issue with single quotes
= 0.1.1 =
* removed unwanted text
= 0.1 =
* Initial release.

== Upgrade Notice ==
= 0.1.2b =
* upgrade for latest bug fixes
= 0.1 =
* Initial release.
