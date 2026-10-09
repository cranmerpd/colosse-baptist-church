# Colosse Baptist Church

PHP church site shared from the `colosse2` package: public pages, five themes, admin, and SQL schema.

## What is in here

- Public pages: `index.php`, `our-church.php`, `ministries.php`, `sermons.php`, `giving.php`, `forms.php`
- Themes under `themes/`: community, heritage, ministry-hub, modern-ministry, worship
- Admin under `admin/`
- Schema in `sql/schema.sql`
- Styles and scripts in `assets/`

## GitHub Pages will not run this site

This is a PHP + MySQL app. GitHub Pages only serves static files (HTML, CSS, JavaScript). Turning Pages on will not execute the PHP or connect to the database, so the church will not see a working website from Pages alone.

To let the church actually view it:

1. Host it on a PHP host (the original GoDaddy / cPanel style host works).
2. Create a MySQL database and import `sql/schema.sql`.
3. Set `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASS` as environment variables, or fill them in `app/config.php` on the server only. The database password was removed from this repo on purpose.
4. Set `BASE_URL` in `app/config.php` to the live address.

Server error logs from the old host were left out of this repo.

## Sharing

https://github.com/cranmerpd/colosse-baptist-church

The repo is public so a link is enough to view the code. Invite the church as a collaborator under Settings → Collaborators if you later make it private.
