<?php

namespace Klsandbox\TimelineEvents;

use Input;
use Request;
use Illuminate\Routing\Router;

class TimelineRenderer {

    private $router;

    public function __construct() {
        $this->router = new Router(app('events'), app());
    }

    public function getRouter() {
        return $this->router;
    }

    public function render(TimelineEvent $event) {
        $url = $event->route . '/' . $event->id . '/' . $event->target_id;
        if ($event->parameter_id) {
            $url = $url . '/' . $event->parameter_id;
        }

        $request = Request::create($url, 'GET');
        Input::initialize($event->toArray());

        $out = $this->router->dispatch($request)->getContent();

        return $out;
    }

}
