 #engagementlabs Back-End Project 

Object:
======================================
Create a PHP5.3+ Original Mini Framework

Purpose of the framework:
======================================
Hourly aggregate incoming data (data.txt) and save it to file for consulting, the file structure location and layer are up to you /tmp is allowed.

Rules:
======================================
The framework must be executed by
- php set.php set data.txt

 This command will be used to save the data to file through a controller named set

The framework must be accessible through
- http://localhost/myframework/get?format=json

 This url will be used to access the data in json format and must be accessible by an ajax call
- http://localhost/myframework/get?format=csv (access data in csv format)

 This url will be used to access the data in XML format not accessible by an ajax call

The framework must be composed of the following elements:

- a collecting layer for accepting the incoming data

- a view layer for viewing the aggregated data

- a model layer is not mandatory

- Use the data file called "data.txt" provided in this repository for the command line data import

- The framework must be compatible with an Apache environment under Linux

- Provide documentation for the project

- Explain your work if you which


Send project back zipped by email

Cheers!


