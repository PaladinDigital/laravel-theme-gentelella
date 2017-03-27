# Laravel Theme: Gentelella

This is the theme Gentelella by Colorlib packaged up by PaladinDigital into a composer installable package for Laravel 5.

## Installation

Add the require in your composer.json file:

    "require": {
      ...
      "paladindigital/laravel-theme-gentelella": "*"
    }

If you dont already have the service provider registered in your config/app.php then add it also

    'providers' => [
        ...
        PaladinDigital\LaravelThemes\ServiceProvider::class,
    ]

### Laravel Support (Task Force Dev package)

If you install the [taskforcedev/laravel-support](https://github.com/taskforcedev/laravel-support) package this provides the ability to set a sitewide master layout which will be used in all views.

This saves you having to set the longform view name in all page templates.  Alternatively you could create your own shared data object.

## Theme Usage

### Layouts

 - master: The master layout uses container-fluid css class for full-width responsive themes.

### Page Meta

The following meta tags will be populated if provided by controllers (the easiest way to do this is to create a method on your base controller to populate a shared data object then pass this along with any extra page specific data to your views).

 - $charset : String (optional), default: UTF-8
 - $viewport : String (optional), default: width=device-width, initial-scale=1.0 
 - $keywords : Array of keywords or a comma-seperated string.
 - $description : String
 - $title : Page title
