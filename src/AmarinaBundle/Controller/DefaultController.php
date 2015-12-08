<?php

namespace AmarinaBundle\Controller;

use AmarinaBundle\Entity\Mueble;
use AmarinaBundle\Entity\Category;
use AmarinaBundle\Entity\Character;
use AmarinaBundle\Entity\CurrentFinish;
use AmarinaBundle\Entity\Finish;
use AmarinaBundle\Entity\Group;
use AmarinaBundle\Entity\Style;
use AmarinaBundle\Entity\Type;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AmarinaBundle:Default:index.html.twig');
    }

    public function createMuebleAction(){
    	$category = new Category();
    	$category->setName("uso_SOFAS Y LOVE SEATS");

    	$character = new Character();
    	$character->setName("Antiqued");

    	$currentFinish = new CurrentFinish();
    	$currentFinish->setName("DISTRESSED");
    	$currentFinish->setCodFinist(4);

    	$finish = new Finish();
    	$finish->setName("Distressed Translucid");

    	$group = new Group();
    	$group->setName("Sofas y Love Seats");

    	$style = new Style();
    	$style->setName("Casual");

    	$type = new Type();
    	$type->setName("Tapiceria");

    	$mueble = new Mueble();
    	$mueble->setCodUr('501-344-02');
    	$mueble->setName("SOFA MONTROUGE");
    	$mueble->setPrice(90000.99);
    	$mueble->setWidth(204.5);
    	$mueble->setHeight(105.26);
    	$mueble->setDeep(96.25);
    	$mueble->setStyle($style);
    	$mueble->setType($type);
    	$mueble->setGroup($group);
    	$mueble->setCategory($category);
    	$mueble->setCharacter($character);
    	$mueble->addFinish($finish);
    	$mueble->setCurrentFinish($currentFinish);

    	$em = $this->getDoctrine()->getManager();
    	$em->persist($category);
    	$em->persist($character);
    	$em->persist($currentFinish);
    	$em->persist($finish);
    	$em->persist($group);
    	$em->persist($style);
    	$em->persist($type);
    	$em->persist($mueble);
    	$em->flush();

    	return new Response(
    			'Created furniture number: '.$mueble->getCodUr()
    		);
    	
    }

    public function saludoAction(){
    	return $this->render('AmarinaBundle:Default:createMueble.html.twig');
    }
}
