<?php

namespace App\Services;

class OnboardingStepsService 
{
    /**
     * Get Onboarding steps mock
     *
     * @return array
     */
    public function getSteps() : array
    {
        return [
            [
                'attachTo' =>  [ 
                    'element' =>  '#step-1' 
                ],
                'content' =>  [
                    'title' =>  "Hola, Bienvenido 😊",
                    'description' =>  ''
                ]
            ],
            [
                'attachTo' =>  [ 
                    'element' =>  '#step-2' 
                ],
                'content' =>  [
                    'title' =>  "Estamos a 1 solo paso 🤞",
                    'description' =>  "Ya casi terminas!"
                ]
            ],
            [
                'attachTo' =>  [ 
                    'element' =>  '#step-3' 
                ],
                'content' =>  [
                    'title' =>  "Has terminado 😎",
                    'description' =>  "Gracias, has finalizado todo correctamente"
                ]
            ]
        ];
    }
}