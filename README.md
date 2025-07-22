# KISS - No Index Forever (Almost)

**KISS = Keep It Simple (Stupid)** Plugins are designed to do one thing only. And we believe that one thing should be done very well.

The **KISS - No Index Forever (Almost)** plugin has no upsells or freemium limitations. It's small, effective, and does what it promises.

---

## ✅ What It Does

This plugin ensures that WordPress’s **"Discourage search engines from indexing this site"** setting is always turned on — **forever (almost)**.

It checks the setting **every hour**, and if anything tries to override it, the plugin resets it. Perfect for:

- Development sites
- Staging environments
- Client preview sites
- Internal company portals

---

## Descriptions

The KISS - No Index Forever (Almost) plugin ensures that search engines are always discouraged from indexing your WordPress site. It checks the "Discourage search engines from indexing this site" setting every hour, and if it's not set correctly, the plugin resets it so that search engines are discouraged.

This can be helpful for development, staging sites, or any scenario where you never want your site to be indexed by search engines.

## 🔌 Installation

1. Download the `KISS No Index Forever (Almost)` plugin `.zip` file from [git repository](https://github.com/kissplugins/KISS-no-index-forever).
2. In your WordPress admin dashboard, go to **Plugins > Add New**.
3. Click **Upload Plugin** and upload the `.zip` file.
4. Click **Activate Plugin** once uploaded.

---

## ⚙️ How It Works

After activation:

- The plugin **checks every hour** (via WordPress cron) whether the `Discourage search engines` setting is still enabled.
- If it's **disabled**, the plugin will **re-enable it automatically**.
- You’ll find a reference screen under **Settings > No Index Forever** — no configuration needed.

To stop enforcement, simply **deactivate the plugin**.

---

## ❓ Frequently Asked Questions

**Q: Will this block all bots immediately?**  
A: No plugin can guarantee that. But most major search engines honor the `Discourage indexing` flag set in WordPress. This plugin ensures that flag is always on.

**Q: Can I disable this temporarily?**  
A: Yes. Just deactivate or delete the plugin — it stops resetting the setting.

---

## 🛠️ Features

- 💡 Lightweight: No settings, no bloat.
- 🔁 Hourly enforcement using native WordPress cron.
- 🔒 Protects your staging or private site from accidental indexing.
- 🧠 Simple — you activate it and it just works.

---

## 🛣️ Roadmap

- Add toggle to auto-disable when moved to production
- Optional alert if setting was overridden before reset
- Add WP CLI command for manual enforcement

---

## 🧾 Changelog

**1.0.1**  
- Added plugin update checker support.

**1.0.0**  
- Initial release.

---

## 🧪 License & Disclaimer

This plugin is released under the **GPL v2 or later** license.  
Use of the plugin is at your own risk and provided **as-is** without any warranties.

Please first review the code and test on a Development/Staging server.

📜 [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)

---

**Questions or Support?**  
devops@kissplugins.com | noel@kissplugins.com

**Follow Us on Blue Sky:**  
https://bsky.app/profile/kissplugins.bsky.social

© Copyright Hypercart D.B.A. Neochrome, Inc.
