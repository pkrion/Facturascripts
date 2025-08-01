<?php

namespace FacturaScripts\Plugins\MartosOS\Extension\Model;

use Closure;

class Cliente
{
    public function clear(): Closure
    {
        return function () {
            // Se llama al método clear() del modelo original antes de ejecutar esto.

            // Propiedades que ya tenías definidas
            $this->stack_tecnologico = '';
            $this->competidores = '';
            $this->presupuesto_marketing = 0.0;
            $this->fuente_lead = '';

            // Nuevas propiedades que añadimos para las métricas
            $this->ha_referido = false;
            $this->health_score_actual = 0;
            $this->last_nps_score = null; // Usamos null para indicar que puede no tener una puntuación
        };
    }
}