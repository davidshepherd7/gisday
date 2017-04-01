#!/bin/bash

set -o errexit
set -o nounset

mysql gisday < show.sql
