<?php

namespace App\Providers;

use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'Seven Dials Solutions Ltd',
        'product' => 'Umbra',
        'street' => '20-22 Wenlock Road',
        'location' => 'London N1 2GU',
        'email' => 'support@sevendials.solutions',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = "support@sevendials.solutions";

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        "matt@sevendials.solutions"
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = true;

    /**
     * Finish configuring Spark for the application.
     *
     * @return void
     */
    public function booted()
    {
        Spark::useStripe()->noCardUpFront()->trialDays(10);

        Spark::freePlan()
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::plan('Basic', 'provider-id-1')
            ->price(10)
            ->features([
                'First', 'Second', 'Third'
            ]);
    }

    public function register()
    {
        //Spark::referToTeamAs('client');
    }
}
