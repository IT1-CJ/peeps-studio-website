# Peeps Studio LLC — Website

A simple 3-page PHP website for **Peeps Studio LLC**, a dance studio in Florida. Designed for deployment on **Azure App Service** via **GitHub Actions**.

---

## Pages

| Page | File | Description |
|---|---|---|
| Home | `index.php` | Hero, studio highlights, class preview, CTA |
| Classes | `classes.php` | Class styles, weekly schedule table, pricing |
| Contact | `contact.php` | Contact form with server-side validation, studio info |

## Project Structure

```
peeps-studio-website/
├── index.php               # Home page
├── classes.php             # Classes & schedule page
├── contact.php             # Contact page with form
├── web.config              # Azure / IIS configuration
├── css/
│   └── style.css           # Site-wide stylesheet
└── includes/
    ├── header.php          # Shared navigation & <head>
    └── footer.php          # Shared footer
```

## Deployment

### Azure App Service (GitHub Actions)

1. Create an **Azure Web App** with **PHP 8.2** runtime (Linux or Windows)
2. In the **Deployment Center**, connect this GitHub repository and select the `main` branch
3. Azure generates a GitHub Actions workflow automatically — every push to `main` triggers a redeploy

### Local Development

Any local PHP server works:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000` in your browser.

## Customization Checklist

Before going live, update the following placeholders:

- [ ] Studio address — `contact.php`
- [ ] Phone number — `contact.php`
- [ ] Email address — `contact.php` and `includes/footer.php`
- [ ] Instructor names — `classes.php`
- [ ] Class days/times — `classes.php`
- [ ] Tuition prices — `classes.php`
- [ ] Social media links — `contact.php`
- [ ] Google Maps embed — `contact.php` (marked with a placeholder block)
- [ ] Contact form email recipient — `contact.php` (`$to` variable)

## Contact Form — Email Setup

The contact form uses PHP's `mail()` function, which is **disabled on Azure App Service** by default. To enable email delivery, replace `mail()` in `contact.php` with one of the following:

- **SendGrid** — free up to 100 emails/day, recommended for Azure
- **PHPMailer + SMTP** — works with Gmail, Outlook, or any SMTP provider

## Tech Stack

- PHP 8.2
- Plain HTML5 / CSS3 (no frameworks)
- Azure App Service (IIS / Linux)
- GitHub Actions for CI/CD

## License

Private client project — Peeps Studio LLC. All rights reserved.
