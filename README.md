# Book Manager

Book Manager is a web application built with Laravel for managing books. It allows you to perform CRUD (Create, Read, Update, Delete) operations on books, including uploading book details and images.

## Features

- **CRUD Operations:** Create, read, update, and delete books.
- **Image Upload:** Upload book cover images.
- **Responsive Design:** User interface designed to be responsive across devices.

## Technologies Used

- **Laravel:** Web application framework for PHP.
- **Bootstrap:** Front-end framework for responsive design.
- **MySQL:** Database management system.
- **PHP:** Server-side scripting language.

## Installation

To run this project locally, follow these steps:

1. **Clone Repository:**
   ```bash
   git clone https://github.com/Rajputvipul1/book-manager.git
Navigate to Project Directory:

bash
Copy code
cd book-manager
Install Dependencies:

bash
Copy code
composer install
Set Up Environment Variables:

Copy .env.example to .env and configure your database settings:
bash
Copy code
cp .env.example .env
Update .env file with your database credentials.
Generate Application Key:

bash
Copy code
php artisan key:generate
Run Database Migrations:

bash
Copy code
php artisan migrate
Start Laravel Development Server:

bash
Copy code
php artisan serve
Access Application:

Open your web browser and navigate to http://localhost:8000 to view the application.
Usage
Register and Login: Create an account or use existing credentials.
Manage Books: Add, view, edit, and delete books.
Responsive Design: Access the application from any device.
Contributing
Contributions are welcome! Feel free to fork this repository, make changes, and submit pull requests.

License
This project is open-sourced software licensed under the MIT license.

Acknowledgments
Laravel Community and Documentation
Bootstrap Team
Open-source Contributors
Contact
For issues or questions related to this project, please open an issue on GitHub.
