<?php

    $config = array(
	        'comunidades' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx',
            'entityID' => 'https://portal.ucol.mx/comunidades',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Comunidades',

        ),
        'bitacora' => array(
            'saml:SP',
            'host' => 'https://bitacora.ucol.mx',
            'entityID' => 'https://bitacora.ucol.mx',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'BITACORA CGTI',

        ),
		'cms' => array(
            'saml:SP',
            'host' => 'http://cgti.educenlinea.com',
            'entityID' => 'http://cgti.educenlinea.com',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'DEMO CMS UCOL',
        ),
		'demo' => array(
            'saml:SP',
            'host' => 'http://demo.educenlinea.com',
            'entityID' => 'http://demo.educenlinea.com',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'DEMO  UCOL',
        ),		
		'cgti' => array(
            'saml:SP',
            'host' => 'http://cgti.ucol.mx',
            'entityID' => 'http://cgti.ucol.mx',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'CGTI UCOL',
        ),		
	  'portal' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx',
            'entityID' => 'https://portal.ucol.mx',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'PORTAL  UCOL',
        ),
	  'eventos' => array(
            'saml:SP',
            'host' => 'https://eventos.ucol.mx',
            'entityID' => 'https://eventos.ucol.mx',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            'redirect.validate' => TRUE,
            'assertion.encryption' => TRUE,
	     'name'=>'Eventos  UCOL',
        ),		
	  'INVENTARIO' => array(
            'saml:SP',
            'host' => 'https://inventario.ucol.mx',
            'entityID' => 'https://inventario.ucol.mx',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'INVENTARIO UCOL',
        ),	
	  
           'campos-clinicos' => array(
            'saml:SP',
            'host' => 'http://portal.ucol.mx/fm/campos-clinicos/',
            'entityID' => 'http://portal.ucol.mx/fm/campos-clinicos/',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Campos Clinicos - Facultad de Medicina',
        ),	


            'dgidt-wikilab' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx/',
            'entityID' => 'https://portal.ucol.mx/dgidt/wikilab/',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Wikilab de dgidt',
        ),



            'agenda-portal' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx/',
            'entityID' => 'https://portal.ucol.mx/agenda/',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Agenda de portal',
        ),	


	  'catedra-reload' => array(
            'saml:SP',
            'host' => 'http://portal.ucol.mx/',
            'entityID' => 'https://catedra.ucol.mx',
               'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
             'name'=>'Nueva catedra',
        ),

		
	        'pnpc-conacyt' => array(
            'saml:SP',
            'host' => 'http://portal.ucol.mx',
            'entityID' => 'http://portal.ucol.mx/pnpc-conacyt',
	        'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Evidencias CONACYT',

        ),
	        'semilleros' => array(
            'saml:SP',
            'host' => 'http://portal.ucol.mx',
            'entityID' => 'http://portal.ucol.mx/semilleros/',
	        'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Desarrollo de Semilleros de Talento TIC',

        ),
          'cultura-fisica' => array(
            'saml:SP',
            'host' => 'http://portal.ucol.mx/',
            'entityID' => 'http://portal.ucol.mx/culturaf/',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Cultura Física',
        ),		

            'wordpressblog' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx/',
            'entityID' => 'https://geo.ucol.mx/blog',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Blog de wordpress en geo.ucol.mx',
        ),

         'wordpressfeuc' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx/',
            'entityID' => 'https://portal.ucol.mx/federacion',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Blog de FEUC',
        ),


	'wordpresscuisagorante' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx/',
            'entityID' => 'https://portal.ucol.mx/cuis/agorante',
               'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
             'name'=>'Wordpress de CUIS AGORANTE',
        ),

	
        'med2018' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx/',
            'entityID' => 'https://portal.ucol.mx/culturaf/medicina2018',
               'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
             'name'=>'Medicina 2018 - Cultura física',
        ),

	
          'docrevista' => array(
            'saml:SP',
            'host' => 'http://portal.ucol.mx/',
            'entityID' => 'http://portal.ucol.mx/docrevista/',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Gaceta Rectoria (administracion)',
        ),				
	  'capacitacion' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx',
            'entityID' => 'https://portal.ucol.mx/capacitacion/',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'PORTAL  UCOL',
        ),		
	  'invifar' => array(
            'saml:SP',
            'host' => 'https://invifar.ucol.mx/',
            'entityID' => 'https://invifar.ucol.mx/ivifar/',
	       'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'INVIFAR',
        ),


		'ubicaciones' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx',
            'entityID' => 'https://portal.ucol.mx/ubicaciones/',
	        'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
	     'name'=>'Ubicaciones',
        ),		

         'abogado_general' => array(
            'saml:SP',
            'host' => 'https://portal.ucol.mx',
            'entityID' => 'https://portal.ucol.mx/oag/dash',
                'idp' => 'http://wayf.ucol.mx',
            'certificate' => 'UCOL.crt',
            'privatekey' => 'UCOL.key',

            // All communications are encrypted and signed
            'redirect.sign' => TRUE,
            //'redirect.validate' => TRUE,
            //'assertion.encryption' => TRUE,
             'name'=>'abogado_general',
        ),









    );
