<?php
    // MyVendor\contactform\src\ContactFormServiceProvider.php
    namespace zahidcse\usstreetaddress;
    use Illuminate\Support\ServiceProvider;
    class UsstreetaddressServiceProvider extends ServiceProvider {
        public function boot()
        {
        }
        public function register()
    {
        $this->app['Usaddress'] = $this->app->share(function($app){
            return new Hello;
        });
        $this->app->booting(function(){
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Hello', 'Zahidcse\Usstreetaddress\Facades\Usaddress');
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
    }
    ?>