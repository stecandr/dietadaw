<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
