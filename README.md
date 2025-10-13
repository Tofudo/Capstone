<h1 align="center">INITIAL CONFIGURATION/INSTALLATION OF THE PROJECT</h1>
1. Download Git (make sure that Git Bash is also included upon installation) <br>
2. Download Composer (preferably the latest version) <br>
3. Download XAMPP (preferably the latest version) <br>

   *XAMPP already has PHP so no need to download PHP* <br>
4. Download Node.js (preferably the latest version) <br>
5. Open Git Bash, and go to your desired folder using Git Bash to clone the repository using the following command: <br>
`git clone https://github.com/Tofudo/Capstone.git` <br>
6. Make sure you already have VS Code installed <br>
7. Open XAMPP <br>
8. Start APACHE and MySQL <br>
9. Open the project in VS Code <br>
10. Open New Terminal in VS Code <br>
11. Run the PHP command: <br>

```composer install```<br>
12. Rename the .env.example file to .env <br>
    *If there is no .env file upon installation, please send me a message -soph* <br>
13. Create the key by using the following command: <br>
```php artisan key:generate```<br>
14. Execute the migrations using the following command: <br>
```php artisan migrate```<br>
or <br>
```php artisan migrate:fresh //to recreate the tables```<br>
15. Execute the seeders using the following command: <br>
```php artisan db:seed```<br>
16. Run the npm installation command: <br>
```npm install```<br>
17. Run the PHP server using the following command: <br>
```php artisan serve```<br>
    and click the link `http://127.0.0.1:8000` <br>
18. Create a new terminal in VS Code and run the Node.js server using the following command: <br>
```npm run dev```<br>
    and click the link `http://localhost:5173/`

<h1 align="center">Running the Project</h1>

**These instructions are for:** <br>
 - If you have already cloned the repository in your computer/laptop and are going to run the project <br>
1. Open XAMPP and Start APACHE and MySQL <br>
2. Create a New Terminal in VS Code and run the following command: <br>

```php artisan serve``` <br>
   and click the link `http://127.0.0.1:8000` <br>
3. Create anoter New Terminal in VS Code and run the following command: <br>
```npm run dev```<br>
    and click the link `http://localhost:5173/` <br>

<h1 align="center">Updating the Project</h1>

**These instructions are for:** <br>
 - If you have cloned the repository locally in your PC/Laptop and there are additional changes pushed in the repository <br>
 - If you have any additional changes to push to the repository <br>
 - If you want to merge update from one branch to another <br>
 - If you want to make another branch

<h3 align="center">Fetching Content from Remote Repository</h3>
1. Check the status of the repository by opening a terminal in VS Code and using the following command:<br>

`git status` <br>
   A. If the response says "Your branch is up to date, ...... working tree clean", then you can proceed to edit <br>
   B. But, if the response says that there are files to be added, updated, or removed, use this following command in the terminal" <br>
      `git pull` <br>

<h3 align="center">Pushing Updates to the Remote Repository</h3>
1. Check the status of the repository by opening a terminal in VS Code and using the following command: <br>

`git status` <br>
2. The response will show the files you have edited, added and deleted, you can choose to add all of these changes using the following command: <br>
`git add --all` <br>
3. Create a commit to describe changes made in a commit using the following command: <br>
`git commit -m "Your message here" //the message should describe the changes made` <br>
4. Push your changes to the repository using the following command: <br>
`git push` <br>

<h3 align="center">Merging Branches</h3>
1. To check which branch you are in, open a terminal in VS Code and use the following command: <br>

`git branch` <br>
2. To check the status of your branch, use the following command: <br>
`git status` <br>
and make sure that your branch is up to date with the remote repository. Otherwise, check the previous instructions for fetching content and pushing updates.
3. To transfer to another branch, use the following command: <br>
`git checkout branchName //branchName being the branch you want to go to` <br>
4. If you want to merge updates from branch Alpha to branch Beta, use the following commands: <br>
 - Switch to branch Beta: `git checkout Beta` <br>
 - Then merge Alpha into Beta: `git merge Alpha` <br>

<h3 align="center">Creating a New Branch</h3>
1. Make sure you are on the updated branch by using the following commands: <br>

 - `git branch` <br>
 - `git status`<br>
 - `git pull` <br>

2. To create a new branch, use the following command: <br>
`git branch newBranch` <br>
3. To switch to the new branch, use the following command: <br>
`git checkout newBranch` <br>
4. To push the new branch that has no upstream branch (not in remote repository), use the following command: <br>
`git push --set-upstream origin newBranch` <br>

<h1 align="center">User Data Testing Credentials</h1>

**To access the login page,**
 - make sure the project is running
 - On the tab where the project is running, change the link to: `http://127.0.0.1:8000/authorized/login`


**Admin Credentials**
 - username: `admin`
 - password: `12345`


**Staff Credentials**
 - username: `staff`
 - password: `12345`
