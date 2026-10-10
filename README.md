# POSLite - Basic Point-of-Sale System

This is the second version of a basic Point-of-Sale (POS) system built with **CodeIgniter 4**. This version extends the initial static site by integrating a real MySQL database to manage records.

## Live Demo
The project is currently hosted and live at: **[https://poslite.page.gd/](https://poslite.page.gd/)**

## Project Features
This application is a 4-page website demonstrating the MVC (Model-View-Controller) structure using a database.

*   **Landing Page (`/`)**: Welcome screen for the POS system.
*   **About Page (`/about`)**: Information about the project.
*   **Customer Accounts (`/customers`)**: Displays a list of customer records (Name, Email, Phone) retrieved dynamically from the `customers` MySQL database table using a CodeIgniter Model.
*   **User Accounts (`/users`)**: Displays a list of staff/user records (Username, Full Name, Role) retrieved dynamically from the `users` MySQL database table using a CodeIgniter Model.

## Setup Instructions (Local Development)
If you want to run this project on your local machine, follow these steps:

1. **Clone the repository:** Download or clone this project to your local web server directory (e.g., `htdocs` for XAMPP).
2. **Install dependencies:** Open your terminal inside the project folder and run:
   ```bash
   composer install
   ```
   *(This downloads the required CodeIgniter framework `vendor` files which are excluded from GitHub).*
3. **Database Setup:** 
   * Open your MySQL management tool (e.g., phpMyAdmin).
   * Create a new database named `tfa3_pos`.
   * Import the provided `database_backup.sql` file located in the root of this repository into the `tfa3_pos` database.
4. **Environment Setup:** Rename the `env` file to `.env` (if not already done). Open it and ensure the following configurations are set:
   ```env
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   
   database.default.hostname = localhost
   database.default.database = tfa3_pos
   database.default.username = root
   database.default.password = 
   database.default.DBDriver = MySQLi
   database.default.DBPrefix =
   database.default.port = 3306
   ```
5. **Run the server:** Start the local development server by running:
   ```bash
   php spark serve
   ```
6. **View the site:** Open your browser and go to `http://localhost:8080`.
