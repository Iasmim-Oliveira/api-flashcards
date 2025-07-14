<?php

namespace App\Console\Commands;

use App\Models\Restaurantes;
use App\Services\RestaurantTypesenseService;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class IndexRestaurantsCommand extends Command
{
    protected $signature = 'typesense:index-restaurants {--recreate}';
    protected $description = 'Indexa todos os restaurantes no Typesense';

    public function __construct(private readonly RestaurantTypesenseService $typesenseService)
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
         $this->info('Iniciando indexação de restaurantes no Typesense...');

        if ($this->option('recreate')) {
            $this->info('Recriando a coleção...');
            $this->typesenseService->createOrUpdateCollection();
        }

        $progressBar = $this->output->createProgressBar(Restaurantes::count());
        $progressBar->start();

        Restaurantes::with('deliveryRadiusConfigs')
            ->where('publicado', 2)
            ->where('cidade_id', 6190)
            ->whereNotNull(['latitude', 'longitude'])
            ->chunkById(500, function ($restaurants) use ($progressBar) {
                foreach ($restaurants as $restaurant) {
                    $this->typesenseService->indexRestaurant($restaurant);
                    $progressBar->advance();
                }
            });

        $progressBar->finish();
        $this->info("\nIndexação concluída com sucesso!");

        return CommandAlias::SUCCESS;
    }
}
