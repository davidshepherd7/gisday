#!/bin/bash

set -o errexit
set -o nounset

SCRIPTDIR="$( cd "$(dirname "$(readlink -f "${BASH_SOURCE[0]}")")" && pwd )"
cd "$SCRIPTDIR"

# Initial setup
sudo apt-get update
sudo apt-get install -yq apache2 mariadb-server libapache2-mod-php7.0 php7.0 php7.0-mysql composer
sudo service apache2 restart

composer install
