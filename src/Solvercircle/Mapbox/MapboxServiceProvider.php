<?php namespace Solvercircle\Mapbox;

use Illuminate\Support\ServiceProvider;

class MapboxServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('solvercircle/mapbox','Mapbox');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->registerCommands();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
	
	//-------------------------------------Install Commands----------------------------------------------------------------------
	public function registerCommands()
	{		
		$this->registerConfigureCommand();		
		$this->registerInstallCommand();
	
		$this->commands(			
			'mapbox::commands.config',			
			'mapbox::commands.install'
		);
	}
	
	
	
	public function registerConfigureCommand()
	{
		$this->app['mapbox::commands.config'] = $this->app->share(function($app)
		{
			return new Console\ConfigureCommand;
		});
	}
	
	
	
	public function registerInstallCommand()
	{
		$this->app['mapbox::commands.install'] = $this->app->share(function($app)
		{
			return new Console\InstallCommand;
		});
	}

}
