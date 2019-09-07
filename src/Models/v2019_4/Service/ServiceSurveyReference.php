<?php

namespace Spinen\ConnectWise\Models\v2019_4\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSurveyReference Version v2019_4
 *
 * Model for ServiceSurveyReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ServiceSurveyReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
