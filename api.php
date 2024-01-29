<?php

if (!function_exists('uu_register_routes_api')) {
    function uu_register_routes_api()
    {
        $apiNamespace = 'uu/v1';

        register_rest_route($apiNamespace, 'search', [
            'methods' => WP_REST_Server::READABLE,
            'callback' => function (WP_REST_Request $request) {
                $params = $request->get_params();
                $response = new WP_REST_Response();

                if (!isset($params['s'])) {
                    $response->set_status(400);
                    $response->set_data([
                        'message' => 'param \'s\' cannot empty',
                    ]);
                    return $response;
                }

                $query = new WP_Query(['s' => $params['s']]);

                $response->set_data([
                    'data' => $query->get_posts(),
                ]);
                return $response;
            }
        ]);
    }
}
