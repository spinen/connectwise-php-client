<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToAgreementConversion Version v2019_1
 *
 * Model for OpportunityToAgreementConversion
 *
 * @property AgreementTypeReference $type
 * @property array $includeDocumentIds
 * @property array $includeNoteIds
 * @property array $includeProductIds
 * @property boolean $billOneTimeFlag
 * @property boolean $includeAllDocumentsFlag
 * @property boolean $includeAllNotesFlag
 * @property boolean $includeAllProductsFlag
 * @property boolean $noEndingDateFlag
 * @property integer $agreementId
 * @property integer $billCycleId
 * @property integer $businessUnitId
 * @property integer $locationId
 * @property string $endDate
 * @property string $name
 * @property string $startDate
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
        'billCycleId' => 'integer',
        'billOneTimeFlag' => 'boolean',
        'businessUnitId' => 'integer',
        'endDate' => 'string',
        'includeAllDocumentsFlag' => 'boolean',
        'includeAllNotesFlag' => 'boolean',
        'includeAllProductsFlag' => 'boolean',
        'includeDocumentIds' => 'array',
        'includeNoteIds' => 'array',
        'includeProductIds' => 'array',
        'locationId' => 'integer',
        'name' => 'string',
        'noEndingDateFlag' => 'boolean',
        'startDate' => 'string',
        'type' => AgreementTypeReference::class,
    ];
}
