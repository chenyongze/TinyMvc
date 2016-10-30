
TinyLara is a Simple PHP Framework based on Composer!

## Start
### Download:

```bash
git clone https://github.com/chenyongze/TinyMvc
cd TinyMvc
```


### Install dependencies:

```bash
composer update
```

Then modify `config/database.php` with right information and import `demo.sql`.

### Just see:

*config/routes.php :*

```php
Route::get('/', 'HomeController@home');

Route::any('foo', function() {
  echo "Foo!";
});
```

*app/controllers/HomeController.php :*

```php
public function home()
{
  // mail sample
  Mail::to('foo@bar.io')->from('bar@foo.io')
                        ->title('Foo Bar')
                        ->content('<h1>Hello~~</h1>')
                        ->send();
  // redis sample
  Redis::set('key','value',3000,'ms');
  echo Redis::get('key');

  // view sample
  return View::make('home')->with('article',Article::first())
                            ->withTitle('TinyLara :-D')
                            ->withFooBar('foo_bar');
}
```

### Run:
```bash
cd public && php -S 127.0.0.1:3000
```
Visit [http://127.0.0.1:3000/](http://127.0.0.1:3000/)

### It's already running!
<br>

## Features

1. Tiny router  based on fast and sexy [codingbean/macaw](https://packagist.org/packages/codingbean/macaw)
2. MVC architecture
3. One of the Most powerful PHP ORM on Earth: [Laravel Eloquent](http://laravel.com/docs/4.2/eloquent)
4. Powerful Laravel-style view loader 
5. Redis ready in Laravel-style
6. Handy SMTP mailer


## License

The TinyLara framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
