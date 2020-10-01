# asteroid-blank

Start a rocket journey towards the stars when creating a new Laravel projects with super powers.

## Stack

We built this by adding some awesome tools.
They are included as standard in this template, and some of them are also pre-configured.

- [Tailwind CSS](https://tailwindcss.com) to create your beautiful interfaces
- [Livewire](https://laravel-livewire.com) to make your interface dynamic
- [Font Awesome](https://fontawesome.com) to have a large set of amazing icons
- [Sentry](https://sentry.io) to receive powerful errors reports
- [Homestead](https://laravel.com/docs/master/homestead) to easy set up your dev environment

## Getting started

#### Creating a new project

You can create a new project using this template by running:

```shell
composer create-project descompilando/asteroid-blank eros
```

#### Building the assets

You must build the front-end asset before all, run:

```shell
npm install
npm run dev 
```

If you're not sure about what that means, check out [here](https://laravel.com/docs/8.x/mix). 

#### Serving

To check out your new app you need to serve it. 
There are several ways to do this, see:

**You can use Laravel native serving**

It will use PHP native hosting. 
Check out about that in the [Laravel documentation](https://laravel.com/docs/8.x/installation#installing-laravel).

```shell
php artisan serve
```

**You can setup a Homestead environment**

Homestead should be the best way to host if you are on Linux. 
It works on [Vagrant](https://www.vagrantup.com/) and can also be run on Windows and Mac.

It is already available in Asteroid Blank out of the box, but you must perform your own setup.
Check out the [Homestead documentation](https://laravel.com/docs/8.x/homestead#per-project-installation) the see how.