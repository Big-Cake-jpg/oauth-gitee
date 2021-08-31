<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Collection;

return function (Dispatcher $events, Filter $filter) {
    $events->listen(
        'SocialiteProviders\Manager\SocialiteWasCalled',
        'SocialiteProviders\Gitee\GiteeExtendSocialite@handle'
    );

    config(['services.github' => [
        'client_id' => env('GITEE_KEY'),
        'client_secret' => env('GITEE_SECRET'),
        'redirect' => env('GITEE_REDIRECT_URI'),
    ]]);

    $filter->add('oauth_providers', function (Collection $providers) {
        $providers->put('gitee', [
            'icon' => 'gitee',
            'displayName' => 'Gitee',
        ]);

        return $providers;
    });
};
