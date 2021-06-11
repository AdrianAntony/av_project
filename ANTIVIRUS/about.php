<?php
session_start();
error_reporting(0);
if($_SESSION['login_name']=="")
{
	include("header.php");
}
else{
	include("header1.php");
}
?>


        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
       
        <!-- Nav Bar End -->
        

        <!-- About Start -->
        <div class="about mt-125">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="img/about-2.jpg" alt="Image">
                            </div>
                            <div class="about-img-2">
                                <img src="img/about-1.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            
                            <h2>Learn About Us</h2>
                        </div>
                        <div class="about-text">
                            <p>
                            EasyEDU is a combination of Content Management System and Campus Management System perfectly designed and integrated. This product has been designed taking in to consideration of the current Campusing system and the suggestions and reviews provided by Patrons in the Education Sector. Some areas of this product are still in its development stage. So we heartfully welcome all the suggestions and reviews that you may have while using this product.                            </p>
                            <p>
                            A content management system, often abbreviated as CMS, is software that helps users create, manage, and modify content on a website without the need for specialized technical knowledge.                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        


        


        
<?php
include("footer.php");

?>