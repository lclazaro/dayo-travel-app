DAYO APP 

##########################################

Dependencies/Requirements: 
Laravel
phpMyAdmin

#########################################

Installation
1. Once the repository is cloned or pulled. Navigate to the project directory and edit with VS Code.
2. Install Laravel (globally): composer global require laravel/installer
   composer install
3. Set Up Environment Configuration:
   Copy the .env.example file to .env: cp .env.example .env
   Generate an application key: php artisan key:generate
4. Configure database:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   
6. Database: Add travel-data.sql in my phpMyAdmin 
Ensure npm install electron-builder and npm install better-sqlite3 is installed

#########################################

Local Set Up

- In the project directory, run this initially before starting your project: php artisan serve
- Application will be accessible at http://localhost:8000
