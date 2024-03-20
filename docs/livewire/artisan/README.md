# Create a Livewire component

Livewire provides a convenient Artisan command to generate new components quickly. Run the following command to make a new Counter component:

```sh
php artisan make:livewire counter
```

This command will generate two new files in your project:

- `app/Livewire/Counter.php``
- `resources/views/livewire/counter.blade.php``

## The `make` command {#make-command}

```sh
php artisan make:livewire foo
# Creates Foo.php & foo.blade.php

php artisan make:livewire foo-bar
# Creates FooBar.php & foo-bar.blade.php

php artisan make:livewire Foo
# Creates Foo.php & foo.blade.php

php artisan make:livewire FooBar
# Creates FooBar.php & foo-bar.blade.php

php artisan make:livewire foo.bar
# Creates Foo/Bar.php & foo/bar.blade.php

php artisan make:livewire foo --inline
# Creates only Foo.php

php artisan make:livewire foo --test
# Creates Foo.php, foo.blade.php, & FooTest.php
```

Once created, you can render your components in a Blade file with the `@livewire('component-name')` blade directive.

Think of Livewire components like Blade includes. You can insert `@livewire` anywhere in a Blade view and it will render.

```php
@livewire('foo')
@livewire('foo-bar')
@livewire('foo.bar')
@livewire(Package\Livewire\Foo::class)
```

If you are on Laravel 7 or greater, you can use the tag syntax.
```php
<livewire:foo />
```

### Modifying Stubs {#modifying-stubs}

You can customize the stubs (templates) that Livewire uses to create new component classes and views using the `livewire:stubs` command.

```php
php artisan livewire:stubs
```

The above command will create three files:

* `stubs/livewire.stub`
* `stubs/livewire.view.stub`
* `stubs/livewire.inline.stub`

Now, when you run the `make:livewire` command, Livewire will use the above stub files as the template.

## The `move` Command {#move-command}

The `php artisan livewire:move` command will move/rename the component class, blade view and the component test if it exists, taking care of namespaces and paths

Here is an example of usage:
```sh
php artisan livewire:move foo bar.baz      
```

> For convenience, `livewire:move` is aliased to `livewire:mv`

For convenience, `livewire:move` is aliased to `livewire:mv`

## The `copy` Command {#copy-command}

The `php artisan livewire:copy` command will create copies of the component class and blade view, taking care of namespaces and paths

Here are a few examples of usage:

```sh
php artisan livewire:copy foo bar
```

# Copies `Foo.php` & `foo.blade.php` to `Bar.php` and `bar.blade.php`

```sh
php artisan livewire:copy foo bar --force
```

### Overwrites existing "bar" component

```sh
php artisan livewire:copy foo bar --test
```

> Copies `Foo.php` & `foo.blade.php` & `FooTest.php` to `Bar.php` & `bar.blade.php` & `BarTest.php`

For convenience, `livewire:copy` is aliased to `livewire:cp`


## The `delete` Command {#delete-command}

The `php artisan livewire:delete` command will remove the component class and blade view.

Here are a few examples of usage:

```sh
php artisan livewire:delete foo
# Removes Foo.php & foo.blade.php

php artisan livewire:delete foo --force
# Removes without confirmation prompt

php artisan livewire:delete foo --test
# Removes Foo.php & foo.blade.php & FooTest.php
```

```
For convenience, `livewire:delete` is aliased to `livewire:rm`
```

