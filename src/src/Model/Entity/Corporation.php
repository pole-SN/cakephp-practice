<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Corporation Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $name_kana
 * @property string|null $postal_code
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $email1
 * @property string|null $email2
 * @property string|null $url
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Client[] $clients
 */
class Corporation extends Entity
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
        'name' => true,
        'name_kana' => true,
        'postal_code' => true,
        'address1' => true,
        'address2' => true,
        'phone' => true,
        'fax' => true,
        'email1' => true,
        'email2' => true,
        'url' => true,
        'created' => true,
        'modified' => true,
        'clients' => true,
    ];
}
