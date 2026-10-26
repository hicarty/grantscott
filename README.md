# Haven Carty — Model Portfolio

Portfolio site for **Haven Carty**, a model specialising in **suits, knitwear and e-commerce**, built with Laravel 11
(PHP 8.2+). The design follows the minimal "viewbook" layout of [grantscott.com](https://www.grantscott.com/):
name top-left, a vertical menu down the left-hand side and a full-height, horizontally scrolling image gallery.

## Pages

| URL | Content |
| --- | --- |
| `/` | Home: scrolling gallery sampling every client |
| `/suits` | Suits & tailoring: Katchi Blazers, Adebayo Jones |
| `/knitwear` | Knitwear: John Smedley, MARS Knitwear |
| `/e-commerce` | E-commerce: All Riot, Truth, Travel, Positiva Dye, Big Wide Grin |
| `/clients` | Thumbnail grid of every client, grouped by section |
| `/album/{client}` | Gallery for one client, e.g. `/album/john-smedley` |
| `/about` | Bio, client list and (optional) measurements |
| `/contact` | Bookings details from `.env` |
| `/sitemap.xml` | XML sitemap |

On desktop the gallery scrolls sideways with the mouse wheel, trackpad or arrow keys; on phones it stacks vertically
behind a collapsible menu.

## Adding photos

Drop `.jpg`, `.jpeg`, `.png` or `.webp` files into the client's folder:

```
public/images/portfolio/john-smedley/01-crew-neck.jpg
public/images/portfolio/katchi-blazers/01-double-breasted.jpg
```

Images are shown in filename order and replace that client's placeholder frames automatically. Captions default to
the client's description; set per-image captions in `config/portfolio.php`:

```php
'john-smedley' => [
    // ...
    'captions' => ['01-crew-neck.jpg' => 'Merino crew neck'],
],
```

## Editing content

Everything shown on the site (bio, sections, clients, measurements, home-page selection) lives in
[`config/portfolio.php`](config/portfolio.php). Contact details come from `.env`:

```
PORTFOLIO_EMAIL=
PORTFOLIO_PHONE=
PORTFOLIO_AGENCY=
PORTFOLIO_AGENCY_URL=
PORTFOLIO_INSTAGRAM=
```

Blank values are hidden. Measurements set to `null` are hidden too.

## Running locally

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

No database or front-end build step is needed: styles and scripts are plain files in `public/css` and `public/js`.

## Tests

```bash
php artisan test
```

## Deploying

Point the web server's document root at `public/` (PHP 8.2+), then run:

```bash
composer install --no-dev --optimize-autoloader
php artisan config:cache && php artisan route:cache && php artisan view:cache
```

Run `php artisan config:clear` (or re-cache) after editing `config/portfolio.php` or `.env` on a server with a cached config.
