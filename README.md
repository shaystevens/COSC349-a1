# COSC349-a1
## Shay Stevens #7196262
My application is a dog booking website, called Doge Rentals. The application is built using three virtual machines (running ubuntu/focal64). The first VM is a web server that users interact with to make a booking. The second VM is a database server that stores the bookings made by users and admin login details with the use of MySQL. And the third VM is an admin server that hosts the admin page that shows the bookings made by users from the database. 

## Getting started
### Step 1:
Use `git clone` in a terminal to clone this repository into your desired destination.

### Step2:
`cd` into COSC349-a1.

### Step 3:
Run `vagrant up` in order to start the automated build process (This takes around 6 minutes for the initial build and 2 minutes for redeployments)

### Step 4:
When the build process is complete navigate to 127.0.0.1:8080/index.html in the url of your desired browser.

## Web server (#VM1)
The web server is responsible for hosting the web pages on `127.0.0.1:8080` that a user interacts with in order to make a booking for a dog. Simpliy go to the Rent a Doge tab select the dogs you want to book and fill out the form with your details and hit submit to make a booking. This booking is then inserted into the bookings database hosted by #VM2. The server has the ip address 192.168.56.11.

## Database server (#VM2)
The database server is responsible for hosting the database. MySQL is used to create the tables and to insert values into the tables. Their are two tables within the database. Bookings and admin. The Bookings database stores all the bookings that have been made while the admin table stores the username and password used to log into the admin page. The password is encrypted in the database using SHA1 encryption for extra security as a hash value is created to store the string. The server has the ip address 192.168.56.12.

## Admin Server (#VM3)
The admin server is responsible for hosting the admin webpage. The admin page are hosted on `127.0.0.1:8081/admin.php` this is to add extra security as you don't want users to access the admin page. The admin page (admin.php) reads the bookings from the bookings database from #VM2 and displays the bookings in a table for the admin to look at. The admin server's ip address is 192.168.56.13.

## Login
Username: "admin"<br />
Password: "admin"

## Cleaning up
Run `vagrant destroy` to destroy the virtual machines.
