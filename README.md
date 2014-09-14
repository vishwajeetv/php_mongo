php_mongo
=========

Learning mongodb with php

Find presentation for introduction to mongodb here
http://slides.com/vishwajeetvatharkar/large-scale-databases

### Note for PHP MongoDB Driver Installation
1. Copy `driver/php_mongo.dll` file to `php/ext` directorty of your web server. (While using XAMPP, it's typically `C:\xampp\php\ext` directory)
2. Now open your PHP Configuration file (`php.ini`) (open via Xampp control panel -> Apache -> Config -> php.ini ) and add following line to it. `extension=php_mongo.dll`
3. Now Save the file and restart the server.
4. Installation finished, hurray! :-)
