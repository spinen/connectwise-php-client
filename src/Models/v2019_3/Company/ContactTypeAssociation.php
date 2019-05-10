<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTypeAssociation Version v2019_3
 *
 * Model for ContactTypeAssociation
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ContactTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Company\ContactReference',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Company\ContactTypeReference',
    ];
}
