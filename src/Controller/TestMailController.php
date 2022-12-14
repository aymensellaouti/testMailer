<?php

namespace App\Controller;

use App\Service\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestMailController extends AbstractController
{
    public function __construct(private MailerService $mailer)
    {}

    #[Route('/test/mail', name: 'app_test_mail')]
    public function index(): Response
    {
        $this->mailer->sendEmail(content: 'test for amine', subject: 'Mail sent from EventSubscriber');
        return $this->render('test_mail/index.html.twig', [
            'controller_name' => 'TestMailController',
        ]);
    }
}
