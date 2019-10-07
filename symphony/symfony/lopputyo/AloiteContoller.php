<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AloiteController extends AbstractController{

    /**
     * @Route("laatikko/aloitelaatikko")
     */
    public function aloitelaatikko(){
        
        $noppa = rand(1, 6);

        //kutsutaan näkymää ja lähetetään sille dataa siltävät muuttujat
        return $this->render('laatikko/aloitelaatikko.html.twig', [
            'noppa' => $noppa
        ]);
    

        


    }
    


}

?>