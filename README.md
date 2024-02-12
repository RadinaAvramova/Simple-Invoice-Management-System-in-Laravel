# Invoice Management System
This is a basic invoice management system built using Laravel, allowing authenticated users to perform CRUD operations on invoices and add multiple line items to each invoice.

## Features

**User Authentication** : Users can register and login to access the invoice management features.

**Invoice Management** : Create, view, update, and delete invoices. Each invoice can have multiple line items.

**Line Item Management** : Add line items to invoices with details such as description, quantity, and unit price.

**Simple UI** : Utilizes Bootstrap Blade templates for a clean and responsive user interface.

**Additional Features** : Optional features such as search functionality, pagination, and basic form validation.

## Setup and Installation
1.Clone the repository: `git clone https://github.com/RadinaAvramova/Simple-Invoice-Management-System-in-Laravel.git`

2.Navigate to the project directory: `cd invoices-management-system`

3.Install dependencies: `composer install`

4.Configure the `.env` file with your database credentials.

5.Run migrations: `php artisan migrate`

6.Serve the application: `php artisan serve`

## Usage
1.Register or login to access the invoice management system.

2.Navigate to the invoice dashboard to view, create, update, or delete invoices.

3.Add line items to each invoice as needed.

4.Utilize search functionality and pagination for better navigation (optional).

5.Log out when finished.

## Dependencies
- Laravel: The PHP framework used for backend development.
- Bootstrap: Frontend framework for styling and responsiveness.
- MySQL: Database management system for storing invoices and line items.

## Contributing

Contributions are welcome! Please follow the standard GitHub workflow:

1.Fork the repository.

2.Create a new branch: git checkout -b feature-name

3.Make changes and commit: git commit -am 'Add new feature'

4.Push to the branch: git push origin feature-name

5.Submit a pull request.

## License
This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

- Laravel Community: For providing excellent documentation and support.

- Bootstrap Team: For creating a fantastic CSS framework.

- Open-source Contributors: For their valuable contributions and feedback.
