### Go to website: https://meal-virtue.herokuapp.com/templates/landing.php

# Meal-Virtue

Virtue generally means an act of high moral values and helping others. And what could be a better feeling than feeding people who are unprevildeged and are barely even able to afford a day's meal. Meal-Virtue is an online web portal which helps you carry out a hassle free donation process. You can donate, register your NGO, get the nutritional value of your food and get awarded for it. Donation are carried out less in number, as people do not find the right NGO for donation, and NGO search for people who want to donate. The platform links them both. SERVICE TO MANKIND IS SERVICE TO GOD!! DON'T WASTE WHAT IS EDIBLE, DONATE!  

##  Link for the Presentation- 
   >   http://bit.ly/3cOxRJt

##  Link for the Video- 
   >   https://youtu.be/Yd_0JrKLVHg

SERVICE TO MANKIND IS SERVICE TO GOD!! DON'T WASTE WHAT IS EDIBLE, DONATE!
 

We are currently working as a team and try to help community so that no one sleep empty stomach.

## Screenshot  

![GitHub Logo](markdown-demo/pic.jpeg)
 

## Features

1. Responsive and User friendly UI, easy to use.
2. Home page of Food-Virtue 
   * Information about Food-Virtue.
   * Chat-bot to explore website in a better way.
   * SAVIOUR STORIES
   * Navbar containing Importent links to redirect to other pages.
   * Sponsors, who will economically support us.
3. About Page
   * Containing all functionalities we are providing on our plateform
   * Total Number of events covered and donations.
4. Profile
   * > This section contain mainly 3 roles. 
       >> a) DONAR
       >> b) NGO OWNER
       >> c) ADMIN
   * > DONAR
       >> * If DONAR is login, redirect to donar profile page
       >> * If not login redirect to login page
       >> * If not registered yet, by clicking register button from login, redirect to register button.
       >> * DONAR profile page containing all profile information like name, mail, dob,email, address, contact etc.
       >> * Sidebar of profile page Containing 
       >> *  &emsp; a) total food donated
       >> *  &emsp; b) total money donated
       >> *  &emsp; c) Donated Items.
       >> *  &emsp; d) Earned total points for donated food
       >> * Containing maximum 3 recent activity performed by user/doner
       >> *  &emsp; a) Date of donation
       >> *  &emsp; b) On which event he had donated food/money
       >> *  &emsp; c) Money donated
       >> *  &emsp; d) Total points earned for particular donation.
       >> * :grinning: Yeah! He can earn vouchers after a specific earned points which he can reedem on any nearby restaurants by clicking reedem button. 
       >> * DONAR can save his food by registering all food items he has purchased yet.
       >> *  &emsp; a) He can see calorific values of all the food he has registered
       >> *  &emsp; b) if any food it near to expire he will be notified and ask if he can use it or better to donate
       >> *  &emsp; c) If he want to donate, just click donate button in front of food item, and this food will be donated to his selected NGO.    
       >> * ![GitHub Logo](markdown-demo/profile_donar.png)   
    * > NGO
       >> * If DONAR is login, redirect to NGO profile page
       >> * If not login redirect to login page
       >> * If not registered yet, by clicking register button from login, redirect to register button.
       >> * NGO profile page containing all profile information like name, mail, dob,email, address, contact etc of NGO owner.
       >> * Sidebar of NGO page Containing 
       >> *  &emsp; a) Total number of NGO registered by NGO owner. 
       >> * Containing all the registered NGO's by owner with registration date, profile image, name etc.  
       >> * NGO owner can register his NGO by submitting form register NGO on profile page of NGO.
       >> * After submitting form he can see his status of registration on his profile page.   
       >> * ![GitHub Logo](markdown-demo/ngo.png)   
    * > ADMIN
       >> * After login, redirect to ADMINprofile page  
       >> * After verification of NGO which is submitted by NGO owner ADMIN will publish this NGO to portal, which will be displayed on registered NGO.   
5. DONATE LEFTOVERS FROM EVENT
   * This page is accessable only when doner is logged in.
   * This page contain google map, which will show all nearby NGO's so that donar can donate nearby NGO's.
   * > Here doner can donate  
       >> 1. Leftover food from any events or any food items.
       >> 2. Donar can donate money directly to his selected NGO's.
   * > After donate donar can will be redirected to profile page and he will find 
       >> * List of all NGO's which are registered in his own city.
       >> * Doner will select the NGO for his/her donated food, after select.
       >>> * Donar will get notification to his registered mail that particular NGO will collect the food.
       >>> * Select NGO will received notification for all the information of donar and donated items to receive donated items. 
6. REGISTERED ORGANISATION
   * Here all the registered NGO's will be displayed after verification.
   * It will also show the status of NGO wheather it is active or not active at current time.
   * Google map containing all the nearby NGO's.  
6. Testimonial 
    * > This section contain mainly 3 parts. 
       >> a) Leaderboard
       >> b) Listen form Users
       >> c) Thank you page
   * > Leaderboard
       >> * Represent the top 3 donars with their informations
       >> * List of top 10 donars along with their earned points
       >> * This page acts as a motivation.   
    * > Listen form Users
       >> * Here a donar or any registered user can write testimonial.
       >> * All the previousely written testimonial can be seen on this page.   
    * > Thank you page
       >> * This is one of the most important page. 
       >> * Contain all the events images where we are serving from the food of donars.
       >> * Here all the images will contain name of donar of food item and donation date, so that any donar can see where his food is actually going.
7. Contact Us
   * If any issue occure to any donar or NGO he can directly submit his/her query to our team.
   * Can find other info related to food-filler.     

---
## Website Pic
![GitHub Logo](markdown-demo/home.png)
## Technology stacks used in project: Web Technology
*  Frontend
   * HTML
   * CSS
   * JS
   * Bootstrap
*  Tools
   * Git
   * Github
   * Php
   * Php MyAdmin
*  Backend
   * Apache Server
   * MySql
*  Execution of project
   * Apache Server, using XAMPP
   
## Instruction to USE web application

*  Download the zip file or clone this repo using following command
   
     ``` bash
         git clone https://github.com/AJAYKR00KJ/Hackmaniacs.git
     ```
*  Install XAMPP to run server by this link
     ``` bash
         https://www.apachefriends.org/download.html
     ```    
         
*  Go to directory C:\xampp\htdocs\
     ``` bash
         Paste here cloned project(Unzipped File) 
     ```
*  Import SQL file into phpMyAdmin (registration.sql)

*  Run XAMPP server by opening XAMPP application
     ``` bash
         Run Apache molule.
         For Php MyAdmin run MySQL server. 
     ```     
*  Run the project on local server by this link
     ``` bash
         http://localhost/templates/landing.php
     ```  
*  Hurrey! 😎, Our project running on localhost  

## Php MyAdmin

*  Added food_filler_db database, where we can find created db in our project.


## Backbones of project(Contributors)

>| S.No.         | Name                  | Work Field                                   | Github Account                            |
>| ------------- |:---------------------:|:--------------------------------------------:|:-----------------------------------------:| 
>| 1             | Shivam Manihar Sahu   | Manage Databases- Worked on sql queries      |  https://github.com/shivammaniharsahu/    |
>| 2             | Shashwat Awasthi      | UI/UX design of Website, Worked on frontend  |  https://github.com/ShashwatAwasthi04     |
        |

---
     
     

    

   
   
