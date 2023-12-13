
# Fit Upp

##### Core Team Members:

Project Manager: Ciobotaru Robert

Designer: Brandiburu Andreea Nicoleta

Developer: Grigore Dragos Gabriel

Developer: Ghidarcea Alexandru Tudor

# Summary Project Status:

Project Start Date: 10.11.2022

Estimated Completion: 10.01.2023

Process Impacted: Covers the need for a complete and accurate lifestyle application in the context of the existence of a deficit in this sense on the market

Potential Financial Impact: Not immediately

# Technologies used:

##### Backend:
 - PHP:          
   - large communities and vast resources available, making it easier to find support and tutorials
   - widely used and supported by many hosting providers, making it easier to deploy and maintain web applications
- MySQL:         
   - large communities and vast resources available, making it easier to find support and tutorials
   - widely used and supported by many hosting providers, making it easier to deploy and maintain web applications
- Apache:        
   - large and active community, which provides a wealth of resources and support
   - can handle a large number of requests, making it suitable for high-traffic websites

##### Frontend:
- HTML:         
   - provides a standardized way of structuring and presenting content on the we
   - provides a good balance of control and flexibility, allowing developers to create a wide range of styles and layouts
- CSS: 
   - allows developers to separate the presentation of a website from its content, making it easier to maintain and update the look and feel of a website
   - provides a good balance of control and flexibility, allowing developers to create a wide range of styles and layouts
- Bootstrap:      
   - provides a responsive design by default, making it easier to create websites that look good on a wide range of devices
   - is highly customizable, allowing developers to modify and extend its functionality

# Problem statement
Obesity is an increasingly serious problem in the 21st century, affecting more and more people and resulting in a low quality of life and a much increased fatality rate.

Currently, around 12% of adults suffer from obesity, a problem that represents one of the biggest preventable causes of mortality, and closely related to many other causes of mortality such as heart disease, lack of activity and unhealthy nutrition.

It is estimated that around 2.8 million people die annually due to obesity, and the number increases every year. The objective of our website is to provide users with numerous valuable tools to help them maintain a healthy and balanced lifestyle. Tools that will help them maintain a diet rich in nutrients, a healthy physical activity, monitor their progress and, equally important, motivation to implement these long-term behaviors, turning them into habits.

# Functional decomposition

![](https://github.com/inginerie-software-22-23/proiect-inginerie-software-echipa-racheta/blob/main/functional%20decomposition.png)

# Non-functional requirements list
Performance: The website’s load time should not be more than one second for users.

Availability: The website should function 24/7/365. In the case of unplanned system downtime, all features will be available again after one working day.

Maintainability: If the automated email services become unavailable, they can be under maintenance for approximately three hours.

Modified data in a database should be updated for all users accessing it within 2 seconds.

Data integrity: The system shall maintain data integrity by keeping backups of all updates to the database for every record transaction.

Capacity: The site should load in 3 seconds when the number of simultaneous users are > 10000.

Usability: The website’s interface has to be user-friendly and easy to use.

# Activity/State diagram

![](https://github.com/inginerie-software-22-23/proiect-inginerie-software-echipa-racheta/blob/main/activity%20diagram.png)


# Prioritized product backlog (stories identified)

##### Sign Up Page:
1) As a customer, I want to create login credentials so I can securely access my self-service online account. The customer should see sign up screen with input data fields for Surname, Name, Date of Birth, Phone Number, Email Address, Password ( at least 7 characters, 1 number, 1 uppercase letter, 1 lowercase letter), Re-enter Password.

2) After pressing submit button, a CAPTCHA will appear.

3) All fields are required data fields - error alert should be shown if user clicks on Submit with any of the fields left blank " cannot be empty".

4) User should be prompted if email entered already exists in the system - error message
"Email taken - please enter another email"

5) Password criteria should be displayed to the user when user clicks inside the password data field. Green check mark next to 'Password' data field should be displayed that indicates to the user after typing password that the entry meets criteria. Red cross mark next to 'Password' data field should be displayed that indicates to the user after typing password that the entry does not meet criteria.

6) Password' and 'Re-enter Password' entries should be masked
Password entries will show the keystroke typed, and then after two seconds the entered character is masked.

7) If 'Password' entry does not match criteria specified and user hits Submit, show error alert "Password entry does not meet criteria".

8) If entries in 'Password' and 'Re-enter Password' do not match and user hits Submit, show error alert 'Password entries do not match'.

9) After successful validation of all entered fields and on clicking Submit, show message indicating successful online account creation and an email will be sent.

10) As a customer, I want to have a button which will send me to the Login Page.

##### Login Page:

1) As a user I can enter a email and password.Click submit, the email is searched.  If found,
an encrypted version of the password is then compared with the stored encrypted version.
The profile is updated with the latest login date time.
Finally, the user is shown a screen that they are entitled to see based on the outcome of the previous steps.

2) As a user, I can encounter problems logging in:
my email isn't found – Email not found - please enter another email or contact our team
my password doesn’t match – Password doesn't match-if forgotten, press the "Forgot password" button my account has been disabled – The account have been disabled/banned - if you want to restore your account contact our team.

##### Calorie calculator page:

1) As a user I want to see the calorie intake, protein intake, fats intake and carbohydrates intake for the primary foods.
2) As a user I want to be able to search the processed and packaged food(see the calorie intake, protein intake, fats intake and carbohydrates intake for the primary foods) by name or by brand.

##### Progress tracker page:
1) As a user I want to be able to see my progress over time.
2) As a user I want to be able to register my current date's weight.

##### Sleep tracker page:
1) As a user I want to be able to see how much I've slept on average, and over the course of the last days.
2) As a user I want to be able to register how many hours I've slept today.

# Project charter document  

##### Context
Fit Upp is an all-in-one fitness and weight tracker platform. There is a wide selection of training videos that teach subscribers what to do depending on the desired results. After a user registers to the platform, he fills in his data in the profile such as gender, age, weight, and height and after that, he has the option to choose a training category he wants to follow.
The users will have their own accounts.  The main attributes of a profile are to record the description and their progress. 
##### Project objectives
-	Create a website for the ones who want to make some lifestyle changes.
-	Improve user experiences with the implemented trackers and calculators
-	Give the user a way to monitor calories, proteins, and other food intakes
-	Give the user a personalized workout schedule

##### Criteria for success
-  When a user can log-in and stay fit using our app's functionalities
##### Scope
-	Make the website
-	No-mobile responsive
-	to allow advertisements on the site as a source of income

##### Business case
-	to create the foundations of a profitable mobile application

##### Constraints
- not medically approved
- best fit as a mobile

##### Assumptions
- Mobile users aren’t purchasing as much

##### Deliverables
- Content that fits industry-standard screen sizes

##### Stakeholders
- dev team and app users

##### Budget
- 4 persons in 60 days

##### Definition of Done and Definition of ready: Story level
A story can be considered ready when 
- it is written in the correct format
- it is clear and concise
- it is clearly understood by the team members
- it has been distributed to the team

A story is done when 
- the code implementation compiles successfully
- the code passes every test
- it has been approved by the team members as finished
- it has been confirmed by the owner

# Sprint report
## Sprint 3
### What went well:
We set up our database and created our user authentication tables.
We implemented a drop-down menu.
We successfully implemented an authentication system, where all fields are escaped, and queries are safely executed to process into the database. Users are also prompted when the input they are typing does not match a certain format. Also, for extra security we implemented a reCaptcha validation for both sign-up and log-in.
Everything we wanted to implement was successfully done.

## Sprint 4
### What went well:
We went further with our authentication system and created an admin type of account which can manage the database from the website and see statistics.
We started the workout planner, progress tracker and sleep tracker development, tables have been created, and forms were made.
We developed the front-end of a 'contact us' page.
### What didn't go well:
We didn't manage to successfully implement the backed of the 'contact us' page.

## Sprint 5
### What went well:
We finished developing the workout planner, progress tracker and sleep tracker, both backend and frontend everything is working correctly.
### What didn't go well:
We didn't implement the nutritional calculator, as proposed.

# Retrospective Outcome
## Sprint 3
### Outcomes:
Better understanding of what worked well and what needs improvement.
Identified action items for the next sprint.
Improved team communication and collaboration.
### Action Items:
Implement time estimates for tasks.
Dedicate time for code reviews and testing.
Hold regular cross-functional team meetings.
Clarify task priorities.
Encourage cross-functional discussions and collaboration.
Implement a comprehensive sprint tracking system.

## Sprint 4
### Outcomes:
Improved team productivity and efficiency.
Enhanced communication and collaboration between team members.
Identified opportunities for further improvement.
Improved sprint tracking and monitoring.
### Action Items:
Encourage cross-functional discussions and collaboration.
Allocate dedicated time for code reviews and testing.
Hold regular cross-functional team meetings.

## Sprint 5
### Outcomes:
Excellent collaboration and communication among team members.
### Action Items:
Maintain high standards for productivity and efficiency.

# Acceptance criteria 

In order to be accepted by the customer, our software product must:
- displaying the progress of the user over time.
- allows the user to be able to register my current date weight
- displaying how much the user slept on average, and over the course of the last days.
- the website’s load time should not be more than one second for users.
- the website should function 24/7/365. In the case of unplanned system downtime, all features will be available again after one working day.
- if the automated email services become unavailable, they can be under maintenance for approximately three hours.
- modified data in a database should be updated for all users accessing it within 2 seconds.
- the system shall maintain data integrity by keeping backups of all updates to the database for every record transaction.
- the site should load in 3 seconds when the number of simultaneous users are > 10000.
- the website’s interface has to be user-friendly and easy to use.
- admin account that can manage the database
- workout planner that can generate a workout plan based on certain criteria
- the admin has a special tab where he can see different statistics
- contact us page

# Application demo
https://www.youtube.com/watch?v=wu2Zjrwq1-4
