<?php

namespace App\Providers;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiImovelProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("api-imovel", function () {
            return Http::withOptions([
                "verify" => false,
                "base_uri" => "https://api.softpop.com.br/public/api/v1/",
            ])
                ->withToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU2MDkyMTgwLCJleHAiOjE2NTYwOTU3ODAsIm5iZiI6MTY1NjA5MjE4MCwianRpIjoiV2FQcEF4TmYyVlFGMkowayIsInN1YiI6NSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.t8U4r0mh0OhdmBJ31_eIos1Mx8t98tMrFnQ_hjm1mmo");
        });
    }
}
