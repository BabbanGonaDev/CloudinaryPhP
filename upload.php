<?php
//Requre cloudinary files
require 'cloudinary/autoload.php';
require 'cloudinary/src/Cloudinary.php';
require 'cloudinary/src/Uploader.php';
require 'cloudinary/src/Api.php';

//Cloudinary Configuration
\Cloudinary::config(array( 
  "cloud_name" => "XXXXXXXXX",  //cloudinary cloud name
  "api_key" => "XXXXXXXXXXXX", //cloudinary api key
  "api_secret" => "XXXXXXXXXXXXXX", //cloudinary api secret
  "secure" => true
));



?>