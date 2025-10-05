# 🛡 Role & Permission + Inertia + React + Tailwind

> *“Belajar dari tantangan itu yang bikin kita tumbuh.”* 🌱

Hai semuanya! 👋  
Ini adalah project laravel + Inertia + React + Tailwind yang aku buat untuk memahami konsep **role & permission** (otorisasi) dalam aplikasi modern.  
Projek ini terasa rumit, tapi aku menikmatinya dan belajar banyak dari setiap error-nya 💪

---

## 🧩 Tentang Project

Project ini menggabungkan banyak teknologi agar aplikasi punya:
- **Role & Permission** — agar pengguna punya hak akses sesuai perannya  
- **InertiaJS** sebagai jembatan antara backend (Laravel) dan frontend (React)  
- **React** untuk UI yang dinamis  
- **Tailwind CSS** untuk styling yang cepat dan modular  

Dengan kombinasi ini, aku mencoba membuat aplikasi yang:
- Aman dalam mengatur siapa bisa melakukan apa  
- Responsif dan interaktif  
- Struktur kodenya bersih dan modular  

---

## 🔍 Fitur Utama

Beberapa fitur penting yang aku implementasikan:

- 🛂 Autentikasi pengguna (login, register)  
- 🔐 Manajemen role dan permission (admin, editor, user, dsb)  
- 🚫 Middleware agar route tertentu hanya bisa diakses oleh role tertentu  
- 📦 CRUD untuk entitas (misalnya user, post, dsb)  
- 🔁 Inertia + React — komunikasi antara backend dan frontend  
- 🎨 Styling memakai Tailwind agar tampilan rapi & cepat  
- ⚠ Validasi & handling error  

---

## 🛠 Teknologi & Tools

Berikut stack teknologinya:

| Layer | Teknologi |
|------|-----------|
| Backend | Laravel |
| Frontend | React + InertiaJS |
| Styling | Tailwind CSS |
| Database | MySQL / sejenisnya |
| Bahasa | PHP & JavaScript |
| Tools pendukung | npm, composer, vite, dsb |

---

## 🧭 Cara Jalankan Project

Berikut langkah-langkah supaya kamu bisa menjalankan project ini di lokal:

```bash
# Clone repo
git clone https://github.com/wildaayu15/role-permission-inertia-react-tailwind.git

cd role-permission-inertia-react-tailwind

# Install backend & frontend dependencies
composer install
npm install

# Setup file .env
cp .env.example .env
# Atur konfigurasi database dan setting lainnya di .env

# Generate key aplikasi
php artisan key:generate

# Migrasi & seed data
php artisan migrate --seed

# Build assets & jalankan dev server (jika memakai Vite atau bundler)
npm run dev

# Jalankan server Laravel
php artisan serve
