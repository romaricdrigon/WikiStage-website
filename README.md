Wikistage website
=================

This is a [WikiStage](http://wikistage.org) new website, using Symfony2.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/568dbc28-a81c-4a1a-8931-5c45a7d733be/big.png)](https://insight.sensiolabs.com/projects/568dbc28-a81c-4a1a-8931-5c45a7d733be)

Installation
------------

Copy ``parameters.yml.dist`` to ``parameters.yml`` and customize values.

Run composer - typically ``composer install`` (do not update at first!).

Run ``./reset.sh`` script.
Two modes are available:

 * any mode, it will clear cache, [clear and] create the database, load fixtures
 * by default, assets are copied and dumped in ``prod`` mode (dumped once for all)
 * if you run ``./reset.sh dev``, assets are symlinked and Symfony2 watches for changes

You can now log in to ``/admin/dashboard`` using ``admin`` username and ``admin`` password.
