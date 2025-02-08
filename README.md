# Project Setup Guide

This guide explains how to set up the project on your local machine using XAMPP.

## Prerequisites

1. Install **XAMPP**
   - Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).

2. Download the latest version of **WordPress**
   - Get it from the official WordPress site: [https://wordpress.org/download/](https://wordpress.org/download/).

3. Clone the project repository
   - Clone the project repository into the `htdocs` directory of your XAMPP installation. The default path is `/opt/htdocs/`.

## Project Setup Steps for local

### Step 1: Install XAMPP

- Install XAMPP on your local machine.
- Start the **Apache** and **MySQL** services using the XAMPP control panel.

### Step 2: Clone the Project Repository

- Navigate to the `htdocs` folder:
  cd /opt/lampp/htdocs

- Clone the repository:
  ```
  git clone <repository_url>
  ```
  Replace `<repository_url>` with the URL of your project's Git repository.

### Step 3: Add WordPress Files

- Download and extract WordPress.
- Copy the necessary WordPress files into the project folder (`/opt/lampp/htdocs/tibicle_website_wordpress`).
  **Note:** Do not overwrite files or folders from the cloned repository.

### Step 4: Create and Configure the Database

1. Open **phpMyAdmin** by navigating to [http://localhost/phpmyadmin].
2. Create a new database. The database name must match the one specified in the `wp-config.php` file of the project.
3. Import the database file:
   - Go to the **Import** tab in phpMyAdmin.
   - Select the database dump file provided with the project.

### Step 5: Configure `wp-config.php`

- Ensure the database credentials in the `wp-config.php` file match your local setup:
  ```php
  define('DB_NAME', 'your_database_name');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', 'localhost');
  ```

### Step 6: Access the Project

- Open your browser and go to:

http://localhost/mht_website (foldername which is in htdocs folder)
```
http://localhost:<port(if have)>/mht_website (project foldername which is in htdocs folder)
```

Replace `<port>` with the port number if your XAMPP uses a custom port (e.g., `http://localhost/mht_website`).

### Step 7: Verify the Setup

- Check that the website loads correctly.
- Verify that all necessary plugins and themes are installed and activated.

## Plugin must be active

Advanced Custom Fields PRO
Brad’s Boilerplate Block Plugin
Contact Form 7
Redirect Redirection
SVG Support
Wordfence Security
WP Rocket
Yoast SEO

## Notes

- The project folder can be found at `/htdocs/mht_website`.
- Make sure to replace database content with the latest dump provided.