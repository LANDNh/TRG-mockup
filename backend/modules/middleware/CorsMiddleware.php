<?php

namespace modules\middleware;

use yii\base\Behavior;
use yii\web\Response;

class CorsMiddleware extends Behavior
{
    public function events()
    {
        return [
            Response::EVENT_BEFORE_SEND => 'addCorsHeaders',
        ];
    }

    public function addCorsHeaders($event)
    {
        $response = $event->sender;
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        if (\Craft::$app->getRequest()->getIsOptions()) {
            $response->data = 'OK';
            $response->send();
            \Craft::$app->end();
        }
    }
}
