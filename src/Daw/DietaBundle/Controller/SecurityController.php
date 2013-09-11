<?php
 
namespace Daw\DietaBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
 
class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
 
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
 
        return $this->render('DawDietaBundle:Login:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }

    public function loginRedirectAction(){
        if($this->container->get('security.context')->isGranted('ROLE_ADMIN') ){
            return $this->redirect($this->generateUrl('administrador'));
        }else if($this->container->get('security.context')->isGranted('ROLE_USER') ){
            return $this->redirect($this->generateUrl('usuario'));
        }else{
            return $this->redirect($this->generateUrl('daw_dieta_homepage'));
        }
    }
}
