<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $sei
 * @property string $mei
 * @property string|null $sei_kana
 * @property string|null $mei_kana
 * @property string|null $phone
 * @property string|null $email
 * @property int $corporation_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Corporation $corporation
 * @property \App\Model\Entity\Project[] $projects
 */
class Client extends Entity
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
        'sei' => true,
        'mei' => true,
        'sei_kana' => true,
        'mei_kana' => true,
        'phone' => true,
        'email' => true,
        'corporation_id' => true,
        'created' => true,
        'modified' => true,
        'corporation' => true,
        'projects' => true,
    ];
}
