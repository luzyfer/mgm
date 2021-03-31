<?php namespace JF;
/**

Copyright 2020 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-8b558d
Date:    2020-07-05 15:04:55
Version: v3.0.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-8b558d",
    "email": {
        "to": "marcgasol@mgmenergiasrenovables.com ",
        "cc": "",
        "bcc": "",
        "subject": "mensaje enviado desde el formulario de contacto",
        "template": "",
        "sendmail_from": "postmaster@mgmenergiasrenovables.com"
    },
    "admin": {
        "users": "admin:04ef6",
        "dataDelivery": "emailOnly",
        "limitActivity": {
            "enabled": false
        }
    },
    "thankyou": {
        "url": "",
        "message": " Gracias por enviarnos el mensaje. Seguidamente contactamos con usted",
        "seconds": "10"
    },
    "autoResponse": {
        "includeAttachments": true,
        "subject": "",
        "template": ""
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "smtp",
    "smtp": {
        "host": "ssl0.ovh.net",
        "user": "postmaster@mgmenergiasrenovables.com",
        "password": "mgm2016ER",
        "port": "465",
        "security": "ssl",
        "debug": true
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [],
    "fields": [
        {
            "label": "nombre",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "nombre",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "tel\u00e9fono",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "0000 000 00 00 00",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9 -+.]+",
                        "msg": "Invalid phone number"
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f4",
            "cid": "c26"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "id": "f2",
            "cid": "c2"
        },
        {
            "label": "Mensaje",
            "field_type": "paragraph",
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-edit"
                },
                "placeholder": "introduzca aqui su mensaje"
            },
            "id": "f3",
            "cid": "c3"
        },
        {
            "label": "Google reCaptcha",
            "field_type": "recaptcha",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                }
            },
            "labelHide": true,
            "recaptcha": {
                "theme": "light",
                "siteKey": "6Led760ZAAAAAHyh8sV3FxJX2QrNoqTd75gUM-tZ",
                "secretKey": "6Led760ZAAAAANU1i-TehrX79bddU3j93kIDxWQe",
                "language": "",
                "errMsg": "Google reCaptcha validation error. Please try again.",
                "maxFailed": 3
            },
            "id": "f5",
            "cid": "c30"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "gdpr": {
        "consentFieldId": "",
        "saveData": "always"
    },
    "licenseKey": ""
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class