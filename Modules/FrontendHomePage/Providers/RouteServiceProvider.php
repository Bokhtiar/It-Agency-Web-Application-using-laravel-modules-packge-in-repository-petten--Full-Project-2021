<?php

namespace Modules\FrontendHomePage\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Modules\Blog\Entities\Blog;
use Modules\Category\Entities\Category;
use Modules\Client\Entities\Client;
use Modules\Portfolio\Entities\Portfolio;
use Modules\Product\Entities\Product;
use Modules\ProductCategory\Entities\ProductCategory;
use Modules\Service\Entities\Service;
use Modules\Slider\Entities\Slider;
use Modules\Testimonial\Entities\Testimonial;
use Modules\WebSettings\Entities\About;
use Modules\WebSettings\Entities\Menu;
use Modules\WebSettings\Entities\Social;
use Modules\WebSettings\Entities\Team;
use Modules\WebSettings\Entities\TopHeader;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\FrontendHomePage\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        view()->composer('*', function($view) {
            $view->with('topheader', TopHeader::find(1));
        });//top navbar end

        view()->composer('*', function($view) {
            $view->with('navbars', Menu::where('position',1)->get());
        });//navbar end

        view()->composer('*', function($view) {
            $view->with('footers', Menu::where('position',2)->get());
        });//footer end

        view()->composer('*', function($view) {
            $view->with('sliders', Slider::all());
        });//slider

        view()->composer('*', function($view) {
            $view->with('services', Service::all());
        });//service end

        view()->composer('*', function($view) {
            $view->with('productcategories', ProductCategory::all());
        });//product Category
        view()->composer('*', function($view) {
            $view->with('products', Product::all());
        });//product

        view()->composer('*', function($view) {
            $view->with('portfolios', Portfolio::all());
        });//portfolio end

        view()->composer('*', function($view) {
            $view->with('abouts', About::find(1));
        });//about

        view()->composer('*', function($view) {
            $view->with('testimonials', Testimonial::all());
        });//client

        view()->composer('*', function($view) {
            $view->with('clients', Client::all());
        });//Testimonial

        view()->composer('*', function($view) {
            $view->with('teams', Team::all());
        });//team

        view()->composer('*', function($view) {
            $view->with('blogs', Blog::all());
        });//Blog

        view()->composer('*', function($view) {
            $view->with('categories', Category::all());
        });//category

        view()->composer('*', function($view) {
            $view->with('footers', Menu::where('position',2)->get());
        });//footers


    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('FrontendHomePage', '/Routes/web.php'));
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
            ->namespace($this->moduleNamespace)
            ->group(module_path('FrontendHomePage', '/Routes/api.php'));
    }
}
