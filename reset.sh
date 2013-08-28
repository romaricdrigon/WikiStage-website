#!/bin/bash
set -e

# Clear cache (dev & prod)
echo "Clearing cache (dev & prod mode)..."
rm -rf app/cache/*

# Database
./app/console doctrine:database:drop --force || true
./app/console doctrine:database:create
./app/console doctrine:schema:create

# Load fixtures
./app/console doctrine:fixtures:load --fixtures src/WikiStage/Bundle/CoreBundle/DataFixtures/ORM/

# Web folder
if [[ -n "$1" && "$1" == "dev" ]]
then
    # Dev mode - symlinked
    ./app/console assets:install --symlink web
else
    # Prod, static copy
    ./app/console assets:install web
fi

# Dump assets
if [[ -n "$1" && "$1" == "dev" ]]
then
    # Dev mode - will be recompiled each time
    ./app/console assetic:dump --env=dev --no-debug
else
    # Prod, dumped once for all
    ./app/console assetic:dump --env=prod --no-debug
fi
