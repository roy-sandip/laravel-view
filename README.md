# Installation
```
composer require roy-sandip/laravel-view
```

# Generate View Files

Command:

```
php artisan make:view users.create
```

**Result:** ``resources/views/users/create.blade.php`` file created.

Generate resource views: 

```
php artisan make:view users -r
```
**Result:** index.blade.php, create.blade.php, edit.blade.php, show.blade.php files created in ``resources/views/users/``.

Use template:
```
php artisan make:view users.create --copy=page
```

Force to overwrite:
```
php artisan make:view users.create -f
```


