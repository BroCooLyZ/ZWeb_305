# Sir Anthoine Charles G Zingalaoa — Official Web Portfolio

## Project Overview

Welcome to the source for the Sir Anthoine Charles G Zingalaoa official web portfolio. This Laravel application serves as a digital resume and showcase platform to highlight skills, projects, and contact information.

The application uses Blade templates for views, a lightweight authentication flow (registration, login, logout), and a MySQL database for dynamic content.

## Tech Stack

- **Framework:** Laravel
- **Language:** PHP, JavaScript
- **Frontend:** HTML5, CSS3, Blade Templates
- **Database:** MySQL / MariaDB
- **Tools:** Composer, npm, XAMPP (optional), VS Code

## Key Features

- Dynamic portfolio pages that can pull content from the database
- Registration, login, and logout via `AuthController`
- Responsive UI optimized for desktop and mobile
- Simple admin/backend-ready structure for managing content

## Installation & Setup

Follow these steps to run the project locally.

1. From the project root run:

```powershell
composer install
copy .env.example .env
php artisan key:generate
```

2. Configure your database settings in the `.env` file (set `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) and run migrations if needed:

```powershell
php artisan migrate
```

3. Install frontend dependencies and compile assets:

```powershell
npm install
npm run dev
```

## Run the application

- Option A — Laravel dev server (recommended):

```powershell
php artisan serve
# Open http://127.0.0.1:8000 in your browser
```

- Option B — XAMPP / Apache:

1. Start Apache & MySQL from XAMPP Control Panel.
2. Ensure the project folder is inside `htdocs` and open `http://localhost/Zweb_portfolio/public`.

## View the Login Page

- After starting the server, open: `http://127.0.0.1:8000/login` (dev server)
- Or: `http://localhost/Zweb_portfolio/public/login` (XAMPP)

## Troubleshooting

- Route not defined errors (e.g., `Route [logout] not defined`):

```powershell
php artisan route:clear
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan serve    # restart the server
```

- Images not appearing: check `public/Images` vs `public/images` and use the matching case in Blade (Windows may be case-insensitive but some tooling isn't). Use `{{ asset('Images/profile.jpg') }}` if the folder is `Images`.

- Syntax errors: open the file shown in the error and fix stray characters (common mistakes: extra `;` after function declaration, missing `{`).

## Useful Commands

- `php artisan route:list` — list registered routes
- `php artisan migrate` — run database migrations
- `php artisan serve` — run dev server

## Next Steps

- Start the server and verify pages (login, register, dashboard).
- I can add screenshots, update the `README` with deployment instructions, or add a `LICENSE` file if you'd like.

---

If you want any changes to the README content (more screenshots, credits, or project-specific instructions), tell me what to add.
