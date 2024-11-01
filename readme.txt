=== Plugin Name ===
Contributors: joeltbennett
Tags: adsense, ad wall, adblock, unblock, ads, google, ad block
Requires at least: 3.0.1
Tested up to: 4.7.4
Stable tag: 4.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A fully customizable ad wall for the AdSense network. Blocks & alerts AdBlock users.

== Description ==

This plugin is currently only for websites using Google's AdSense advertising network.


• Prevents AdBlock users from viewing your site
• Guarantees all visitors are seeing your ads
• Completely customizable message appearance
• **Extremely** light weight


The plugin will function regardless of which ad-blocking software is enabled.


== Installation ==


1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Customize appearance through the settings menu (Settings > AdSense Unblocker).


== Frequently Asked Questions ==

= Does the plugin work for [browser x]? =

It functions on any browser.

= Does the plugin require anything extra to function? =

No. It uses jQuery, which is included in all WordPress installations by default.

= Will this plugin eat up resources? =

Absolutely not - the scripts have a combined file size of 8kb, and the code only executes once per page load, entirely transparent to the user. The amount of code on the user’s side is only 2kb!

= Does it work for mobile users? =

Yes - it's entirely responsive and functions exactly the same regardless of the user's device. But you may want to change the appearance for mobile users by adding to the CSS file from the settings page (Settings > AdSense Unblocker).

= Can I specify where the unblocking software will run? =

No…not yet! This is a feature that will be included in the next update, but for now it is a site-wide ad wall that will appear wherever an ad is placed/blocked. 

If you would like to create a temporary fix, you may edit the Javascript file and wrap the main function with another IF/ELSE statement that only executes in the presence of a certain element (for instance, H1 tags appear on all posts but usually not the home page).

== Screenshots ==

1. The ad wall darkens and blurs the site’s content while displaying a message.
2. The ad wall’s appearance is fully customizable, easily accessed through the Settings panel in the admin menu.

== Changelog ==

= 1.2 =
* New assets.
* Improved settings page function.
* Restructured code for improved performance.

= 1.1 =
* Improved default appearance.
* Added settings page.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.2 =
This version has been modified to improve performance and includes a settings page.