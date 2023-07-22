<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Findex App

Prueba técnica para desarrollador Laravel, Laravel Framework ^9.0 y Laravel Nova ^4.0. Se han desarrollado ambos items de la prueba especificada.

## Recursos

Documentación oficial de [Laravel](https://laravel.com/docs) y [Laravel Nova](https://nova.laravel.com/docs/4.0/installation.html), [Vue Full Calendar](https://fullcalendar.io/docs/vue) y [v-onboarding](https://v-onboarding-docs.fatihsolhan.com/)

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Desarrollo del punto 1
Se ha desarrollado un apartado para la creación de los eventos para tener los puntos 1 y 2 se parados y dar una funcionalidad extra a la creación y manipulación del calendario.

- Tabla de eventos agregados.
![grid](/public/images/event1.PNG)

- Formulario para agregar eventos.
![form](/public/images/event2.PNG)

- Visualizar calendario de eventos en el dashboard inicial.
![calendar](/public/images/event3.PNG)

## Desarrollo del punto 2

Crear mock de v-onboarding y consumo de API para los textos de los pasos.

- Grid de usuarios y sección de crear nuevo.
![usuarios](/public/images/onboarding1.PNG)

- Primer paso de v-onboarding.
![paso1](/public/images/onboarding2.PNG)

- Segundo paso de v-onboarding.
![paso2](/public/images/onboarding3.PNG)

- Finalizar proceso v-onboarding.
![paso3](/public/images/onboarding4.PNG)

### Base de datos ruta: `database/database.sqlite`
---
#### Data para API de pasos ruta: `App\Services\OnboardingStepsService.php`
```        
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
```

# Credenciales de prueba
- email: admin@findexapp.com
- pass: adminfindex
