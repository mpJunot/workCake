<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produit Entity
 *
 * @property int $ID
 * @property int $user_id
 * @property string|null $nom
 * @property string|null $image
 * @property string|null $prix
 * @property string|null $description
 *
 * @property \App\Model\Entity\User $user
 */
class Produit extends Entity
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
        'user_id' => true,
        'nom' => true,
        'image' => true,
        'prix' => true,
        'description' => true,
        'user' => true,
    ];
}
