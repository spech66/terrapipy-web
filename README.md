# TerraPiPy Web
**CURRENT STATUS: GUI PROTOTYPE**

**TerraPiPy Web** is a modern and mobile ready web interface for the [TerraPiPy](https://github.com/spech66/terrapipy) system. ![Logo](https://github.com/spech66/terrapipy-web/blob/master/images/logo.png)

TerraPiPy provides easy to use tools for terrarium/aquarium/vivarium control and **automation** for the Raspberry Pi written in Python and based on [pimatic](https://github.com/pimatic/pimatic). TerraPiPy is short for "Terrarium + Raspberry Pi + Python". The core is written in Python and can be run on a Raspberry Pi to setup, monitor and **control** pilight to use many terrariums, aquariums and vivariums.

![Screenshot](https://github.com/spech66/terrapipy-web/blob/master/images/screenshot_001.png)

# Features
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
    sudo apt-get install php5-fpm
    
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

    cd /var/www
    git clone https://github.com/spech66/terrapipy-web.git terrapipy
    
Open your browser and visit http://IP_OR_NAME_FROM_RASPBERRY_PI/terrapipy/

# Libraries
TerraPiPy Web makes use of external libraries.
* [AdminLTE](https://github.com/almasaeed2010/AdminLTE) - AdminLTE - Free Premium Admin control Panel Theme That Is Based On Bootstrap 3.x https://almsaeedstudio.com
