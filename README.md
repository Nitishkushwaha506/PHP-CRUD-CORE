# PHP Core CRUD Application

## Introduction
This is a simple **CRUD (Create, Read, Update, Delete)** application built using **PHP Core** and **MySQL**. It allows users to perform basic database operations without using any frameworks.

## Features
- Add new records (Create)
- View records (Read)
- Update existing records (Update)
- Delete records (Delete)

## Requirements
- PHP 7.4+
- MySQL Database
- Apache/Nginx Server

## Installation
1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/php-core-crud.git
   cd php-core-crud
   ```
2. Import the database:
   - Open **phpmyadmin** or any MySQL client.
   - Create a new database: `crud_db`
   - Import `database.sql` file.

3. Configure Database Connection:
   - Open `db.php` and update database credentials:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "crud_db";
   ```

4. Start the PHP Server:
   ```sh
   php -S localhost:8000
   ```

5. Open in Browser:
   ```
   http://localhost:8000/index.php
   ```

## Folder Structure
```
php-core-crud/
│── db.php          # Database Connection
│── index.php       # Home Page (Read)
│── dataInsert.php  # Insert Data into Database
│── register.php    # User Registration
│── update.php      # Update Record
│── database.sql    # Sample Database Structure
│── style.css       # Basic Styling
└── README.md       # Documentation
```

## Usage
- **Create Record:** Click on "Add New" button and fill the form.
- **Read Records:** All records are displayed on the home page.
- **Update Record:** Click on "Edit" to modify an existing record.
- **Delete Record:** Click on "Delete" to remove a record.

## Contribution
Feel free to fork the repo, improve the project, and submit pull requests.

## License
This project is licensed under the MIT License.

