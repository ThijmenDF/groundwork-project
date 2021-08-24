# Groundwork Default Project

This is a blank default project for the Groundwork framework

**Server / directory root should be in ./public**

* Define your routes in `./routes/`
* Add your controllers in `./App/Controllers/`
* Add your models in `./App/Models/`
* Set your mysql connection in `.env` (copy `.env.example` if needed)

## Migrations

Add your migrations in `./database/migrations/`. Order is based on their sorted name.
Migrations should implement the `Groundwork\Migration\Migration` interface.

Migrations can be run by accessing these urls: 
* `/migrations/migrate` to migrate
* `/migrations/revert` to revert
* `/migrations/seed` to run all seeders
* `/migrations/purge` to completely reset the entire database

