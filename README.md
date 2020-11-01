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
## If you use api routes add to /app/Http/Kernel.php middlewares AddQueuedCookiesToResponse and StartSession
```php
    'api' => [
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            'throttle:60,1',
            'bindings',
        ],
``` 