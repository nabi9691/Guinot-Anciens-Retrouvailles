<?php

namespace App\Controller;

// use App\Entity\Utilisateurs;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;
use SebastianBergmann\CodeCoverage\Report\Html\Renderer;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Types\TextType;
use Gedmo\Mapping\Annotation\Slug;

/**
 * @Route("/home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil_index")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', []);
    }

        

    }
