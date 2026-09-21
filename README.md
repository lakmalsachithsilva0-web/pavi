# Pavi Creations | Dambulla

Customized e-commerce website based on **InnoShop** (Laravel) for **Pavi Creations | Dambulla**.

- Wholesale & Retail Fashion Store  
- Location: Dambulla, Sri Lanka  
- Phone: +94 77 986 2343  

---

## Prerequisites (Install these first)

| Software       | Minimum Version | Recommendation                     |
|----------------|-----------------|------------------------------------|
| PHP            | 8.3+            | Laragon (easiest on Windows)      |
| Composer       | 2.x             | Comes with Laragon                |
| Node.js + npm  | 18+ / 9+        | Comes with Laragon                |
| MySQL          | 5.7+ / 8.0+     | Comes with Laragon / XAMPP        |
| Git            | Latest          | https://git-scm.com               |

**Recommended:** Install **Laragon** → https://laragon.org

Required PHP extensions: bcmath, curl, dom, fileinfo, libxml, openssl, pdo, pdo_mysql, simplexml, mbstring, tokenizer, xml, ctype, json

---

## How to Run Locally (Simple Way)

### 1. Pull latest code

```bash
git pull origin feature/pavi-creations
```

### 2. Install dependencies (only first time or after major updates)

```bash
composer install
npm install
npm run build
```

### 3. Setup .env file (only first time)

```bash
cp .env.example .env
php artisan key:generate
```

Open `.env` and set your database password if needed:

```env
DB_DATABASE=pavi_creations
DB_USERNAME=root
DB_PASSWORD=          # your MySQL password (leave empty if none)
```

### 4. One-command Database Setup (Auto create DB + migrate + seed)

```bash
php artisan pavi:setup
```

This single command will:
- Create the database `pavi_creations` if it does not exist
- Run all migrations
- Run all seeders (including admin user, currencies, settings, demo data)
- Create storage link for images

If you want to completely reset everything (delete all data and start fresh):

```bash
php artisan pavi:setup --fresh
```

### 5. Start the server

```bash
php artisan serve
```

---

## Access the Website

| Type              | URL                          |
|-------------------|------------------------------|
| Frontend (Shop)   | http://localhost:8000        |
| Admin Panel       | http://localhost:8000/panel  |

### Admin Login

- **Email:** `lakmalsachithsilva0@gmail.com`
- **Password:** `Ux3@f=7x2`

---

## Important Notes

- Frontend and Backend run together with one command: `php artisan serve`
- There is **no separate frontend server** needed after `npm run build`
- If you change Vue/JS/CSS files later, run `npm run build` again (or `npm run dev` for live reload)

---

## Useful Commands

```bash
# Start server
php artisan serve

# Full setup / reset database
php artisan pavi:setup
php artisan pavi:setup --fresh

# Clear all caches
php artisan optimize:clear

# Rebuild frontend assets
npm run build
```

---

## Branch

Customization branch: `feature/pavi-creations`
