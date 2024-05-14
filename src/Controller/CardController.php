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
    public function home(
        Request $request,
        SessionInterface $session
    ): Response
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
        $session->set("deck", $deck);
        return $this->render('card.html.twig', $data);
    }


    #[Route("/session", name: "show_session")]
    public function session(
        SessionInterface $session
    ): Response
    {
        $data = [
            "session" => $session->all()
        ];

        return $this->render('card/session.html.twig', $data);
    }

    #[Route("/session/delete", name: "clear_session")]
    public function sessionClear(
        SessionInterface $session
    ): Response
    {
        $session->clear();

        return $this->redirectToRoute('show_session');
    }

}
