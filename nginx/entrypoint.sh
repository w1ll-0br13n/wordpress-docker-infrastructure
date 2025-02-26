#!/bin/sh

# Space-separated lists of site names
moneysites="casino-en-ligne jeux-ca"
minisites="yakeda imaosun"

# Generate high-traffic site configs (Money sites)
for site in $moneysites; do
  export SITE_NAME="$site"
  export CONTAINER_NAME="$site"
  envsubst '$$SITE_NAME $$CONTAINER_NAME' < /etc/nginx/templates/moneysites.conf.template > /etc/nginx/conf.d/"$site".conf
done

# Generate low-traffic site configs (Mini sites)
for site in $minisites; do
  export SITE_NAME="$site"
  export CONTAINER_NAME="minisites"
  envsubst '$$SITE_NAME $$CONTAINER_NAME' < /etc/nginx/templates/minisites.conf.template > /etc/nginx/conf.d/"$site".conf
done

# Start Nginx
exec nginx -g "daemon off;"
