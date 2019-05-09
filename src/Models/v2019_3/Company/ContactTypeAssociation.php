<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTypeAssociation Version v2019_3
 * 
 * Model for ContactTypeAssociation
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ContactTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 */
class ContactTypeAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Company\ContactTypeReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Company\ContactReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
    ];
}
