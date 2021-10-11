<?php

//use Illuminate\Support\Facades\Cache;

/**
 * Fetch Cached settings from database
 *
 * @return string
 */
//function settings($key)
//{
//    return
//    return optional(Cache::get('settings')->where('key', $key)->first())->value;
////        $table->string('host');
////        $table->string('username');
////        $table->string('password');
////        $table->string('emailFrom');
////        $table->string('fromName');
////        $table->string('replyTo');
//}
use App\Models\Category;
use App\Models\Tag;

/**
 * generate random string
 *
 * @param 15 $length
 * @param null $default
 * @return string
 */

if (!function_exists('generateRandomString')) {
    function generateRandomString($length = 15)
    {
        return substr(sha1(rand()), 0, $length);
    }
}

if (!function_exists('language')) {

    function language()
    {
        return optional(auth())->user()->language??setting('language', 'ar');
    }
}


if (!function_exists('currency')) {

    function currency()
    {
        return setting('currency');
    }
}

if (!function_exists('setting')) {

    /**
     * Get app setting stored in db.
     *
     * @param $key
     * @param null $default
     * @return mixed
     */
    function setting($key = null, $default = null)
    {
        // $setting = app()->make('QCod\Settings\Setting\SettingStorage');

        if (is_null($key)) {
            return config('settings');
        }

        return config("settings." . $key, $default);
//        return $setting->get($key, value($default));
    }
}

function active($routeName, $activeClass = ' active')
{
    return (request()->is($routeName) || request()->is("$routeName/*")) ? $activeClass : '';
}

if (!function_exists('local')) {

    /**
     *  prefix the value with local language.
     *
     * @param string $value
     * @return string
     */
    function local($value = null)
    {
        return $value . '_' . app()->getLocale();
    }

}


if (!function_exists('isArabic')) {

    /**
     *  check if the word is Arabic.
     *
     * @param $word
     * @return bool
     */
    function isArabic($word)
    {
        return preg_match('/[اأإء-ي]/ui', $word) > 0;
    }
}

if (!function_exists('isRTL')) {

    /**
     *  check if the word is Arabic.
     *
     * @param $word
     * @return bool
     */
    function isRTL()
    {
//        return false;
        return (boolean)in_array(app()->getLocale(), ['ar', 'urdu']);
    }
}

if (!function_exists('convert_to_base64')) {

    /**
     *  check if the word is Arabic.
     *
     * @param $path
     * @return string
     */
    function convert_to_base64($path)
    {
//        return ('data: '.mime_content_type($path).base64_encode(file_get_contents($path)));
        return (base64_encode(file_get_contents($path)));
    }
}

if (!function_exists('parseTags')) {
    function parseTags($tags)
    {
        return collect(explode(",", str_replace(['[', ']', '"value":', '"}', '{"'], '', $tags)));
    }
}

if (!function_exists('categories')) {
    function categories($tableName)
    {
        return Cache::rememberForever($tableName . "Categories", function () use ($tableName) {
            return Category::withCount("$tableName")->ofType($tableName)->get();
        });
    }
}

if (!function_exists('tags')) {
    function tags($tableName)
    {
        return Cache::rememberForever($tableName . "Tags", function () use ($tableName) {
            return Tag::has($tableName)->get();
        });
    }
}

if (!function_exists('getQuery')) {
    function getQuery($sql){
        $query = str_replace(array('?'), array('\'%s\''), $sql->toSql());
        $query = vsprintf($query, $sql->getBindings());
        return $query;
    }
}

