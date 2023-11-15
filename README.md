
<h1 align="center" >PHP Login System:-</h1>

- This is a simple login system created using PHP and MySQL. It allows users to register, login, and logout. Once logged in, users can access a secure page that only authenticated users can see.
<hr>
<h1 align="center" >Redme:-</h1>
<p align="center" >
  
  - Some work for a php and mysql that writen in html,css,and js.
The work to new skill at a php,mysql and bootstrap.</p>
<hr>


<h1 align="center" >How to Use:-</h1>

- Clone the repository:<br>
- bash<br>
<h1 align="left" >Copy code</h1>

- git clone https://github.com/your-username/login-system.git
- Create a new database in MySQL and import the database.sql file located in the sql directory.
- Open the config.php file located in the includes directory and update the database connection details:
<hr>
<h1 align="center" >
SQL</h1><hr>
<p align="center">
<h2 align="center" >Copy code:-</h2><br>


- define('DB_HOST', 'localhost');<br>
-  define('DB_USER', 'root');<br>
- define('DB_PASS', '');<br>
- define('DB_NAME', 'your-database-name');
<br><hr></p>
- Upload the files to your web server.

- Visit the login page (login.php) to login or register.
<br><hr>
<h1 align="center" >Files Included</h1>

- index.php: The landing page for the application.<br>
- login.php: The login page.<br>
- register.php: The registration page.<br>
- secure.php: The secure page that only authenticated users can access.<br>
- includes/config.php: The configuration file that contains the database connection details.<br>
- includes/db.php: The database class that handles all database queries.<br>
- includes/functions.php: Helper functions used throughout the application.<br>
- sql/database.sql: The SQL file used to create the necessary tables in MySQL.<br>
- Contributing

If you'd like to contribute to this project, feel free to submit a pull request. Please ensure that your code adheres to the PSR-2 coding standards.
<hr>
<h1 align="center" >License</h1>

- This project is licensed under the MIT License.
<hr>
