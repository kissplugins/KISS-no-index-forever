# No Index Forever (Almost)

**Contributors:** Hypercart  
**Donate link:** https://kissplugins.com  
**Tags:** discourage, indexing, search engines, SEO  
**Requires at least:** 4.6  
**Tested up to:** 6.3  
**Stable tag:** 1.0.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html

## Description

The **No Index Forever (Almost)** plugin ensures that search engines are always discouraged from indexing your WordPress site. It checks the "Discourage search engines from indexing this site" setting every hour, and if it's not set correctly, the plugin resets it so that search engines are discouraged.

This can be helpful for development, staging sites, or any scenario where you never want your site to be indexed by search engines.

## Features

- Automatically enforces the `blog_public` option to discourage search engines from indexing your site.
- Checks every hour using WordPress cron scheduling.
- Adds a Settings page link from the plugin listing page for quick access.

## Installation

1. Download the `no-index-forever-almost.zip` file and extract it.
2. Upload the `no-index-forever-almost` folder to the `/wp-content/plugins/` directory of your WordPress installation.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. The plugin will immediately begin enforcing the "Discourage search engines" setting. No further configuration is required.

## Usage

Once activated, the plugin automatically checks and resets the discourage search engines option every hour. You can access the plugin’s information page from **Settings > No Index Forever** in your WordPress admin dashboard. There are no additional settings to configure.

If you ever need to allow search engines again, simply deactivate or uninstall the plugin.

## Frequently Asked Questions

**Q:** Will this plugin block search engines from indexing my site immediately?  
**A:** The plugin enforces the WordPress "Discourage search engines from indexing" setting. Actual indexing behavior depends on search engines respecting that directive. Typically, major search engines honor the directive, but we cannot guarantee full compliance from all crawlers.

**Q:** Can I override or temporarily disable the enforcement?  
**A:** Yes. Simply deactivate the plugin to stop it from resetting the discourage search engines setting.

## Changelog

**1.0.0**  
- Initial release.

## License

This plugin is open source and licensed under the GPLv2 or later license.  
For more details, see: [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)

**Follow Us on Blue Sky:**
https://bsky.app/profile/kissplugins.bsky.social

© Copyright Hypercart D.B.A. Neochrome, Inc.

