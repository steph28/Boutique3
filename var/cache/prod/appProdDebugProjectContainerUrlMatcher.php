<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // login
        if ('/login' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::loginAction',  '_route' => 'login',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_login;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'login'));
            }

            return $ret;
        }
        not_login:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/produit')) {
                // produit_show
                if ('/admin/produit/show' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitShowAction',  '_route' => 'produit_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_produit_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_show'));
                    }

                    return $ret;
                }
                not_produit_show:

                // produit_delete
                if (0 === strpos($pathinfo, '/admin/produit/delete') && preg_match('#^/admin/produit/delete/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitDeleteAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_produit_delete;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_delete'));
                    }

                    return $ret;
                }
                not_produit_delete:

                // produit_update
                if (0 === strpos($pathinfo, '/admin/produit/update') && preg_match('#^/admin/produit/update/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitUpdateAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_produit_update;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_update'));
                    }

                    return $ret;
                }
                not_produit_update:

                // produit_add
                if ('/admin/produit/add' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitAddAction',  '_route' => 'produit_add',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_produit_add;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_add'));
                    }

                    return $ret;
                }
                not_produit_add:

            }

            elseif (0 === strpos($pathinfo, '/admin/membre')) {
                // membre_show
                if ('/admin/membre/show' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreShowAction',  '_route' => 'membre_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_membre_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'membre_show'));
                    }

                    return $ret;
                }
                not_membre_show:

                // membre_profil
                if (0 === strpos($pathinfo, '/admin/membre/profil') && preg_match('#^/admin/membre/profil/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_profil')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreProfilAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_membre_profil;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'membre_profil'));
                    }

                    return $ret;
                }
                not_membre_profil:

                // membre_delete
                if (0 === strpos($pathinfo, '/admin/membre/delete') && preg_match('#^/admin/membre/delete/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_delete')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreDeleteAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_membre_delete;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'membre_delete'));
                    }

                    return $ret;
                }
                not_membre_delete:

                // membre_update
                if (0 === strpos($pathinfo, '/admin/membre/update') && preg_match('#^/admin/membre/update/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_update')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreUpdateAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_membre_update;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'membre_update'));
                    }

                    return $ret;
                }
                not_membre_update:

                // membre_add
                if ('/admin/membre/add' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreAddAction',  '_route' => 'membre_add',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_membre_add;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'membre_add'));
                    }

                    return $ret;
                }
                not_membre_add:

            }

            elseif (0 === strpos($pathinfo, '/admin/commande')) {
                // commande_show
                if ('/admin/commande/show' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeShowAction',  '_route' => 'commande_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_commande_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_show'));
                    }

                    return $ret;
                }
                not_commande_show:

                // commande_delete
                if (0 === strpos($pathinfo, '/admin/commande/delete') && preg_match('#^/admin/commande/delete/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeDeleteAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_commande_delete;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_delete'));
                    }

                    return $ret;
                }
                not_commande_delete:

                // commande_update
                if (0 === strpos($pathinfo, '/admin/commande/update') && preg_match('#^/admin/commande/update/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_update')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeUpdateAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_commande_update;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_update'));
                    }

                    return $ret;
                }
                not_commande_update:

                // commande_add
                if ('/admin/commande/add' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeAddAction',  '_route' => 'commande_add',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_commande_add;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_add'));
                    }

                    return $ret;
                }
                not_commande_add:

            }

        }

        // profil
        if ('/profil' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\MembreController::profilAction',  '_route' => 'profil',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_profil;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'profil'));
            }

            return $ret;
        }
        not_profil:

        // produit
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit')), array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::produitAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_produit;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit'));
            }

            return $ret;
        }
        not_produit:

        // inscription
        if ('/inscription' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\MembreController::inscriptionAction',  '_route' => 'inscription',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_inscription;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'inscription'));
            }

            return $ret;
        }
        not_inscription:

        // connexion
        if ('/connexion' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\MembreController::connexionAction',  '_route' => 'connexion',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_connexion;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'connexion'));
            }

            return $ret;
        }
        not_connexion:

        // categorie
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie')), array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::categorieAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_categorie;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'categorie'));
            }

            return $ret;
        }
        not_categorie:

        // accueil
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::indexAction',  '_route' => 'accueil',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_accueil;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'accueil'));
            }

            return $ret;
        }
        not_accueil:

        // resultats
        if ('/resultats' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::resultatAction',  '_route' => 'resultats',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_resultats;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'resultats'));
            }

            return $ret;
        }
        not_resultats:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}