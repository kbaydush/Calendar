# integr8tor

- Run Laravel `php artisan serve --port=8080` 

## Setting up
- create `.env` file and generate `API_KEY` with `cp .env.example .env & php artisan key:generate`
- install node nad yarn
- from project root catalog run `yarn install`
- to develop the frontend run `yarn watch`

### Preparing database
- create empty database with `touch database/database.sqlite`
- run `php artisan migrate`
- run `php artisan db:seed`


## Scripts
- to verify coding style run `composer analyse`
- to run test use `composer test`
- for both run `composer check`
- to fix coding style run `composer fix`


