<?php

$siteKey = "6Lc0sLIUAAAAAEdjPGXw6SPFuyPkApwRK2ptfTfs";
$secretKey = "6Lc0sLIUAAAAADTkZwS3OKU3eEx1lXXvXhWvE_ss";

/*
big-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//
//die;

switch(THIS_PAGE){

    case '../index.php':
        $title = "Crosby's WEB120 Title Page";
        $PageID = "Welcome";
    break;
        
    case 'contact.php':
        $title = "Contact Crosby";
        $PageID = "Contact Crosby";
    break;
        
    case 'index.php':
        $title = "Crosby's WEB120 BIG Page";
        $PageID = "Crosby's WEB120 BIG Page";
    break;
        
    case 'webcams.php':
        $title = "Webcams - Crosby's BIG";
        $PageID = "Webcams";

    default:
        $title = THIS_PAGE;
}

$nav1['../index.php'] = "Welcome";
$nav1['index.php'] = "Big";
$nav1['media'] = "Media";
$nav1['webcams.php'] = "Webcams";
$nav1['research'] = "Research";
$nav1['contact.php'] = "Contact Crosby";
    
/* 
Creating a function to generate links and apply the class=selected to currently called page
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else if($url == 'media'){
            $myReturn .= "<li class=\"dropdown\"><a href=\"javascript:void(0)\" class=\"dropbtn\">$text</a><div class=\"dropdown-content\"><a href=\"calendar.php\">Calendar</a><a href=\"accessibility.php\">Web Accessibility Video</a><a href=\"map.php\">School Address</a></div></li>";
        }else if($url == 'research'){
            $myReturn .= "<li class=\"dropdown\"><a href=\"javascript:void(0)\" class=\"dropbtn\">$text</a><div class=\"dropdown-content\"><a href=\"research1.php\">Responsive vs. Mobile</a><a href=\"research2.php\">Galleries</a><a href=\"research3.php\">Flexbox</a><a href=\"research4.php\">Shopping Carts</a></div></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}


?>
