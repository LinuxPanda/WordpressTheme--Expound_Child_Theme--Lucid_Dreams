Lucid Dreams (Child Theme for Expound)
======================================

Lucid Dreams is a child theme of the expound theme by Konstantin Kovshenin: https://wordpress.org/themes/expound.

Screenshots
-----------

Click on the thumbnail to view the full resolution screenshot.

[![Home_Featured_Post](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/home_featured_thumbnail.png)](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/home_featured.png)
[![Home_Normal_Post](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/home_posts_normal_thumbnail.png)](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/home_posts_normal.png)
[![Post](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/post_thumbnail.png)](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/post.png)
[![Footer](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/footer_thumbnail.png)](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/footer.png)
[![Page_1920px](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/page_1920px_thumbnail.png)](https://raw.githubusercontent.com/LinuxPanda/WordpressTheme--Expound_Child_Theme--Lucid_Dreams/master/screenshots/page_1920px.png)

Features
--------

* Social icons moved to footer.
* Added a secondary menu above the header area.
* Added a widget area to the right of logo for adding a custom image or ad banner of 468*60 px.

Note
----
* Custom header image does not work properly with this theme.

How-To
-------
1. Download the zip file and unzip it.
2. Rename the directory to "Lucid Dreams" and delete the 'screenshots' directory.
3. Zip the directory.
4. Upload the zip file to your wordpress installation & enjoy.
5. If the theme is not working then make sure that you have the expound theme, https://wordpress.org/themes/expound, installed in your wordpress installation.

**Breadcrumb**

To enable breadcrumb, I recommend the ["Hansel & Gretel: Fine-Tuned Breadcrumb Generator"](http://wordpress.org/plugins/hansel-gretel/) plugin.

Add this code to content-single.php inside the header div or wherever you like.

```php
		<div class="HAG">
			<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>
		</div><!-- .Hansel & Gretel Breadcrumb -->
```

Add this code to style.css (optional).

```css
/* =Hansel & Gretel Breadcrumb
-------------------------------------------------------------- */

.HAG {
  font-size: 12px;
}
.HAG a {
  text-decoration: none;
}
```

Version
-------
* v1.0 - Initial release

License
-------
GNU General Public License
