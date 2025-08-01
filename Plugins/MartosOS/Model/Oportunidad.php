<?php
namespace FacturaScripts\Plugins\MartosOS\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Oportunidad extends ModelClass
{
    use ModelTrait;

    public $idoportunidad;
    public $nombre;
    public $codcliente;
    public $idcontacto;
    public $codagente;
    public $valor_estimado;
    public $fecha_cierre_prevista;
    public $etapa;
    public $objetivos_negocio;
    public $puntos_dolor;

    /**
     * Probabilidad de cierre de la oportunidad (0-100).
     * @var int
     */
    public $probabilidad;

    /**
     * Fecha y hora de la última interacción registrada en la oportunidad.
     * @var string
     */
    public $ultima_actividad;


    public static function primaryColumn(): string
    {
        return 'idoportunidad';
    }

    public static function tableName(): string
    {
        return 'oportunidades';
    }

    /**
     * Establece los valores por defecto para un nuevo registro.
     */
    public function clear()
    {
        parent::clear();
        $this->etapa = 'Nuevo Lead';
        $this->probabilidad = 0;
    }
}