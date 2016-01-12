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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/noticias')) {
            // noticias
            if (rtrim($pathinfo, '/') === '/noticias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'noticias');
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\noticiasController::indexAction',  '_route' => 'noticias',);
            }

            // noticias_show
            if (preg_match('#^/noticias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_show')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\noticiasController::showAction',));
            }

            // noticias_new
            if ($pathinfo === '/noticias/new') {
                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\noticiasController::newAction',  '_route' => 'noticias_new',);
            }

            // noticias_create
            if ($pathinfo === '/noticias/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_noticias_create;
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\noticiasController::createAction',  '_route' => 'noticias_create',);
            }
            not_noticias_create:

            // noticias_edit
            if (preg_match('#^/noticias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_edit')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\noticiasController::editAction',));
            }

            // noticias_update
            if (preg_match('#^/noticias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_update')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\noticiasController::updateAction',));
            }
            not_noticias_update:

            // noticias_delete
            if (preg_match('#^/noticias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_noticias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_delete')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\noticiasController::deleteAction',));
            }
            not_noticias_delete:

        }

        if (0 === strpos($pathinfo, '/plataforma')) {
            // plataforma
            if (rtrim($pathinfo, '/') === '/plataforma') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'plataforma');
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\plataformaController::indexAction',  '_route' => 'plataforma',);
            }

            // plataforma_show
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_show')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\plataformaController::showAction',));
            }

            // plataforma_new
            if ($pathinfo === '/plataforma/new') {
                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\plataformaController::newAction',  '_route' => 'plataforma_new',);
            }

            // plataforma_create
            if ($pathinfo === '/plataforma/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_plataforma_create;
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\plataformaController::createAction',  '_route' => 'plataforma_create',);
            }
            not_plataforma_create:

            // plataforma_edit
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_edit')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\plataformaController::editAction',));
            }

            // plataforma_update
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_plataforma_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_update')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\plataformaController::updateAction',));
            }
            not_plataforma_update:

            // plataforma_delete
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_plataforma_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_delete')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\plataformaController::deleteAction',));
            }
            not_plataforma_delete:

        }

        if (0 === strpos($pathinfo, '/juegos')) {
            // juegos
            if (rtrim($pathinfo, '/') === '/juegos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'juegos');
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\juegosController::indexAction',  '_route' => 'juegos',);
            }

            // juegos_show
            if (preg_match('#^/juegos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_show')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\juegosController::showAction',));
            }

            // juegos_new
            if ($pathinfo === '/juegos/new') {
                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\juegosController::newAction',  '_route' => 'juegos_new',);
            }

            // juegos_create
            if ($pathinfo === '/juegos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_juegos_create;
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\juegosController::createAction',  '_route' => 'juegos_create',);
            }
            not_juegos_create:

            // juegos_edit
            if (preg_match('#^/juegos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_edit')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\juegosController::editAction',));
            }

            // juegos_update
            if (preg_match('#^/juegos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_juegos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_update')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\juegosController::updateAction',));
            }
            not_juegos_update:

            // juegos_delete
            if (preg_match('#^/juegos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_juegos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_delete')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\juegosController::deleteAction',));
            }
            not_juegos_delete:

        }

        if (0 === strpos($pathinfo, '/categorias')) {
            // categorias
            if (rtrim($pathinfo, '/') === '/categorias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorias');
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\categoriasController::indexAction',  '_route' => 'categorias',);
            }

            // categorias_show
            if (preg_match('#^/categorias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_show')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\categoriasController::showAction',));
            }

            // categorias_new
            if ($pathinfo === '/categorias/new') {
                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\categoriasController::newAction',  '_route' => 'categorias_new',);
            }

            // categorias_create
            if ($pathinfo === '/categorias/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorias_create;
                }

                return array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\categoriasController::createAction',  '_route' => 'categorias_create',);
            }
            not_categorias_create:

            // categorias_edit
            if (preg_match('#^/categorias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_edit')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\categoriasController::editAction',));
            }

            // categorias_update
            if (preg_match('#^/categorias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_update')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\categoriasController::updateAction',));
            }
            not_categorias_update:

            // categorias_delete
            if (preg_match('#^/categorias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categorias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_delete')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\categoriasController::deleteAction',));
            }
            not_categorias_delete:

        }

        // uni_juegos_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_juegos_homepage')), array (  '_controller' => 'uniJuegos\\Bundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
