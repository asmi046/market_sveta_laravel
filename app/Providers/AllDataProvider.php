<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Baner;
use App\Models\CatalogMenu;

use View;

class AllDataProvider extends ServiceProvider
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
        View::composer('*', function ($view) {

            $rout_name = \Request::route()->getName();

            $banners = Baner::where("page", $rout_name)->orWhere("page", 'all')->get();
            $catalog = CatalogMenu::with('sub_puncts')->orderBy('order', 'asc')->get();

            $banner_areas = [];

            foreach($banners as $el){
                $banner_areas[$el->page_area][] = $el;
            }


            View::share('banners', $banner_areas);
            View::share('menu', $catalog);
        });
    }
}
