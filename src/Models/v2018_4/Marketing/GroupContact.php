<?php

namespace Spinen\ConnectWise\Models\v2018_4\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GroupContact
 *
 * @property integer $id
 * @property integer $groupId
 * @property string $note
 * @property boolean $unsubscribeFlag
 */
class GroupContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'groupId' => 'integer',
        'note' => 'string',
        'unsubscribeFlag' => 'boolean',
    ];
}
