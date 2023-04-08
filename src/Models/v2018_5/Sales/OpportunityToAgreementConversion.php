<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityToAgreementConversion Version v2018_5
 *
 * Model for OpportunityToAgreementConversion
 *
 * @property AgreementTypeReference $type
 * @property array $includeDocumentIds
 * @property array $includeNoteIds
 * @property array $includeProductIds
 * @property bool $billOneTimeFlag
 * @property bool $includeAllDocumentsFlag
 * @property bool $includeAllNotesFlag
 * @property bool $includeAllProductsFlag
 * @property bool $noEndingDateFlag
 * @property int $agreementId
 * @property int $billCycleId
 * @property int $businessUnitId
 * @property int $locationId
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
