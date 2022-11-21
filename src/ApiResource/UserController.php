<?php

namespace App\ApiResource;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;

#[ApiResource(  description:'Recupera utenti e post', paginationEnabled:false, operations: [new GetCollection( name:"recupera_utenti", uriTemplate: '/recuperaUtentiPost/{numeroRisultati}', description: 'Recupera i dati utente e post', shortName:'Utenti e post')], provider: \App\Provider\ApplicationProvider::class) ]
class UserController 
{
   
}