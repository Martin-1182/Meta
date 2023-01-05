<?php
namespace Alfred\Meta\Commands;

use Illuminate\Console\Command;




class MetaCommand extends Command
{
    protected $signature = 'meta';

    protected $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
