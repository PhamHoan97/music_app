<?php

namespace Tests;

<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 3604f6e6fba7faceb2c6b06bb5a6a8ae9231d5ba
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

<<<<<<< HEAD
        Hash::setRounds(4);

=======
>>>>>>> 3604f6e6fba7faceb2c6b06bb5a6a8ae9231d5ba
        return $app;
    }
}
