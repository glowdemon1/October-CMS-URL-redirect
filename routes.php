<?php namespace RobVW\UrlRedirect;

use RobVW\UrlRedirect\Models\Redirect;

$redirects = new Redirect();

$redirects->setConnectionResolver($this->app['db']);
$redirects->setConnection(\Config::get('database.default'));

foreach ($redirects->where('redirect_active', 1)->get() as $redirect) {
    \Route::get($redirect->redirect_from, function () use ($redirect) {
        return \Redirect::to($redirect->redirect_to);
    });
}
