<?php

/**
 * A light custom IdP configuration for SimpleSAMLphp.
 * Here we used Persistent NameID format and we defined email address claim as NameID attribute.
 * 
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-hosted
 */

$metadata['__DYNAMIC:1__'] = [

    'host' => '__DEFAULT__',

    'privatekey' => 'server.pem',
    'certificate' => 'server.crt',

    'auth' => 'example-userpass',

    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:persistent',
    'simplesaml.nameidattribute' => 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress',
];
