# David Gomà

## Creación del proyecto.

Proyecto con Laravel 12 sin stacks.


## Instalar bootstrap + sass

```sh
npm install bootstrap @popperjs/core sass
```


## Configurar Vite

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

## Estructura

La dejamos así

resources/
├── css/
│   ├── app.scss (archivo principal)
│   ├── _variables.scss (variables custom)
│   ├── _mixins.scss (mixins modernos)
│   ├── components/
│   │   ├── _buttons.scss
│   │   ├── _cards.scss
│   │   └── _navbar.scss
│   └── layouts/
│       ├── _base.scss
│       └── _utilities.scss


## Instalar font-awesome

```sh
npm install @fortawesome/fontawesome-free
```

Si uso scss:

```scss
// En app.scss
@import '~@fortawesome/fontawesome-free/scss/fontawesome';
@import '~@fortawesome/fontawesome-free/scss/solid';
@import '~@fortawesome/fontawesome-free/scss/regular';
@import '~@fortawesome/fontawesome-free/scss/brands';
```

 si uso css:
 
 ```css
/* En app.css */
@import '@fortawesome/fontawesome-free/css/all.css';
```





