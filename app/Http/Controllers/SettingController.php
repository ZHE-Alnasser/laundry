<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class SettingController extends Controller
{

    public function index()
    {
        return view('settings.edit', ['settings' => Setting::all()]);
    }



    public function edit(Setting $setting)
    {
        //
    }


    public function update(Request $request, Setting $setting)
    {
        $data = $request->except('_token');

        foreach ($data as $name => $value) {
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
