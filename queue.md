## Queues com Database
- Configurar database
- Configurar driver em .env ou config/queue
- Rodar <i><u>php artisan queue:table</i></u>, gera migration para table jobs
- Rodar <i><u>php artisan migrate</u></i>, cria a table no BD
- Criar classe para job, rodar <i><u>php artisan make:job NomeDaClasse</i></u>

## Usando Laravel Horizon
### Fornece um dashboard para gerenciamento dos jobs
- Precisa usar driver de conexão redis
  - <i><u>composer require predis/predis</i></u>
- Instalação Horizon
  - <i><u>composer require laravel/horizon</i></u>
- Publish: <i><u>php artisan horizon:install</i></u>
- Criar table failed 
  - <i><u>php artisan queue:failed-table
  - php artisan migrate</i></u>
- Run: <i><u>php artisan horizon</i></u>