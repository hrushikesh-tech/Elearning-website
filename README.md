# eLearning Website

## Table of Contents

1. [Introduction](#introduction)
2. [Features](#features)
3. [Technologies Used](#technologies-used)
4. [Installation](#installation)
5. [Usage](#usage)
6. [Database Configuration](#database-configuration)
7. [Folder Structure](#folder-structure)
8. [Contributing](#contributing)
9. [License](#license)
10. [Acknowledgements](#acknowledgements)

## Introduction

This is an eLearning website that allows users to register, log in, and access various educational courses. It is built using HTML, CSS, MySQL, PHP, JavaScript, and Bootstrap, with XAMPP server used for local development and testing.

## Features

- User authentication (registration and login)
- Course browsing
- Course enrollment
- User profile management
- Admin panel for managing courses and users

## Technologies Used

- **HTML**: For structuring the web pages.
- **CSS**: For styling the web pages.
- **Bootstrap**: For responsive design and pre-built components.
- **JavaScript**: For client-side scripting and interactivity.
- **PHP**: For server-side scripting.
- **MySQL**: For the database.
- **XAMPP**: For local server environment.

## Installation

### Prerequisites

- XAMPP installed on your computer. You can download it from [here](https://www.apachefriends.org/index.html).

### Steps

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/elearning-website.git
    ```

2. **Move the project to the XAMPP htdocs directory**:
    ```bash
    mv elearning-website /path/to/xampp/htdocs/
    ```

3. **Start the XAMPP server**:
    - Open the XAMPP control panel.
    - Start Apache and MySQL.

4. **Import the database**:
    - Open your web browser and go to `http://localhost/phpmyadmin`.
    - Create a new database named `elearning`.
    - Import the SQL file located at `path/to/xampp/htdocs/elearning-website/database/elearning.sql`.

## Usage

1. **Access the website**:
    Open your web browser and go to `http://localhost/elearning-website`.

2. **Register and Login**:
    - Register as a new user.
    - Log in with your credentials.

3. **Explore Courses**:
    - Browse available courses.
    - Enroll in courses.

4. **Admin Panel**:
    - Access the admin panel at `http://localhost/elearning-website/admin` (credentials required).
    - Manage courses and users.

## Database Configuration

The database configuration is located in the `config.php` file. Ensure you update it with your database details if they differ.

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

