<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class LuckyController 
{
    /**
     * @Route("/lucky/number")
     */
    public function number() : Response 
    {
        $number = random_int(0, 100);

        return new Response (
            '<html><body>Lukcy number: ' . $number . '</body></html>'
        );
    }
}