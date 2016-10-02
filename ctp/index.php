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
                <a href='mailto:me@michelleabbasipour.com?Subject: enquiry from michelleabbasipour.com'> 
                    me@michelleabbasipour.com
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
        
        <!-- ** sample work ** -->
        <h1 class='narrow magenta'>THIRD YEAR CREATIVE TECHNOLOGIES PROJECT</h1>
        
        <br>
        
        <!-- third year creative tech project -->
        <span>
        <p> During the third year of my degree, I was required to complete a project on a subject which interested
            me and I chose to create a mobile web app which will allow clients to book appointments with businesses
            in the beauty industry. The web app would also help professionals to manage different aspects of their
            businesses such as appointments, clients, their business profile, treatments and employees. The web app
            and documentation can be found using the buttons below.
        </p>
        
        <br>
        
        <!-- web app button -->
        <div class="col-xs-6 col-sm-6 col-md-6">
            <span id="cv_btn">
                <a href="/charm/public//pages/index.php">
                    <button type="button" class="btn btn-info btn-lg">Web App</button>
                    <br>(best viewed using a mobile device)
                </a>
            </span>
        </div>
        
        <!-- report button -->
        <div class="col-xs-6 col-sm-6 col-md-6">
            <span id="cv_btn">
                <a href="../ctp/report.php">
                    <button type="button" class="btn btn-info btn-lg">Report</button>
                </a>
            </span>
        </div>
        </span>
 
    </div><!-- /main content -->
        
    </div><!-- /inside container -->

</div><!-- /.container -->

<?php
include '../includes/footer.php';
?>