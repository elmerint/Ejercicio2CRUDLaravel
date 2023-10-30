# Test Laravel-crud Make it Simple

## Description

## Requirements

- **PHP** (versión >= 7.4)
- **Composer** (dependency manager for PHP)
- **Node.js**(version >=18) y **npm** 
- **MySQL**  or a compatible database management system

## Instalación

1. **Clone the repository:**

#### Instaling dependecies:
1. **Access the project directory:**
  ```bash
     cd Ejercicio2CRUDLaravel
     composer install
     cp .env.example .env
     php artisan key:generate
     npm install
   ```
## Configure DB
##### Edit the following variables in the .env file:
    - DB_CONNECTION=mysql
    - DB_HOST=your_host
    - DB_PORT=3306 or your_port
    - DB_DATABASE=your_db_name
    - DB_USERNAME=your_db_username
    - DB_PASSWORD=your_db_pass

#### Run database migrations
```bash
   php artisan migrate --seed
   ```
##### Run the following command:
```bash
   npm run dev
   ```
## Execution
###### In another terminal run:
```bash
   php artisan serve
   ```
#### Access the application:
###### Open your web browser and go to http://localhost:8000 to view the application.