<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlackjackController extends AbstractController
{
    #[Route('/blackjack', name: 'app_blackjack')]
    public function index(): Response
    {
        $cards = array('2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, 'T' => 10, 'J' => 10, 'Q' => 10, 'K' => 10, 'A' => 11);
        $types = array('♣', '♠', '♥', '♦');
        $winner = true;

        $tmp['card'] = array_rand($cards);
        $tmp['type'] = $types[array_rand($types)];

        $selectedCard =[$tmp['card'] . $tmp['type']];

        return $this->render('blackjack/index.html.twig', [
            'controller_name' => 'BlackjackController',
            'cards' => $cards,
            'types' => $types,
            'winner' => $winner,
            'selected_cards' => $selectedCard,
        ]);
    }
}
