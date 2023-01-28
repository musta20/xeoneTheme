<?php

namespace Naqlah\Xeone;

use App\View\Components\Contact;
use App\View\Components\Footer;
use App\View\Components\Header;
use App\View\Components\Layout;
use Illuminate\Support\ServiceProvider;

class XeoneServiceProvider extends ServiceProvider
{
  public function register()
  {
    //
  }

  public function boot()
  {
    //
    if ($this->app->runningInConsole()) {
        $this->commands([
            InstallXeone::class,
        ]);
    }

      // ... other things
  $this->loadViewComponentsAs('xeone', [
    Footer::class,
    Contact::class,
    Header::class,
    Layout::class,
  ]);


  if ($this->app->runningInConsole()) {
    // Publish assets
    $this->publishes([
      __DIR__.'/../resources/assets' => public_path('XeoneTheme'),
    ], 'assets');
  
  }







  }
}