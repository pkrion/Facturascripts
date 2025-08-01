<?php

namespace FacturaScripts\Plugins\MartosOS\Model;

/**
 * Nuestro modelo Proyecto local que extiende el modelo base del plugin Proyectos.
 * Todos nuestros controladores usarán este modelo a partir de ahora.
 */
class Proyecto extends \FacturaScripts\Plugins\Proyectos\Model\Proyecto
{
    /**
     * ID de la plantilla de proyecto utilizada para crear este proyecto.
     *
     * @var int|null
     */
    public $id_plantilla;

    /**
     * URL del sitio web principal relacionado con el proyecto.
     *
     * @var string|null
     */
    public $sitio_web;

    /**
     * Descripción del stack tecnológico del proyecto (ej: PHP, React, MySQL).
     *
     * @var string|null
     */
    public $stack_tecnologico;

    /**
     * Almacenamiento para credenciales (IMPORTANTE: debe ser encriptado).
     *
     * @var string|null
     */
    public $credenciales;
    
    /**
     * El margen de beneficio (en %) que se acordó o se espera al inicio.
     *
     * @var float|null
     */
    public $rentabilidad_pactada_pct;

    /**
     * El margen de beneficio final (en %) que se calcula al cerrar el proyecto.
     *
     * @var float|null
     */
    public $rentabilidad_final_pct;

    /**
     * Sobreescribimos la función clear() del modelo padre para inicializar
     * todas nuestras nuevas propiedades.
     */
    public function clear()
    {
        // Primero, llamamos al método clear() del padre.
        parent::clear();
        
        // Luego, inicializamos nuestras nuevas propiedades.
        $this->id_plantilla = null;
        $this->sitio_web = null;
        $this->stack_tecnologico = null;
        $this->credenciales = null;
        $this->rentabilidad_pactada_pct = null;
        $this->rentabilidad_final_pct = null;
    }
}