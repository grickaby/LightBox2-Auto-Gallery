<?php

//======================================================================
// LightBox2 Auto Gallery
// A light weight PHP and LigthBox2 powered Auto Gallery Script
// 
// Version 1.1.1
// Author: Geoffrey Rickaby
// URL: http://github.com/grickaby/LightBox2-Auto-Gallery
// 
// To use, just drop an include on the page where you want a gallery
// example - include('include/gallery.php'); 
// 
// Required Frameworks
// jQuery v 1.11.0+
// Ligthbox2 v 2.7.1+ 
// For thumbnail styleing use built in style sheet
// 
// Updates:
// 1.1.1 - PHP Optimizations
// 1.1.0 - The plugin now pulls captions from the file name
// 1.0.0 - Initial Release
//======================================================================
//Config Me
$galleryName = "lawncare"; //Set the name of the gallery
$maxWidth = 200; //Set the max width for the thumbnails
$maxHeight = 200; // Set the max height for the thumbnails
$location = "gallery/*"; //Location of the images
$captions = true; //Do you want captions? true or false
$separator = "_"; //If you want captions, put the character here that separates the words.
$allowed = array('gif', 'png', 'jpg', 'jpeg'); //Allowed file extensions

//Run Me
$i = 0;
$the_caption = '';
$images = glob($location);
foreach ($images as $image) :

    $file = pathinfo($image, PATHINFO_EXTENSION);

    if (in_array($file, $allowed)) :

        if ($captions) :
            $caption = str_replace($separator, ' ', pathinfo($image, PATHINFO_FILENAME));
            $the_caption = "data-title='" . $caption . "'";
        endif;

        echo "<a href='" . $image . "' data-lightbox='" . $galleryName . "' " . $the_caption . "><img class='lb-thumb' data-lightbox='image-" . $i++ . "' src='" . $image . "' width='" . $maxWidth . "' height='" . $maxHeight . "' /></a>";

    endif;

endforeach;
?>