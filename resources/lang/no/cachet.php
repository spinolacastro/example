<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Ingen problemer',
            2 => 'Ytelsesproblemer',
            3 => 'Delvis brudd',
            4 => 'Større brudd',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No incidents reported',
        'past'          => 'Past Incidents',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Planlagt vedlikehold',
        'scheduled_at'  => ', planlagt :timestamp',
        'status'        => [
            0 => 'Planlagt', // TODO: Hopefully remove this.
            1 => 'Undersøkes',
            2 => 'Identifisert',
            3 => 'Observerer',
            4 => 'Løst',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Regenerer API-nøkkel',
        'revoke'     => 'Tilbakekall API-nøkkel',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Abonner',
        'email'     => [
            'subscribe'          => 'Abonner for å motta varslinger på e-post.',
            'subscribed'         => 'Du har abbonerer nå på epostvarslinger, sjekk din e-post for å bekrefte abboneringen.',
            'verified'           => 'Ditt epost abonnement er bekreftet!',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'Din epostvarsling har blitt kansellert.',
            'failure'            => 'Noe gikk galt med abonneringen.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Vennligst bekreft abboneringen på epostvarsling til :app_name.\n:link\nTakk, :app_name",
                'html-preheader' => 'Vennligst bekreft abonnering på epostvarsling til :app_name.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nytt vedlikehold er planlagt for :app_name.\nTakk, :app_name",
                'html-preheader' => 'Nytt vedlikehold er planlagt for: app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p>',
            ],
            'incident' => [
                'text'           => "En ny hendelse har blitt rapportert for :app_name.\nTakk, :app_name",
                'html-preheader' => 'En nye hendelse har blitt rapportert for: app_name.',
                'html'           => '<p>En ny hendelse har blitt rapportert for :app_name.</p><p>Takk, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => 'Username',
        'email'    => 'Epost',
        'password' => 'Passord',
        'success'  => 'Your account has been created.',
        'failure'  => 'Something went wrong with the signup.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Abonner',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
