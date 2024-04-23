<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\Setting;
use App\Models\Province;
use DataTables;
use Image;
use File;
use DB;

class SettingsController extends Controller
{
    private static $module = "settings";

    public function smtp()
    {
        //Check permission
        if (!isAllowed(static::$module, "smtp")) {
            abort(403);
        }

        $setting = Setting::where("name", "smtp")->first();
        if ($setting) {
            $setting = json_decode($setting->value);
        }

        return view("administrator.settings.smtp", compact("setting"));
    }

    public function updateSMTP(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "smtp")) {
            abort(403);
        }

        $this->validate($request, [
            'smtp_host'     => 'required',
            'smtp_security' => 'required',
            'smtp_port'     => 'required',
            'smtp_user'     => 'required',
        ]);

        $setting = Setting::where("name", "smtp")->first();
        if ($setting) {
            $setting = json_decode($setting->value);
        }

        $data_smtp = [
            "host"      => $request->smtp_host,
            "security"  => $request->smtp_security,
            "port"      => $request->smtp_port,
            "user"      => $request->smtp_user,
        ];

        if ($request->smtp_password != "") {
            $data_smtp["password"] = $request->smtp_password;
        } else {
            $data_smtp["password"] = $setting->password;
        }

        $data = [
            'value'    => json_encode($data_smtp),
        ];

        if (!$setting) {
            $data["name"] = "smtp";
            Setting::create($data);
        } else {
            Setting::where('name', "smtp")->update($data);
        }

        //Write log
        createLog(static::$module, __FUNCTION__, 0);

        return redirect(route('admin.settings.smtp'));
    }

    public function general()
    {
        //Check permission
        if (!isAllowed(static::$module, "general")) {
            abort(403);
        }

        // $setting = Setting::where('name', 'smtp')->first();
        // $smtp_setting = json_decode($setting['value']);
        // return $smtp_setting;

        $settings = Setting::get()->toArray();
        $provinces = Province::get();
        $settings = array_column($settings, 'value', 'name');

        $address = [];
        if (isset($settings['address'])) {
            $address = json_decode($settings['address']);
        }

        return view("administrator.settings.general", compact("settings", "provinces", "address"));
    }

    public function overview()
    {
        //Check permission
        if (!isAllowed(static::$module, "overview")) {
            abort(403);
        }

        $settings = Setting::get()->toArray();
        $provinces = Province::get();
        $settings = array_column($settings, 'value', 'name');

        $address = [];
        if (isset($settings['address'])) {
            $address = json_decode($settings['address']);
        }

        return view("administrator.settings.overview", compact("settings", "provinces", "address"));
    }

    public function updateGeneral(Request $request)
    {
        // return $request;
        //Check permission
        if (!isAllowed(static::$module, "general")) {
            abort(403);
        }

        $email_receives = [];
        $index = 0;
        if (!empty($request->name_receive)) {
            foreach ($request->name_receive as $name_receive) {
                $email_receives [] = ['name' => $name_receive, 'email' =>  $request->email_receive[$index]];
                $index++;
            }
        }

        $social_medias = [];
        $index = 0;
        if (!empty($request->title_social_media)) {
            foreach ($request->title_social_media as $title_social_media) {
                $social_medias [] = [
                    'title' => $title_social_media,
                    'icon' =>  $request->icon_social_media[$index],
                    'link' =>  $request->link_social_media[$index]
                ];
                $index++;
            }
        }

        $address = [];
        $address['kecamatan'] = $request->kecamatan;
        $address['kota'] = $request->city;
        $address['provinsi'] = $request->province;
        $address['detail'] = $request->address;

        $settings = Setting::get()->toArray();
        $settings = array_column($settings, 'value', 'name');

        $data_settings = [];
        $data_settings["site_name"] = $request->site_name;
        // $data_settings["default_language"] = $request->default_language;
        $data_settings["email"] = $request->email;
        $data_settings["address"] = json_encode($address);
        $data_settings["phone"] = $request->phone;
        $data_settings["whatsapp"] = $request->whatsapp;
        // $data_settings["whatsapp_promo"] = $request->whatsapp_promo;
        // $data_settings["whatsapp_marketplace"] = $request->whatsapp_marketplace;
        $data_settings["email_receive"] = json_encode($email_receives);
        $data_settings["social_media"] = json_encode($social_medias);
        // $data_settings["min_purchase"] = $request->min_purchase;
        // $data_settings["internal_courier_price"] = $request->internal_courier_price;
        $data_settings["office_hours"] = $request->office_hours;

        if ($request->hasFile('logo_navbar')) {
            if (array_key_exists("logo_navbar", $settings)) {
                $imageBefore = $settings["logo_navbar"];
                if (!empty($settings["logo_navbar"])) {
                    $image_path = "./administrator/assets/media/settings/" . $settings["logo_navbar"];
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
            }

            $image = $request->file('logo_navbar');
            $fileName  =  'logo_navbar.' . $image->getClientOriginalExtension();
            $path = upload_path('logo') . $fileName;
            $logo_navbar = upload_path('logo');
            $image->move($logo_navbar,$fileName);
            $data_settings['logo_navbar'] = $fileName;
        }
        
        if ($request->hasFile('favicon')) {
            if (array_key_exists("favicon", $settings)) {
                $imageBefore = $settings["favicon"];
                if (!empty($settings["favicon"])) {
                    $image_path = "./administrator/assets/media/settings/" . $settings["favicon"];
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
            }

            $image = $request->file('favicon');
            $fileName  =  'favicon.' . $image->getClientOriginalExtension();
            $path = upload_path('favicon') . $fileName;
            $favicon = upload_path('favicon');
            $image->move($favicon,$fileName);
            $data_settings['favicon'] = $fileName;
        }

        if ($request->hasFile('logo_footer')) {
            if (array_key_exists("logo_footer", $settings)) {
                $imageBefore = $settings["logo_footer"];
                if (!empty($settings["logo_footer"])) {
                    $image_path = "./administrator/assets/media/settings/" . $settings["logo_footer"];
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
            }

            $image = $request->file('logo_footer');
            $fileName  =  'logo_footer.' . $image->getClientOriginalExtension();
            $path = upload_path('logo_footer') . $fileName;
            $logo_footer = upload_path('logo_footer');
            $image->move($logo_footer,$fileName);
            $data_settings['logo_footer'] = $fileName;
        }

        // if ($request->hasFile('logo_navbar')) {
        //     if (array_key_exists("logo_navbar", $settings)) {
        //         $imageBefore = $settings["logo_navbar"];
        //         if (!empty($settings["logo_navbar"])) {
        //             $image_path = "./administrator/assets/media/settings/" . $settings["logo_navbar"];
        //             if (File::exists($image_path)) {
        //                 File::delete($image_path);
        //             }
        //         }
        //     }

        //     $image = $request->file('logo_navbar');
        //     // $fileName  =  'logo_navbar.' . $image->getClientOriginalExtension();
        //     $extension = $image->getClientOriginalExtension(); // Get the file extension
        //     $fileName = Str::slug(time() . "_" . $image->getClientOriginalName()) . '.' . $extension;
        //     $path = upload_path('logo') . $fileName;
        //     $logo_navbar = upload_path('logo');
        //     // Check if the file is an SVG
        //     if ($extension === 'svg') {
        //         // Move the SVG file directly without resizing
        //         $image->move($logo_navbar,$fileName);
        //         $data_settings['logo_navbar'] = $fileName;
        //     } else {
        //     $image->move($logo_navbar,$fileName);
        //     Image::make($logo_navbar . '/' . $fileName)->resize(85, 85)->save();
        //     $data_settings['logo_navbar'] = $fileName;
        //     }
        // }
        // if ($request->hasFile('logo')) {
        //     if (array_key_exists("logo", $settings)) {
        //         $imageBefore = $settings["logo"];
        //         if (!empty($settings["logo"])) {
        //             $image_path = "./administrator/assets/media/settings/" . $settings["logo"];
        //             if (File::exists($image_path)) {
        //                 File::delete($image_path);
        //             }
        //         }
        //     }

        //     $image = $request->file('logo');
        //     $fileName  =  'logo.' . $image->getClientOriginalExtension();
        //     $path = upload_path('logo') . $fileName;
        //     Image::make($image->getRealPath())->resize(500, 200)->save($path, 100);
        //     $data_settings['logo'] = $fileName;
        // }

        // if ($request->hasFile('favicon')) {
        //     if (array_key_exists("favicon", $settings)) {
        //         $imageBefore = $settings["favicon"];
        //         if (!empty($settings["favicon"])) {
        //             $image_path = "./administrator/assets/media/settings/" . $settings["favicon"];
        //             if (File::exists($image_path)) {
        //                 File::delete($image_path);
        //             }
        //         }
        //     }

        //     $image = $request->file('favicon');
        //     // $fileName  =  'logo_navbar.' . $image->getClientOriginalExtension();
        //     $extension = $image->getClientOriginalExtension(); // Get the file extension
        //     $fileName = Str::slug(time() . "_" . $image->getClientOriginalName()) . '.' . $extension;
        //     $path = upload_path('favicon') . $fileName;
        //     $favicon = upload_path('favicon');
        //     // Check if the file is an SVG
        //     if ($extension === 'svg') {
        //         // Move the SVG file directly without resizing
        //         $image->move($favicon,$fileName);
        //         $data_settings['favicon'] = $fileName;
        //     } else {
        //     $image->move($favicon,$fileName);
        //     Image::make($favicon . '/' . $fileName)->resize(50, 50)->save();
        //     $data_settings['favicon'] = $fileName;
        //     }
        // }

        foreach ($data_settings as $key => $value) {
            if (array_key_exists($key, $settings)) {
                $data["value"]  = $value;
                Setting::where('name', $key)->update($data);
            } else {
                $data["name"]   = $key;
                $data["value"]  = $value;
                Setting::create($data);
            }
        }

        //Write log
        createLog(static::$module, __FUNCTION__, 0);

        return redirect(route('admin.settings.general'));
    }

    public function updateOverview(Request $request)
    {
        // return $request;
        //Check permission
        if (!isAllowed(static::$module, "overview")) {
            abort(403);
        }

        $settings = Setting::get()->toArray();
        $settings = array_column($settings, 'value', 'name');

        $data_settings = [];
        $data_settings["same_as_default"] = !empty($request->same_as_default) ? $request->same_as_default : '0';
        $data_settings["overview"] = $request->overview;
        $data_settings["overview_an"] = $request->overview_an;
        $data_settings["services_overview"] = $request->services_overview;
        $data_settings["services_link"] = $request->services_link;
        $data_settings["factory_overview"] = $request->factory_overview;
        $data_settings["factory_title"] = $request->factory_title;
        $data_settings["factory_link"] = $request->factory_link;
        
        
        if ($request->hasFile('services_background')) {
            if (array_key_exists("services_background", $settings)) {
                $imageBefore = $settings["services_background"];
                if (!empty($settings["services_background"])) {
                    $image_path = "./administrator/assets/media/settings/" . $settings["services_background"];
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
            }

            $image = $request->file('services_background');
            $fileName  =  'services_background.' . $image->getClientOriginalExtension();
            $path = upload_path('services_background') . $fileName;
            $services_background = upload_path('services_background');
            $image->move($services_background,$fileName);
            $data_settings['services_background'] = $fileName;
        }
        if ($request->hasFile('factory_image')) {
            if (array_key_exists("factory_image", $settings)) {
                $imageBefore = $settings["factory_image"];
                if (!empty($settings["factory_image"])) {
                    $image_path = "./administrator/assets/media/settings/" . $settings["factory_image"];
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
            }

            $image = $request->file('factory_image');
            $fileName  =  'factory_image.' . $image->getClientOriginalExtension();
            $path = upload_path('factory_image') . $fileName;
            $factory_image = upload_path('factory_image');
            $image->move($factory_image,$fileName);
            $data_settings['factory_image'] = $fileName;
        }

        foreach ($data_settings as $key => $value) {
            if (array_key_exists($key, $settings)) {
                $data["value"]  = $value;
                Setting::where('name', $key)->update($data);
            } else {
                $data["name"]   = $key;
                $data["value"]  = $value;
                Setting::create($data);
            }
        }

        //Write log
        createLog(static::$module, __FUNCTION__, 0);

        return redirect(route('admin.settings.overview'));
    }
}
