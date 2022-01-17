<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?>">    
        <meta charset="utf-8">
        <meta name="author" content="jsm33t via rhythm / themeforest">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- CSS -->
		 <link rel="stylesheet" href="/resources/css/maincur.css">
        <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="/resources/css/style.css">
        <link rel="stylesheet" href="/resources/css/style-responsive.css">
        <link rel="stylesheet" href="/resources/css/animate.min.css">
        <link rel="stylesheet" href="/resources/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="/resources/css/owl.carousel.css">
        <link rel="stylesheet" href="/resources/css/magnific-popup.css">

    <style>
         body {
            margin: 0;
            --color-link: #000;
            --color-link-hover: #040203;
            --color-content: #040203;
            --font-alt: freight-display-pro, serif;
            color: var(--color-text);
            background-color: var(--color-bg);
            font-family: soleil, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
           
            --cursor-stroke: <?php echo $cur_stroke?>;
            --cursor-fill: none;
            --cursor-stroke-width: 1px;
         }
         
::-webkit-scrollbar {
  width: 0px;
}

.center_text {
  text-align: center;
}
.justify {
  text-align: justify;
  text-justify: inter-word;
}
.rcorner10
{
    border-radius: 10px;
}



    </style>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","/includes/livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
    </head>
  
    <body class="appear-animate">
    
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Logo -->
            <!-- Your text or image into link tag -->
            <div class="fm-logo-wrap local-scroll">
                <a href="special-photographer-1.html" class="logo"><img src="/resources/images/j_logo_<?php echo $logo ?>.svg" width="152" height="54" alt="" /></a>
            </div>
            <!-- End Logo -->
            
            <!-- Menu Button -->
            <a href="#" class="fm-button"><span></span>Menu</a>
            <!-- End Menu Button -->
            
            <!-- Menu Overlay -->
            <div class="fm-wrapper" id="fullscreen-menu">
                <div class="fm-wrapper-sub">
                    <div class="fm-wrapper-sub-sub">
                        
                        <ul class="fm-menu-links local-scroll">
                            <li>
                                <a href="/" class="<?php echo $home?> ">Home</a>
                            </li>
                            <li>
                                <a href="/music" class="<?php echo $music?> ">Music</a>
                            </li>
                            
                            <!-- Item With Sub -->
                           
                            <!-- End Item With Sub -->
                            <li>
                                <a href="/gallery" class="<?php echo $gallery?>">GALLERY</a>
                            </li>
                            <li>
                                <a href="/archive" class="<?php echo $archive?>">ARCHIVE</a>
                            </li>
                            <li>
                                <a href="/apps" class="<?php echo $apps?>">APPS</a>
                            </li>
                            <li>
                                <a href="/shop" class="<?php echo $me?>">ME</a>
                            </li>
                            <li>
                                <a href="/shop" class="<?php echo $shop?>">SHOP</a>
                            </li>
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="fm-has-sub">Search <i class="fa fa-search"></i></a>
                                <ul class="fm-sub">
                                    <li>
                                        <div class="mn-wrap">
                                            <form method="post" class="form align-center">
                                                <div class="search-wrap inline-block fm-search">
                                                   

                                                   
<input type="text" class="form-control search-field round" size="30" onkeyup="showResult(this.value)"  placeholder="Search...">
<div id="livesearch"></div>

                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Item With Sub -->
                            
                        </ul>
                        
                        <!-- Social Links -->
                        <div
                         class="fm-social-links">
                         <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                         <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-soundcloud"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-spotify"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                        <!-- End Social Links -->
                        
                    </div>
                </div>
                
            </div>
            <!-- End Menu Overlay  -->
   