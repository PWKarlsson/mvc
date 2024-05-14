<?php

namespace App\Controller;
use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\Deck;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardController extends AbstractController
{
    #[Route("/card", name: "card")]
    public function home(): Response
    {   
        $card = new CardGraphic();
        // $card = new Card();
        $card->draw();
        // var_dump($card->draw());


        $hand = new CardHand();
        for ($i = 1; $i <= 5; $i++) {
            $hand->add(new CardGraphic());
        }
        $hand->draw();
        $deck = new Deck();
        $data = [
            'values'=> $hand->getString(),
            'value1' => $card->getValue(),
            'suite'=> $card->getSuite(),
            'deck' => $deck->getDeck()
        ];
        return $this->render('card.html.twig', $data);
    }


    #[Route("/session", name: "session_content")]
    public function session(
        SessionInterface $session
    ): Response
    {
        return $this->render('card/session.html.twig');
    }

}