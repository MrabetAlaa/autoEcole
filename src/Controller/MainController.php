<?php

namespace App\Controller;
use App\Entity\User;
use App\Repository\PasserExamenRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function home(): Response
    {
        return $this->render('home/home.html.twig' , [
        ]);
    }
    #[Route('/historique', name: 'app_history')]
    public function historique(EntityManagerInterface $em , Security $sec): Response
    {
        $user = $this->getUser();
        if($sec->isGranted('IS_AUTHENTICATED_FULLY')){
            $PasserExamens = $user->getPasserExamens(); 
            /*for($i = 0 ; $i < count($PasserExamens) ; $i++ ){
                $PasserExamens->get($i)->fixExamen($em);
            }
            $em->flush();
            $PasserExamens = $user->getPasserExamens(); */
        }else{
                return $this->redirect($this->generateUrl('app_login'));
        }
        return $this->render('examen/historique.html.twig' , [
            'passerExamens' => $PasserExamens ,
            'user' => $user ,
        ]);
    }
    #[Route('/historique/delete/{id}', name: 'app_delete_history')]
    public function delete(PasserExamenRepository $passerRepo , int $id): Response
    {
        $passExamen = $passerRepo->find($id);
        $passerRepo->remove($passExamen , true);
        return $this->redirect($this->generateUrl('app_history'));
    }

}
