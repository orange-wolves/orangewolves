# Orange Wolves
A website will be developed to provide information about the events of Orange Wolves (OW) and aid the public by providing them with a dynamic schedule of the ongoing activities, information about OW sponsors and how to contact OW. The website will also monitor website traffic analytics which will be accessible through the database.

## Table of contents
  - [Orange Wolves](#orange-wolves)
  - [Table of contents](#table-of-contents)
  - [Organization info](#organization-info)
  - [Tools recommend Before you start](#tools-recommend-before-you-start)
  - [Setup](#setup)
  - [Rules of using GitHub](#rules-of-using-github)
  - [Website classes](#Website-classes)
  - [Development team member](#development-team-member)


## Organization info
Introduces all of team. 
	
## Tools recommend Before you start
* [Visual studio code](https://www.google.com)
* [Github desktop tool](https://desktop.github.com/)
* [Git bash](https://desktop.github.com/)
* [XAMPP](https://www.apachefriends.org/index.html)

## Setup
### **1. Clone the project**
Cloning with HTTPS URLs
```
$ git clone https://github.com/orange-wolves/orangewolves.git
```
[Learn more about github](https://guides.github.com/)

Or you can clone this project by Github desktop. Please see the [GitHub Desktop guide](https://help.github.com/en/desktop/getting-started-with-github-desktop)

### **2. Setup Apache**
After clone the repositoriy, copy the configuration file ".htaccess"  from setup folder to your workplace folder.

For example: your project folder is ../htdocs/orangewolves, copy ".htaccess" to ../htdocs folder. 

### **3. Setup database**
1. Open file "OrangeWolves_database_Creation.txt", copy all code. 
2. Goto mysql page http://localhost/phpmyadmin/, then select SQL table and paste sql script to the edit field.
3.  press go button.

## Rules of using GitHub
In this post we're laying out few rules to help our work simplify and clean up.
* Use prototype branch, no direct commits on master.
* Please write commit very clean.
* Create a new branch for every new feature.
* Use pull requests to merge code to master branch.
* Do not forget pull the last version before you start coding.

## Website classes
In order for the website to have a coherent look the following classes have been created. You must include \<linkrel="stylesheet"type="text/css"href="../resources/css/layout.css">. You do not have to worry about font unless you wish to use a different font.

### **Grid View**

The grid view is similar to tables but are easier to use for a dynamic layout, for more information on how they work vist https://www.w3schools.com/css/css_rwd_grid.asp.
* **row** - This class represents a container that spans the length of the available space in the parent container.
* **col-#** - This class represents a % width of the row where # symbol is replace with a number . 1 is equivalent to 8.33% of the page width while 2 is 16.66%, 3 is 25%, etc. The total col-# for the parent row should equal 12 which is equivalent to 100%.
* **empty** - This class is added to an empty col class to ensure the space is applied correctly.

### **Container classess**

The container classes are repsonsable for the container appearance and are included in the layout.css file.
* **conNone** - this class is a white background with dark blue text, a white border and a padding of 5px.
* **conLight** - this class is a light blue background with dark blue text, a white border and a padding of 5px.
* **conMod** - this class is a moderate blue background with dark blue text, a white border and a padding of 5px.
* **conDark** - this class has a dark blue background with white textand a padding of 5px a white border and a padding of 5px.



## Development team member
Lachlan, Grace, Conor, Asim, Ibrahim, Ray, Harman, Raymond
