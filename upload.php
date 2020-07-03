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


//Upload File without parameters
$response_without_parameters = \Cloudinary\Uploader::upload("file location"); //pass in file location/url

/*response contains the details of the uploaded file for instance 
to get the link to the uploaded file and the file name do the following */

$file_name = $response_without_parameters['public_id']; //can be saved in the database to reference later
$file_link = $response_without_parameters['url']; //can be saved in the database to reference later



//Upload File with parameters
$response_with_parameters =  \Cloudinary\Uploader::upload("file location", //pass in file location/url
    array(
    "folder" => "folder to upload to/", //cloudinary folder to upload the file to
    "public_id" => "file name" //name to save the file as on cloudinary
));


?>