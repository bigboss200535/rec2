<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Payer extends Model
{
     use HasFactory;

     protected $table = 'tax_payer';

     public function gender(){
       return $this->belongsTo('App\Models\Payer', 'GenderId');
     }

      protected $fillable = [
        'TaxPayerId',
        'Firstname',
        'Surname',
        'Fullname',
        'GenderId',
        'NationalIdNumber',
        'VoterNumber',
        'Telphone1',
        'Telephone2',
        'Telephone3',
        'Geolocation',
        'Latitude',
        'Longitude',
        'Altitute',
        'GeoPrecision',
        'CollectorId',
        'GeoComment',
        'Email',
        'MunicipalId',
        'ZoneId',
        'UserId',
        'FileNumber',
        'Address',
        'City',
        'Village',
        'Neighborhood',
        'AddedId',
        'AddedDate',
        'UpdatedDate',
        'UpdatedId',
        'UpdatedNotes',
        'Status',
        'Archived',
        'ArchiveId',
        'ArchiveDate',
        'ArchiveTime',
      ];

}
