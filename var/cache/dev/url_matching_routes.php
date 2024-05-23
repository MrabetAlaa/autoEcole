<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/categories' => [[['_route' => 'app_categories', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/examen' => [[['_route' => 'examen.examen', '_controller' => 'App\\Controller\\ExamenController::examen'], null, null, null, true, false, null]],
        '/lessons/add' => [[['_route' => 'app_add_lesson', '_controller' => 'App\\Controller\\LessonsController::add'], null, null, null, false, false, null]],
        '/lessons/all' => [[['_route' => 'app_lessons_all', '_controller' => 'App\\Controller\\LessonsController::all'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::home'], null, null, null, false, false, null]],
        '/historique' => [[['_route' => 'app_history', '_controller' => 'App\\Controller\\MainController::historique'], null, null, null, false, false, null]],
        '/question/all' => [[['_route' => 'question_all', '_controller' => 'App\\Controller\\QuestionController::all'], null, null, null, false, false, null]],
        '/question/add' => [[['_route' => 'questionapp_question_add', '_controller' => 'App\\Controller\\QuestionController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/user/all' => [[['_route' => 'users.all_users', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/add' => [[['_route' => 'users.add_user', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)/lessons(*:59)'
                .'|/examen/(?'
                    .'|([^/]++)/question/([^/]++)(*:103)'
                    .'|setResponse/([^/]++)/([^/]++)/([^/]++)(*:149)'
                    .'|([^/]++)/(?'
                        .'|score(*:174)'
                        .'|reponse/([^/]++)(*:198)'
                    .')'
                .')'
                .'|/lessons/supprimer/([^/]++)(*:235)'
                .'|/historique/delete/([^/]++)(*:270)'
                .'|/question(?'
                    .'|/modifier/([^/]++)(*:308)'
                    .'|supprimer/([^/]++)(*:334)'
                .')'
                .'|/([^/]++)/change\\-password(*:369)'
                .'|/user/(?'
                    .'|modifier/([^/]++)(*:403)'
                    .'|supprimer/([^/]++)(*:429)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'app_lessons_list', '_controller' => 'App\\Controller\\CategorieController::lessons'], ['id'], null, null, false, false, null]],
        103 => [[['_route' => 'examen.question', '_controller' => 'App\\Controller\\ExamenController::question'], ['passerExamenId', 'number'], null, null, false, true, null]],
        149 => [[['_route' => 'examen.response', '_controller' => 'App\\Controller\\ExamenController::setResponse'], ['passerExamenId', 'questionId', 'number'], null, null, false, true, null]],
        174 => [[['_route' => 'examen.resultat', '_controller' => 'App\\Controller\\ExamenController::score'], ['passerExamenId'], null, null, false, false, null]],
        198 => [[['_route' => 'examen.reponse_correct', '_controller' => 'App\\Controller\\ExamenController::reponse'], ['passerExamenId', 'number'], null, null, false, true, null]],
        235 => [[['_route' => 'app_delete_lesson', '_controller' => 'App\\Controller\\LessonsController::delete'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'app_delete_history', '_controller' => 'App\\Controller\\MainController::delete'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'question_modifier', '_controller' => 'App\\Controller\\QuestionController::update'], ['id'], null, null, false, true, null]],
        334 => [[['_route' => 'question_supprimer', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], null, null, true, true, null]],
        369 => [[['_route' => 'app_password', '_controller' => 'App\\Controller\\RegistrationController::changePassword'], ['id'], null, null, false, false, null]],
        403 => [[['_route' => 'users.modifier_user', '_controller' => 'App\\Controller\\UserController::update'], ['id'], null, null, false, true, null]],
        429 => [
            [['_route' => 'users.supprimer_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
