<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contest Entity
 *
 * @property int $id
 * @property string $carrera
 * @property \Cake\I18n\FrozenDate $fecha
 * @property string $ganador
 * @property string $materia
 */
class Contest extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'carrera' => true,
        'fecha' => true,
        'ganador' => true,
        'materia' => true
    ];
}
