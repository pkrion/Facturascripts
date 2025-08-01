<?php
namespace FacturaScripts\Plugins\Proyectos\Extension\Model;

use Closure;

class Cliente
{
    public function clear(): Closure
    {
        return function () {
            // Añadimos las nuevas propiedades al modelo
            $this->stack_tecnologico = '';
            $this->competidores = '';
            $this->presupuesto_marketing = 0.0;
            $this->fuente_lead = '';
        };
    }
}