<?php

namespace Oh\FOSFacebookUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecuredController extends Controller
{
    public function indexAction()
    {
		//this page requires the user to be logged in
        return $this->render('OhFOSFacebookUserBundle:Secured:index.html.twig');
    }
	
}
