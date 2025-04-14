# 📬 Laravel Email System (with Filament & Queue)

This is a simple Laravel 12 project for managing and sending emails to customers using queues and scheduled cron jobs. Built with [Filament v3](https://filamentphp.com/docs/3.x/).

---

## ⚙️ Requirements

- PHP 8.2 or 8.3
- Composer
- [Herd](https://herd.laravel.com) to run the project locally

---
🖥️ Running the App
Make sure the Laravel project is running with Herd 

Filament Admin Panel:
Login credentials (for testing):

Email: abdallahhassanshaaban@gmail.com

Password: 123456

Visit: http://sendemail.test/admin/login

✉️ How to Test Email Queue
In your terminal:

-php artisan email:send-customer     # Queues emails for all customers
-php artisan queue:work              # Starts processing queued emails
-php artisan schedule:list           #  Cron Job (Schedule)     

📊 Features
✅ Artisan command to queue emails

✅ Queued email delivery using Laravel Mail

✅ Markdown email template

✅ Email logs with status (queued, sent, failed)

✅ Filament-based CRUD for customers and email logs

✅ Scheduled job runs every minute to send queued emails


