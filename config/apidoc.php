<?php

return [
    /*
     * The type of documentation output to generate.
     * - "static" will generate a static HTMl page in the /public/docs folder,
     * - "laravel" will generate the documentation as a Blade view,
     * so you can add routing and authentication.
     */
    'type' => 'static',

    /*
     * The router to be used (Laravel or Dingo).
     */
    'router' => 'laravel',

    /*
     * The base URL to be used in examples and the Postman collection.
     * By default, this will be the value of config('app.url').
     */
    'base_url' => null,

    /*
     * Generate a Postman collection in addition to HTML docs.
     * For 'static' docs, the collection will be generated to public/docs/collection.json.
     * For 'laravel' docs, it will be generated to storage/app/apidoc/collection.json.
     * The `ApiDoc::routes()` helper will add routes for both the HTML and the Postman collection.
     */
    'postman' => [
        /*
         * Specify whether the Postman collection should be generated.
         */
        'enabled' => false,

        /*
         * The name for the exported Postman collection. Default: config('app.name')." API"
         */
        'name' => null,

        /*
         * The description for the exported Postman collection.
         */
        'description' => null,
    ],

    /*
     * The routes for which documentation should be generated.
     * Each group contains rules defining which routes should be included ('match', 'include' and 'exclude' sections)
     * and rules which should be applied to them ('apply' section).
     */
    'routes' => [
        [
            /*
             * Specify conditions to determine what routes will be parsed in this group.
             * A route must fulfill ALL conditions to pass.
             */
            'match' => [

                /*
                 * Match only routes whose domains match this pattern (use * as a wildcard to match any characters).
                 */
                'domains' => [
                    '*',
                    // 'domain1.*',
                ],

                /*
                 * Match only routes whose paths match this pattern (use * as a wildcard to match any characters).
                 */
                'prefixes' => [
                    '*',
                    // 'users/*',
                ],

                /*
                 * Match only routes registered under this version. This option is ignored for Laravel router.
                 * Note that wildcards are not supported.
                 */
                'versions' => [
                    'v1',
                ],
            ],

            /*
             * Include these routes when generating documentation,
             * even if they did not match the rules above.
             * Note that the route must be referenced by name here (wildcards are supported).
             */
            'include' => [
                // 'users.index', 'healthcheck*'
            ],

            /*
             * Exclude these routes when generating documentation,
             * even if they matched the rules above.
             * Note that the route must be referenced by name here (wildcards are supported).
             */
            'exclude' => [
                // 'users.create', 'admin.*'
            ],

            /*
             * Specify rules to be applied to all the routes in this group when generating documentation
             */
            'apply' => [
                /*
                 * Specify headers to be added to the example requests
                 */
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg3OWE3YjAyOThlOWJjNDNkNDY1MGRlNDFhYWQ1YThiMzEwN2MzOWQ1NzUxNTZmYWI3NDZkNjk2ZGNjNTE2MDQ4MzVlYWRiMGFjZThjNDVjIn0.eyJhdWQiOiIxIiwianRpIjoiODc5YTdiMDI5OGU5YmM0M2Q0NjUwZGU0MWFhZDVhOGIzMTA3YzM5ZDU3NTE1NmZhYjc0NmQ2OTZkY2M1MTYwNDgzNWVhZGIwYWNlOGM0NWMiLCJpYXQiOjE1NzY1Mjk1MDAsIm5iZiI6MTU3NjUyOTUwMCwiZXhwIjoxNjA4MTUxOTAwLCJzdWIiOiIxMSIsInNjb3BlcyI6W119.vYXyLx4cjASOGeDnI2in0J2i-GjYYd3tN-B51a2xLj-_P7r0G7GH_gMm5F-B6gKOV5tn-PQFqfeiEqw58eWUVVWiZpVvPyQQAqzGT9dg65XV9UMxeDEdBXQWONdrqe-2SdB6rgBt8W8h5nIdh2NvxRCCDdIBIVzGpzY4qTlpuIcR4GH6_uJQ9KH6Mc-d8ga5cdC7lFle4WBroU_hEKgBNQ2IigJB15QQJJ92SmZIXEUxzPprY9YGDTalYP9PMCmJxR5kqxY7WTDPyAz3VJTo7ni6E43nwnUOtYneZg1V31Q_cT8RV5x0_y-1RVjVXpAZzD9dXtdybesm8MYGpJUJzU3kMKlw0eXDiXLx1L7myyU0hXG83vrgNG_WaI5XmKQLEwXXMSsHLzl8IRi4NH-z5di3Jrv2hnnXNr4Jegz6tKWeprNZ03iLoRLhSDeHwfEw7-mlNCx3nyY1yvG2qaU9w1b7vTg-lmBJk6TbNImmDpdE8hAm2Dk4_Fi3YxMZMBQY-oV53es7_hRVypHFtNAo9ZVjIZp_CtS6vOC0My0yhrAdk6G4KA_Gg737JpMPV7Mf2H9LV_7zL18zMpnRT-qxQBgjE4Q9kWZ5LXUvp8vvmMyEbYKtSRrv9rpsez8cgmHD26Q9qBG-1anIRvJQvaqpb-YG16dBfD7PiRSTUK3XUqA',
                    // 'Api-Version' => 'v2',
                ],

                /*
                 * If no @response or @transformer declarations are found for the route,
                 * we'll try to get a sample response by attempting an API call.
                 * Configure the settings for the API call here.
                 */
                'response_calls' => [
                    /*
                     * API calls will be made only for routes in this group matching these HTTP methods (GET, POST, etc).
                     * List the methods here or use '*' to mean all methods. Leave empty to disable API calls.
                     */
                    'methods' => "*",

                    /*
                     * Laravel config variables which should be set for the API call.
                     * This is a good place to ensure that notifications, emails
                     * and other external services are not triggered
                     * during the documentation API calls
                     */
                    'config' => [
                        'app.env' => 'documentation',
                        'app.debug' => false,
                        // 'service.key' => 'value',
                    ],

                    /*
                     * Cookies which should be sent with the API call.
                     */
                    'cookies' => [
                        // 'name' => 'value'
                    ],

                    /*
                     * Query parameters which should be sent with the API call.
                     */
                    'queryParams' => [
                        // 'key' => 'value',
                    ],

                    /*
                     * Body parameters which should be sent with the API call.
                     */
                    'bodyParams' => [
                        // 'key' => 'value',
                    ],
                ],
            ],
        ],
    ],

    'strategies' => [
        'metadata' => [
            \Mpociot\ApiDoc\Extracting\Strategies\Metadata\GetFromDocBlocks::class,
        ],
        'urlParameters' => [
            \Mpociot\ApiDoc\Extracting\Strategies\UrlParameters\GetFromUrlParamTag::class,
        ],
        'queryParameters' => [
            \Mpociot\ApiDoc\Extracting\Strategies\QueryParameters\GetFromQueryParamTag::class,
        ],
        'headers' => [
            \Mpociot\ApiDoc\Extracting\Strategies\RequestHeaders\GetFromRouteRules::class,
        ],
        'bodyParameters' => [
            \Mpociot\ApiDoc\Extracting\Strategies\BodyParameters\GetFromBodyParamTag::class,
        ],
        'responses' => [
            \Mpociot\ApiDoc\Extracting\Strategies\Responses\UseTransformerTags::class,
            \Mpociot\ApiDoc\Extracting\Strategies\Responses\UseResponseTag::class,
            \Mpociot\ApiDoc\Extracting\Strategies\Responses\UseResponseFileTag::class,
            \Mpociot\ApiDoc\Extracting\Strategies\Responses\UseApiResourceTags::class,
            \Mpociot\ApiDoc\Extracting\Strategies\Responses\ResponseCalls::class,
        ],
    ],

    /*
     * Custom logo path. The logo will be copied from this location
     * during the generate process. Set this to false to use the default logo.
     *
     * Change to an absolute path to use your custom logo. For example:
     * 'logo' => resource_path('views') . '/api/logo.png'
     *
     * If you want to use this, please be aware of the following rules:
     * - the image size must be 230 x 52
     */
    'logo' => false,

    /*
     * Name for the group of routes which do not have a @group set.
     */
    'default_group' => 'general',

    /*
     * Example requests for each endpoint will be shown in each of these languages.
     * Supported options are: bash, javascript, php, python
     * You can add a language of your own, but you must publish the package's views
     * and define a corresponding view for it in the partials/example-requests directory.
     * See https://laravel-apidoc-generator.readthedocs.io/en/latest/generating-documentation.html
     *
     */
    'example_languages' => [
        'bash',
        'javascript',
    ],

    /*
     * Configure how responses are transformed using @transformer and @transformerCollection
     * Requires league/fractal package: composer require league/fractal
     *
     */
    'fractal' => [
        /* If you are using a custom serializer with league/fractal,
         * you can specify it here.
         *
         * Serializers included with league/fractal:
         * - \League\Fractal\Serializer\ArraySerializer::class
         * - \League\Fractal\Serializer\DataArraySerializer::class
         * - \League\Fractal\Serializer\JsonApiSerializer::class
         *
         * Leave as null to use no serializer or return a simple JSON.
         */
        'serializer' => null,
    ],

    /*
     * If you would like the package to generate the same example values for parameters on each run,
     * set this to any number (eg. 1234)
     *
     */
    'faker_seed' => null,
];
