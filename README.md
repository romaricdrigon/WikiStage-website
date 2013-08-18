Wikistage website
=================

This is a POC for WikiStage new website, using Symfony2.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/a31d356d-3a88-439b-9fd5-0e9648a1329d/big.png)](https://insight.sensiolabs.com/projects/a31d356d-3a88-439b-9fd5-0e9648a1329d)

Installation
------------

Get files, create a database.
Copy ``parameters.yml.dist`` to ``parameters.yml``a nd customize values.

Run composer - typically ``composer install`` (do not update at first!).

Update database schema:
``app/console doctrine:schema:update --force``

Install assets:
``app/console assets:install web --symlink``
