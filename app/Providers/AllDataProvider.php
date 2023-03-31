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

            $banners = \Cache::rememberForever('allbanners', function () {
                $rout_name = \Request::route()->getName();

                $b_all = Baner::where("page", $rout_name)->orWhere("page", 'all')->get();

                $banner_areas = [];
                foreach($b_all as $el){
                    $banner_areas[$el->page_area][] = $el;
                }
                return $banner_areas;
            });

            $catalog = \Cache::rememberForever('globalmenu', function () {
                return CatalogMenu::with('sub_puncts')->orderBy('order', 'asc')->get();
            });

            View::share('banners', $banners);
            View::share('menu', $catalog);
        });
    }
}
