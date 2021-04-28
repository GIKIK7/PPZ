#!/usr/bin/php

<?php

    $liczba1 = (int)readline('podaj pierwsza liczbe: ');
    $liczba2 = (int)readline('podaj druga liczbe: ');
    #===================================================================
    $port     = 12345;
    $host     = '127.0.0.1';
    #-------------------------------------------------------------------
    $req = xmlrpc_encode_request(
        "method", 
    
        array( $liczba1, $liczba2 )
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
    #-------------------------------------------------------------------
    if( $res && xmlrpc_is_fault( $res ) ){
        print "xmlrpc: $response[faultString] ($response[faultCode])";
        exit( 1 );
    } else {
        print("wynik z servera: \n");
        print_r($res );
    }
    #===================================================================
?>
