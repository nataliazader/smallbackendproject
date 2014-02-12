 #engagementlabs Back-End Project 

Object:
======================================
Create a PHP5.3+ Original Mini Framework that hourly crawls some data, saves it and returns it via HTTP on demand. Make it work by saving hourly the number of fans of a Facebook page.


Rules:
======================================
The crawling robot must be executed by a cron job every hour via a command line such as :
- php index.php --uri=crawler/fans --page_id={fb_page_id}

Formatted, saved data should be accessible in csv via HTTP (not ajax) via a URL such as :
- http://localhost/myframework/get/fans/csv?page_id={fb_page_id} 
This call should return the history of fans of the Facebook page, to the hour, as crawled per the robot.

Formatted, saved data should be accessible in json via HTTP (ajax only) via a URL such as :
- http://localhost/myframework/get/fans/json?page_id={fb_page_id} 

Data should be graphed in a simple Google Chart line chart via a URL such as :
- http://localhost/myframework/get/fans?page_id={fb_page_id} 


The framework should consist of:
======================================

- a database technology and structure of your choice.

- MVC layers

- The framework must be compatible with an Apache / PHP5.3+ environment under Linux.

- Provide documentation for the project


Evaluation:
======================================

- We will evaluate if the requirements above work as expected

- We will evaluate the structure of the framework and the logic behind the separation of concerns. For example in the eventuality of adding other crawlers such as crawling Twitter followers of a Twitter account.

- We will evaluate overall code quality, readability and consistency


Send project back zipped by email, containing your PHP files, cron file, an export of your database, and any other comments you might find useful.

Cheers!
