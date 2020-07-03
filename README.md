# CloudinaryPhP
This is to setup cloudinary file upload on php.

First thing is to download the require the cloudinary files
`require 'cloudinary/autoload.php';

require 'cloudinary/src/Cloudinary.php';

require 'cloudinary/src/Uploader.php';

require 'cloudinary/src/Api.php';
`

##  Default Upload
Use `\Cloudinary\Uploader::upload("file location");` to upload the picture to cloudinary.
This uploads to the default cloudinary home folder and assigns a random name to it.

##  Upload with parameters
You can customize the upload by adding parameters, such as file name, file folder and others
`$response_with_parameters =  \Cloudinary\Uploader::upload("file location",
    array(
    include parameters here
));
`

## Getting response
To get the uploaded file details, assign your upload to a variable, a json respnse is returned to it which you can get the file upload details from

Use a `var_dump($response)` to see all the returned keys and their values.

Visit the [Cloudinary Upload Page](https://cloudinary.com/documentation/upload_images)  for more information.