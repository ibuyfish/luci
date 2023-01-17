<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\SolutionComposer;
use Illuminate\Support\Facades\View;
use App\View\PolicyComposer;

class ComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['component::*'],SolutionComposer::class);
        View::composer(['component::*'],PolicyComposer::class);
    }
}
