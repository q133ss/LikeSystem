<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(Service::class, 'type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function lozalization(){
        return $this->morphOne(Localization::class, 'localizable');
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        $lang = session('locale') ? session('locale') : 'ru';
        $name = $this->lozalization()->where('language',$lang)->where('field', 'name');
        if($name->exists()){
            return $name->pluck('value')->first();
        }else{
            return $this->name;
        }
    }
}
