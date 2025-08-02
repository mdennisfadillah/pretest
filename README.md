# A Simple Web With SQL Injection Vulnerability

This is a simple web application that allows users to input comments and display them on the same page. The application is built using PHP and MySQL.

## Project Structure

```
pretest
├── index.php
├── db.php
├── README.md
```

## Setup Instructions

1. **Clone the Repository**: Download or clone the repository to your local machine.

2. **Database Setup**:
   - Create a MySQL database `pretest_db`.
   - Use the provided sql file to export the sample table `comment`.

3. **Configure Database Connection**:
   - Open `db.php` and update the database connection parameters (hostname, username, password, and database name) as needed.

4. **Run the Application**:
   - Place the project folder in your web server's root directory (e.g., `www\pretest`).
   - Access the application via your web browser at `http://localhost/pretest/index.php`.

## Usage

- Enter a comment in the input field and submit the form.
- The comment will be stored in the database and displayed on the same page.

### Important Note

This project is created for the purpose of solving a technical test question.