## Environment

* Generar el .env a partir del .env.example

## Comandos para instalar entorno

* Ejecutar para instalar paquetes de laravel 

`composer install`

* Ejecutar paquetes de node

`npm install`

## Laravel Mix

Todos los recursos tanto de sass como js están en la carpeta:

`resources/assets` 

* Automatically recompile your assets when it detects a change: 

`npm run watch`

* Run for production

`npm run production`

* Usar etiqueta para css dentro del head

`<link rel="stylesheet" href="{{ mix('/css/app.css') }}">`

* Usar etiqueta para el js en el footer de la página antes del cierre de la etiqueta body

`<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>`
