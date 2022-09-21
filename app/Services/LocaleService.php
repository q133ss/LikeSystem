<?php
namespace App\Services;

use App\Models\Localization;

class LocaleService{
    static function translate($model, $id, $lang, $field, $value){
        //Find
        $locale = Localization::where('localizable_type', $model)->where('localizable_id', $id)->where('language',$lang)->where('field', $field);
        if($locale->exists()){
            $locale = $locale->first();
            if($locale->value != $value) {
                $locale->value = $value;
                $locale->save();
            }
        }else{
            if($lang != null && $field != null && $value != null && $model != null && $id != null) {
                $localization = new Localization();
                $localization->language = $lang;
                $localization->field = $field;
                $localization->value = $value;
                $localization->localizable_type = $model;
                $localization->localizable_id = $id;
                $localization->save();
            }
        }
        return true;
    }
}
