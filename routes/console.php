<?php

use CallPage\CallPage\CallPage;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('cpt', function () {
    $this->comment('Testing Callpage');
    $callpage = new CallPage(config('services.callpage.api_key'));
    dd($callpage->widget(67812)->message(
        tel  : '+48664825439',
        email: 'test@callpage.io',
        text : 'test'
    )->getBody()->getContents());


})->purpose('Test command');

