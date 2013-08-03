Wikistage website
=================

This is a POC for Wikistage new website, using Symfony2.

Installation
------------

Get files, create a database.
Copy ``parameters.yml.dist`` to ``parameters.yml``a nd customize values.

Run composer - typically ``composer install`` (do not update at first!).

Update database schema:
``app/console doctrine:schema:update --force``

Install assets:
``app/console assets:install web --symlink``
