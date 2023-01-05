<?php

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(\Alfred\Meta\Commands\MetaCommand::class)
        ->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
