<?php
namespace FacturaScripts\Plugins\Proyectos\Model;

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

    public static function primaryColumn(): string
    {
        return 'idoportunidad';
    }

    public static function tableName(): string
    {
        return 'oportunidades';
    }
}