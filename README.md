# Asteroid Blank

Start a rocket journey towards the stars creating a new Laravel project with super powers. This is a starting point for new apps with a some fully opinionated built-in features.

## Stack

We built Asteroid Blank by setting up some awesome tools which we believe are the ideal for each case. 

- [Livewire](https://laravel-livewire.com) to simple build dynamic interfaces
- [Alpine.js](https://alpinejs.dev) to help with reactive and declarative interfaces
- [Tailwind CSS](https://tailwindcss.com) to build whatever you want (seriously)
- [Sass](https://sass-lang.com) to write CSS with power-ups
- [Blade Icons](https://blade-ui-kit.com/blade-icons) to easily make use of SVG icons
- [Hero Icons](https://heroicons.com) to have beautiful hand-crafted SVG icons
- [Sentry Laravel](https://sentry.io) to have a monitoring platform on your hands
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) to have debuging and profiling ready to use
- [Laravel Sail](https://laravel.com/docs/8.x/sail) to bring your app up
- [PHP Coding Standards Fixer](https://cs.symfony.com) to fixes your code to follow standards

You are free to setup new tools, remove which you dont want or even replace everything with your choices, but it might be easier just start something from scratch.

## Usage

You can start creating a new project using it as template:

```shell
composer create-project descompilando/asteroid-blank my-app
```

Or just clone it and edit:
```
git clone git@github.com:descompilando/asteroid-blank.git my-app
rm -rf .git/
```

To bring it up you can use [Laravel Sail](https://laravel.com/docs/8.x/sail):

```
cd my-app
sail up -d
```

Or even the [Laravel built-in solution](https://laravel.com/docs/8.x#the-laravel-installer):

```
cd my-app
php artisan serve
```
