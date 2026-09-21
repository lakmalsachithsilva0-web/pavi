# Pavi Creations | Dambulla

Customized e-commerce website based on **InnoShop** (Laravel) for **Pavi Creations | Dambulla**.

- Wholesale & Retail Fashion Store  
- Location: Dambulla, Sri Lanka  
- Phone: +94 77 986 2343  

---

## Prerequisites (What you need to install first)

Before running the project, install these on your computer:

| Software       | Minimum Version | Download / Install                          |
|----------------|-----------------|---------------------------------------------|
| PHP            | 8.3+            | https://windows.php.net or use XAMPP/Laragon |
| Composer       | 2.x             | https://getcomposer.org                     |
| Node.js + npm  | 18+ / 9+        | https://nodejs.org                          |
| MySQL          | 5.7+ or 8.0+    | Included in XAMPP / Laragon / MySQL Server  |
| Git            | Latest          | https://git-scm.com                         |

**Recommended for Windows beginners:**  
Install **Laragon** (includes PHP, MySQL, Composer, Node) → https://laragon.org

### Required PHP Extensions
Make sure these are enabled:
- bcmath, curl, dom, fileinfo, libxml, openssl, pdo, pdo_mysql, simplexml, mbstring, tokenizer, xml, ctype, json

---

## How to Run Locally (Step-by-step)

### 1. Clone the customized branch

```bash
git clone -b feature/pavi-creations https://github.com/lakmalsachithsilva0-web/pavi.git
cd pavi
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install Node.js dependencies and build assets

```bash
npm install
npm run build
```

### 4. Setup environment file

```bash
cp .env.example .env
```

Then open the `.env` file and update these important values:

```env
APP_NAME="Pavi Creations"
APP_URL=http://localhost:8000

DB_DATABASE=pavi_creations
DB_USERNAME=root
DB_PASSWORD=          # put your MySQL password here (leave empty if none)

MAIL_FROM_ADDRESS="info@pavicreations.lk"
```

### 5. Generate application key

```bash
php artisan key:generate
```

### 6. Create the database

Open phpMyAdmin or MySQL terminal and create a database:

```sql
CREATE DATABASE pavi_creations CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 7. Run migrations and seeders (this creates tables + default data)

```bash
php artisan migrate --seed
```

### 8. Create storage link (for images)

```bash
php artisan storage:link
```

### 9. Start the local server

```bash
php artisan serve
```

Now open in your browser:

- **Frontend (Customer website):** http://localhost:8000  
- **Admin Panel:** http://localhost:8000/panel  

### Default Admin Login

- **Email:** `admin@innoshop.com`  
- **Password:** `123456`

(You can change this later inside the admin panel)

---

## Important Environment Variables You Should Update

| Variable              | Description                              | Example Value                  |
|-----------------------|------------------------------------------|--------------------------------|
| `APP_NAME`            | Store name                               | `Pavi Creations`               |
| `APP_URL`             | Your local or live website URL           | `http://localhost:8000`        |
| `APP_TIMEZONE`        | Timezone                                 | `Asia/Colombo`                 |
| `DB_DATABASE`         | Database name                            | `pavi_creations`               |
| `DB_USERNAME`         | MySQL username                           | `root`                         |
| `DB_PASSWORD`         | MySQL password                           | (your password)                |
| `MAIL_FROM_ADDRESS`   | Email used for system emails             | `info@pavicreations.lk`        |
| `MAIL_FROM_NAME`      | Email sender name                        | `Pavi Creations`               |

Most other store settings (currency = LKR, phone number, address, SEO texts) are already customized in the database seeders.

---

## After Installation – What to do next

1. Login to Admin Panel → http://localhost:8000/panel
2. Go to **Products** and start adding your real products from Facebook
3. Upload your own logo (Settings → System)
4. Change admin email/password
5. Configure payment methods if needed

---

## Useful Commands

```bash
# Clear cache
php artisan optimize:clear

# Re-run seeders only (careful - may reset data)
php artisan db:seed

# Create a new admin user (if needed)
php artisan tinker
```

---

## Branch Information

- Customization branch: `feature/pavi-creations`
- Base system: InnoShop (Laravel 13)

After testing, you can create a Pull Request from `feature/pavi-creations` → `main`.
