#!/bin/bash

echo "Database import from remote stating server to local."

if [ -f .env ]
then
    export $(cat .env | sed 's/#.*//g' | xargs)
else
    export LOCAL_WP_PATH="./"
fi

echo "Exporting production database on remote server."
ssh travelstogreenland@172.105.68.33 wp db export --add-drop-table travelstogreenland.sql --path='files/' &> /dev/null

echo "Downloading production export to local."
scp -r travelstogreenland@172.105.68.33:/sites/travelstogreenland.com/travelstogreenland.sql storage/dev/

echo "Backup local database."
wp db export --add-drop-table storage/dev/travelstogreenland.$(date +%s).backup.sql --path="${LOCAL_WP_PATH}"

echo "Importing production to local database."
wp db import storage/dev/travelstogreenland.sql --path="${LOCAL_WP_PATH}" &> /dev/null

echo "Cleaning up."
rm storage/dev/travelstogreenland.sql
ssh travelstogreenland@172.105.68.33 rm travelstogreenland.sql

echo "Search and replace links for local environment."
wp search-replace 'https://travelstogreenland.com' 'http://travelstogreenland.dev.anu.test' --path="${LOCAL_WP_PATH}" &> /dev/null
wp option update blogname "TravelsToGreenland.test" --path="${LOCAL_WP_PATH}" &> /dev/null

echo "Done."