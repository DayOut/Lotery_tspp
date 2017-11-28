<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     */
    public function indexAction(Request $request)
    {
        /** @var Registry $doctrine */
        $doctrine = $this->get('doctrine');

        /** @var EntityManager $manager */
        $manager = $doctrine->getManager();

        $query = $manager->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:User', 'p')
            ->orderBy('p.id')
            ->getQuery();

        /** @var User[] $products */
        $users = $query->execute();


        return $this->render('user/index.html.twig', [
            'users' => $users,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }



}
