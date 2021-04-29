<?php
    #===================================================================
    $xml  = file_get_contents('php://input');
    $params = xmlrpc_decode( $xml );
    #-------------------------------------------------------------------
    # $method = $_SERVER[ 'SCRIPT_NAME' ];
    $method = basename( $_SERVER[ 'SCRIPT_FILENAME' ] );
    $method = substr( $method, 0, -4 );
    #-------------------------------------------------------------------
    $dec = $params[0];
    $hex = dechex($dec);
    $res = xmlrpc_encode_request(NULL, $hex);
    error_log("przeslano wiadomosc procesu 3");
    #===================================================================
    
    $port     = 12346;
    $host     = '127.0.0.2';
    #-------------------------------------------------------------------
    $req = xmlrpc_encode_request(
        "method", 
    
        array( $hex)
    );
    #-------------------------------------------------------------------
    $ctx = stream_context_create(
        array(
            'http' => array(
                'method'     => "POST",
                'header'     => array( "Content-Type: text/xml" ),
                'content'     => $req
            )
        )
    );
    #-------------------------------------------------------------------
    $xml = file_get_contents( "http://$host:$port/RPC2", false, $ctx );
    #-------------------------------------------------------------------
    $res = xmlrpc_decode( $xml );
    #===================================================================
?>
