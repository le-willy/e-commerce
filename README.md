# How to Run the Project

Follow the steps below to set up and run the project locally:

### Prerequisites

Make sure you have the following installed:

- [Composer](https://getcomposer.org/)
- [Node.js and npm](https://nodejs.org/)
- [Laravel Sail](https://laravel.com/docs/9.x/sail)
- Docker (for Laravel Sail)

---

### Steps to Run the Project

1. **Install PHP dependencies:**

   ```bash
   composer install
   ```

2. **Install JavaScript dependencies:**

   ```bash
   npm install
   ```

3. **Enter the Laravel Sail shell:**

   ```bash
   sail shell
   ```

4. **Set up the environment file:**

   ```bash
   cp .env.example .env
   ```

5. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

6. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

7. **Build assets:**

   ```bash
   npm run dev
   ```

---

### Additional Notes

- Make sure Docker is running before entering the Sail shell.
- Update your `.env` file with the correct database and other environment settings if needed.
- For production builds, use `npm run build` instead of `npm run dev`.
- If you encounter any issues, check the Laravel [documentation](https://laravel.com/docs).

---

### Running the Application

Once the steps are completed, visit the application in your browser at:

```
http://localhost
```

