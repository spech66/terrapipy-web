# TerraPiPy ![Logo](https://github.com/spech66/terrapipy-web/blob/master/images/logo.png)
TerraPiPy is a collection of different projects to create easy to use tools for terrarium/aquarium/vivarium control and **automation** for the Raspberry Pi. TerraPiPy is short for "Terrarium + Raspberry Pi + Python" because snakes are cool (and some parts are written in Python).
The system can be run on a Raspberry Pi to setup, monitor and **control** [pimatic](https://github.com/pimatic/pimatic) to use many terrariums, aquariums and vivariums. A website is provided as a dashboard and the info tool provides data providers for other systems.

:sunny: :cloud: :crescent_moon: :arrow_right: :zap: :arrow_right: :snake: :tropical_fish: :turtle: :frog: :arrow_right: :heart_eyes:

# TerraPiPy Core, TerraPiPy Web and TerraPiPy Info
**[TerraPiPy Core](https://github.com/spech66/terrapipy)** or just TerraPiPy is a collection of tools, pre defines configurations and articles for best practices to geht pimatic up and running. Optionally **[TerraPiPy Web](https://github.com/spech66/terrapipy-web)** shows the data on a beautiful **website**.

![Screenshot](https://github.com/spech66/terrapipy-web/blob/master/images/screenshot_001.png)

# Features of TerraPiPy Web
**CURRENT STATUS: GUI PROTOTYPE**
* Dashboard
* Dashboard per terrarium, aquarium and vivarium
* Sensor overview
* Emergency shutdown
* Animal database
* Feeding reminder
* Actuator control

![Screenshot](https://github.com/spech66/terrapipy-web/blob/master/images/screenshot_002.png)

# Installation
## Install nginx or apache and PHP
    sudo apt-get install nginx
    sudo /etc/init.d/nginx start
    sudo apt-get install php5-fpm php5-curl
    
    sudo nano /etc/nginx/sites-available/default

Add index.php and uncomment the marked lines.

    index index.html index.htm index.nginx-debian.html;
    =>
    index index.php index.html index.htm index.nginx-debian.html;

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
    }
    
Test installation.

    cd /var/www/html
    sudo mv index.nginx-debian.html index.php

Insert code to index.php and open your browser for http://IP_OR_NAME_FROM_RASPBERRY_PI/

    <?php echo phpinfo(); ?>

Change permission for pi user.

    cd /var/www/
    sudo chgrp -R users html
    sudo chmod -R g+w html

## Install TerraPiPy Web

    cd /var/www/html
    git clone https://github.com/spech66/terrapipy-web.git terrapipy
    cd terrapipy
    cp config.php.example config.php
    nano config.php    
    
Open your browser and visit http://IP_OR_NAME_FROM_RASPBERRY_PI/terrapipy/

# Libraries
TerraPiPy Web makes use of external libraries.
* [AdminLTE](https://github.com/almasaeed2010/AdminLTE) - AdminLTE - Free Premium Admin control Panel Theme That Is Based On Bootstrap 3.x https://almsaeedstudio.com

# Other
Logo based on CC0 Image from https://pixabay.com/en/snake-python-serpent-green-reptile-312561/
