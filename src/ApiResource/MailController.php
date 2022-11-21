<?php

namespace App\ApiResource;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;

#[ApiResource( description:'Invia la mail', paginationEnabled:false, operations: [new GetCollection( name:"invia_mail", uriTemplate: '/inviaMail/{numeroRisultati}', shortName:'Invio mail')], provider: \App\Provider\ApplicationProvider::class) ]
class MailController 
{
}
