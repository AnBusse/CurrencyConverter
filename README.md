# CurrencyConverter
A small web application to convert currencies, fetching data from an API.

####Prerequisites
This project runs best on Linux or MAC on PHP 7.1.

###How to get Started
1. Clone the repository from https://github.com/AnBusse/CurrencyConverter
2. Cd to the directory of the cloned project
3. Copy .env.dist and name it .env
4. At the DATABASE_URL, replace db_user, db_password and db_name with appropriate values (standardly, this is root, root, Symfony)
5. Run composer install (you might have to install [Composer](https://getcomposer.org/download/) on your PC first) and provide standard values if prompted to do so. 
    Make sure the database name corresponds to the one provided in the DATABASE_URL in .env                                                                    
6. Run php bin/console server:start
7. To create the database, run: php bin/console doctrine:database:create
8. Done: check out the application on [http://localhost:8000](http://localhost:8000)


###Documentation

I chose to realize this showcase in PHP 7.1 and 
Symfony 4 in combination with a Twig frontend 
to demonstrate my skills in this framework.
The implementation of the Model View Controller (MVC) principles is also showcased within this project.
The layout was provided by the free template [Epilogue](https://templated.co/epilogue).

I chose to use the Fixer API because it returns a JSON object, which I find easier to process than XML.

The installation of bundles is done with the help of Composer. 
A fairly standard set of bundles was used in this project.

For development, the application runs under the Symfony-native localhost webserver on port 8000.
In case of further development, a docker container could be included, but for the time being, 
the inbuilt functionalities of Symfony seem sufficient.

Authorization is done with the help of the FOSUser Bundle to facilitate authorization.
For this, the FOSUser templates were not overridden for time reasons.


### Time Spent
* Initial creation of project and setting up the template: ~0.5h
* Setting up FOSUserBundle for authentification: ~0.25h
* Creating and adapting entities for User (needed for authentification), Currency and ConverterFormType ~0.75h
* Form handling and debugging: ~ 1h
* Switching to a different API endpoint (from ?latest to ?convert) to increase userfriendliness: ~0.5h
* Writing this documentation ~ 0.25h
