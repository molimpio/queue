## Queues com Database
- Configurar database
- Configurar driver em .env ou config/queue
- Rodar <i><u>php artisan queue:table</i></u>, gera migration para table jobs
- Rodar <i><u>php artisan migrate</u></i>, cria a table no BD
- Criar classe para job, rodar <i><u>php artisan make:job NomeDaClasse</i></u>

## Usando Laravel Horizon
### Fornece um dashboard para gerenciamento dos jobs
- Precisa usar driver de conexão redis
- Instalação <i><u>composer require laravel/horizon</i></u>
- Publish: <i><u>php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"</i></u>
