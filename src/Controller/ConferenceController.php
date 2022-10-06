<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
        $greet='';
        if($name=$request->query->get('hello')){
            $greet=sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name)) ;}
            dump($request);
        return new Response(<<<EOF
        <html>
           <body>

            <h1>Site en construction</h1>
          <em>  {$greet} </em>
           <img src="/images/underConstruction.gif" />
           </body>
        </html>
        EOF
               );
             }
         }
        