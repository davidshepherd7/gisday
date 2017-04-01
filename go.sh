#!/bin/bash

set -o errexit
set -o nounset

# Create the databse
sudo mysql -u root <<EOF
DROP DATABASE IF EXISTS gisday;
CREATE DATABASE gisday;
GRANT ALL PRIVILEGES ON gisday.* TO 'david'@'localhost';
EOF

# Create the tables etc
mysql gisday < gisday-1.sql
