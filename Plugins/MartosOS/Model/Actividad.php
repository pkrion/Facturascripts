<?php

namespace FacturaScripts\Plugins\MartosOS\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Actividad extends ModelClass
{
    use ModelTrait;

    public $idactividad;
    public $idoportunidad;
    public $tipo;
    public $fecha;
    public $descripcion;
    public $prioridad;
    public $completada;
    
    // Propiedades añadidas
    public $id_relacion;
    public $tipo_relacion;
    public $codagente;
    public $iniciador;
    public $tiempo_respuesta_score;
    public $participacion_reunion_score;

    public static function primaryColumn(): string
    {
        return 'idactividad';
    }

    public static function tableName(): string
    {
        return 'crm_actividades';
    }

    public function clear()
    {
        parent::clear();
        $this->fecha = date('Y-m-d H:i:s');
        $this->prioridad = 'Media';
        $this->completada = false;
        
        // Inicialización de nuevas propiedades
        $this->iniciador = 'Agencia';
    }
}