# POSLite - Basic Point-of-Sale System

This is the first version of a basic Point-of-Sale (POS) system built with **CodeIgniter 4**. 

## Live Demo
The project is currently hosted and live at: **[https://poslite.page.gd/](https://poslite.page.gd/)**

## Project Features
This application is a 4-page website demonstrating the MVC (Model-View-Controller) structure without a database. It uses static PHP arrays for temporary data handling.

*   **Landing Page (`/`)**: Welcome screen for the POS system.
*   **About Page (`/about`)**: Information about the project.
*   **Customer Accounts (`/customers`)**: Displays a list of customer records (Name, Email, Phone) populated from a static PHP array.
*   **User Accounts (`/users`)**: Displays a list of staff/user records (Username, Full Name, Role) populated from a static PHP array.

## Setup Instructions (Local Development)
If you want to run this project on your local machine, follow these steps:

1. **Clone the repository:** Download or clone this project to your `htdocs` folder (if using XAMPP).
2. **Install dependencies:** Open your terminal inside the project folder and run:
   ```bash
   composer install
   ```
   *(This downloads the required CodeIgniter framework `vendor` files which are excluded from GitHub).*
3. **Environment Setup:** Rename the `env` file to `.env`. Open it and ensure the following is set:
   ```env
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   ```
4. **Run the server:** Start the local development server by running:
   ```bash
   php spark serve
   ```
5. **View the site:** Open your browser and go to `http://localhost:8080`.
