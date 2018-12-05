<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/commande')) {
            // commande_homepage
            if ('/commande' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'commande_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_commande_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_homepage'));
                }

                return $ret;
            }
            not_commande_homepage:

            // read_commande
            if ('/commande/read' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::readAction',  '_route' => 'read_commande',);
            }

            // create_commande
            if ('/commande/create' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::createAction',  '_route' => 'create_commande',);
            }

            // update_commande
            if (0 === strpos($pathinfo, '/commande/update') && preg_match('#^/commande/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::updateAction',));
            }

            if (0 === strpos($pathinfo, '/commande/delete')) {
                // delete_commande
                if (preg_match('#^/commande/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::deleteAction',));
                }

                // supprimer_pannier
                if (0 === strpos($pathinfo, '/commande/deletefromcart') && preg_match('#^/commande/deletefromcart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_pannier')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::deleteFromCartAction',));
                }

            }

            // affiche_annonce
            if (0 === strpos($pathinfo, '/commande/affichannonce') && preg_match('#^/commande/affichannonce/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiche_annonce')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::affichAnnonceAction',));
            }

            // ajouter_pannier
            if (0 === strpos($pathinfo, '/commande/addtocart') && preg_match('#^/commande/addtocart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_pannier')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::addToCartAction',));
            }

            // troc_annonce
            if (0 === strpos($pathinfo, '/commande/troquer') && preg_match('#^/commande/troquer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troc_annonce')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::troquerAction',));
            }

            // test
            if ('/commande/test' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::testAction',  '_route' => 'test',);
            }

            // valider_troc_annonce
            if ('/commande/validertroc/{idA1,idA2}' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::validerTrocAction',  '_route' => 'valider_troc_annonce',);
            }

            // imprimer_facture
            if (0 === strpos($pathinfo, '/commande/print') && preg_match('#^/commande/print/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprimer_facture')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::printAction',));
            }

            // stats
            if ('/commande/stats' === $pathinfo) {
                return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::statsAction',  '_route' => 'stats',);
            }

        }

        elseif (0 === strpos($pathinfo, '/troc')) {
            // troc_homepage
            if ('/troc' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'troc_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_troc_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'troc_homepage'));
                }

                return $ret;
            }
            not_troc_homepage:

            if (0 === strpos($pathinfo, '/troc/read')) {
                // read_commentaire
                if ('/troc/readc' === $pathinfo) {
                    return array (  '_controller' => 'TrocBundle\\Controller\\CommentaireController::readcAction',  '_route' => 'read_commentaire',);
                }

                // read
                if (preg_match('#^/troc/read/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'read')), array (  '_controller' => 'TrocBundle\\Controller\\AnnonceController::readAction',));
                }

            }

            // create_commentaire
            if ('/troc/createc' === $pathinfo) {
                return array (  '_controller' => 'TrocBundle\\Controller\\CommentaireController::createcAction',  '_route' => 'create_commentaire',);
            }

            // index
            if ('/troc/index' === $pathinfo) {
                return array (  '_controller' => 'TrocBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'index',);
            }

            if (0 === strpos($pathinfo, '/troc/si')) {
                if (0 === strpos($pathinfo, '/troc/signin')) {
                    // troc_signin
                    if ('/troc/signin' === $pathinfo) {
                        return array (  '_controller' => 'TrocBundle\\Controller\\SigninController::indexAction',  '_route' => 'troc_signin',);
                    }

                    // signin
                    if ('/troc/signin' === $pathinfo) {
                        return array (  '_controller' => 'TrocBundle:Connexion:signin',  '_route' => 'signin',);
                    }

                }

                // signup
                if ('/troc/signup' === $pathinfo) {
                    return array (  '_controller' => 'TrocBundle:Connexion:signup',  '_route' => 'signup',);
                }

                // page
                if ('/troc/single' === $pathinfo) {
                    return array (  '_controller' => 'TrocBundle\\Controller\\DefaultController::pageAction',  '_route' => 'page',);
                }

            }

            // rec_ajout
            if ('/troc/new' === $pathinfo) {
                return array (  '_controller' => 'TrocBundle\\Controller\\ReclamationController::newAction',  '_route' => 'rec_ajout',);
            }

            if (0 === strpos($pathinfo, '/troc/a')) {
                // feed_ajout
                if ('/troc/ajoutf' === $pathinfo) {
                    return array (  '_controller' => 'TrocBundle\\Controller\\FeedbackController::newAction',  '_route' => 'feed_ajout',);
                }

                if (0 === strpos($pathinfo, '/troc/ajouto')) {
                    // opinon_ajout
                    if ('/troc/ajouto' === $pathinfo) {
                        return array (  '_controller' => 'TrocBundle\\Controller\\OpinionController::newAction',  '_route' => 'opinon_ajout',);
                    }

                    // opinion_aff
                    if ('/troc/ajoutof' === $pathinfo) {
                        return array (  '_controller' => 'TrocBundle\\Controller\\OpinionController::showAction',  '_route' => 'opinion_aff',);
                    }

                }

                // rec_admin
                if ('/troc/admin' === $pathinfo) {
                    return array (  '_controller' => 'TrocBundle\\Controller\\ReclamationController::ReclamationAction',  '_route' => 'rec_admin',);
                }

            }

        }

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

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/feedback')) {
            // feedback_index
            if ('/feedback' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'TrocBundle\\Controller\\FeedbackController::indexAction',  '_route' => 'feedback_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_feedback_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'feedback_index'));
                }

                return $ret;
            }
            not_feedback_index:

            // feedback_new
            if ('/feedback/new' === $pathinfo) {
                return array (  '_controller' => 'TrocBundle\\Controller\\FeedbackController::testAction',  '_route' => 'feedback_new',);
            }

            // feedback_show
            if (preg_match('#^/feedback/(?P<idFeed>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_show')), array (  '_controller' => 'TrocBundle\\Controller\\FeedbackController::showAction',));
            }

            // feedback_edit
            if (preg_match('#^/feedback/(?P<idFeed>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_edit')), array (  '_controller' => 'TrocBundle\\Controller\\FeedbackController::editAction',));
            }

            // feedback_delete
            if (preg_match('#^/feedback/(?P<idFeed>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_delete')), array (  '_controller' => 'TrocBundle\\Controller\\FeedbackController::deleteAction',));
            }

        }

        // opinion_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'TrocBundle\\Controller\\OpinionController::indexAction',  '_route' => 'opinion_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_opinion_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'opinion_index'));
            }

            return $ret;
        }
        not_opinion_index:

        // opinion_new
        if ('/new' === $pathinfo) {
            return array (  '_controller' => 'TrocBundle\\Controller\\OpinionController::newAction',  '_route' => 'opinion_new',);
        }

        // opinion_show
        if (preg_match('#^/(?P<idOp>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opinion_show')), array (  '_controller' => 'TrocBundle\\Controller\\OpinionController::showAction',));
        }

        // opinion_edit
        if (preg_match('#^/(?P<idOp>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opinion_edit')), array (  '_controller' => 'TrocBundle\\Controller\\OpinionController::editAction',));
        }

        // opinion_delete
        if (preg_match('#^/(?P<idOp>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opinion_delete')), array (  '_controller' => 'TrocBundle\\Controller\\OpinionController::deleteAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
