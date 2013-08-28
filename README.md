Wikistage website
=================

This is a POC for WikiStage new website, using Symfony2.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/568dbc28-a81c-4a1a-8931-5c45a7d733be/big.png)](https://insight.sensiolabs.com/projects/568dbc28-a81c-4a1a-8931-5c45a7d733be)

Installation
------------

Copy ``parameters.yml.dist`` to ``parameters.yml`` and customize values.

Run composer - typically ``composer install`` (do not update at first!).

Run ``./reset.sh`` script.
It will clear cache, [clear and] create the database, load fixtures.
It'll dump assets too, by default in ``prod`` mode (dumped once for all), you can alter change this: ``./reset.sh dev``

You can now log in to ``/admin/dashboard`` using ``admin`` username and ``admin`` password.
