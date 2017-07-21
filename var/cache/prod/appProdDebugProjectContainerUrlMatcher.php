<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/apprenants')) {
                // of_list_apprenants
                if (rtrim($pathinfo, '/') === '/apprenants') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'of_list_apprenants');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ApprenantController::listAction',  '_route' => 'of_list_apprenants',);
                }

                // of_add_apprenant
                if ($pathinfo === '/apprenants/ajouter') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ApprenantController::ajouterApprenantAction',  '_route' => 'of_add_apprenant',);
                }

                // of_edit_apprenant
                if (0 === strpos($pathinfo, '/apprenants/editer') && preg_match('#^/apprenants/editer/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'of_edit_apprenant')), array (  '_controller' => 'AppBundle\\Controller\\ApprenantController::editerApprenantAction',));
                }

                // of_add_manuelle_apprenant
                if ($pathinfo === '/apprenants/ajouter-manuellement') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ApprenantController::ajouterApprenantManuellementAction',  '_route' => 'of_add_manuelle_apprenant',);
                }

                // of_edit_manuelle_apprenant
                if (0 === strpos($pathinfo, '/apprenants/editer-manuellement') && preg_match('#^/apprenants/editer\\-manuellement/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'of_edit_manuelle_apprenant')), array (  '_controller' => 'AppBundle\\Controller\\ApprenantController::editerApprenantManuellementAction',));
                }

                // of_delete_apprenant
                if (0 === strpos($pathinfo, '/apprenants/delete') && preg_match('#^/apprenants/delete/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'of_delete_apprenant')), array (  '_controller' => 'AppBundle\\Controller\\ApprenantController::deleteApprenantAction',));
                }

            }

            if (0 === strpos($pathinfo, '/attestation')) {
                // attestation_start
                if (0 === strpos($pathinfo, '/attestation/start') && preg_match('#^/attestation/start/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attestation_start')), array (  '_controller' => 'AppBundle\\Controller\\AttestationController::startAttestationAction',));
                }

                // print_qcm
                if (0 === strpos($pathinfo, '/attestation/print-qcm') && preg_match('#^/attestation/print\\-qcm/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_qcm')), array (  '_controller' => 'AppBundle\\Controller\\AttestationController::printQCMAction',));
                }

                // attestation_view
                if (0 === strpos($pathinfo, '/attestation/voir') && preg_match('#^/attestation/voir/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attestation_view')), array (  '_controller' => 'AppBundle\\Controller\\AttestationController::viewAttestationAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // annuaire
        if ($pathinfo === '/annuaire') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::annuaireAction',  '_route' => 'annuaire',);
        }

        // organismes_formations
        if ($pathinfo === '/organismes-formations') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::organismesAction',  '_route' => 'organismes_formations',);
        }

        // entreprises_btp
        if ($pathinfo === '/entreprises-btp') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::entreprisesBtpAction',  '_route' => 'entreprises_btp',);
        }

        // qcm_edit
        if ($pathinfo === '/admin/QCM') {
            return array (  '_controller' => 'AppBundle\\Controller\\QCMController::editerQCMAction',  '_route' => 'qcm_edit',);
        }

        // delete_element
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<type>[^/]++)/(?P<question_id>[^/]++)/(?P<response_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_element')), array (  '_controller' => 'AppBundle\\Controller\\QCMController::deleteElementAction',));
        }

        // admin_statistiques
        if (rtrim($pathinfo, '/') === '/statistiques') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_statistiques');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\StatistiquesController::indexAction',  '_route' => 'admin_statistiques',);
        }

        if (0 === strpos($pathinfo, '/admin/utilisateur')) {
            if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
                // admin_list_apprenants
                if ($pathinfo === '/admin/utilisateurs/apprenants') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::usersApprenantsAction',  '_route' => 'admin_list_apprenants',);
                }

                // admin_users_ett
                if ($pathinfo === '/admin/utilisateurs/ETT') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::usersETTAction',  '_route' => 'admin_users_ett',);
                }

                // admin_users_of
                if ($pathinfo === '/admin/utilisateurs/OF') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::usersOFAction',  '_route' => 'admin_users_of',);
                }

                // admin_users_btp
                if ($pathinfo === '/admin/utilisateurs/BTP') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::usersBTPAction',  '_route' => 'admin_users_btp',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/utilisateur/ETT')) {
                // admin_users_ett_add
                if ($pathinfo === '/admin/utilisateur/ETT/ajouter') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::ajouterETTAction',  '_route' => 'admin_users_ett_add',);
                }

                // admin_users_ett_edit
                if (0 === strpos($pathinfo, '/admin/utilisateur/ETT/editer') && preg_match('#^/admin/utilisateur/ETT/editer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_ett_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editerETTAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/utilisateur/OF')) {
                // admin_users_of_add
                if ($pathinfo === '/admin/utilisateur/OF/ajouter') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::ajouterOFAction',  '_route' => 'admin_users_of_add',);
                }

                // admin_users_of_edit
                if (0 === strpos($pathinfo, '/admin/utilisateur/OF/editer') && preg_match('#^/admin/utilisateur/OF/editer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_of_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editerOFAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/utilisateur/BTP')) {
                // admin_users_btp_add
                if ($pathinfo === '/admin/utilisateur/BTP/ajouter') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::ajouterBTPAction',  '_route' => 'admin_users_btp_add',);
                }

                // admin_users_btp_edit
                if (0 === strpos($pathinfo, '/admin/utilisateur/BTP/editer') && preg_match('#^/admin/utilisateur/BTP/editer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_btp_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editerBTPAction',));
                }

            }

            // admin_users_activate
            if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/activation$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_activate')), array (  '_controller' => 'AppBundle\\Controller\\UserController::userActivationAction',));
            }

            // admin_users_deactivate
            if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/desactivation$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_deactivate')), array (  '_controller' => 'AppBundle\\Controller\\UserController::userDesactivationAction',));
            }

            // admin_users_delete
            if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteUserAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/inscription/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/inscription/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/inscription/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/inscription/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/forgot-password')) {
            // fos_user_resetting_request
            if ($pathinfo === '/forgot-password/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/forgot-password/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/forgot-password/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/forgot-password/reset') && preg_match('#^/forgot\\-password/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/_uploader')) {
            // _uploader_upload_images
            if ($pathinfo === '/_uploader/images/upload') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_images;
                }

                return array (  '_controller' => 'oneup_uploader.controller.images:upload',  '_format' => 'json',  '_route' => '_uploader_upload_images',);
            }
            not__uploader_upload_images:

            // _uploader_upload_sounds
            if ($pathinfo === '/_uploader/sounds/upload') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_sounds;
                }

                return array (  '_controller' => 'oneup_uploader.controller.sounds:upload',  '_format' => 'json',  '_route' => '_uploader_upload_sounds',);
            }
            not__uploader_upload_sounds:

            // _uploader_upload_attestations
            if ($pathinfo === '/_uploader/attestations/upload') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_attestations;
                }

                return array (  '_controller' => 'oneup_uploader.controller.attestations:upload',  '_format' => 'json',  '_route' => '_uploader_upload_attestations',);
            }
            not__uploader_upload_attestations:

        }

        // fos_user_profile_show
        if ($pathinfo === '/annuaire') {
            return array('_route' => 'fos_user_profile_show');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
