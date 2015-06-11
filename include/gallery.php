<?php
//======================================================================
// LightBox2 Auto Gallery
// A light weight PHP and LigthBox2 powered Auto Gallery Script
// 
// Version 1.0.0
// 
// To use, just drop an include on the page where you want a gallery
// example - include('include/gallery.php'); 
// 
// Required Frameworks
// jQuery v 1.11.0+
// Ligthbox2 v 2.7.1+ 
// For thumbnail styleing use built in style sheet
//======================================================================

//Config Me
$galleryName = "lawncare";
$maxWidth = 200; //Set the max width for the thumbnails
$maxHeight = 200; // Set the max height for the thumbnails
$location = "gallery/*"; //Location of the images
$allowed = array('gif', 'png', 'jpg', 'jpeg'); //Allowed file extensions

$i = 0;
$images = glob($location);
foreach ($images as $image) :
    $i++;
    $file = pathinfo($image, PATHINFO_EXTENSION);
    if (in_array($file, $allowed)) {
        echo "<a href='" . $image . "' data-lightbox='" . $galleryName . "'><img class='lb-thumb' data-lightbox='image-" . $i . "' src='" . $image . "' width='" . $maxWidth . "' height='" . $maxHeight . "' /></a>";
    }
endforeach;
?>