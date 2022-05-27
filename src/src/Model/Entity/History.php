<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * History Entity
 *
 * @property int $id
 * @property int $sales_id
 * @property int $user_id
 * @property string $action
 * @property string $response
 * @property int $status_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Sale $sales
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\SalesStatus $sales_status
 */
class History extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'sales_id' => true,
        'user_id' => true,
        'action' => true,
        'response' => true,
        'status_id' => true,
        'created' => true,
        'modified' => true,
        'sales' => true,
        'user' => true,
        'sales_status' => true,
    ];
}
