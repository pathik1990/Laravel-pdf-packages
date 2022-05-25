<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayPalDetails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paypal_details')->insert([
            'status' => true,
            'paypal_sandbox_client_id' => 'AbzdzHEptj04HppUZfOdl6oOskU7Trb2UjMefPer2cly-w8F-7CnSkKwIXK7iGUVzcJVFA0KIuZNqvMu',
            'paypal_sandbox_client_secret' => 'EJBhKkn4a-X42eW6xIkPTShV7sUe2SJuOf_Y9kUwKvgCQd8kaHEAR3V4RDer3Hh5jazkE8R-I14Hs-dV',
            'paypal_live_client_id' => 'AQb_uhCxkswoDV-msDRSEvBrENNqphJo-cGxMJ7nUa9hSArJhefMfdMvtVRN065kc4e2jp8rJ0X8yQrz',
            'paypal_live_client_secret' => 'EOkxH5vbF4tWYGZTf84TOUuxTJHJ4d4iq7ADmuhm-xD4ziaZLym2JnJNoeS7KXD9sQCrxR0D7tR3tH_2',
        ]);
    }
}
