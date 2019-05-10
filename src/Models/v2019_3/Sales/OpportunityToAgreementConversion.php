<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToAgreementConversion Version v2019_3
 *
 * Model for OpportunityToAgreementConversion
 *
 * @property integer $agreementId
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\AgreementTypeReference $type
 * @property string $startDate
 * @property string $endDate
 * @property boolean $noEndingDateFlag
 * @property integer $billCycleId
 * @property boolean $billOneTimeFlag
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property boolean $includeAllNotesFlag
 * @property boolean $includeAllDocumentsFlag
 * @property boolean $includeAllProductsFlag
 * @property array $includeNoteIds
 * @property array $includeDocumentIds
 * @property array $includeProductIds
 */
class OpportunityToAgreementConversion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'agreementId' => 'integer',
        'name' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Sales\AgreementTypeReference',
        'startDate' => 'string',
        'endDate' => 'string',
        'noEndingDateFlag' => 'boolean',
        'billCycleId' => 'integer',
        'billOneTimeFlag' => 'boolean',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'includeAllNotesFlag' => 'boolean',
        'includeAllDocumentsFlag' => 'boolean',
        'includeAllProductsFlag' => 'boolean',
        'includeNoteIds' => 'array',
        'includeDocumentIds' => 'array',
        'includeProductIds' => 'array',
    ];
}
