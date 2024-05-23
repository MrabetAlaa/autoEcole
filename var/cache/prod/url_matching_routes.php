<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/examen' => [[['_route' => 'examen.examen', '_controller' => 'App\\Controller\\ExamenController::examen'], null, null, null, true, false, null]],
        '/lessons' => [[['_route' => 'app_lessons', '_controller' => 'App\\Controller\\LessonsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::home'], null, null, null, false, false, null]],
        '/question/all' => [[['_route' => 'question_all', '_controller' => 'App\\Controller\\QuestionController::all'], null, null, null, false, false, null]],
        '/question/add' => [[['_route' => 'questionapp_question_add', '_controller' => 'App\\Controller\\QuestionController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/user/all' => [[['_route' => 'users.all_users', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/examen/(?'
                    .'|([^/]++)/question/([^/]++)(*:44)'
                    .'|setResponse/([^/]++)/([^/]++)/([^/]++)(*:89)'
                    .'|([^/]++)/(?'
                        .'|score(*:113)'
                        .'|reponse/([^/]++)(*:137)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|modifier/([^/]++)(*:173)'
                    .'|supprimer/([^/]++)(*:199)'
                    .'|([^/]++)/historique(*:226)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'examen.question', '_controller' => 'App\\Controller\\ExamenController::question'], ['passerExamenId', 'number'], null, null, false, true, null]],
        89 => [[['_route' => 'examen.response', '_controller' => 'App\\Controller\\ExamenController::setResponse'], ['passerExamenId', 'questionId', 'number'], null, null, false, true, null]],
        113 => [[['_route' => 'examen.resultat', '_controller' => 'App\\Controller\\ExamenController::score'], ['passerExamenId'], null, null, false, false, null]],
        137 => [[['_route' => 'examen.reponse_correct', '_controller' => 'App\\Controller\\ExamenController::reponse'], ['passerExamenId', 'number'], null, null, false, true, null]],
        173 => [[['_route' => 'users.modifier_user', '_controller' => 'App\\Controller\\UserController::update'], ['id'], null, null, false, true, null]],
        199 => [[['_route' => 'users.supprimer_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        226 => [
            [['_route' => 'users.app_history', '_controller' => 'App\\Controller\\UserController::historique'], ['userId'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
