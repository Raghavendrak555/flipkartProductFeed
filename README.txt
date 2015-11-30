This is a product feed api of flipkart used to get the all the television details from flipkart website and stores it into the MySQL database.

These details include MRP, Selling price of the product, image of the product, Brand name, etc..

'feed.php' is main script to be run for getting the television details from flipkart and store in the MySQL.

With little modifications it can be used to get any product details from flipkart.


NOTE:
To get this code work.. please change the MySQL credentials in the following files

1. BuildDB.php   
2. dbConnection.php


Once you have modified above files with your MySQL credentials.
Please run 'BuildDB.php' to created initial data base set up.
and then run 'feed.php' to get the product details.


Please note: you may required to change the '$token' and '$user' to get this work.

To know details of 
How to change these variables $token and $user... what values should you assign to these variables????
visit: "https://affiliate.flipkart.com/"

