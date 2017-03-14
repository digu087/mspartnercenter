<?php namespace PartnerCenter\Microsoft;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class MicrosoftServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = TRUE;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->bind('MicrosoftAPI', function ($app, $config = FALSE) {
			return new API($config);
		});
	}

	public function boot() {
		AliasLoader::getInstance()->alias('MicrosoftAPI', 'PartnerCenter\Microsoft\API');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return ['MicrosoftAPI', 'PartnerCenter\Microsoft\API'];
	}

}
