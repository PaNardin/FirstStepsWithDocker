Collection of Docker Apps V1.0
===============================

![Docker](https://www.docker.com/sites/default/files/legal/small_v.png "Docker :)")

Summary
-------

This repository gathers different applications deployable with the "Docker" tool. 

Each application can be run separately, using the right folder and the according configuration in the docker-compose.yml file.

Needed tools
------------

#### Docker
        $ apt-get update && apt-get upgrade && apt-get install apt-transport-https ca-certificates xz-utils iptables aufs-tools git


        $ echo "deb https://apt.dockerproject.org/repo debian-jessie main" > /etc/apt/sources.list.d/docker.list
        $ apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D


        $ apt-get update && apt-get install docker-engine


        $ systemctl start docker
        $ systemctl enable docker


        add this line in the **/etc/default/grub** config: 
        GRUB_CMDLINE_LINUX="cgroup_enable=memory swapaccount=1"


        $ grub-mkconfig -o /boot/grub/grub.cfg

#### Docker-compose
        $ vim ~/.profile
        add this: 
        " alias docker-compose='docker run -v "$(pwd)":"$(pwd)" \
                -v /var/run/docker.sock:/var/run/docker.sock \
                -e UID=$(id -u) -e GID=$(id -g) \
                -w "$(pwd)" \
                -ti --rm xataz/compose:1.8' "


        $ . ~/.profile

Commands
--------

##### start containers:
        $ docker-compose up -d

##### kill containers: 
        $ docker-compose stop

##### super clean + run: 
        $ docker-compose stop && docker-compose rm && docker-compose up -d

Applications available in this repository
-----------------------------------------
#### Nginx (using boring-ssl for secured connections)
        - For Basic authentication add these two lines in your sites-enabled:
                auth_basic "Restricted Area";
                auth_basic_user_file /passwds/.htpasswd;    
Follow this tutorial to link fail2ban jails with nginx auth: 
https://snippets.aktagon.com/snippets/554-how-to-secure-an-nginx-server-with-fail2ban 

#### Nextcloud (using mariadb)
    -   Add a modification in the config.php file, for "trusted_domains":
          'trusted_domains' => 
          array (
             0 => 'localhost',
             1 => 'yourdomain.dtl',
          ),
    -   Replace the "XXXX" in the docker-compose.yml config file by your own configuration

Coming up soon
--------------
#### Add the basic authentication with Nginx
#### Rutorrent
#### Sickrage
#### Cakebox
#### Plex
