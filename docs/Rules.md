# Project Versioning

## Ambientes

In project will go 1 environment

* The environment of production, contained in the Branch `Master`, more stable version of the project.

## Main Branches

* `Master` - contains the final product. 	


## Requirements

Clone this project

> git clone https://github.com/cpa-bayarea/Prontuario-eletronico.git

Update dependencies.

> composer update

Generate a new configuration key.

> php artisan key:generate

Rename the file `.env-example` to `.env` and set up your database.

Run the command to migrate the project database and seeders.

> php artisan migrate --seed

Run the command to start of server

> php artisan serve

Access `localhost:8000` to see your running project.

Follow the pass bellow, to start of versioning.


## Creating a Branch through the master

To start your contribuiting, take your branch of `master`. 

```bash
    $ git fetch
    $ git checkout master
    $ git pull origin master
    $ git checkout -b yourName-nameDemand

    Eg: $ git checkout -b douglas-document-versioning
    Obs: Avoid words capitalization at branch creation time. to avoid any kind of problems and to standardize the system.
```

## Submit your modifications of remote

```bash
    $ git add docs/Versionamento.md
    $ git commit -m"[ADD] Added Document of Versioning."
    $ git push origin yourbranch

```
After finish your claim, submit your branch to `master` through of pull request.

Any questions about this document or about versioning, send a message of one of the members or open a issue.
