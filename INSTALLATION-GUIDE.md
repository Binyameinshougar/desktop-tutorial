# Weiße Elfen Home Care - WordPress Theme Installation Package

## Package Contents

This package contains everything you need to install the Weiße Elfen Home Care WordPress theme:

📦 **weise-elfen/** - Main theme folder
📦 **weise-elfen-child/** - Child theme folder (optional)
📁 **demo-import/** - Demo content import files and instructions
📄 **README.md** - This file
📄 **INSTALLATION-GUIDE.md** - Step-by-step installation instructions

## Quick Start

### Option 1: ZIP Installation (Easiest)

1. Create ZIP files from the theme folders (see below)
2. In WordPress admin: Appearance → Themes → Add New → Upload Theme
3. Upload `weise-elfen.zip`
4. Click "Activate"
5. Optionally, repeat for `weise-elfen-child.zip`

### Option 2: FTP/Manual Installation

1. Upload the `weise-elfen` folder to `/wp-content/themes/` on your server
2. In WordPress admin: Appearance → Themes
3. Find "Weiße Elfen Home Care" and click "Activate"
4. Optionally, upload and activate `weise-elfen-child` folder

## Creating ZIP Files

If ZIP files are not provided, create them:

### On Linux/Mac:
```bash
cd /path/to/this/folder
zip -r weise-elfen.zip weise-elfen/
zip -r weise-elfen-child.zip weise-elfen-child/
```

### On Windows:
1. Right-click the `weise-elfen` folder
2. Select "Send to" → "Compressed (zipped) folder"
3. Rename to `weise-elfen.zip`
4. Repeat for `weise-elfen-child` folder

## System Requirements

- **WordPress:** 6.0 or higher
- **PHP:** 7.4 or higher
- **MySQL:** 5.6 or higher (or MariaDB 10.1+)
- **Server:** Any modern web server (Apache, Nginx, etc.)
- **Browser:** Modern browsers (Chrome, Firefox, Safari, Edge)

## Installation Steps

### 1. Pre-Installation Checklist

- [ ] WordPress 6.0+ is installed and running
- [ ] PHP 7.4+ is available on your server
- [ ] You have admin access to WordPress
- [ ] You have FTP access (if using manual installation)
- [ ] Backup your existing site (recommended)

### 2. Install the Theme

**Method A: Upload via WordPress (Recommended)**

1. Log into WordPress admin panel
2. Navigate to **Appearance → Themes**
3. Click **Add New** button at the top
4. Click **Upload Theme** button
5. Click **Choose File** and select `weise-elfen.zip`
6. Click **Install Now**
7. Wait for installation to complete
8. Click **Activate** button

**Method B: Install via FTP**

1. Unzip `weise-elfen.zip` on your computer
2. Connect to your server via FTP client
3. Navigate to `/wp-content/themes/`
4. Upload the entire `weise-elfen` folder
5. Go to WordPress admin → **Appearance → Themes**
6. Find "Weiße Elfen Home Care" and click **Activate**

### 3. Install Child Theme (Optional but Recommended)

Repeat the same process with `weise-elfen-child.zip`

**Important:** Install and activate the parent theme first, then the child theme.

### 4. Initial Configuration

After activation, configure the theme:

1. **Upload Logo**
   - Appearance → Customize → Site Identity
   - Click "Select Logo" and upload your logo image
   - Recommended size: 200x60 pixels (PNG with transparent background)

2. **Configure Company Information**
   - Appearance → Customize → Company Information
   - Fill in all company details:
     - Company Name: Weiße Elfen Frankfurt (Oder) gUG (haftungsbeschränkt)
     - Managing Director: Surag Bosch Shogar
     - Address: Rudolf-Breitscheid-Str. 13, 15230 Frankfurt (Oder), Germany
     - Phone: +49 335 554 087 99
     - Mobile/WhatsApp: +49 174 2198213
     - Email: info@weisse-elfen-helfen.de
     - Tagline: Alltagshilfe – Betreuung – Familienhilfe – 24h Betreuung
     - WhatsApp Link: https://wa.me/491742198213
   - Click "Publish"

3. **Create Required Pages**

   Create these pages with their templates:

   **a) Home Page**
   - Pages → Add New
   - Title: "Home" (can be blank)
   - Template: (will use front-page.php automatically)
   - Click "Publish"
   - Set as front page: Settings → Reading → Static Front Page → Select "Home"

   **b) Services Page**
   - Pages → Add New
   - Title: "Our Services"
   - Page Attributes → Template: "Services Page"
   - Click "Publish"

   **c) About Page**
   - Pages → Add New
   - Title: "About Us"
   - Page Attributes → Template: "About Page"
   - Click "Publish"

   **d) Contact Page**
   - Pages → Add New
   - Title: "Contact"
   - Page Attributes → Template: "Contact Page"
   - Click "Publish"

   **e) Careers Page**
   - Pages → Add New
   - Title: "Careers"
   - Page Attributes → Template: "Careers Page"
   - Click "Publish"

4. **Create Navigation Menu**
   - Appearance → Menus
   - Create new menu: "Main Menu"
   - Add pages: Home, Our Services, About Us, Contact, Careers
   - Assign to "Primary Menu" location
   - Save menu

5. **Upload Manager Portrait**
   - Media → Add New
   - Upload manager's portrait photo
   - Recommended size: 800x600 pixels or larger
   - Go to Pages → Home (front page)
   - Set as Featured Image
   - Update page

### 5. Optional Enhancements

**Install Recommended Plugins:**

- **One Click Demo Import** - For importing demo content
- **Contact Form 7** - Alternative contact form solution
- **Yoast SEO** or **Rank Math** - SEO optimization
- **Elementor** - Page builder (theme is already compatible)
- **WP Mail SMTP** - Ensure reliable email delivery for forms

**Configure Email Delivery:**

The contact and careers forms send email notifications. To ensure reliable delivery:

1. Install WP Mail SMTP plugin
2. Configure with your email provider's SMTP settings
3. Test email sending functionality
4. Alternative: Use services like SendGrid, Mailgun, or Amazon SES

### 6. Demo Content Import (Optional)

See instructions in the `demo-import` folder for importing demo content using the One Click Demo Import plugin.

## Theme Features

✅ **Responsive Design** - Works perfectly on all devices
✅ **Brand Colors** - #9B2743 primary, #F9E4E8 soft background
✅ **Custom Fonts** - Poppins (headings), Lato (body)
✅ **Page Templates** - Services, About, Contact, Careers
✅ **Contact Forms** - Built-in contact and careers application forms
✅ **WhatsApp Integration** - Direct messaging buttons
✅ **Gutenberg Ready** - Full Block Editor support
✅ **Elementor Compatible** - Works with Elementor page builder
✅ **SEO Optimized** - Clean, semantic code
✅ **Accessible** - WCAG 2.1 AA compliant
✅ **RTL Ready** - Right-to-left language support
✅ **Translation Ready** - .pot file included
✅ **Child Theme** - Safe customizations

## Customization

### Colors

Theme colors are defined as CSS variables in `style.css`. To customize:

1. Use a child theme (recommended)
2. Or go to Appearance → Customize → Additional CSS
3. Override color variables:

```css
:root {
  --primary: #9B2743;    /* Main brand color */
  --hover: #A63C54;      /* Hover state */
  --soft-bg: #F9E4E8;    /* Soft background */
}
```

### Fonts

To change fonts, edit `functions.php` in your child theme:

```php
function weise_elfen_child_fonts() {
    wp_dequeue_style('weise-elfen-fonts');
    wp_enqueue_style('custom-fonts', 'YOUR_GOOGLE_FONTS_URL');
}
add_action('wp_enqueue_scripts', 'weise_elfen_child_fonts', 11);
```

## Troubleshooting

### Issue: Theme not appearing in theme list
**Solution:** Make sure you uploaded the theme to `/wp-content/themes/` and the folder contains `style.css`

### Issue: White screen after activation
**Solution:** Check PHP error logs. Usually caused by PHP version incompatibility. Requires PHP 7.4+

### Issue: Forms not sending emails
**Solution:** 
1. Install WP Mail SMTP plugin
2. Configure SMTP settings
3. Test email functionality
4. Check spam folder

### Issue: Logo not displaying
**Solution:** 
1. Go to Appearance → Customize → Site Identity
2. Upload logo image (PNG recommended)
3. Adjust logo size if needed

### Issue: Pages showing "template not found"
**Solution:** 
1. Re-upload theme files
2. Ensure all template files are present
3. Clear WordPress cache

### Issue: Menu not displaying
**Solution:**
1. Create a menu in Appearance → Menus
2. Assign to "Primary Menu" location
3. Save menu

## Support

For technical support and questions:

- **Email:** info@weisse-elfen-helfen.de
- **Phone:** +49 335 554 087 99
- **Mobile/WhatsApp:** +49 174 2198213

## Documentation

Full documentation is available in:
- `weise-elfen/README.md` - Complete theme documentation
- `demo-import/README.md` - Demo import instructions

## Updates

To check for theme updates:
1. Dashboard → Updates
2. Look for "Weiße Elfen Home Care" theme updates
3. Click "Update Now" if available

**Important:** If using child theme, your customizations will be preserved during updates.

## License

This theme is licensed under GPL v2 or later:
http://www.gnu.org/licenses/gpl-2.0.html

You are free to:
- Use the theme for personal or commercial projects
- Modify the theme to suit your needs
- Distribute modified versions

## Credits

- **Design & Development:** Weiße Elfen Frankfurt (Oder) gUG
- **Fonts:** Google Fonts (Poppins, Lato - Open Source)
- **WordPress Standards:** Following WordPress Coding Standards
- **Accessibility:** WCAG 2.1 AA compliant

## Changelog

### Version 1.0.0 - 2025-10-11
- Initial release
- Complete home care theme
- All required page templates
- Contact and careers forms
- WhatsApp integration
- Gutenberg and Elementor support
- RTL and translation ready
- Full documentation

---

## Quick Reference

### Directory Structure
```
weise-elfen/
├── assets/images/      # Theme images
├── css/               # Stylesheets
├── inc/               # PHP includes
├── js/                # JavaScript
├── languages/         # Translations
├── functions.php      # Theme functions
├── style.css          # Main stylesheet
├── theme.json         # Global settings
├── header.php         # Header template
├── footer.php         # Footer template
├── index.php          # Main template
├── front-page.php     # Home page
├── page-services.php  # Services template
├── page-about.php     # About template
├── page-contact.php   # Contact template
└── page-careers.php   # Careers template
```

### Contact Information Template

Use these details in your theme configuration:

**Company:** Weiße Elfen Frankfurt (Oder) gUG (haftungsbeschränkt)
**Director:** Surag Bosch Shogar
**Address:** Rudolf-Breitscheid-Str. 13, 15230 Frankfurt (Oder), Germany
**Phone:** +49 335 554 087 99
**Mobile/WhatsApp:** +49 174 2198213
**Email:** info@weisse-elfen-helfen.de
**Website:** weisse-elfen-helfen.de
**Tagline:** Alltagshilfe – Betreuung – Familienhilfe – 24h Betreuung

---

**Thank you for choosing Weiße Elfen Home Care WordPress Theme!**

We hope this theme serves you well and helps you provide compassionate care to your community.

For any questions or support, don't hesitate to reach out.

**Weiße Elfen Frankfurt (Oder) gUG**
Compassionate Home Care You Can Trust 🤍
