<?php

namespace App\Http\Controllers;
//namespace QCod\AppSettings\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;

//use QCod\AppSettings\SavesSettings;


class SettingController extends Controller

{
    function __construct()
    {
//        $this->addMiddlewaresFor('Settings');
        $this->middleware('auth');
    }
//    use SavesSettings;

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
      $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,jpg,png,gif',
        ]);

//        dd($request);
        $data = $request->except('_method','_token');

        foreach ($data as $name => $value) {
//            dd($value);
            Setting::whereName($name)->update(['value' => $value]);
        }

        // re-cache settings.
        Cache::forget('settingsTable'); // it will be auto-cache again when it hits App Service provider.


        $file=  $request->file('logo');
//      $ext= $file->guessClientExtension();
        if ($file) {
            $file->storeAs('public/logo', "logo.png");
        }


        session()->flash('message',__(':name has been updated successfully',['name' => __('Settings')]));

        return redirect('settings');
    }



}
