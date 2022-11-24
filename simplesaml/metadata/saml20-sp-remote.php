<?php

$metadata['http://wayf.sined.mx/simplesaml/module.php/saml/sp/metadata.php/saml'] = array (
  'AssertionConsumerService' => 'http://wayf.sined.mx/simplesaml/module.php/saml/sp/saml2-acs.php/saml',
  'SingleLogoutService' => 'http://wayf.sined.mx/simplesaml/module.php/saml/sp/saml2-logout.php/saml',
  'certData' => 'MIICeTCCAeICCQCtM4zat8LENjANBgkqhkiG9w0BAQUFADCBgDELMAkGA1UEBhMCTVgxDzANBgNVBAgTBkNPTElNQTEPMA0GA1UEBxMGQ09MSU1BMQ4wDAYDVQQKEwVTSU5FRDEOMAwGA1UECxMFU0lORUQxDjAMBgNVBAMTBVNJTkVEMR8wHQYJKoZIhvcNAQkBFhBzb3BvcnRlQHNpbmVkLm14MB4XDTExMDUzMTIyMTY1OVoXDTE2MDUyOTIyMTY1OVowgYAxCzAJBgNVBAYTAk1YMQ8wDQYDVQQIEwZDT0xJTUExDzANBgNVBAcTBkNPTElNQTEOMAwGA1UEChMFU0lORUQxDjAMBgNVBAsTBVNJTkVEMQ4wDAYDVQQDEwVTSU5FRDEfMB0GCSqGSIb3DQEJARYQc29wb3J0ZUBzaW5lZC5teDCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAr1vPXVR5GckeJrLZFPih3c/UiV3lGmTCS8x7KpbviOYJnNg1qEoPr7+Kty9gqehAzMltuzJsmwis0XfOAAZ+j45hR02pta/+xHe8w6Taj9Mn6Ei3u4TCBmVTKkBJPj3Bowd4iSJF04JRGcBsxtz9u9vKUdMg4r5sMsXPjuyPsvkCAwEAATANBgkqhkiG9w0BAQUFAAOBgQB1RwqQ1BXoAXNfy0Pg6IN2sgjUkYAnzbdUKAbPlBXu1Z9JDGyXsjEtlYzxubkTcEdCN1eues5ZEDBs0EaLElwqz+x5vaLIN91Kv8g3k58e24tz+NKfR65NSkhQWqFZnLERZbmTVkZ3BZZ8KkbOzRBoVpvKRGQgVLi4y/R/tTk1Lg==',
  'name' => 'WAYF SINED',
   'attributes' => array('uNombre', 'uCorreo'),
   'authproc' => array(
    50 => array(
        'class' => 'core:AttributeAdd',
		'uNombreInstitucion' => array('UCOL.mx'),
		'uInstitucion' => array('437'),
    ),
),
);

$metadata['https://www.sined.mx/auth/saml2/sp/metadata.php'] = array (
  'AssertionConsumerService' => 'http://www.sined.mx/auth/module.php/saml/sp/saml2-acs.php/SINED',
  'SingleLogoutService' => 'http://www.sined.mx/auth/module.php/saml/sp/saml2-logout.php/SINED',
  'certData' => 'MIICbzCCAdgCCQDWe9+bF6DsqDANBgkqhkiG9w0BAQUFADB8MQswCQYDVQQGEwJNWDEMMAoGA1UECBMDQ09MMQ4wDAYDVQQHEwVTSU5FRDEOMAwGA1UEChMFU0lORUQxDjAMBgNVBAsTBVNJTkVEMQ4wDAYDVQQDEwVTSU5FRDEfMB0GCSqGSIb3DQEJARYQc29wb3J0ZUBzaW5lZC5teDAeFw0xMTA2MDgwMTMzMzNaFw0xNjA2MDYwMTMzMzNaMHwxCzAJBgNVBAYTAk1YMQwwCgYDVQQIEwNDT0wxDjAMBgNVBAcTBVNJTkVEMQ4wDAYDVQQKEwVTSU5FRDEOMAwGA1UECxMFU0lORUQxDjAMBgNVBAMTBVNJTkVEMR8wHQYJKoZIhvcNAQkBFhBzb3BvcnRlQHNpbmVkLm14MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCvVbvy1k7MQg0e6FTy5BPzaOH5/9EeAvZz6fts2cFf1xY7laxWLeBgYTAxfkHciCgkI4hXdpqWAjwJRKh0hfwqlfEhzzmcB0IkSMSqXKu6fNIskPAMJuj4pdzCzkpq/dorEZYC3j4gDQ2ohBXAYogqoUhmZ/FlmlxGkGi2/Qy/uQIDAQABMA0GCSqGSIb3DQEBBQUAA4GBAGHFWIBVwWiMoi3V996m/zd1fCzeRYtoXSfMyXk1yy9bLeKghNym+DBuB+jykF9JVT9/eR3ZJBKqXvWBObmq81n7D5+gm8EucmYnaB0GsqigjHDrqGayAvTq+boukO7oqDvRtLiN7PEME1FA2kOEFDYYgoHD7VY0odTnoPTKUQ6B',
   'name' => 'Sistema Nacional de Educacion a Distancia SINED',
   'attributes' => array('uNombre', 'uCorreo'),
   'authproc' => array(
		50 => array(
			'class' => 'core:AttributeAdd',
			'uNombreInstitucion' => array('UCOL.mx'),
			'uInstitucion' => array('437'),
		),
	),
  );
  
 $metadata['http://educ.ucol.mx'] = array (
  'AssertionConsumerService' => 'http://educ.ucol.mx/auth/module.php/saml/sp/saml2-acs.php/educ',
  'SingleLogoutService' => 'http://educ.ucol.mx/auth/module.php/saml/sp/saml2-logout.php/educ',
  'certData' => 'MIICkzCCAfwCCQCFfk4UFsTm7zANBgkqhkiG9w0BAQUFADCBjTELMAkGA1UEBhMCTVgxDDAKBgNVBAgMA0NPTDEPMA0GA1UEBwwGQ09MSU1BMQ4wDAYDVQQKDAVTSU5FRDESMBAGA1UECwwJTk9ETyBVQ09MMRowGAYDVQQDDBFpZHAtdWNvbC5zaW5lZC5teDEfMB0GCSqGSIb3DQEJARYQc29wb3J0ZUBzaW5lZC5teDAeFw0xMTA3MzAwMDA0MjdaFw0yMTA0MjgwMDA0MjdaMIGNMQswCQYDVQQGEwJNWDEMMAoGA1UECAwDQ09MMQ8wDQYDVQQHDAZDT0xJTUExDjAMBgNVBAoMBVNJTkVEMRIwEAYDVQQLDAlOT0RPIFVDT0wxGjAYBgNVBAMMEWlkcC11Y29sLnNpbmVkLm14MR8wHQYJKoZIhvcNAQkBFhBzb3BvcnRlQHNpbmVkLm14MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQChST1udsnrRwdIWQZyJ6q8yc1vlExE/aS2T9nyPVhGK3xOfcIjO989gsIy41PrtSLzFw/fQvqwof4sjKdh41jT0bV8juJK5OXWlsgUapm3BvuTaaNpaDsvBt0MgXfv94DraX9jEgSqnG38tCWchTH6AbwXKMUBtsTGccRguWRfOQIDAQABMA0GCSqGSIb3DQEBBQUAA4GBAH5N3gDN4oyDjuPvTLl8Ommd3Yb9ZMojh8wapGHIb5TALRlDReT59DrunQE3do7PdhZd9E/zA5my5BB/NzGtY5sasEwcS2euH/6w1M6t3GLCHksgW+Utmw0SWG3LzixIvOg+kVJhrk0I5lFuRsm3aN3vSCUhsq4o3ajfviBFuKd0',
  'name'=> 'Sistema para la gestion del aprendizaje en linea',
   'authproc' => array(
		50 => array(
			'class' => 'core:AttributeAdd',
			//'uNombreInstitucion' => array('UCOL.mx'),
			'uInstitucion' => array('437'),
		),
	),
  );
  
  $metadata['http://desarrollo.sined.mx/simplesaml/module.php/saml/sp/metadata.php/SINED'] = array (
  'AssertionConsumerService' => 'http://desarrollo.sined.mx/simplesaml/module.php/saml/sp/saml2-acs.php/SINED',
  'SingleLogoutService' => 'http://desarrollo.sined.mx/simplesaml/module.php/saml/sp/saml2-logout.php/SINED',
  'certData' => 'MIICeTCCAeICCQCffartqSMjfDANBgkqhkiG9w0BAQUFADCBgDELMAkGA1UEBhMCTVgxDzANBgNVBAgTBkNPTElNQTEPMA0GA1UEBxMGQ09MSU1BMQ4wDAYDVQQKEwVTSU5FRDEOMAwGA1UECxMFU0lORUQxDjAMBgNVBAMTBVNJTkVEMR8wHQYJKoZIhvcNAQkBFhBzb3BvcnRlQHNpbmVkLm14MB4XDTExMDYwODIwMzE1MloXDTE2MDYwNjIwMzE1MlowgYAxCzAJBgNVBAYTAk1YMQ8wDQYDVQQIEwZDT0xJTUExDzANBgNVBAcTBkNPTElNQTEOMAwGA1UEChMFU0lORUQxDjAMBgNVBAsTBVNJTkVEMQ4wDAYDVQQDEwVTSU5FRDEfMB0GCSqGSIb3DQEJARYQc29wb3J0ZUBzaW5lZC5teDCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAzBvL/kvQPyJpB38Nr+DllgFkIfVDVKYeJOCca2LsRUBBH1cW1aZ+fTv/PzKQMGoI+vCTh5nGJQ8xTLRI9DXt4gn+p2OdeTV5isroXQ0NGznXJuZ5Uwoi3po35m+Nc1fCcq+0I+zREBJ6I3exjWkh/YZSoSQ15Ec1hy0O9pyC65ECAwEAATANBgkqhkiG9w0BAQUFAAOBgQBTYq15/Ml4vQayC4UE/NsvgqLWkSoZqRVyHsKgId4Yjau4vRh9Pj4FBLDB7XYzdETg1Yv8UEOjR/hFz1bTUWW6YdW4mSuGYJP7XeFl+c/T1XvB8JHypsUHP9wjKSg6Y/sgCVhVffVvTLUM6+yYGGP1U70I3Op0EyqUN2w3NMVzhw==',
  'name'=>'Grupos de trabajo CEUPROMED',
  );
