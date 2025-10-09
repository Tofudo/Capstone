<h1 align="center">INITIAL CONFIGURATION/INSTALLATION OF THE PROJECT</h1>
1. Download Composer (preferably the latest version) <br>
2. Download XAMPP (preferably the latest version) <br>

   *XAMPP already has PHP so no need to download PHP* <br>
3. Download Node.js (preferably the latest version) <br>
4. Make sure you already have VS Code installed <br>
5. Open XAMPP <br>
6. Start APACHE and MySQL <br>
7. Open the project in VS Code <br>
8. Open New Terminal in VS Code <br>
9. Run the PHP command: <br>

```php composer install```<br>
10. Rename the .env.example file to .env <br>
11. Create the key by using the following command: <br>
```php artisan key:generate```<br>
12. Execute the migrations using the following command: <br>
```php artisan migrate```<br>
or <br>
```php artisan migrate:fresh //to recreate the tables```<br>
13. Execute the seeders using the following command: <br>
```php artisan db:seed```<br>
14. Run the npm installation command: <br>
```npm install```<br>
15. Run the PHP server using the following command: <br>
```php artisan serve```<br>
    and click the link 127.0.0.1:8000
16. Create a new terminal in VS Code and run the Node.js server using the following command: <br>
```npm run dev```<br>
    and click the link localhost:5173

<h1 align="center">Running the Project</h1>
These instructions are for: <br>
- If you have already cloned the repository in your computer/laptop and are going to run the project <br>
1. Open XAMPP and Start APACHE and MySQL <br>
2. Create a New Terminal in VS Code and run the following command: <br>

```php artisan serve``` <br>
   and click the link 127.0.0.1:8000 <br>
3. Create anoter New Terminal in VS Code and run the following command: <br>
```npm run dev```<br>
    and click the link localhost:5173 <br>

<h1 align="center">User Data Testing Credentials</h1>

**To access the login page,**
 - make sure the project is running
 - enter the link: `127.0.0.1:8000/authorized/login`


**Admin Credentials**
 - username: `admin`
 - password: `12345`


**Staff Credentials**
 - username: `staff`
 - password: `12345`
