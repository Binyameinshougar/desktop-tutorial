# Weiße Elfen Home Care WordPress Theme

## Overview

A warm, compassionate WordPress theme designed specifically for Weiße Elfen Home Care services. This theme features brand colors (#9B2743 primary, #A63C54 hover, #F9E4E8 soft background), Poppins and Lato fonts, and full Gutenberg/Elementor compatibility.

## Theme Information

- **Theme Name:** Weiße Elfen Home Care
- **Version:** 1.0.0
- **Author:** Weiße Elfen Frankfurt (Oder) gUG
- **License:** GPL v2 or later
- **Requires WordPress:** 6.0+
- **Requires PHP:** 7.4+

## Features

✅ **Modern Design:** Clean, professional design with warm, compassionate aesthetics
✅ **Brand Colors:** Consistent color palette matching company branding
✅ **Custom Typography:** Poppins (headings) and Lato (body) fonts
✅ **Responsive:** Mobile-first design that works on all devices
✅ **Accessible:** WCAG 2.1 AA compliant with keyboard navigation
✅ **RTL Ready:** Full right-to-left language support for future Arabic content
✅ **Gutenberg First:** Full Block Editor support with custom styles
✅ **Elementor Compatible:** Works seamlessly with Elementor page builder
✅ **Translation Ready:** Includes .pot template file for easy translation
✅ **Custom Page Templates:** Services, About, Contact, and Careers pages
✅ **Form Integration:** Contact and careers application forms built-in
✅ **WhatsApp Integration:** Direct WhatsApp messaging buttons
✅ **SEO Optimized:** Clean code and semantic HTML for better search rankings

## Installation Instructions

### Method 1: Upload via WordPress Admin (Recommended)

1. Download the `weise-elfen.zip` file
2. Log in to your WordPress admin panel
3. Go to **Appearance → Themes**
4. Click **Add New** → **Upload Theme**
5. Choose the `weise-elfen.zip` file
6. Click **Install Now**
7. Click **Activate** when installation is complete

### Method 2: Manual Installation via FTP

1. Unzip the `weise-elfen.zip` file
2. Upload the `weise-elfen` folder to `/wp-content/themes/`
3. Log in to your WordPress admin panel
4. Go to **Appearance → Themes**
5. Find "Weiße Elfen Home Care" and click **Activate**

### Installing the Child Theme (Optional but Recommended)

1. First install and activate the main theme
2. Upload and activate `weise-elfen-child.zip` using the same methods above
3. The child theme allows you to make customizations without affecting the parent theme

## Initial Setup

### 1. Configure Company Information

After activation, go to **Appearance → Customize → Company Information** and update:
- Company Name
- Managing Director
- Address
- Phone Number
- Mobile/WhatsApp Number
- Email Address
- Tagline
- WhatsApp Link

### 2. Upload Your Logo

Go to **Appearance → Customize → Site Identity** and upload your logo:
- Recommended size: 200x60 pixels (or similar aspect ratio)
- Format: PNG with transparent background (preferred) or JPG
- The logo will appear in the header and can be customized

### 3. Create Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu named "Primary Menu"
3. Add your pages:
   - Home
   - Services
   - About Us
   - Contact
   - Careers
4. Assign to "Primary Menu" location
5. Save the menu

### 4. Create Required Pages

Create the following pages and assign their templates:

#### Home Page (Front Page)
1. **Pages → Add New**
2. Title: "Home" (or leave blank)
3. No template selection needed
4. **Settings → Reading → Static Front Page → Select "Home"**

#### Services Page
1. **Pages → Add New**
2. Title: "Services" or "Our Services"
3. **Template:** Select "Services Page"
4. Publish

#### About Page
1. **Pages → Add New**
2. Title: "About Us" or "About Weiße Elfen"
3. **Template:** Select "About Page"
4. Publish

#### Contact Page
1. **Pages → Add New**
2. Title: "Contact" or "Contact Us"
3. **Template:** Select "Contact Page"
4. Publish

#### Careers Page
1. **Pages → Add New**
2. Title: "Careers" or "Join Our Team"
3. **Template:** Select "Careers Page"
4. Publish

### 5. Upload Manager's Photo

Upload the manager's portrait photo:
1. Go to **Media → Add New**
2. Upload the manager's photo (recommended: 800x600px or larger)
3. Go to **Pages → Home** (front page)
4. Set the uploaded image as the Featured Image
5. Update the page

### 6. Configure Widgets (Optional)

Go to **Appearance → Widgets** and add content to:
- Footer Column 2: Quick Links, Recent Posts, etc.
- Footer Column 3: Business Hours, Social Media, etc.

## Page Templates

### Front Page (Home)
- Hero section with headline and call-to-action buttons
- Services preview grid (2×3)
- About preview section
- Contact call-to-action

### Services Page
- Full services grid (2×3)
- Detailed descriptions for each service:
  - Personal Care & Privacy
  - Communication & Behavioral Support
  - Mobility Assistance
  - Sensory Comfort Environment
  - Medication & Follow-up
  - Family Respite (Short-Term Care)

### About Page
- Company mission and values
- Manager profile section with photo
- Why choose us section

### Contact Page
- Contact information display
- Contact form with fields:
  - Name
  - Phone/WhatsApp
  - City/Area
  - Type of support needed
  - Preferred contact time
  - Additional notes
- WhatsApp button for instant messaging

### Careers Page
- Team benefits and culture
- Careers application form with fields:
  - Full name
  - Email
  - Phone
  - Experience
  - Availability

## Customization

### Colors

The theme uses CSS variables for easy color customization. Edit in `style.css`:

```css
:root {
  --primary: #9B2743;        /* Primary accent color */
  --hover: #A63C54;          /* Hover state */
  --soft-bg: #F9E4E8;        /* Soft background */
  --base-bg: #FFFFFF;        /* Base background */
  --text: #222222;           /* Body text */
  --muted: #666666;          /* Muted text */
}
```

### Typography

Fonts are loaded from Google Fonts:
- **Headings:** Poppins (weights: 400, 600, 700, 800)
- **Body:** Lato (weights: 400, 500, 700)

To change fonts, edit `functions.php` in the `weise_elfen_scripts()` function.

### Custom CSS

Add custom CSS via:
1. **Appearance → Customize → Additional CSS**, or
2. Create a child theme (recommended for extensive customizations)

## Using the Child Theme

The child theme (`weise-elfen-child`) is provided for safe customizations:

1. Install and activate both parent and child themes
2. Any customizations should be made in the child theme
3. Child theme files override parent theme files
4. Parent theme can be updated without losing your customizations

## Form Configuration

### Contact Form

The contact form sends email to the address configured in **Customizer → Company Information → Email**. Ensure your WordPress site can send emails:
- Check with your hosting provider about email configuration
- Consider using an SMTP plugin like WP Mail SMTP for reliable delivery

### Careers Form

The careers application form works the same way as the contact form, sending submissions to your configured email address.

## Translation

The theme is translation-ready with text domain `weise-elfen`.

### Creating Translations

1. Use the provided `languages/weise-elfen.pot` template file
2. Use Poedit or Loco Translate plugin to create translations
3. Save translation files as:
   - `weise-elfen-de_DE.po` and `.mo` (German)
   - `weise-elfen-en_US.po` and `.mo` (English)
4. Place files in `/wp-content/themes/weise-elfen/languages/`

### Recommended Translation Plugins
- Loco Translate (easiest for beginners)
- Polylang or WPML (for multilingual sites)

## Recommended Plugins

### Essential
- **One Click Demo Import** - Import demo content
- **Contact Form 7** (alternative form solution)
- **Yoast SEO** or **Rank Math** - SEO optimization

### Optional Enhancement
- **Elementor** - Page builder (already compatible)
- **WP Mail SMTP** - Reliable email sending
- **WP Fastest Cache** - Performance optimization
- **Wordfence** - Security
- **UpdraftPlus** - Backups

## Demo Content Import

### Using One Click Demo Import Plugin

1. Install and activate "One Click Demo Import" plugin
2. Go to **Appearance → Import Demo Data**
3. Upload the demo import files from the `demo-import` folder
4. Click "Import" and wait for completion
5. Set your home page: **Settings → Reading → Static Front Page**

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Accessibility Features

- Semantic HTML5 markup
- Proper heading hierarchy
- ARIA labels and roles
- Keyboard navigation support
- Focus indicators
- Color contrast meets WCAG AA standards
- Screen reader friendly
- Skip to content link

## Support & Updates

### Documentation
Full documentation is included with the theme.

### Updates
Check for theme updates regularly via the WordPress admin panel.

### Support
For support, please contact:
- Email: info@weisse-elfen-helfen.de
- Phone: +49 335 554 087 99

## Technical Details

### File Structure
```
weise-elfen/
├── assets/
│   └── images/          # Theme images and placeholders
├── css/                 # Additional stylesheets (if needed)
├── inc/                 # PHP includes
│   ├── customizer.php   # Customizer settings
│   └── template-tags.php # Template functions
├── js/                  # JavaScript files
│   ├── main.js          # Main theme JS
│   └── customizer.js    # Customizer preview
├── languages/           # Translation files
│   └── weise-elfen.pot  # Translation template
├── template-parts/      # Reusable template parts
├── footer.php           # Footer template
├── front-page.php       # Home page template
├── functions.php        # Theme functions
├── header.php           # Header template
├── index.php            # Main template
├── page-about.php       # About page template
├── page-careers.php     # Careers page template
├── page-contact.php     # Contact page template
├── page-services.php    # Services page template
├── screenshot.png       # Theme preview image
├── style.css            # Main stylesheet
└── theme.json           # Global settings & styles
```

## Credits

- **Design & Development:** Weiße Elfen Frankfurt (Oder) gUG
- **Fonts:** Google Fonts (Poppins, Lato)
- **Icons:** Unicode emoji (accessible and universal)
- **WordPress Standards:** Following WordPress Coding Standards

## License

This theme is licensed under the GPL v2 or later:
http://www.gnu.org/licenses/gpl-2.0.html

## Changelog

### Version 1.0.0 - 2025-10-11
- Initial release
- Complete theme with all required pages
- Contact and careers forms
- WhatsApp integration
- Full Gutenberg and Elementor support
- RTL language support
- Translation ready
- Accessibility features
- Responsive design

---

**Thank you for using Weiße Elfen Home Care WordPress Theme!**

For questions or support, please contact us at info@weisse-elfen-helfen.de
