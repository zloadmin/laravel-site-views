## Install 
`composer require zloadmin/site-views:dev-main`
### Add method getSiteViewId to App\Client class
```php
static function getSiteViewId() : int
{

}
```
### Run migration
`php artisan migrate`
### Add midleware where you need count views
```php
Route::midleware('site-views')->get('/', function () {
    
});
```