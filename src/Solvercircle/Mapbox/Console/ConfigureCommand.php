<?php
namespace Solvercircle\Mapbox\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ConfigureCommand extends Command {
    protected $name = 'mapbox:config';

    protected $description = 'Publishes configuration for Mapbox.';

    public function fire()
    {
        $this->call('config:publish', array('package' => 'solvercircle/mapbox'));
    }
}