<?php

namespace App\Providers;

use Native\Laravel\Facades\MenuBar;

class NativeAppServiceProvider
{
    public function boot(): void
    {
        Menubar::create();
    }
}
