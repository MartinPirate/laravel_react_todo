<?php

namespace App\Console\Commands;


use Illuminate\Foundation\Console\ModelMakeCommand as Command;
class ModelMakeCommand extends Command
{

    public function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\Models";
    }
}
