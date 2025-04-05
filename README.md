# Laravel LMS (Learning Management System) with Multi-Role Login – Beginner Friendly, **Not a Single Line of CSS**

A simple, clean, and beginner-friendly Laravel LMS project using **vanilla HTML +  Laravel Blade**. Built for students who want to **learn Laravel** without frontend distractions. Supports **Admin, Teacher, and Student login** with separate dashboards.

---

# Laravel LMS (Learning Management System) – Multi-Guard Auth | Scopes | Beginner-Friendly | Pure Laravel Blade

A beginner-focused Laravel Learning Management System (LMS) built with **vanilla HTML + Laravel Blade**, supporting **multi-auth guards** and **role-based access** for Admin, Teacher, and Student. Perfect for Laravel beginners practicing backend development.

---

## ✅ What I Built

- 🔐 **Multi-Guard Authentication** for Teachers, Students, Admin (Auth Class)
- 🧠 **Sperate table for all users** (Handled via guards + middleware)
- 🧠 **Used Factories ** (Use Fake() Package to insert data)
- 🚫 **Middleware-Based Route Protection**  
   → Only authenticated teachers/students can access respective routes  
- 📚 **Course Filtering with Scopes**  
   → Used **Eloquent query scopes** to filter user-specific content
- ➕ **Course Enrollment System**  
   → Students can enroll/drop courses using pivot table
- 👤 **Profile Update Functionality** for Teachers & Students
- 📂 **Pure Laravel Blade + Vanilla HTML** (No CSS Frameworks)
- 📑 **Separate Dashboards** for all user roles

---

## 🚀 Core Features

- Role-Based Login (Multi-Guard)
- Auth Middleware for route access
- Eloquent Scopes for filtering logic
- CRUD for Courses & Lessons
- Profile Management per Role
- Enrollment Tracking (Many-to-Many)
- No Styling – Focused on Laravel backend

---



## 📦 Installation

```bash
git clone https://github.com/yourusername/laravel-lms.git
cd laravel-lms
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

