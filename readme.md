#GeoChap

##About
GeoChap is a geocaching website program designed for local clubs. This was developed for a class, ISTE-432, at RIT for its final project. 


## Installation


Before you can begin installing the application, you will need a place to host it from. GeoChap is a web-based application and will require a server to run on. 

#### Minimum Specifications
GeoChap is not is not a very heavy application. With normal usage that is associated with a school club, it should not require more than the following resources to run:

* 2 CPU cores
* 1GB RAM
* 15GB Disk space
* 1 IPv4 address
* 100mbit connection


#### Operating System

GeoChap will work with most Linux-based operating systems without modification, as long as the dependencies can be found and installed for the specific OS you choose. We recommend using Ubuntu 16.04 as Ubuntu typically uses very up-to-date software versions and it is the latest LTS (long term support) version of Ubuntu, making it well supported for the future. 

### Server Dependencies

* PHP5.6+ (PHP7 recommended)
* MySQL 5.5+/MariaDB 10+ (MariaDB recommended)
* Apache 2 or NGINX web server. 
* Git client

#### MySQL Server

Once you fully install MySQL, you will need to create a new database and user for our application to use to connect to. 

Login to MySQL via command line with: mysql -u root -p
You will be prompted to enter your password.

Run the command: create database geochap;
Now grant permission to connect to that database from a new user: 

```GRANT ALL PRIVILEGES ON geochap.* To geochap@127.0.0.1 IDENTIFIED BY ‘<put a password here>’;```

Please make sure to note down these login details. They will be needed later.

You can exit MySQL by typing Ctrl + C.


### Install Application
#### Download Application Files

The files for GeoChap can be found on GitHub at the following URL: https://github.com/Awmusic12635/GeoChap . 


Change to the directory /var/www/html

```cd /var/www/html```

Clone the git repository into the directory 
```git clone https://github.com/Awmusic12635/GeoChap.git```


You will now have all the files for the application on your server.


#### Install Application Dependencies
Though we installed the basic server dependencies earlier, the GeoChap application has some dependencies of its own. At this point you should be able to run the command:


```php --version```


And get a response similar to:

```
PHP 7.0.8 (cli) (built: Jul 13 2016 13:52:44) ( NTS )
Copyright (c) 1997-2016 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies
    with Xdebug v2.4.0, Copyright (c) 2002-2016, by Derick Rethans
```

If you do not get a response and instead get a response similar to “command not found”, go back to the dependencies section and make sure PHP is installed AND is in your command line PATH.

To install the application dependencies, we have included a composer.phar file. Make sure you are still in the /var/www/html directory and run the command:

```php composer.phar install```

Composer will then begin installing all the required dependencies for the application. Once it finishes, please move on to the next step.

### Configure Application
Now that all the required software has been installed, GeoChap will need to be configured.

In the /var/www/html directory, you will find a file named .env.example . Rename this file to .env using the command:

```mv .env.example .env```

Open the file in your text editor of choice.

Edit the variables to fill in the database connection information from when you created your MySQL database and users. 

You must also edit the APP_URL to be the domain that you will be using to access this instance of GeoChap. 

You must also edit the GOOGLE_API_KEY and put your google maps API key here. Google requires a key in order to access their map service. 

Close and save the file. 


Now, a secure app key needs to be set. This key is used for securing the encryption and hashing of items in the database, and it appears in session cookies as well. Fortunately, there is a super simple command you can run to set it for your GeoChap instance:

```php artisan key:generate```

The APP_KEY should now be set. 

Now you need to run two commands to populate and create the tables in the database:

```
php artisan migrate
php artisan db:seed
```

### Modify Web Server Configuration
Each web server handles its configuration slightly differently. This is an example of one you can use if you choose Apache2.

You can find the configuration files for them in the /etc directory (specific directory depends on the OS that you choose, but for Ubuntu it would be /etc/apache2/sites-available/)

```
<VirtualHost *:80>
  ServerName <your_domain.com>
  DocumentRoot "/var/www/html/public"
  <Directory "/var/www/html/public">
    AllowOverride all
  </Directory>
</VirtualHost>
```

Once you have made this configuration change, restart your web server using:

```service <web server name> restart```

### Testing
At this point, if you browse to the IP of your server, your application should load. Debugging is also enabled, so any errors that may occur will show up.

If you do not notice any errors, modify your .env file from earlier and change APP_DEBUG to false. If you do notice errors, we would recommend researching the specific error online. 

###Login
The default login created for an admin account is:

```
Email: bleh@example.com
Password: admin
```