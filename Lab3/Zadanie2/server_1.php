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
    error_log($hex);
    #-------------------------------------------------------------------
    print $res;
    #===================================================================
?>
