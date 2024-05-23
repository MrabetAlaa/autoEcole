<?php

namespace App\Controller;

use App\Entity\Lesson;
use App\Form\LessonType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LessonsController extends AbstractController
{
    #[Route('/lessons/add', name: 'app_add_lesson')]
    public function add(Request $req , EntityManagerInterface $em): Response
    {
        $lesson = new Lesson();
        $form = $this->createForm(LessonType::class , $lesson);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid()){
            $file = $req->files->get('lesson')['fileName'];
            $uplaods_directory = $this->getParameter('uploads_directory');
            $file_name = md5(uniqid()) . '.' . $file->guessExtension(); 
            $file->move(
                $uplaods_directory ,
                $file_name 
            );
            $lesson->setFileName($file_name);
            $em->persist($lesson);
            $em->flush();
            return $this->redirect($this->generateUrl('app_lessons_all'));
        }
        return $this->render('lessons/add.html.twig' , [
            'form' => $form ,
        ]);
    }
    #[Route('/lessons/all', name: 'app_lessons_all')]
    public function all(EntityManagerInterface $em ): Response
    {
        $lessonsRepo = $em->getRepository(Lesson::class);
        $lessons = $lessonsRepo->findAll();
        return $this->render('lessons/all.html.twig' ,[
            'lessons' => $lessons ,
        ]);
    }
    #[Route('/lessons/supprimer/{id}', name: 'app_delete_lesson')]
    public function delete(EntityManagerInterface $em , int $id): Response
    {
        $lessonsRepo = $em->getRepository(Lesson::class);
        $lesson = $lessonsRepo->find($id);
        $lessonsRepo->remove($lesson , true);
        $lessons = $lessonsRepo->findAll();
        return $this->redirect($this->generateUrl('app_lessons_all'));
    }
    
}
