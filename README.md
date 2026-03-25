# 🗒️ Laravel Restful API - Todo CRUD

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![REST API](https://img.shields.io/badge/REST-API-green?style=flat)

A clean, beginner-friendly **RESTful API** built with Laravel demonstrating full **CRUD operations** for a Todo list. Includes HTTP request testing via a dedicated request page.

---

## ✨ Features

- ✅ **Create** — Add new todo items via POST
- 📖 **Read** — Get all todos or a single item via GET
- ✏️ **Update** — Modify existing todos via PUT/PATCH
- 🗑️ **Delete** — Remove todos via DELETE
- 🧪 HTTP request testing page included
- 📝 Clean RESTful route structure

---

## 📌 API Endpoints

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/todos` | Get all todos |
| GET | `/api/todos/{id}` | Get single todo |
| POST | `/api/todos` | Create new todo |
| PUT | `/api/todos/{id}` | Update todo |
| DELETE | `/api/todos/{id}` | Delete todo |

---

## 🛠️ Tech Stack

| Technology | Purpose |
|---|---|
| PHP 7+ | Server-side language |
| Laravel 5.x | MVC Framework |
| MySQL | Database |
| Eloquent ORM | Database interaction |
| JSON | API response format |

---

## 🚀 Getting Started

```bash
# Clone the repository
git clone https://github.com/gopalbogati/LaravelRestfulApiTodo.git
cd LaravelRestfulApiTodo

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Configure your database in .env
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate

# Start server
php artisan serve
```

Visit `http://localhost:8000` — use the request testing page to try all API endpoints.

---

## 📸 Sample Response

```json
{
  "id": 1,
  "title": "Buy groceries",
  "completed": false,
  "created_at": "2024-01-01T00:00:00.000000Z"
}
```

---

## 📁 Project Structure

```
LaravelRestfulApiTodo/
├── app/Http/Controllers/   # API controllers
├── database/migrations/    # DB schema
├── routes/api.php          # API routes
└── public/                 # Entry point
```

---

## 👤 Author

**Gopal Bogati**
- GitHub: [@gopalbogati](https://github.com/gopalbogati)
- LinkedIn: [Gopal Bogati](https://au.linkedin.com/in/gopal-bogati-4164b7b8)
- Location: Sydney, Australia
