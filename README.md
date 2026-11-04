# Demo Project

Laravel app for managing products. Each product has a name, a color and a size.

## Features

- Login, register and profile (Laravel Breeze)
- Google sign-in (Laravel Socialite)
- Product CRUD (list, add, show, edit, delete)
- REST API with token login (Laravel Sanctum)
- API docs (Scribe) and a Postman collection in `postman/`

## Requirements

PHP 8.2+, Composer, Node.js, MySQL

## Setup

```
composer install
npm install
copy .env.example .env
php artisan key:generate
```

Create a MySQL database named `demo-project` and check the `DB_*` values in `.env`. Then:

```
php artisan migrate --seed
npm run build
php artisan serve
```

Open http://localhost:8000

## Login

Seeded account:

- Email: `tarsoft@gmail.com`
- Password: `password`

## Google sign-in (optional)

1. Create an OAuth client in Google Cloud Console (type: Web application).
2. Add this redirect URI: `http://localhost:8000/auth/google/callback`
3. Put the values in `.env`:

```
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
```

Use `localhost`. Google does not accept `.test` domains.

## API

Get a token, then send it as `Authorization: Bearer <token>`.

| Method | URL | Auth |
|---|---|---|
| POST | `/api/login` | no |
| POST | `/api/logout` | yes |
| GET, POST | `/api/products` | yes |
| GET, PUT, DELETE | `/api/products/{id}` | yes |

Always send the header `Accept: application/json`.

## License

MIT
