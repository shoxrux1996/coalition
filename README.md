# Documentation Of the app

### About

- Task CRUD system

### Server Requirements

1. PHP (ver >= 8.2)
2. Composer (ver >= 2.2.0)
3. Git
4. MySQL (ver >= 5.7)

### Installation and Configuration

1. `git clone https://github.com/shoxrux1996/coalition` - clone the project

2. `$ cp .env.example .env` - copy .env.example to .env file inside root folder

3. `$ php artisan key:generate` - generate key.

4. `$ composer install` - installing composer packages.

5. Create a database in mysql and update DB credentials in .env

6. `$ php artisan migrate` - migrating task and project tables

7. `$ php artisan db:seed` - seeding Projects and tasks

### Quick Usage

`$ php artisan serve` - Starting a local server and go to / url
