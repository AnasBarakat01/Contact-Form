# Contact-Form
# Table of Contents
[Introduction](#Introduction)          
[Definition](#Definition)                 
[Advantages](#Advantages)    
[Steps](#Steps)  
[Installation](#Installation)



## Introduction
Almost all websites want to provide at least one method to allow visitors to get in touch with them. The most common options they provide are physical addresses, telephone numbers, social media links (Facebook, Twitter, Instagram, etc), email addresses, online chat with an advisor, online chat with a robot, and a contact form.      

Visitors can often have many options available to contact the people behind the website. Sometimes a phone number is the best option if they need real-time assistance, or social media if they what the communication to be public. Other times they may physically want to visit the place of business, so the address is perfect. However, often a contact form is used when none of the other communication methods are possible, available, or appropriate.      

From the website users' point of view, a contact form allows them to provide details which they may find harder to explain over a phone, or they may feel more comfortable writing than talking. Often phone numbers are busy or closed, so sending a message through a contact form is quick and easy.    

From a website owners' point of view, a contact form allows them to require enough information (for example, their name, email address, and reason for contact) to deal with the message. It also allows for a digital paper trail and future potential marketing.   


## Definition   
A contact form is a user input form that allows website or app users to type information that is viewable by the website or apps operators.    
It’s like sending an email, but instead of using an email program, you just fill in the message on the website directly.   

## Advantages
### A) Customize your form as you want.       
You can customize and design the template of the file, as I will show later, that will be sent as you want.    
Also customizing the fields of the form. Which      
    * Allowing users to provide details which they may find harder to explain over a phone, or they may feel more comfortable writing than talking.      
    * Allowing website owners to require enough information of users (for example, their name, email address, and reason for contact) to deal with the message.    
As you see in the following forms, they have different fields.     
![contact-form-example](https://github.com/AnasBarakat01/Contact-Form/assets/155667484/7afc79a7-17ce-431f-8292-e202f921729a)
![contact-form-marketing-agency-675x1024](https://github.com/AnasBarakat01/Contact-Form/assets/155667484/e06b0454-1ad8-4b45-90e3-8985d7de817e)

### B) Connect the form to database.
Storing emails sent through this form in the database. so that you can analysis them for markeing, determine feedback of users or
any other purposes. Example:     
![single-directory-contact-5](https://github.com/AnasBarakat01/Contact-Form/assets/155667484/a5866dfa-267d-4810-a0fd-49addbfc7e51)

## Steps       
Here are the steps to create Contact-Form using **PHP** and **Laravel** framework.     
### 1 - Migration    
I used migration ,provided from Laravel, to create the table of the Contact-Form in the database.     
As you can see I created table clled "contacts". This table will include the emails sent ,to website owners, through this form.    
Four columns in this table id, name, email, subject and message.     
#### Why do I use migration ?     
* If some other developer will be working on your script by taking a pull, You don’t have to send him or her the SQL files to import the db.    
* It gives efficient results when we work in a team.              
* One of the most important things that I love about migration is that it has very simple methods (anyone can understand easily) to handle table creation and modification.      
* It’s kind of flexible anytime you can modify your table just by writing a few lines. Like, I want to update the column name then I don’t have to do go to the manual or change the name. No! Just do the below thing.

Use the following command to create the migration `php artisan make:migration create_contacts_table`    

### 2 - Model     
I use the “Contact" model to put data in the database, as we know Laravel is a MVC framework. In this model I determine columns names of the table in database that I will fill in the "fillable" variable.      
Use the following command to create the model  `php artisan make:model Contact`
The most important thing I wanna talk about is the "boot()" function, which is automatically executed when calling this model. So, it is a suitable place to put a behavior, so it will contain the code of sending the email     
` Mail::to($adminEmail)->send(new ContactMail($item)); `

#### Mail class
Is an email API powered by the popular Symfony Mailer component provided from Laravel. Provide drivers for sending email via SMTP, Mailgun, Postmark, Amazon SES, and sendmail, allowing you to quickly get started sending mail through a local or cloud-based service of your choice.        
Through this class I use "to()" function , which sends a mail. In the "to()" function I determine name of the destination email address. Then I use "send()" which takes a Mailable object as I discuss later which represents the message that will be sent.             
_Note :_ you can configure your data of sending eamils through **config/mail.php** file. You will find a "mailers" configuration array. This array contains a sample configuration entry for each of the major mail drivers / transports supported by Laravel, while the default configuration value determines which mailer will be used by "default" when your application needs to send an email message.

### 3 - Mailable class
Represents the message that will be sent in the email. A built-in class provided from laravel.     
Use the following command to create it  `php artisan make:mail ContactMail`       
#### So, how can you configure this class (message) that will be sent ?
* **constructor** to to include the data that will be sent to the website owners (name, email, phone, message,..).  
* **envelope()** function to determine name of the sender and subject of the message.
* **content()** fucntion to determine the view file that will be sent of extension '.blade.php'.
* or use the **build()** function to determine the previous attributes.     

### 4 - view file
Is a file of extension ".blade.php" located in the "viwes" folder as default in Laravel. This file is the message that will be sent, you can design it as you want. our file in this tutorial is named "send".













## installation

1. create the migration `php artisan make:migration create_contacts_table`
2. create the model `php artisan make:model Contact`
3. create the mailable class  `php artisan make:mail ContactMail`  

