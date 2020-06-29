<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("eleve/prochains-cours", name="student_next_classes")
     */
    public function studentNextClasses()
    {
        return $this->render('student/next-classes.html.twig', [
            'controller_name' => 'studentNextClasses',
        ]);
    }
}
