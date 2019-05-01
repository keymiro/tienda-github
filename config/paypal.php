<?php
return array(
    // set your paypal credential
    'client_id' => 'AWD0ZC_l2VywKvpayIAUJb0VmCX05-799MCi41f9hub8c3XYynM_fcsn8C0CQe3Vg0HOQnpQTey-35cD',
    'secret' => 'EC3E-gvlqKCm6bdkXS2v5fW7JGG5j4V-ImhE_KbJgBTXDw7p3r_bxVfNcEJz_7Q4xWrWMkPAs634WAgj',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);