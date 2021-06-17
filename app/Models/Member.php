<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*
 * get ile başlayanlar veri listelerken ve gösterirken
 *
 * Not : her hangi bir sutuna get  ile veri ekledikten sonra güncelleme işleminde o veriyi veri tabanına kayıt ediyor ve listelemede o veri get ile eklendiği için iki kere yazmış oluyor ('BOLU' verisi gibi)
 */
class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $appends = ['deneme', 'sonradan_eklendi'];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getAddressAttribute($value)
    {
        return $value . ' BOLU';
    }

    public function getDenemeAttribute($value)
    {
        return $value . 'KEREM';
    }

    public function getSonradanEklendiAttribute($value)
    {
        return $value . 'BAŞARAN';
    }
}
