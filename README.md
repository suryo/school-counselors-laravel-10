<p align="center">
  <img src="public/images/logo.png" width="200" alt="School Counselors Logo">
</p>

# School Counselors Management System

A comprehensive web application designed for school counseling departments to manage student records, counseling sessions, and behavioral observations effectively.

## 🚀 Features

-   **Professional Landing Page**: A modern and attractive introduction to the system for visitors.
-   **Student Management**: Full CRUD operations for student profiles including NIS, Gender, Class, and Address.
-   **Counselor Management**: Manage counselor directories and their specialized fields of guidance.
-   **Category Management**: Define various types of counseling categories (Academic, Personal, Career, etc.).
-   **Counseling Sessions**: Schedule and track counseling sessions with detailed notes and status updates.
-   **Behavior Observations**: Record and monitor student behavior patterns (Positive, Negative, Neutral) to identify support needs.
-   **Dynamic Dashboard**: Quick overview of system stats and easy access to all modules.

## 🛠️ Technology Stack

-   **Backend**: Laravel 10 (PHP 8.2+)
-   **Frontend**: Bootstrap 5.3 & Bootstrap Icons
-   **Database**: MySQL
-   **Asset Bundling**: Vite

## 📦 Installation

1. **Clone the repository**:

    ```bash
    git clone <repository-url>
    cd school-counselors-laravel-10
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install && npm run build
    ```

3. **Configure Environment**:

    - Copy `.env.example` to `.env`.
    - Configure your database settings (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
    - Generate application key: `php artisan key:generate`.

4. **Run Migrations & Seeding**:

    ```bash
    php artisan migrate --seed
    ```

5. **Start the Server**:
    ```bash
    php artisan serve
    ```

## 📸 Screenshots

_Screenshots and recordings can be found in the `walkthrough.md` artifact._

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

_Developed with ❤️ for educational support._
