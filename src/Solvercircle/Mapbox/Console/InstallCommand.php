<?php
namespace Solvercircle\Mapbox\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InstallCommand extends Command {
    protected $name = 'mapbox:install';

    protected $description = 'Installing Mapbox Package';

    public function fire()
    {       
		$this->call('mapbox:config');         
    }
}