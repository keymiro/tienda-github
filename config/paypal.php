<?php
return array(
    'client_id' => 'AWD0ZC_l2VywKvpayIAUJb0VmCX05-799MCi41f9hub8c3XYynM_fcsn8C0CQe3Vg0HOQnpQTey-35cD',
    'secret' =>'EC3E-gvlqKCm6bdkXS2v5fW7JGG5j4V-ImhE_KbJgBTXDw7p3r_bxVfNcEJz_7Q4xWrWMkPAs634WAgj',
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'), //Option 'sandbox' or 'live', sandbox for testing
        'http.ConnectionTimeOut' => 1000, //Max request time in seconds
        'log.LogEnabled' => true, //Whether want to log to a file
        'log.FileName' => storage_path() . '/logs/paypal.log', //Specify the file that want to write on
        'log.LogLevel' => 'FINE' //Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
        /**
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
    ),
);