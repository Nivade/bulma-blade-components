<?php

namespace Nvade\BulmaBlade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nvade\BulmaBlade\Commands\BulmaBladeCommand;

class BulmaBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bulma-blade-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_bulma-blade-components_table')
            ->hasCommand(BulmaBladeCommand::class);
    }
}
