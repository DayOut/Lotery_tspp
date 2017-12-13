<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Lotery;
use AppBundle\Type\LoteryType;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        /*return Response("sad");*/
    }

    /**
     * @Route("/list", name="lotery_list")
     */
    public function loteryListAction(Request $request)
    {
        /** @var Registry $doctrine */
        $doctrine = $this->get('doctrine'); // указатель на доктрину

        /** @var EntityManager $manager */
        $manager = $doctrine->getManager(); // указатель на доступ к менеджеру (для работы с бд)

        $query = $manager->createQueryBuilder() // формируем запрос
        ->from('AppBundle:Lotery', 'p')
            ->select('p')
            ->orderBy('p.lotery_id', 'DESC')
            ->getQuery();

        /** @var Lotery[] $products */
        $loterys = $query->execute();

        // replace this example code with whatever you need
        return $this->render('default/list.html.twig', [
            'loterys' => $loterys,
        ]);
        /*return Response("sad");*/
    }

    /**
     * @Route("/result", name="result")
     */
    public function resultAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/result.html.twig');
        /*return Response("sad");*/
    }

    /**
     * @Route("form/{id}", name="create_lotery")
     */
    public function formAction($id=null, Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->get('doctrine')->getManager();

        if($id == null)
        {
            $lotery = new Lotery();
        }
        else
        {
            $lotery = $em->find(Lotery::class, $id);
            if(!$lotery)
            {
                throw new NotFoundHttpException();
            }
        }

        $form = $this->createForm(LoteryType::class, $lotery);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($lotery);
            $em->flush();

            return $this->redirectToRoute('lotery_list');
        }

        return $this->render('default/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("wind-a-winner/{id}", name="find_a_winner")
     */
    /*
     * Изначально надеялись, что получится сделать случайный авыбор "победителя"
     * но пока костыль за костылем ... 
     * */
    public function findAWinnerAction($id)
    {
        /** @var EntityManager $em */
        $em = $this->get('doctrine')->getManager();

        $lotery = $em->find(Lotery::class, $id);
        if(!$lotery)
        {
            throw new NotFoundHttpException();
        }
        $query = $em->createQueryBuilder() // формируем запрос
        ->from('AppBundle:User', 'c')
            ->select('COUNT(1)')
            ->getQuery();
        $count = $query->execute();
        $max = $count[0];
        $lotery->setWinner($max);
        $em->persist($lotery);
        $em->flush();
        return $this->redirectToRoute('litery_list');
    }

}
