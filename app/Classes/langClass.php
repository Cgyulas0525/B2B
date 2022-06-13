<?php
namespace App\Classes;

use DB;

Class langClass{

    public static function trans($title)
    {
        if (!empty($title)) {
            $language = session()->get('locale');
            $data = DB::table('translations')->where('language', !empty($language) ? $language : 'hu')->where('huname', $title)->first();
            if (!empty($data)) {
                return $data->name;
            } else {
                $data = DB::table('translations')->where('language', 'hu')->where('name', $title)->first();
                if (empty($data)) {
                    $languages = DB::table('languages')->get();
                    foreach ($languages as $language) {
                        $id = DB::table('translations')
                            ->insert([
                                'huname' => $title,
                                'name' => $title,
                                'language' => $language->shortname
                            ]);
                    }
                    return $title;
                }
                return $data->name;
            }
        }
        return $title;
    }

}
