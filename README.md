# Orange Wolves
A website will be developed to provide information about the events of Orange Wolves (OW) and aid the public by providing them with a dynamic schedule of the ongoing activities, information about OW sponsors and how to contact OW. The website will also monitor website traffic analytics which will be accessible through the database.

## Table of contents
  - [Orange Wolves](#orange-wolves)
  - [Table of contents](#table-of-contents)
  - [Organization info](#organization-info)
  - [Tools recommend Before you start](#tools-recommend-before-you-start)
  - [Setup](#setup)
  - [Rules of using GitHub](#rules-of-using-github)
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

## Development team member
Lachlan, Grace, Conor, Asim, Ibrahim, Ray, Harman, Raymond
