<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/Admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/agence/ajouter' => [[['_route' => 'ajouterAgence', '_controller' => 'App\\Controller\\AgenceController::ajouterAgence'], null, null, null, false, false, null]],
        '/voiture/ajouter' => [[['_route' => 'ajouterVoiture', '_controller' => 'App\\Controller\\VoitureController::ajouterVoiture'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/agence/(?'
                    .'|consulter/([^/]++)(*:198)'
                    .'|modifier/([^/]++)(*:223)'
                    .'|supprimer/([^/]++)(*:249)'
                .')'
                .'|/voiture/(?'
                    .'|consulter/([^/]++)(*:288)'
                    .'|supprimer/([^/]++)(*:314)'
                .')'
                .'|/Voiture/modifier/([^/]++)(*:349)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'consulterAgence', '_controller' => 'App\\Controller\\AgenceController::consulterAgence'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'modifierAgence', '_controller' => 'App\\Controller\\AgenceController::modifierAgence'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'supprimerAgence', '_controller' => 'App\\Controller\\AgenceController::supprimerAgence'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'consulterVoiture', '_controller' => 'App\\Controller\\VoitureController::consulterVoiture'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'supprimerVoiture', '_controller' => 'App\\Controller\\VoitureController::supprimerVoiture'], ['id'], null, null, false, true, null]],
        349 => [
            [['_route' => 'modifierVoiture', '_controller' => 'App\\Controller\\VoitureController::modifierVoiture'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
