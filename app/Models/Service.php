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
     * @return string|null
     */
    public function getField($field) : string|null
    {
        $lang = session('locale') ? session('locale') : 'ru';
        $name = $this->lozalization()->where('language',$lang)->where('field', $field);
        if($name->exists()){
            return $name->pluck('value')->first();
        }else{
            return $this->$field ? $this->$field : null;
        }
    }

}
