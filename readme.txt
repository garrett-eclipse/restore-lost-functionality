=== Restore Lost Functionality ===
Contributors: dartiss
Tags: blogroll, comment, dashboard, dns, embeds, image, link, shortlink, srcset, title
Requires at least: 4.6
Tested up to: 4.9.4
Requires PHP: 5.3
Stable tag: 3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add or remove features to restore previous WordPress functionality.

== Description ==

This plugin allows you to add or remove features to restore previous WordPress functionality. Where this function change requires more than a few lines of code, and an existing plugin exists to do this, a link will be provided so that this plugin can be installed instead and it's installation status will be shown on this screen.

Features are often removed simply due to streamlining the UI but sometimes there can be a more serious reason for the change. Please ensure you read all the details in this README before proceeding.

The following features are available for adding/removing...

* Restore the OpenSans font in Admin (changed in WordPress 4.6)
* Change the behavior of automatic updates (adds in WordPress 3.7)
* Move comment text field to the bottom (removed in WordPress 4.4)
* Disable DNS prefetching (added in WordPress 4.6)
* Disable enhanced embeds (added in WordPress 4.4)
* Re-enable Get Shortlink button (removed in WordPress 4.4)
* Re-add advanced image properties (removed in WordPress 3.9)
* Restore the old image quality (changed in WordPress 4.5)
* Switch off inline links (introduced in WordPress 4.5)
* Add Links Manager to the administration menu (removed in WordPress 3.5)
* Once Links Manager is back you can also add the "Link This" bookmarketlet (removed in WordPress 2.5)
* Option to display Shortlink in admin toolbar (removed in WordPress 3.3)
* Switch back to a single column dashboard (changed in WordPress 3.8)
* Remove SRCSET parameter from images (added in WordPress 4.4)
* Add the ability to specify a title for links (removed in WordPress 4.2)
* Restore the TinyMCE editor buttons to how they were (changed in WordPress 4.7)
* Bring back the "classic" editor (to be removed in WordPress 5.0)
* Press This returns! It was removed in WordPress 4.9
* Add an Advanced Settings menu for Jetpack - lists all the modules!

Technical specification...

* Licensed under [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License")
* Designed for both single and multi-site installations
* PHP7 compatible
* Fully internationalized, ready for translations. **If you would like to add a translation to this plugin then please head to our [Translating WordPress](https://translate.wordpress.org/projects/wp-plugins/[plugin folder] "Translating WordPress") page**
* Gutenberg ready

Once the plugin is installed head to Settings => Restore Functionality menu in the administration screen and switch on the functionality that you require. Only the functions available for your version of WordPress will be displayed. Further information is available via the Help tab at the top of the screen.

Please visit the [Github page](https://github.com/dartiss/restore-lost-functionality "Github") for the latest code development, planned enhancements and known issues.

== Admin Fonts ==

System fonts have been used in Admin since WordPress 4.6. These replaced OpenSans for performance reasons.

To switch back to the OpenSans fonts you will need to install the [OpenSans FTW](https://wordpress.org/plugins/opensans-ftw/ "OpenSans FTW") plugin, written by George J. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Advanced Settings for Jetpack ==

Some time ago Jetpack lost the ability to list all of the available modules, allowing you to turn them on and off individually. 

This option, when activated, will add a new sub-menu to Jetpack named 'Advanced', where you can, once again, see and control the complete list of modules. The code to do this was written by [Jeremy Herve](https://github.com/jeherve/advanced-settings-for-jetpack "Advanced Settings for Jetpack").

== Automatic Updates ==

Since WordPress 3.7, minor updates have updated automatically. This is to ensure critical bugs and security updates are pushed out as quickly as possible. Major updates, though, require a manual initiation.

A plugin by the name of [Update Control](https://wordpress.org/plugins/update-control/ "Update Control"), written by George Stephanis and Chip Bennett, allows you to control the behavior of automatic updates. You can switch off automatic updates but, equally, switch them on for major updates as well. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Classic Editor ==

WordPress 5.0 is due to replace the editor with Gutenberg. For those who want to return it to how it is, the "Classic Editor" plugin will do just this.

== Comment Text Field ==

In WordPress 4.4 the comment text field was moved to after the other comment fields (name, etc). This was because, when users clicked on the reply button, they were taken to the comment text area. If a user was on mobile, they may not even see the comment name and email fields and may write and submit a comment only to return back with an error. Therefore this change addressed usability and accessibility issues.

By activating this option within this plugin, the comment text field will be moved to the bottom of the comment section again.

== DNS Prefetch ==

Since WordPress 4.6, DNS prefetching code has been added to the site's header. By default a WordPress site will be added, which is for emojis. Others will be added, depending on your theme or plugin requirements (for example, a Google fonts URL will often be added if your theme uses them).

Why is this there? Some browsers will use this to perform DNS lookups in advance, improving perceived latency issues later.

If, however, you'd like to switch this off then you can via from this plugin's settings screen.

== Enhanced Embeds ==

In WordPress 4.4 the ability to embed other WordPress site's posts was added. However, this is a two-way process so as long as you have this active to allow your site to accept embeds, others can embed your site as well. You can [read more about this on Make WordPress Core](https://make.wordpress.org/core/2015/10/28/new-embeds-feature-in-wordpress-4-4/ "New Embeds Feature in WordPress 4.4").

To switch off this functionality you need to install the [Disable Embeds](https://wordpress.org/plugins/disable-embeds/ "Disable Embeds") plugin, written by Pascal Birchler. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Get Shortlink Button ==

The Get Shortlink button, available in the post editor, was removed in WordPress 4.4 in an effort to clean the interface. Activating this option within this plugin will cause it to re-appear.

== Image Properties ==

In WordPress 3.9 the ability to easily add a border, vertical, and horizontal padding to images was removed. This was done to simply clean the UI as these changes can be easily made via CSS.

To re-add these properties you must install the [Advanced Image Styles plugin](https://wordpress.org/plugins/advanced-image-styles/ "Advanced Image Styles"), written by Gregory Cornelius. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Image Quality ==

In WordPress 4.5 the image quality was reduced from 90 to 82.

You can [read the proposal](https://make.wordpress.org/core/2016/02/22/proposal-increase-the-default-image-compression-in-wordpress/ "Proposal: Increase the default image compression in WordPress") to fully understand the research and decision. If, however, you'd like the old quality back, activate this option to restore it back to 90!

== Inline Links ==

Inline links were introduced in WordPress 4.5 but many people haven't approved of them.

Activate the plugin [Advanced WPLink](https://wordpress.org/plugins/advanced-wplink/ "Advanced WPLink"), written by Nico Martin, to give you a number of enhancements, including the option to disable the inline linking. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Link Manager ==

Removed in WordPress 3.5, the Link Manager (which some use to build blogrolls) is disabled by default. It was removed because it was hardly used and not felt necessary to be part of the standard WordPress installation.

Activating this option with this plugin will cause the Links administration menu option to appear.

== Link This Bookmarklet ==

Removed in WordPress 2.5 this bookmarklet, once saved to your browser favorites, will make it easy to add any site you're visiting to your Link Manager.

= Press This ==

Press This, available as Tool, allowed you to easily import the content from another web page to your own site, usually in the form of a post. In WordPress 4.9, this functionality was removed and moved to a plugin. Activating this option will restore the Press This capability - simply head to Tools -> Available Tools for all the details, once activated.

== Restore Editor ==

WordPress 4.7 removed the underline and justify buttons and re-arranged other buttons. This option will put everything back to how it was!

== Shortlink in Admin Toolbar ==

When viewing posts with the admin toolbar switched on, there was an option to get a shortlink. This was removed in version 3.3 because it was felt it was no longer required.

Activating this option with this plugin will cause the shortlink option to be displayed in the admin. toolbar when viewing posts.

== Single Column Dashboard ==

In WordPress 3.8 the old single column dashboard was changed to multiple columns. Want the old single column back? Activate this to switch it back.

== SRCSET Attribute ==

This parameter was added in WordPress 4.4 to improve responsive image output. However, it's known to cause issues with some plugins and themes (particularly when images are served via a CDN).

Activating this option with this plugin will mean that the SRCSET parameter will no longer be added to images, although this may have a detrimental effect on responsive image output.

== Title for Links ==

Removed in version 4.2, WordPress actively discourages the use of title attributes in links as they are largely useless outside of providing the "hover tooltip" many visual users enjoy, and more importantly, they don't promote good accessibility. You can read more about the accessibility issues that it causes here.

To re-add the link title option you must install the [Restore Link Title Field plugin](https://wordpress.org/plugins/restore-link-title-field/ "Restore Link Title Field"), written by Samuel Wood (Otto) and Sergey Biryukov. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Installation ==

Restore Lost Functionality can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire `restore-lost-functionality` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress administration.

Voila! It's ready to go.

== Frequently Asked Questions ==

= Not all the functionality appears in the options screen =

Only those functions which are currently disabled in your WordPress installation will appear.

== Screenshots ==

1. The options screen with help tab open

== Changelog ==

[Learn more about my version numbering methodology](https://artiss.blog/2016/09/wordpress-plugin-versioning/ "WordPress Plugin Versioning")

= 3.1 =
* Enhancement: New option to restore the classic editor (once Gutenberg is introduced in WP 5.0 - I'n ahead of the curve here!)
* Enhancement: New option to bring back Press This
* Enhancement: New option to add advanced Jetpack menu
* Enhancement: Streamlined the code that works out if a plugin is installed and/or active
* Enhancement: Now converting all screen titles to uppercase for each word dynamically - this makes translation easier
* Enhancement: Added a Github link to the plugin meta

= 3.0.2 =
* Maintenance: Removed donation links
* Maintenance: Numerous spelling corrections in the README
* Maintenance: Minimum PHP level now added, as well as a link to the new Github repository
* Maintenance: Removed language folder as well as the domain path

= 3.0.1 =
* Maintenance: Changes to README, particularly to accommodate directory changes
* Maintenance: Now requires a minimum WordPress level of 4.6, so code changed to no longer check
* Maintenance: Website links updated

= 3.0 =
* Enhancement: New option to switch back to single column dashboard
* Enhancement: New option to restore the old image quality
* Enhancement: New option to switch off inline links
* Enhancement: New option to switch off enhanced embeds
* Enhancement: New option to restore OpenSans font to admin
* Enhancement: New option to alter the behavior of automatic updates
* Enhancement: New option to switch off DNS prefetching
* Enhancement: New option to restore the editor buttons
* Enhancement: Re-wrote the options screen. It now uses an array (stored separately to make updates easier) to generate the output
* Enhancement: Now using the `checked` WordPress function to add the checked parameter to forms
* Enhancement: Re-wrote screen output to ensure it's WCAG 2.0 compliant at AA level
* Enhancement: After WordPress 4.6 you no longer need to load text domains. So I don't!
* Maintenance: Moved screen and options array files to a separate `includes` folder
* Maintenance: Corrected code to make better use of Yoda conditions

= 2.1.1 =
* Maintenance: Updated branding, inc. adding donation links

= 2.1 =
* Enhancement: Added the 'Link This' bookmarklet, as removed in WordPress 2.5.

= 2.0 =
* Enhancement: To keep code size down and to prevent the repetition of code already available in the plugin directory, where a solution involves quite a bit of code and it's already been done via another plugin, I now simply link to that plugin but show the current status of it - i.e. whether it's installed, etc.
* Enhancement: New option to re-enable shortlink in admin toolbar
* Enhancement: New option to put the comment text field back at the bottom, rather than above the name, email, etc.
* Enhancement: New option to enable SRCSET on images
* Enhancement: New option to re-add advanced image properties
* Enhancement: Re-written help and the text on the admin screen - in particular, put some context around why the features were removed in the same place
* Bug: Eliminated some PHP errors

= 1.0 =
* Initial release

== Upgrade Notice ==

= 3.0.2 =
* Various maintenance changes