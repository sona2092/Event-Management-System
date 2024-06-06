# Event Management System

## Overview

The Event Management System is a comprehensive web application designed to manage and organize events efficiently. This project includes features such as user authentication, event scheduling, and management.

## Project Structure

- `src`: Contains the PHP source code for the application.
- `public`: Public assets such as images and stylesheets.
- `config`: Configuration files for the application.
- `index.html`: The main file - Home Page.

## Features

- User authentication and authorization
- Event creation and management
- Responsive design for mobile and desktop

## Getting Started

### Prerequisites

Ensure you have the following installed:

- [XAMPP](https://www.apachefriends.org/index.html) or [MAMP](https://www.mamp.info/en/)
- [Composer](https://getcomposer.org/)

### Installation

1. **Clone the Repository**:
    ```sh
    git clone <repository-url>
    ```

2. **Navigate to the Project Directory**:
    ```sh
    cd Event-Management-System
    ```

3. **Install Composer Dependencies**:
    ```sh
    composer install
    ```

4. **Move the Project to the Web Server Directory**:
    - If using XAMPP, move the project folder to the `htdocs` directory (e.g., `C:\xampp\htdocs\Event-Management-System`).
    - If using MAMP, move the project folder to the `htdocs` directory (e.g., `/Applications/MAMP/htdocs/Event-Management-System`).

5. **Configure the Database**:
    - Start Apache and MySQL from the XAMPP or MAMP control panel.
    - Create a new database (e.g., `event_management`) using phpMyAdmin.
    - In this repository, the database file is 'database.sql'.
    - Import the database schema from the provided SQL file (if any).
    - Update the database configuration in the `config` directory with your database credentials.

### Running the Project

1. **Start the Apache Server**:
    - Open the XAMPP or MAMP control panel and start Apache and MySQL.

2. **Access the Project in the Browser**:
    - Open your web browser and navigate to `http://localhost/Event-Management-System`.

### Deployment

To deploy the project to a production server:

1. **Upload the Project Files** to your web server using FTP or any other method.
2. **Set Up the Database** on your production server and import the database schema.
3. **Update Configuration Files** with your production database credentials and other necessary settings.

## Contribution

Contributions are welcome! Please fork the repository and submit a pull request.

## License

This project is licensed under the MIT License.
