<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapAdminRoutes();
        $this->mapDosenRoutes();
        $this->mapMahasiswaRoutes();
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::middleware('web','auth:admin')
            ->prefix('admin')
            ->name('admin.')
            ->namespace($this->namespace.'\Admin')
            ->group(base_path('routes/admin.php'));
    }
    protected function mapDosenRoutes()
    {
        Route::middleware('web','auth:dosen')
            ->prefix('dosen')
            ->name('dosen.')
            ->namespace($this->namespace.'\Dosen')
            ->group(base_path('routes/dosen.php'));
    }
    protected function mapMahasiswaRoutes()
    {
        Route::middleware('web','auth:mahasiswa')
            ->prefix('mahasiswa')
            ->name('mahasiswa.')
            ->namespace($this->namespace.'\Mahasiswa')
            ->group(base_path('routes/mahasiswa.php'));
    }
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
