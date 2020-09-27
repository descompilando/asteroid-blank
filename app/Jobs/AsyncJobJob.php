<?php

namespace App\Jobs;

use App\Exceptions\SentryReport;
use App\Models\AsyncJobTest;
use App\Models\SolicitacaoConsulta;
use App\Negocio\Notificacoes\NotificacoesUnimed\GerenciadorNotificacao;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AsyncJobJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;

    public function __construct()
    {
    }


    public function handle()
    {
        $log = new AsyncJobTest();
        $log->value = 'started';
        $log->save();

        sleep(15);

        $log->value = 'finished';
        $log->save();
    }
}
