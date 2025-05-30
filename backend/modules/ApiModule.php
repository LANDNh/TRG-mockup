<?php
namespace modules;

use Craft;
use yii\base\Event;
use craft\web\UrlManager;

class ApiModule extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        if (\Craft::$app->getRequest()->getIsConsoleRequest()) {
            return;
        }

        \Craft::$app->response->attachBehavior('cors', \modules\middleware\CorsMiddleware::class);
    }
}
