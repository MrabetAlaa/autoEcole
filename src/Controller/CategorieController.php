<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Categorie;
class CategorieController extends AbstractController
{
    #[Route('/categories', name: 'app_categories')]
    public function index(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(Categorie::class);
        $categories = $repo->findAll();
        return $this->render('categorie/all.html.twig', [
            'categories' =>  $categories ,
            'user' => $this->getUser(),
        ]);
    }
    #[Route('{id}/lessons', name: 'app_lessons_list')]
    public function lessons(EntityManagerInterface $em , int $id): Response
    {
        $categRepo = $em->getRepository(Categorie::class);
        $categorie = $categRepo->find($id);
        $lessons = $categorie->getLessons();
        return $this->render('lessons/list.html.twig' , [
            'lessons' => $lessons ,
            'user' => $this->getUser() ,
            'categorie' => $categorie->getCategorie(),
        ]);
    }
}
