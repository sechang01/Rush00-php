<!DOCTYPE html>
<html>
<head>
    <title>Store</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <style>
    </style>

</head>
<body>
<!--Main Container starts here-->

<div class-"main_wrapper>
	
    <!--Header starts here-->
    <div class="header_wrapper">
        <img id="logo" src="images/logo.gif" />
        <img id="banner" src="images/ad_banner.gif" />
    </div>
    <!--Header ends here-->

    <!--Navagation bar starts here-->
    <div class="menubar">
        <ul id="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">All Products</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        
        <div id="form">
            <form method="get" action"results.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Search a Product" / >
                <input type="submit" name="search" value="Search" />
            </form>
        </div>
        
    </div>
    <!--Navagation bar ends here-->
    
    <!--Content wrapper starts here-->
    <div class="content_wrapper">
    
        <div id="sidebar">
            
            <div id="sidebar_title">Categories</div>
            
            <ul id="cats">
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Computers</a></li>
                <li><a href="#">Mobiles</a></li>
                <li><a href="#">Cameras</a></li>
                <li><a href="#">iPads</a></li>
                <li><a href="#">Tablets</a></li>
            </ul>
                        
            <div id="sidebar_title">Brands</div>
            
            <ul id="cats">
                <li><a href="#">HP</a></li>
                <li><a href="#">DELL</a></li>
                <li><a href="#">Motorola</a></li>
                <li><a href="#">Sony Ericson</a></li>
                <li><a href="#">LG</a></li>
                <li><a href="#">Apple</a></li>
            </ul>
    
        </div>
        
    <div id="content_area">This is content area</div>
                
    <div id="footer">This is the footer</div>
    <!--Content wrapper ends here-->
    
</div>
<!--Main Container ends here-->


</body>


</html>









<!--
    Data management: You need to implement, either your own data management
(creation, modification and removal of data) in the format you want (ex: CSV), or
using mysql. The data management is a key element to the design of your site.

• User management: You must be able to create and delete a user account. The
login to your site is essential before one can validate your basket, however, it can
be possible to fill it before being identified. To do that, look at PHP sessions
-->