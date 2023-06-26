<?php
namespace Ali\DashboardKit;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem;


class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {

        (new Filesystem)->ensureDirectoryExists(app_path('HTTP/Controllers/Admin'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/admin'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/layouts'));
        (new Filesystem)->copyDirectory(__DIR__.'/../stubs/controller', app_path('HTTP/Controllers/Admin'));
        (new Filesystem)->copyDirectory(__DIR__.'/../stubs/views', resource_path('/views/admin'));
        (new Filesystem)->copyDirectory(__DIR__.'/../stubs/public', base_path('/public'));
        copy(__DIR__.'/../stubs/admin.blade.php', resource_path('/views/layouts/admin.blade.php'));
        copy(__DIR__.'/../stubs/admin.php', base_path('/routes/admin.php'));

    }
}
