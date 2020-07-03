# CloudinaryPhP
This is to setup cloudinary file upload on php.


# Default Upload
Use \Cloudinary\Uploader::upload("file location"); to upload the picture to cloudinary.
This uploads to the default cloudinary home folder and assigns a random name to it.

# Upload with parameters
You can customize the upload by adding parameters, such as file name, file folder and others

# Getting response
To get the uploaded file details, assign your upload to a variable, a json respnse is returned to it which you can get the file upload details from

Use a var_dump($response) to see all the returned keys and their values.