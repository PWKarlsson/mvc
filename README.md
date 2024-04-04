<!-- author: Pontus Karlsson -->

![Symfony image](.img/symfony.png)

My web application
==================

This is a guide for how to use the GitHub respository for my web
application.

Clone the repo
----------------

The first thing you have to do in order to clone this repo is to make sure that you have git installed in your terminal.

Once you make sure you have git installed, click on "code" in the top right corner and copy the SSH-key.

In your terminal, type "git clone <SSH-key>", replace <SSH-key> with they copied key and press Enter. Now you will have access to the repo on your local machine.

Access the web application
----------------------

To access the web application you must start the server on your terminal, make sure that you are in the catalog "report" alternatively the catalog you chose to create when cloning the repo. Start the server with the command "php -S localhost:8888 -t public".

The application runs at port 8888 so in your web browser go to "http://localhost:8888/". Now you should be on the landing page and have full access to the web application.