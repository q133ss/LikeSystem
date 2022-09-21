<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function type()
    {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function lozalization(){
        return $this->morphOne(Localization::class, 'localizable');
    }

    /**
     * @param $field
     * @param $lang
     * @return string|null
     */
    public function getField($field, $lang) : string|null
    {
        $name = $this->lozalization()->where('language',$lang)->where('field', $field);
        if($name->exists()){
            return $name->pluck('value')->first();
        }else{
            return null;
        }
    }

}
