<?php
namespace Alibinsarwar\DmcDashboard;
 
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
        (new Filesystem)->ensureDirectoryExists(resource_path('views/admin'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/layouts'));
        (new Filesystem)->copyDirectory(__DIR__.'/../stubs/admin', resource_path('/views/admin'));
        (new Filesystem)->copyDirectory(__DIR__.'/../stubs/public', base_path('/public'));
        copy(__DIR__.'/../stubs/admin.blade.php', resource_path('/views/layouts/admin.blade.php'));

    }
}
