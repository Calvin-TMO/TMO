# TMO

*Install*

1. Have an http server running.

2. Have PHP >= 5.5.9

3. Have MySQL or postgres installed.

4. Create user and database in SQL and link to .env file.

5. Clone repo, point httpd document root at public/ folder, with FollowSimLinks enabled.

6. Run `composer install` in the repo folder.

7. Make httpd able to write to bootstrap/ and storage/ folders.
    `sudo chown :www-data -R bootstrap/ storage/`
    OR
    `sudo chown :apache -R bootstrap/ storage/`
    AND
    `sudo chmod g+w -R bootstrap/ storage/`

8. If seed data is wanted, run `php artisan migrate:refresh --seed`

