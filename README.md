php_mongo
=========

Learning mongodb with php

Find presentation for introduction to mongodb here
http://slides.com/vishwajeetvatharkar/large-scale-databases

### Note for MongoDB installation

Intall MongoDB from suitable package for your OS / platform

Use command prompt with administrative privilages and input following instructions

    mkdir c:\data\db
    mkdir c:\data\log

    echo logpath=c:\data\log\mongod.log> "C:\Program Files\MongoDB 2.6 Standard\mongod.cfg"

    echo dbpath=c:\data\db>> "C:\Program Files\MongoDB 2.6 Standard\mongod.cfg"

    sc.exe create MongoDB binPath= "\"C:\Program Files\MongoDB 2.6 Standard\bin\mongod.exe\" --service --config=\"C:\Program     Files\MongoDB 2.6 Standard\mongod.cfg\"" DisplayName= "MongoDB 2.6 Standard" start= "auto"

    net start MongoDB

### Note for PHP MongoDB Driver Installation
1. Copy `driver/php_mongo.dll` file to `php/ext` directorty of your web server. (While using XAMPP, it's typically `C:\xampp\php\ext` directory)
2. Now open your PHP Configuration file (`php.ini`) (open via Xampp control panel -> Apache -> Config -> php.ini ) and add following line to it. `extension=php_mongo.dll`
3. Now Save the file and restart the server.
4. Installation finished, hurray! :-)
