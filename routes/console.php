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

Artisan::command('test', function () {
   $string = 'https://www.fly4free.pl/black-friday-week-w-itace-🖤🔥-wycieczki-do-egiptu-na-madere-wyspy-zielonego-przyladka-i-inne-od-1779-pln-🌊🏝️';
   dd(preg_replace('/[^a-z0-9.\/\:_-]/i','', $string));
});
