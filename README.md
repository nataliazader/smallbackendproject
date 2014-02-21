 #engagementlabs Back-End Project 

Object:
======================================
Create a PHP5.3+ application that hourly crawls data, saves it and returns it via HTTP on demand. Make it work by saving hourly the number of fans of a Facebook page.  
Answer some questions on how to make it scale (see Deliverable section.)


Rules:
======================================
- You should not use a Facebook PHP library to get Facebook fans, but do it raw.


- The crawling robot must be executed by a cron job every hour via a command line such as :  
php index.php --uri=crawler/fans --page_id={fb_page_id}
 
 
- Formatted, saved history data (nb of fans, every hour) should be accessible in json via HTTP via a URL such as :  
http://localhost/myframework/get/fans/json?page_id={fb_page_id} 
 
 
- Data should be graphed in a simple Google Chart evolution line chart via a URL such as :  
http://localhost/myframework/get/fans?page_id={fb_page_id} 
 
 
 
The application should consist of:
======================================

- a database technology and structure of your choice

- The application must be compatible with an Apache / PHP5.3+ environment under Linux.


Deliverable:
======================================

- Project zipped by email, containing your PHP files, cron file, an export of your database

- Answers to the following question : How would you go if we now have 100.000 Facebook pages to get fans count of, every 10 minutes ? Please expand your answer with regards to the following aspects (a couple of lines max for each) :
    - What would you change in your architecture to cope with the load ?
    - How would you propose to monitor errors ? Servers down, Facebook fails to give fan count,...
    - How would you propose to control data quality ?


- Any other comments you might find useful


Evaluation:
======================================

- We will evaluate if the requirements above work as expected

- We will evaluate the structure of the application and the logic behind the separation of concerns. For example in the eventuality of adding other crawlers such as crawling Twitter followers of a Twitter account.

- We will evaluate overall code quality, readability and consistency

- We will evaluate the answers to the question listed in the Deliverable section and other comments that you may have found useful



Cheers!
