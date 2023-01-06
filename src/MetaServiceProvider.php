<?php

namespace Alfred\Meta;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MetaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('meta')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_meta_table')
            ->hasCommand(MetaCommand::class);
    }
}
