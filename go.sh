#!/bin/bash

set -o errexit
set -o nounset

SCRIPTDIR="$( cd "$(dirname "$(readlink -f "${BASH_SOURCE[0]}")")" && pwd )"
cd "$SCRIPTDIR"


# Create the databse
sudo mysql -u root <<EOF
DROP DATABASE IF EXISTS gisday;
CREATE DATABASE gisday;
GRANT ALL PRIVILEGES ON gisday.* TO 'david'@'localhost';
EOF

# Create the tables etc
mysql gisday < gisday-1.sql

./show.sh

# Copy files to server directory
sudo rm -rf /var/www/gisday/php/ /var/www/gisday/index.php
sudo cp index.php /var/www/gisday/index.php
sudo cp -r php/ /var/www/gisday/php/
