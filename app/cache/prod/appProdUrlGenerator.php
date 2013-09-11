<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'daw_dieta_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'daw_dieta_quecomer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::quecomerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/quecomer',    ),  ),  4 =>   array (  ),),
        'daw_dieta_quebeber' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\DefaultController::quebeberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/quebeber',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'login_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\SecurityController::loginRedirectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginredirect',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'administrador' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\AdministradorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'admin_usuarios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/userlist',    ),  ),  4 =>   array (  ),),
        'admin_usuario_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'admin_usuario_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'admin_usuario_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'admin_usuario_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'articulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articulo/',    ),  ),  4 =>   array (  ),),
        'articulo_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/articulo',    ),  ),  4 =>   array (  ),),
        'articulo_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articulo/new',    ),  ),  4 =>   array (  ),),
        'articulo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articulo/create',    ),  ),  4 =>   array (  ),),
        'articulo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/articulo',    ),  ),  4 =>   array (  ),),
        'articulo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/articulo',    ),  ),  4 =>   array (  ),),
        'articulo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\ArticuloController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/articulo',    ),  ),  4 =>   array (  ),),
        'usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::usuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/',    ),  ),  4 =>   array (  ),),
        'usuario_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),),
        'usuario_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),),
        'receta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/receta/',    ),  ),  4 =>   array (  ),),
        'receta_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario/receta',    ),  ),  4 =>   array (  ),),
        'receta_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/receta/new',    ),  ),  4 =>   array (  ),),
        'receta_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/receta/create',    ),  ),  4 =>   array (  ),),
        'receta_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario/receta',    ),  ),  4 =>   array (  ),),
        'receta_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario/receta',    ),  ),  4 =>   array (  ),),
        'receta_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\RecetaController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario/receta',    ),  ),  4 =>   array (  ),),
        'usuario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro',    ),  ),  4 =>   array (  ),),
        'usuario_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),  4 =>   array (  ),),
        'usuario_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Daw\\DietaBundle\\Controller\\UsuarioController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
