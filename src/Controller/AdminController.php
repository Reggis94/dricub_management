<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/prochains-cours", name="admin_next_classes")
     */
    public function adminNextClasses()
    {
        return $this->render('admin/next-classes.html.twig', [
            'controller_name' => 'adminNextClasses',
        ]);
    }
}
