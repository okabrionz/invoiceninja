<?php

namespace App\Models;

use App\Models\Filterable;
use App\Utils\Traits\MakesHash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class for Recurring Invoices.
 */
class RecurringInvoice extends BaseModel
{
    use MakesHash;
    use SoftDeletes;
    use Filterable;

    /**
     * Invoice Statuses
     */
    const STATUS_DRAFT = 2;
    const STATUS_ACTIVE = 3;
    const STATUS_PENDING = -1;
    const STATUS_COMPLETED = -2;
    const STATUS_CANCELLED = -3;


    /**
     * Recurring intervals
     */
    const FREQUENCY_WEEKLY = 1;
    const FREQUENCY_TWO_WEEKS = 2;
    const FREQUENCY_FOUR_WEEKS = 3;
    const FREQUENCY_MONTHLY = 4;
    const FREQUENCY_TWO_MONTHS = 5;
    const FREQUENCY_THREE_MONTHS = 6;
    const FREQUENCY_FOUR_MONTHS = 7;
    const FREQUENCY_SIX_MONTHS = 8;
    const FREQUENCY_ANNUALLY = 9;
    const FREQUENCY_TWO_YEARS = 10;

    const RECURS_INDEFINITELY = -1;
    
	protected $guarded = [
		'id',
	];

    protected $casts = [
        'settings' => 'object'
    ];

    protected $with = [
   //     'client',
   //     'company',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invitations()
    {
        $this->morphMany(RecurringInvoiceInvitation::class);
    }
}
