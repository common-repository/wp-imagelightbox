=== Plugin Name ===
Contributors: znuff
Tags: lightbox, imagelightbox.js
Requires at least: 3.0.1
Tested up to: 5.3
Stable tag: trunk
License: MIT
License URI: http://opensource.org/licenses/MIT

Responsive and touch-friendly lightbox for Wordpress. Uses ImageLightbox.js by Osvaldas Valutis

== Description ==

Responsive and touch-friendly lightbox for Wordpress.

Has no options. It will run on posts/pages/attachments. It will **NOT** run on categories, archives, front page etc. 

Thanks to:

* [Osvaldas Valutis](https://osvaldas.info/) for [ImageLightbox.js](https://osvaldas.info/image-lightbox-responsive-touch-friendly)
* [Veeck](https://github.com/rejas) for his [ImageLightbox.js fork](https://github.com/rejas/imagelightbox)


== Installation ==

1. Upload wp-imagelightbox to `/wp-content/plugins`
2. Activate plugin from admin interface


== Frequently Asked Questions ==

= Where are the options? =

There aren't any at the moment!

= How to change the imagelightbox type? =

At the moment there is no way to change the type unless you edit the code of the plugin. Inside wp-imagelightbox.php you can edit the option parameters to whatever you desire. Please keep in mind they will be overwritten on update.


== Screenshots ==

== Changelog ==
= r13 =
* One more bump

= r12 =
* Fixed a typo in the activation code

= r11 = 
* Fixed an issue where swiping left/right and closing the image by touching outside the image didn't work while logged in (`#wpadminbar` had a higher z-index)
* Disabled "history" by default, so we don't break users back buttons in certain cases, needs more investigation

= r10 =
* Added !important to our zoom button so it doesn't get overriden by theme styles (hopefully)

= r9 =
* Added a very rudimentary "open in a new tab" button to let the browser handle large images (ie: screenshots)
* Fixed the shape of navigation buttons on mobile (now they are round)
* Also moved the navigation buttons on the bottom on mobile.

= r8 =
* Fixed an issue with the init script being present on archive pages
* Remove the $type from the data-imagelightbox attribute, as we don't use that anymore

= r7 = 
* Refactored the init script
* Updated ImageLightbox.js, swapped to https://github.com/rejas/imagelightbox
* Cleaned a lot of code

= r6 =
* Forgot to add the new .js name to the repo (can we have git, please, wordpress.org?)

= r5 =
* Fixed version number loading

= r4 = 
* Added a "view original image" button which opens the current image in a new tab
* Defaulting to mode=f which corresponds to Osvaldas' "combination" mode
* Stuff that I forgot?


= r3 =
* Fixed dependency on jQuery

= r2 =
* Tweaked the CSS a bit. Overlay is now dark, nav is "tigther". Looks better on mobiles phones, too (imho).

= r1 =
* Initial release
