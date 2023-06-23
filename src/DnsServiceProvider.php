<?php

namespace volodimir\Dns;

use Illuminate\Support\ServiceProvider;

class DnsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('dns', function ($app) {
            return new DnsPlugin();
        });
    }
}