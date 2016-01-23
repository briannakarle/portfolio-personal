<?php include ("config.php");?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$myTitle?></title>
<meta name="viewport" content="width=device-width"  />
<meta name="robots" content="noindex,nofollow"  />
<link rel="stylesheet" href="flexslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../lightbox.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../pgwslideshow.css">
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700|Cutive+Mono&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../styles.css">
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="../js/pgwslideshow.jquery.json"></script>
<script src="../js/package.json"></script>
<script src="../js/pgwslideshow.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		  /*$(window).load(function() {
			$('.flexslider').flexslider();
		  });
		  /*$(".img300").hover(function(){
			  $(".projectInfo").show();
		  });*/
		  
		 /* prepend menu icon */
		$('#nav-wrap').prepend('<p><i class="menuIcon fa fa-bars"></i> <span class="menu"> Menu </span></p><div class="clearFix"></div>');
		
		/* toggle nav */
		$("#nav-wrap").on("click", function(){
			$(".navMobile").slideToggle();
			$(this).toggleClass("active");
		});

		 $('.pgwSlideshow').pgwSlideshow();
		 
		 
		  $(".bjMainPage").mouseenter(
			 function(){$(".bjMainPageInfo").show();
			 
			  
		  });
		  
		  $(".kcMainPage").mouseenter(
			 function(){$(".kcMainPageInfo").show();
			 
			  
		  });
		  
		  $(".mbwMainPage").mouseenter(
			 function(){$(".mbwMainPageInfo").show();
			 
			  
		  });
		  
		  $(".bjMainPage").mouseleave(
			 function(){$(".bjMainPageInfo").hide();
			 });
			 
		  $(".kcMainPage").mouseleave(
			 function(){$(".kcMainPageInfo").hide();
			 });
			 
		  $(".mbwMainPage").mouseleave(
			 function(){$(".mbwMainPageInfo").hide();
			 }); 
			 
		 $(".show").toggle( //when click the element with the class of show, toggle following functions
	    function() {
			$(this).prev().show(); //get the previous sibling of current element and show it
			$(this).text("Show Less"); //replace text in current element with "show less"
		},
		
		function() {
			$(this).prev().hide(); //hide previous sibling of current element
			$(this).text("Show More"); //replace text i current element with "show more"
		}
		);
        
	});
</script>
</head>

<body>
    <header>
        <div id="logo">
            <h1><a href="index.php"><!--<span class="arrows">&lt;</span><span class="logoFirst">Brianna</span><span class="logoSecond">Karle</span><span class="arrows">&gt;</span>--><img src="../images/personallogo.png" alt="Brianna Karle"/></a></h1>
            <h2 class="subLogo">Web Development and Design</h2>
        </div>
        <nav id="navDesktop">
            <ul class="nav1">
                    <li class="navAbout"><a href="about.php">About</a></li>
                    <li class="navPortfolio"><a href="portfolio.php">Portfolio</a></li>
            </ul>
            <ul class="nav2">
                    <li class="navResume"><a href="resume.php">Resume</a></li>
                    <li class="navContact"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="clearFix"></div>
        <nav id="nav-wrap">
            <ul class="nav1 navMobile">
                    <li class="navAbout"><a href="about.php">About</a></li>
                    <li class="navPortfolio"><a href="portfolio.php">Portfolio</a></li>
                    <li class="navResume"><a href="resume.php">Resume</a></li>
                    <li class="navContact"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        
    </header>