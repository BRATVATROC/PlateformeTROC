<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'troc_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'read_commentaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\CommentaireController::readcAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/readc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_commentaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\CommentaireController::createcAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/createc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'read' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\AnnonceController::readAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/troc/read',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\CommentaireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'troc_signin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\SigninController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/signin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rec_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\ReclamationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'feed_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\FeedbackController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/ajoutf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opinon_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\OpinionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/ajouto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opinion_aff' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\OpinionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/ajoutof',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle:Connexion:signin',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/signin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle:Connexion:signup',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/signup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\DefaultController::pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/single',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rec_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\ReclamationController::ReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/troc/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'feedback_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\FeedbackController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feedback/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'feedback_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\FeedbackController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feedback/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'feedback_show' => array (  0 =>   array (    0 => 'idFeed',  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\FeedbackController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFeed',    ),    1 =>     array (      0 => 'text',      1 => '/feedback',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'feedback_edit' => array (  0 =>   array (    0 => 'idFeed',  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\FeedbackController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFeed',    ),    2 =>     array (      0 => 'text',      1 => '/feedback',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'feedback_delete' => array (  0 =>   array (    0 => 'idFeed',  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\FeedbackController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFeed',    ),    1 =>     array (      0 => 'text',      1 => '/feedback',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opinion_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\OpinionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opinion_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\OpinionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opinion_show' => array (  0 =>   array (    0 => 'idOp',  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\OpinionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opinion_edit' => array (  0 =>   array (    0 => 'idOp',  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\OpinionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opinion_delete' => array (  0 =>   array (    0 => 'idOp',  ),  1 =>   array (    '_controller' => 'TrocBundle\\Controller\\OpinionController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
