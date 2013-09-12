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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // daw_dieta_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'daw_dieta_homepage');
            }

            return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'daw_dieta_homepage',);
        }

        if (0 === strpos($pathinfo, '/que')) {
            // daw_dieta_quecomer
            if ($pathinfo === '/quecomer') {
                return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::quecomerAction',  '_route' => 'daw_dieta_quecomer',);
            }

            // daw_dieta_quebeber
            if ($pathinfo === '/quebeber') {
                return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::quebeberAction',  '_route' => 'daw_dieta_quebeber',);
            }

        }

        // daw_dieta_recetas
        if ($pathinfo === '/recetas') {
            return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::recetasAction',  '_route' => 'daw_dieta_recetas',);
        }

        // daw_dieta_calendario
        if ($pathinfo === '/calendario') {
            return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::calendarioAction',  '_route' => 'daw_dieta_calendario',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

                // login_redirect
                if ($pathinfo === '/loginredirect') {
                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\SecurityController::loginRedirectAction',  '_route' => 'login_redirect',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // administrador
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'administrador');
                }

                return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\AdministradorController::indexAction',  '_route' => 'administrador',);
            }

            // admin_usuarios
            if ($pathinfo === '/admin/userlist') {
                return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'admin_usuarios',);
            }

            // admin_usuario_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_show')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::showAction',));
            }

            // admin_usuario_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_edit')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::editAction',));
            }

            // admin_usuario_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_update')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_admin_usuario_update:

            // admin_usuario_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_delete')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_admin_usuario_delete:

            if (0 === strpos($pathinfo, '/admin/articulo')) {
                // articulo
                if (rtrim($pathinfo, '/') === '/admin/articulo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'articulo');
                    }

                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::indexAction',  '_route' => 'articulo',);
                }

                // articulo_show
                if (preg_match('#^/admin/articulo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo_show')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::showAction',));
                }

                // articulo_new
                if ($pathinfo === '/admin/articulo/new') {
                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::newAction',  '_route' => 'articulo_new',);
                }

                // articulo_create
                if ($pathinfo === '/admin/articulo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_articulo_create;
                    }

                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::createAction',  '_route' => 'articulo_create',);
                }
                not_articulo_create:

                // articulo_edit
                if (preg_match('#^/admin/articulo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo_edit')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::editAction',));
                }

                // articulo_update
                if (preg_match('#^/admin/articulo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_articulo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo_update')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::updateAction',));
                }
                not_articulo_update:

                // articulo_delete
                if (preg_match('#^/admin/articulo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_articulo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo_delete')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::deleteAction',));
                }
                not_articulo_delete:

            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::usuarioAction',  '_route' => 'usuario',);
            }

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            if (0 === strpos($pathinfo, '/usuario/receta')) {
                // receta
                if (rtrim($pathinfo, '/') === '/usuario/receta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'receta');
                    }

                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::indexAction',  '_route' => 'receta',);
                }

                // receta_show
                if (preg_match('#^/usuario/receta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_show')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::showAction',));
                }

                // receta_new
                if ($pathinfo === '/usuario/receta/new') {
                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::newAction',  '_route' => 'receta_new',);
                }

                // receta_create
                if ($pathinfo === '/usuario/receta/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_receta_create;
                    }

                    return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::createAction',  '_route' => 'receta_create',);
                }
                not_receta_create:

                // receta_edit
                if (preg_match('#^/usuario/receta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_edit')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::editAction',));
                }

                // receta_update
                if (preg_match('#^/usuario/receta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_receta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_update')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::updateAction',));
                }
                not_receta_update:

                // receta_delete
                if (preg_match('#^/usuario/receta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_receta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_delete')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::deleteAction',));
                }
                not_receta_delete:

            }

        }

        // usuario_new
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
        }

        // usuario_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_usuario_create;
            }

            return array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
        }
        not_usuario_create:

        // usuario_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::showAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
