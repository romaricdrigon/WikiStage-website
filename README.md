Wikistage website
=================

This is a POC for WikiStage new website, using Symfony2.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/568dbc28-a81c-4a1a-8931-5c45a7d733be/big.png)](https://insight.sensiolabs.com/projects/568dbc28-a81c-4a1a-8931-5c45a7d733be)

Installation
------------

Get files, create a database.
Copy ``parameters.yml.dist`` to ``parameters.yml``a nd customize values.

Run composer - typically ``composer install`` (do not update at first!).

Update database schema:
``app/console doctrine:schema:update --force``

Install assets:
``app/console assets:install web --symlink``

Load fixtures:
``app/console doctrine:fixtures:load``

You can now log in to ``/admin/dashboard`` using ``admin`` username and ``admin`` password.
