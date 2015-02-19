<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            if (0 === strpos($pathinfo, '/css/bootstrap_')) {
                // _assetic_bootstrap_css_0
                if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                if (0 === strpos($pathinfo, '/css/bootstrap_fo')) {
                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/css/bootstrap_form_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                    // _assetic_bootstrap_css_2
                    if ($pathinfo === '/css/bootstrap_font-awesome_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_2',);
                    }

                    // _assetic_bootstrap_css_3
                    if ($pathinfo === '/css/bootstrap_form_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_3',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_bc-bootstrap-collection_')) {
                        // _assetic_bootstrap_js_12
                        if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                        }

                        // _assetic_bootstrap_js_13
                        if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_26.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_13',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                if (0 === strpos($pathinfo, '/js/jquery_jquery')) {
                    // _assetic_jquery_0
                    if ($pathinfo === '/js/jquery_jquery-1.11.1_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                    }

                    // _assetic_jquery_1
                    if ($pathinfo === '/js/jquery_jquery.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_jquery_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/9ae6b84')) {
            // _assetic_9ae6b84
            if ($pathinfo === '/css/9ae6b84.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9ae6b84',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9ae6b84',);
            }

            // _assetic_9ae6b84_0
            if ($pathinfo === '/css/9ae6b84_part_1_sb-admin_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9ae6b84',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9ae6b84_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/3db9950')) {
            // _assetic_3db9950
            if ($pathinfo === '/js/3db9950.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3db9950',);
            }

            if (0 === strpos($pathinfo, '/js/3db9950_part_')) {
                if (0 === strpos($pathinfo, '/js/3db9950_part_1_')) {
                    if (0 === strpos($pathinfo, '/js/3db9950_part_1_morris')) {
                        // _assetic_3db9950_0
                        if ($pathinfo === '/js/3db9950_part_1_morris-data_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3db9950_0',);
                        }

                        // _assetic_3db9950_1
                        if ($pathinfo === '/js/3db9950_part_1_morris_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3db9950_1',);
                        }

                        // _assetic_3db9950_2
                        if ($pathinfo === '/js/3db9950_part_1_morris.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3db9950_2',);
                        }

                    }

                    // _assetic_3db9950_3
                    if ($pathinfo === '/js/3db9950_part_1_raphael.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_3db9950_3',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/3db9950_part_2_')) {
                    // _assetic_3db9950_4
                    if ($pathinfo === '/js/3db9950_part_2_excanvas.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_3db9950_4',);
                    }

                    // _assetic_3db9950_5
                    if ($pathinfo === '/js/3db9950_part_2_flot-data_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_3db9950_5',);
                    }

                    if (0 === strpos($pathinfo, '/js/3db9950_part_2_jquery.flot')) {
                        // _assetic_3db9950_6
                        if ($pathinfo === '/js/3db9950_part_2_jquery.flot_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_3db9950_6',);
                        }

                        if (0 === strpos($pathinfo, '/js/3db9950_part_2_jquery.flot.')) {
                            // _assetic_3db9950_7
                            if ($pathinfo === '/js/3db9950_part_2_jquery.flot.pie_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_3db9950_7',);
                            }

                            // _assetic_3db9950_8
                            if ($pathinfo === '/js/3db9950_part_2_jquery.flot.resize_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_3db9950_8',);
                            }

                            // _assetic_3db9950_9
                            if ($pathinfo === '/js/3db9950_part_2_jquery.flot.tooltip.min_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3db9950',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_3db9950_9',);
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'CoheransBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/organization')) {
            // organization
            if (rtrim($pathinfo, '/') === '/organization') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_organization;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'organization');
                }

                return array (  '_controller' => 'CoheransBundle\\Controller\\OrganizationController::indexAction',  '_route' => 'organization',);
            }
            not_organization:

            // organization_create
            if ($pathinfo === '/organization/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_organization_create;
                }

                return array (  '_controller' => 'CoheransBundle\\Controller\\OrganizationController::createAction',  '_route' => 'organization_create',);
            }
            not_organization_create:

            // organization_new
            if ($pathinfo === '/organization/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_organization_new;
                }

                return array (  '_controller' => 'CoheransBundle\\Controller\\OrganizationController::newAction',  '_route' => 'organization_new',);
            }
            not_organization_new:

            // organization_show
            if (preg_match('#^/organization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_organization_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organization_show')), array (  '_controller' => 'CoheransBundle\\Controller\\OrganizationController::showAction',));
            }
            not_organization_show:

            // organization_edit
            if (preg_match('#^/organization/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_organization_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organization_edit')), array (  '_controller' => 'CoheransBundle\\Controller\\OrganizationController::editAction',));
            }
            not_organization_edit:

            // organization_update
            if (preg_match('#^/organization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_organization_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organization_update')), array (  '_controller' => 'CoheransBundle\\Controller\\OrganizationController::updateAction',));
            }
            not_organization_update:

            // organization_delete
            if (preg_match('#^/organization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_organization_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organization_delete')), array (  '_controller' => 'CoheransBundle\\Controller\\OrganizationController::deleteAction',));
            }
            not_organization_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
