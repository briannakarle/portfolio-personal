<?php
//config.php - will allow us to swap html pieces dynamically
//echo basename($_SERVER['PHP_SELF']);
//die;


//--- end config area

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
  case "index.php":
  $myTitle = "Brianna Karle Web Development";
  break;
  
  case "about.php":
  $myTitle = "About Brianna Karle";
  break;
  
  case "portfolio.php":
  $myTitle = "Brianna Karle- Portfolio";
  break;

  case "resume.php":
  $myTitle = "Brianna Karle- Resume";
  $myPageId = "Brianna Karle- Resume";
  break; 
  
  case "contact.php":
  $myTitle = "Contact Brianna Karle";
  break;
  
  default:
  $myTitle = THIS_PAGE; #unique

}
// echo $myTitle;



?>