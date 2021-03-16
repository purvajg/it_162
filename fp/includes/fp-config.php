<?php
date_default_timezone_set('America/Los_Angeles');

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default


switch(THIS_PAGE){

    case 'index.php':
        $title = "The App";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    // case 'aia.php':
    // $title = "Purva's Final Project AIA (Client work)";
    // $logo = "fa-universal-access";
    // $logo_color = ' style="color:#00f"';
    // break;

    // case 'contactme.php':
    //     $title = "Purva's contact page";
    //     $logo = 'fa-pencil-square-o';
    //     $PageID = 'Contact Purva';
    //     $logo_color = ' style="color:#0f0"';
    // break;


    default:
        $title = THIS_PAGE;
        $logo = '';
        // $logo = 'fa-home';
        $PageID = 'Welcome';

}

//place URL & labels in the array here for navigation:
    // $nav1['index.php'] = "Welcome";
    // $nav1['big/index.php'] = "Big";
    // $nav1['aia.php'] = "AIA";
    // $nav1['flowchart.php'] = "Flowchart";
    // $nav1['fp/index.php'] = "Final Project";
    // $nav1['contactme.php'] = "Contact Purva";
    // $nav1['template.php'] = "Template";
    

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>
