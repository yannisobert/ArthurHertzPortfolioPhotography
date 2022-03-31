<?php

namespace App\Controller;

use App\Repository\PhotoCategoryRepository;
use App\Repository\PhotographyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(PhotoCategoryRepository $categoryRepository, PhotographyRepository $photographyRepository): Response
    {
        $categoryRepo = $categoryRepository->findAll();
        $photo = $photographyRepository->findAll();

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'photoCategories' => $categoryRepo,
            'photos' => $photo,
        ]);
    }

    #[Route('/category{idcategory}', name: 'category')]
    public function category($idcategory, PhotographyRepository $photographyRepository): Response
    {
        return $this->render('app/category.html.twig', [
            'controller_name' => 'AppController',
            'photos' => $photographyRepository->findBy(['Category' => $idcategory]),
            'idcategory' => $idcategory
        ]);
    }

    #[Route('/photography{idphoto}', name: 'photography')]
    public function photography($idphoto, PhotographyRepository $photographyRepository): Response
    {
        return $this->render('app/photography.html.twig', [
            'controller_name' => 'AppController',
            'photos' => $photographyRepository->find($idphoto),
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('app/contact.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
