<?php
namespace modules\controllers;

use Craft;
use yii\web\Controller;
use yii\web\Response;

class ApiController extends Controller
{
    protected array|bool|int $allowAnonymous = true;

    public $enableCsrfValidation = false;

    public function actionGraphql(): Response
    {
        header('Access-Control-Allow-Origin: https://trg-mockup.vercel.app');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            http_response_code(204);
            exit();
        }

        $this->response->format = Response::FORMAT_JSON;

        try {
            $body = Craft::$app->getRequest()->getRawBody();
            $data = json_decode($body, true);

            if (!$data) {
                return $this->asJson(['error' => 'Failed to decode JSON']);
            }

            $query = $data['query'] ?? null;
            $variables = $data['variables'] ?? [];

            if (!$query) {
                return $this->asJson(['error' => 'Missing GraphQL query']);
            }

            $schema = Craft::$app->getGql()->getPublicSchema();
            $result = Craft::$app->getGql()->executeQuery($schema, $query, $variables);


            return $this->asJson($result);
        } catch (\Throwable $e) {
            return $this->asJson([
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
