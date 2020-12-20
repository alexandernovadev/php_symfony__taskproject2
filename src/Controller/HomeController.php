<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    public function parametros($nombre, $apellidos)
    {

        // Con render renderizamos una vista 
        // es como el view de laravel

        $animales = ['perro', 'gato', 'pajaro'];

        $jugador = array(
            'nombre' => 'CR7', 
            'edad' =>  33, 
            'habilidad' => 'shoot', 
        );

        return $this->render('home/paramatros.html.twig', [
            'name' => $nombre,
            'apellidos' => $apellidos,
            'animales' => $animales,
            'jugador' => $jugador
        ]);

        // redirecciona, tambien se le puede añadir data
        // return $this->redirectToRoute('aqui la ruta como esta en las rutas.yaml');
        // return $this->redirect('aqui pagina web');


    }
}
