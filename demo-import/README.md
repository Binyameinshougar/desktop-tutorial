# Weiße Elfen Theme - Demo Import Instructions

## Overview
This folder contains files for One Click Demo Import to quickly set up your Weiße Elfen Home Care website with demo content.

## Required Plugin
Install and activate: **One Click Demo Import** by ProteusThemes
https://wordpress.org/plugins/one-click-demo-import/

## Files to Create

You'll need to create these files for demo import:

### 1. content.xml
Export your WordPress content after setting up the demo site:
- Tools → Export → All content
- Save as `content.xml`

### 2. widgets.json (optional)
Export widget settings:
- Use Widget Importer & Exporter plugin
- Export widgets to JSON
- Save as `widgets.json`

### 3. customizer.dat (optional)
Export customizer settings:
- Use Customizer Export/Import plugin
- Export customizer data
- Save as `customizer.dat`

## Manual Demo Setup Instructions

If you prefer to set up manually without demo import:

### Step 1: Create Pages

Create these pages with their respective templates:

**Home Page**
- Title: Home
- Template: Default (front-page.php will be used automatically)
- Set as Front Page: Settings → Reading → Static Front Page

**Services Page**
- Title: Our Services
- Template: Services Page
- Content: (leave blank, template handles content)

**About Page**
- Title: About Us
- Template: About Page
- Content: (leave blank, template handles content)

**Contact Page**
- Title: Contact
- Template: Contact Page
- Content: (leave blank, template handles content)

**Careers Page**
- Title: Careers
- Template: Careers Page
- Content: (leave blank, template handles content)

### Step 2: Configure Menu

1. Go to Appearance → Menus
2. Create a new menu: "Main Menu"
3. Add pages in this order:
   - Home
   - Services
   - About Us
   - Contact
   - Careers
4. Assign to "Primary Menu" location

### Step 3: Upload Images

Upload the manager's portrait and logo:
- Media → Add New
- Upload manager-portrait.jpg (800x600px recommended)
- Upload logo (PNG/SVG recommended)

Set the manager's portrait as featured image for the Home page.

### Step 4: Configure Customizer

Go to Appearance → Customize → Company Information and fill in:

**Company Details:**
- Company Name: Weiße Elfen Frankfurt (Oder) gUG (haftungsbeschränkt)
- Managing Director: Surag Bosch Shogar
- Address: Rudolf-Breitscheid-Str. 13, 15230 Frankfurt (Oder), Germany
- Phone: +49 335 554 087 99
- Mobile/WhatsApp: +49 174 2198213
- Email: info@weisse-elfen-helfen.de
- Tagline: Alltagshilfe – Betreuung – Familienhilfe – 24h Betreuung
- WhatsApp Link: https://wa.me/491742198213

**Site Identity:**
- Upload logo
- Set site title: Weiße Elfen Home Care
- Set tagline: Compassionate Home Care You Can Trust

### Step 5: Test Forms

Test both forms to ensure email delivery:
1. Fill out contact form → check email
2. Fill out careers form → check email

If emails aren't arriving, consider installing WP Mail SMTP plugin.

### Step 6: Add Footer Widgets (Optional)

Go to Appearance → Widgets:

**Footer Column 2:**
- Add "Text" widget
- Title: "Quick Links"
- Add links to: Services, About, Contact, Careers

**Footer Column 3:**
- Add "Text" widget
- Title: "Business Hours"
- Content: Monday-Friday: 8am-6pm, etc.

## Support

For help with demo import or setup:
- Email: info@weisse-elfen-helfen.de
- Phone: +49 335 554 087 99

## Notes

- The theme works perfectly without demo import
- All content is dynamically generated from templates
- Demo import is optional and just for convenience
- You can always recreate the demo manually following the steps above
