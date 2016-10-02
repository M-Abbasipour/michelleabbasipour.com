<?php
include '../includes/header2.php';
?>

<!-- main container -->
<div class="container page_wrapper">
    
    <!-- inside container -->
    <div class="starter_template row">
       
    <!-- header -->
    <a href="../index.php">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <!-- header name -->
        <h1 id="header_text">
            <span class="magenta">m</span>ichelle <span class="magenta">a</span>bbasipour
        </h1>
        <br>
        <!-- profile image -->
        <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 pic">
            <img id='featured_img' src="../images/michelle.jpg">
        </div>
    </div>
    </a>

    <div class="row">
        <!-- download CV button -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <span id="cv_btn">
                <a href="../files/Michelle_Abbasipour_CV.pdf">
                    <button type="button" class="btn btn-info btn-lg">Download CV</button>
                </a>
            </span>
        </div>
    </div>

    <!-- contact details --> 
    <div class="row contact_details">
        <!-- web address -->
        <div class="col-xs-12 col-sm-12 col-md-4 web">
            <h4><span class="magenta">w:</span>
                <a href='http://www.michelleabbasipour.com' target="_blank"> michelleabbasipour.com
                </a>
            </h4>
        </div>
        <!-- phone number -->
        <div class="col-xs-12 col-sm-12 col-md-3 number">
            <h4><span class="magenta">t:</span> 07568 530324
            </h4>
        </div>
        <!-- email -->
        <div class="col-xs-12 col-sm-12 col-md-5 email">
            <h4><span class="magenta">e:</span>
                <a href='mailto:michelle2.abbasipour@live.uwe.ac.uk?Subject: enquiry from michelleabbasipour.com'> 
                    michelle2.abbasipour@live.uwe.ac.uk
                </a>
            </h4>
        </div>
    </div>

    <!-- separator -->
    <div class="row narrow_row">
        <div class="col-sm-12 col-md-12" id="border_adjustment"></div>
        <div class="col-sm-12 col-md-12"></div>
    </div>         

    <!-- main content -->
    <div class="row">
        
        <!-- ** project report ** -->
        <h1 class='narrow magenta'>THIRD YEAR CREATIVE TECHNOLOGIES PROJECT</h1>
        
        <!-- summary -->
        <br><h3 class="text-left">SUMMARY</h3>
        <span class="text-justified">
        <p>This report will document the design, development and implementation of a web application which provides management support for mobile beauty businesses. The idea for this project came about as a result of not being able to find a suitable digital solution to help manage areas of business including stock, appointments, clients, treatments, finances and marketing. There are many types of similar software products currently available, however research has shown that these are either targeted at salon based businesses, rather than for mobile professionals or they cater for mobile businesses but not specifically for those in the beauty industry. Research has also shown that there is a lack of offline support in applications for mobile businesses.</p><br>

        <p>This web application enables professional users, those who work in a beauty business, to set up and maintain a business profile where they can add their services and treatments, as well as other features. Clients, who can be existing and new customers of any of the businesses using the website, can book appointments for those treatments, as well as create and maintain their own profile.  There is a registration system for both type of user, which also enables them to login and logout as well as retaining their details on the system database.</p><br>

        <p>Research has been conducted with potential users in order to identify their requirements and continuous reflection and research has been undertaken throughout distributing surveys, creating personae and scenarios and holding an online focus group, as well as secondary research using offline and online resources. The research and findings are discussed more fully in sections four and five of this report and were vital is identifying users’ needs and to create a list of requirements to be compiled which was subsequently sorted in order of importance to the user.</p><br>

        <p>Development of the first phase began after the research was completed and focused on implementing the most important features and functionality, such as a client booking system and separate sections for professional and client users. In terms of technology, HTML, CSS, JavaScript, PHP and MySQL have all been used to create the functionality of this mobile first web application. Previous skills and experience provided a good foundation for developing this application but further research was necessary throughout the implementation in order to create the functionality required.</p><br>

        <p>Once the first phase was completed, this was distributed via a web server for user testing and, as a result of this exercise, the web application was developed further some issues were highlighted which could be changed to benefit the user.</p><br>

        <p>Research and high fidelity prototypes have been completed with regards to the design of the project, but the focus at this stage has been more on the functionality in order to meet users’ needs.</p>
        <br>
        </span>
        
        <!-- brief biography -->
        <br><h3 class="text-left">BIOGRAPHY</h3>
        <span class="text-justified">
        <p> Working as a front end developer is a career goal, so this project is very helpful in terms of using skills and gaining experience in this field. As there has also been previous experience as a mobile nail technician, and will continue to do so whilst seeking permanent employment after graduation, this mobile web app will also help to manage this business and to enable clients to book appointments. </p><br>

<!--        <p>To access the web app, please go to this URL using a mobile device: http://www.prettyhorizontal.com/charm/public/pages/index.php</p><br> 

        <p>The code is uploaded at GitHub here: https://github.com/MichelleAbbasipour/charm</p><br>

        <p>The  database can be downloaded as SQL here: http://www.prettyhorizontal.com/ctp/database.sql 
        Once downloaded, the SQL file may be opened and read in code format using a text editor or can be opened with MySQL Workbench (http://mysqlworkbench.org) to be viewed in table and model format.</p><br>

        <p>Alternatively, the database can be viewed at this link: 
        http://79.170.44.133/phpmyadmin/index.php?token=73bb5a03a769bc64080316a761e8be6f#PMAURL-3:db_structure.php?db=cl30-charm&table=&server=1&target=&token=73bb5a03a769bc64080316a761e8be6f 

        username: cl30-charm
        password: password</p><br>

        <p>High fidelity, interactive mockups: https://invis.io/V55G67B8C </p><br>

        <p>Interactive mockups: https://invis.io/F55FLCVYQ</p>-->
        <br>
        </span>
        
        <!-- introduction -->
        <br><h3 class="text-left">INTRODUCTION</h3>
        <span class="text-justified">
        <p>The aim of the project is to research, design and develop a web application to assist in the management of mobile beauty businesses. Personal experience has highlighted the lack of suitable, affordable software to help manage some aspects of a mobile business. In addition, feedback from clients expressing an interest in viewing their previous treatment and appointment details, as well as being able to book appointments online has contributed to the development of this project. Being able to create this application is would be a good way to use the skills and knowledge gained from this course, as well as giving the opportunity to learn new technologies and how to implement different functionality.</p><br>

        <p>From the research conducted earlier in the process, several key functionalities were identified which would enable the application to meet the most important users’ needs and requirements. The time constraints for the first phase of development did not allow all of these to be researched and implemented. Therefore, they were categorised by importance using feedback from the research participants through surveys, focus groups and discussion, in addition to analysis of similar products and other secondary research methods. More detail can be found with regards to the research process of this project in Appendix I.</p><br>

        <p>For the professional user, the application will enable them to create a business profile to be viewed by clients, as well as to use the administrative system to manage the treatments they offer, their clients and employees, working hours and other aspects of their business. There are several other software products available which offer the same, or similar, services for businesses but they can be very expensive and there was an opportunity to create a bespoke product which provided multiple services needed for a small mobile beauty business. An important part of the website, and the functionality that would make it unique, would be the ability to use and access data when offline and this was made a priority during the initial stages of research. Additional functionality would include managing stock, employees, working hours, treatments and services offered, client records and appointments.</p><br>

        <p>Although the concept of the app originally began to provide services on a personal basis, there are many other businesses which could also benefit from this product so colleagues within the industry were contacted and a group of professionals was established which would be willing to assist with this project.</p><br>

        <p>Existing clients and potential new client users were asked to participate in the research and their needs were also identified from this. Although not as many requirements were identified as for professional users, the clients who took part felt that they would be more inclined to use a business if it provided an online booking facility, the ability to keep all treatments for multiple businesses in one system and if previous treatments and appointments could be referred to. As a result, the client users would use this application to search for treatments and services available by location and then book appointment slots for these using the application. In addition, clients can manage their data stored on the application, view previous and upcoming appointments and contact professionals.</p><br>

        <p>The first phase of development for this web application will be to implement the most important features and functionality as identified by the research.</p>
        <br>
        </span>
        
        <!-- methodologies -->
        <br><h3 class="text-left">METHODOLOGIES</h3>
        <span class="text-justified">
        <p>When planning this project, the following questions helped to direct the research, establish users’ needs and how to implement the functionality required:</p><br>

        <h3>Who is my user?</h3>
        <ul>
        <li>What features and functionality does my product need?</li>
        <li>What technology is needed to meet the user requirements?</li>
        <li>Who are my competitors and what are their strengths and weaknesses?</li>
        </ul>

        <p>The research methods used comprised primary research with a group of professional and client participants involving distributing and analysing two surveys, holding an online focus group and ad-hoc conversations and discussion. Secondary research carried out involved using online and offline resources including books, articles, blogs, journals and research papers.</p><br>

        <p>Asking the first two questions to the research group, and conducting extensive secondary research, identified typical users and their requirements, as well as helping to create two personae and scenarios which further developed the list of features and functionality required. A summary of the findings from the research report can be found in Appendix I.</p><br>

        <p>Carrying out research on the technology required to implement the user requirements helped to create a development plan for the website allowing for previous skills and experience, as well as identifying new skills which would be needed such as using advanced Structured Query Language (SQL) and PHP: Hypertext Preprocessor (PHP).</p><br>

        <p>Looking into software available which is similar to this application identified common features which were offered and those which were more unique. From this, and the list of requirements gathered through the research group, a comprehensive list of features and functionality for the website was created and categorised by importance and can be found in Appendix II.</p><br>

        <p>The first phase of this project has been successful in implementing several of the main user requirements identified from the research. Creating a responsive website, using a mobile first approach which Moboom.com (2016) explains is a “responsive design: design for smaller screens first, then add more features and content for bigger and bigger screens”, was one of the most important user requirements and this has been achieved by applying the Bootstrap framework (Mark Otto, 2016) which utilises a row and column system in order to create elements on a web page which then act responsively for different screen sizes. Bootstrap was chosen as it has been used previously and was therefore easier to implement and further research into how to use it was not required.</p><br>

        <p>Applying the PHP appointment booking and calendar system was challenging and therefore involved researching and testing several different methods before implementing the current functionality. Possible solutions included purchasing a ‘ready-to-use-system’ such as the Availability Calendar from PHPJabbers (Calendar, 2016), downloading a free system, for example from PlanetPHP (Planetphp.co.uk., 2016) or creating a bespoke system using tutorials and other references. The majority of development time to date has been spent on this area of the website and the final calendar system has been implemented using tutorials and previous skills and experience, rather than a system devised by a third party. Figures 1-9 show screenshots of the calendar and booking system currently implemented on the project prototype.</p><br>

        <p>The database, which holds all of the data for the system, was created using phpMyAdmin (contributors, 2016) and with reference to the data model produced from the research, see Figure 10. However, as the calendar functionality was being implemented, it became apparent that the data model was incorrect and a new structure was put into place as shown in Figure 11. This was much more effective in terms of storing, retrieving and linking the data.</p><br>

        <p>The main difference between the two database models is pulling data from the professionals, businesses, employees, clients and treatments tables into the appointments table, rather than using the appts_treatments table from the original model. There are also many more fields in all of the tables in the new model which were added as the database was being created and tested.</p><br>

        <p>Having previously used SQL and PHP to create, read, update and delete data from a database, this functionality was easier to implement than the calendar system. However, due to not having developed this type of application previously, there were some challenges with some SQL statements including the facility for clients to search and select businesses and treatments. These were very complicated queries and involved using SQL expressions not used previously, as well as using dummy data. The final query used is shown in the code sample below.</p><br>

        <p>This query selects any row in the specified table where the indicated fields contain any text matching the PHP variable, <code>$business_search</code>, which holds the text input by the user.</p><br>
            <code>
                $query = "
                SELECT businesses_name, businesses_address, businesses_email, businesses_id
                FROM businesses	
                WHERE businesses_postcode LIKE '%{$business_search}%'
                OR businesses_address LIKE '%{$business_search}%'
                OR businesses_name LIKE '%{$business_search}%'
                ";
            </code>
        <br><br>
            
        <p>As similar functionality is used when the user is searching for treatments offered, this query can then be duplicated and amended as per those requirements.</p><br>
            
        <p>There are multiple SQL statements used throughout the web application which conduct queries on the database to register users, login and logout of the system as well as to search for businesses and treatments for the chosen business.</p><br>

        <p>In terms of programming language, PHP was chosen alongside Hypertext Markup Language (HTML5) (W3.org, 2016) and Cascading Stylesheets (CSS3) (W3.org, 2016) due to the interactivity provided by using PHP and the ability to use it with HTML, CSS, SQL and JavaScript. When conducting the initial research, the intention was to use Object Oriented PHP (OOP) as the main coding language, however time constraints did not allow for learning how to use and implement OOP and therefore procedural PHP was used as an alternative.</p><br>

        <p>JavaScript has been used where PHP is not appropriate due to requiring client side interactivity, for example when the countdown displays before the user is being redirected to a different page.</p>
        <br>
        </span>         
        
        <!-- results -->
        <br><h3 class="text-left">RESULTS</h3>
        <span class="text-justified">
        <p> The research report was a good foundation to use for the design and development of the app. However, creating the structure of the app has been where planning has caused delays and, as a result, the final prototype structure deviates from the planned structure. Although research was used to create the structure, lack of experience in developing a site map and database models led to issues when it came development, despite having an interactive, hi-fidelity mockup created in inVision (InVision, 2016) which can be viewed using the links provided in section 2 of this report.</p><br>

        <p>As a result of this, when working on a similar project, or developing this one further, more research into the database models will be carried out and more development will be spent on the structure before implementation. Additional research into the technology required would also have given an indication of the amount of time involved in applying new technologies and languages, such as OOP, to a project before having any knowledge or understanding of that particular technology.</p><br>

        <p>With regards to research organisation, it would have been more effective to have separated the participants into user types however, the user research and competitive research was successful in compiling a list of features and functionality for the users when then led onto the implementation phase.</p><br>

        <p>The first prototype of the web app meets the most important user requirements where clients can book an appointment (as seen in figures 1-9) both sets of users can register, login and then logout of the system. The app also recognises which type of user they are logged in as and restricts their access to other sections based on this. For the professional user, there is functionality which allows them to create their business profile, which can subsequently be edited. The services businesses offer can also be added to their profile to enable their clients to book treatments.</p><br>

        <p>To use the booking system, a user searches for a business using a keyword or term which is part of the business name or address and this search facility was identified as a priority during the proposal stage of the project. They can then search for a specific treatment using a keyword search, or they can view all services offered by their selected business. Once the business and treatment have been chosen, this data is shown on the booking page and the user selects a date and time slot using the calendar and form functionality. This, along with the user’s inputted personal details, is sent to the business via email and shown on the website to the user. All of the functionality is implemented using SQL and PHP.</p><br>

        <p>Additional features include the registration system where users can register as a professional or client. Client users are able to register for free, and registration is not necessary to be able to make a booking.</p><br>

        <p>After registering, clients and professionals are able to login to the system which matches the input data with the data on the database and uses PHP sessions to carry the data from one page to another so that the user is always logged in, until they end the session by logging out.</p><br>

        <p>Testing and development is an ongoing process and additional functionality from the original user requirements, as well as new features, are listed and ready to be implemented.  As an example, professional users would be required to purchase a license prior to registration which is not implemented on the prototype but representational pages are in place to help with the flow of the website.</p><br>

        <p>As a fully functioning mobile business management system, there are many more elements which can be researched and implemented before this application is able to be used effectively, however the main functionality is in place and can be built on and developed.</p><br>
        </span>
        
        <!-- discussion -->
        <br><h3 class="text-left">DISCUSSION</h3>
        <span class="text-justified">
        <p>The concept for this application was created from a lack of suitable software for mobile beauty businesses and research shows that this is still the case. Current software is targeted at beauty businesses based in salons or mobile businesses which have constant internet access and these are two of the scenarios regarding mobile business discussed in the summary of the research report in Appendix I. In terms of other software in the market, these can be very expensive to small businesses, especially those where there is one employee. They are often aimed at larger businesses and research shows that they attempt to provide too many services which makes them unusable for some businesses who need a simpler product.</p><br>

        <p>As has been previously discussed, one of the unique and innovative features of this software will be to enable offline access for professional users who will not have to rely on mobile internet services in order to use the application. Additionally, due to the web application being developed for beauty businesses by a developer who understand this type of business, this will provide more insight into how it can be used effectively for clients and professional users. Having access to potential users who will utilise the application in different ways will also be of great benefit for further development, and as this research is conducted on a more personal level, the product will be more successful in appealing to smaller, mobile businesses.</p><br>

        <p>The intention was always to continue developing this project beyond the deadline for the professional users who assisted with the project research. Having issues with the implementation and elements of this being more difficult than anticipated has led to a revision of some aspects of the project and how to proceed with additional implementation, such as changes to the booking system in terms of time slots, rather than specific appointment times.</p><br>

        <p>For further development, a new plan will be researched and created, as well as dividing the users into two groups and looking into a more detailed and tested site structure. Also included with be: researching and implementing the offline functionality, providing a form for users to contact the developer, creating a page about the application, changing the design of the project inline with the mockups created, making adjustments to the navigation system as per feedback from the user testing, enabling professional users to manage their employees and working hours, adding the purchase functionality and developing a support system for all users.</p><br>

        <p>With regards to future projects, more specific details are required when conducting research into the technologies needed and to understand what is achievable within the time constraints given. For example, it was important to recognise that being able to use this application offline would be a vital and unique feature but lack of understanding of the technology required to implement this was not advanced enough and time constraints did not allow for this functionality to be researched, learned and implemented.
        </p><br>
        </span>
        
        <!-- conclusion -->
        <br><h3 class="text-left">CONCLUSION</h3>
        <span class="text-justified">
        <p>This project has been successful in implementing the appointment slot booking system, as well as the registration, login and logout functionality and other features.</p><br>

        <p>In terms of designing the structure of the project, this needs to be carried out in much more detail and tested thoroughly using mockups before starting any implementation. It would also be beneficial to conduct more user testing and evaluation to ensure that the workflow is suitable.</p><br>

        <p>Overall, this project has been successful in terms of a user and as a developer, and it has helped to focus future career plans on working with this technology and on these types of products. In addition, having a working prototype, code and documentation to feature in a digital portfolio is an advantage and will help to showcase skills and experience.
        </p><br>
        </span>
        
        <!-- web app button -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <span id="cv_btn">
                <a href="../files/Michelle_Abbasipour_Third_Year_Report.pdf">
                    <button type="button" class="btn btn-info btn-lg">Download Report</button>
                </a>
            </span>
        </div>
        
        
        
        
        
        
        
        
    </div><!-- /main content -->
        
    </div><!-- /inside container -->

</div><!-- /.container -->

<?php
include '../includes/footer.php';
?>