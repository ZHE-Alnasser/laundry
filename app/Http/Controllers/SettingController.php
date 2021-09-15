<?php

namespace App\Http\Controllers;
//namespace QCod\AppSettings\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;
use Illuminate\Routing\Controller;
use QCod\AppSettings\SavesSettings;

class SettingController extends Controller

{
    function __construct()
    {

        $this->middleware('auth');
    }
    use SavesSettings;

    public function index()
    {
        return view('settings.edit', ['settings' => Setting::all()]);
    }



    public function edit(Setting $setting)
    {
        return view('settings.edit', ['settings' => Setting::all()]);
    }


    public function update(Request $request, Setting $setting)
    {
        $data = $request->except('_value','_token');

        foreach ($data as $name => $value) {
//            dd($value);
            Setting::whereName($name)->update(['value' => $value]);
        }

        // re-cache settings.
        Cache::forget('settingsTable'); // it will be auto-cache again when it hits App Service provider.


        $file_path = null;
        $file = $request->file('company_logo');
        if ($file) {
            $file_path = $file->store('company_logo', 'public');
        }

        session()->flash('message',__(':name has been updated successfully',['name' => __('Settings')]));

        return redirect('settings');
    }



}
