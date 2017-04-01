#!/bin/bash

set -o errexit
set -o nounset

# Initial setup
sudo apt-get update
sudo apt-get install apache2 mariadb-server libapache2-mod-php7.0 php7.0 php7.0-mysql -yq
sudo service apache2 restart
