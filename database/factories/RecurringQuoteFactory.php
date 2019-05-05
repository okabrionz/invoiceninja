<?php

use App\DataMapper\ClientSettings;
use App\DataMapper\CompanySettings;
use Faker\Generator as Faker;

$factory->define(App\Models\RecurringQuote::class, function (Faker $faker) {
    return [
		'status_id' => App\Models\RecurringQuote::STATUS_DRAFT,
		'quote_number' => $faker->text(256),
		'discount' => $faker->numberBetween(1,10),
		'is_amount_discount' => $faker->boolean(),
		'tax_name1' => 'GST',
		'tax_rate1' => 10,
		'tax_name2' => 'VAT',
		'tax_rate2' => 17.5,
		'custom_value1' => $faker->numberBetween(1,4),
		'custom_value2' => $faker->numberBetween(1,4),
		'custom_value3' => $faker->numberBetween(1,4),
		'custom_value4' => $faker->numberBetween(1,4),
		'is_deleted' => false,
		'po_number' => $faker->text(10),
		'quote_date' => $faker->date(),
		'valid_until' => $faker->date(),
		'line_items' => false,
		'backup' => '', 
		'frequency_id' => App\Models\RecurringQuote::FREQUENCY_MONTHLY,
		'start_date' => $faker->date(),
		'last_sent_date' => $faker->date(),
		'next_send_date' => $faker->date(),
		'remaining_cycles' => $faker->numberBetween(1,10),
    ];
});