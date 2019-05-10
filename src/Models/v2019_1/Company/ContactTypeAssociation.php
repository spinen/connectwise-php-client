<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTypeAssociation Version v2019_1
 *
 * Model for ContactTypeAssociation
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property integer $id
 */
class ContactTypeAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactTypeReference',
    ];
}
