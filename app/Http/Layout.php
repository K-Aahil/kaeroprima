<?php
namespace App\Http;

use Harimayco\Menu\Models\Menus;
use Harimayco\Menu\Models\MenuItems;
use App\Models\Setting;
use Illuminate\Support\Facades\Cookie;
use App\Models\Pages;
use App\Models\Product;
use App\Models\Post;
use DB;

class Layout {

    public static function currentTime() {
        return time();
    }

    public static function getLayout() {
        $menu = Menus::limit(1)->with('items')->first();
        if ($menu !== null) {
            $navbar = Menus::limit(1)->with('items')->first();
        }else{
            $navbar = '-';
        }
        // array_column($settings, 'value', 'name');
        $layout = [
            'navbar' => $navbar,
            // 'navbar' => array_column(Setting::get()->toArray(), 'value', 'name'),
            'settings' => array_column(Setting::get()->toArray(), 'value', 'name'),
            'pages' => Pages::where('status', true)->orderBy('created_at', 'DESC')->limit(3)->get(),
            'news' => Post::where('status', true)->orderBy('created_at', 'DESC')->get()
        ];
        if (!empty($layout['navbar'])) {
            return $layout;
        }

        return [];

    }

    public function notification()
    {
        $notif = Product::select('products.name AS product_name', 'product_variants.name AS variant_name')
            ->leftJoin('product_variants', 'product_variants.product_id', '=', 'products.id')
            ->whereRaw("product_variants.stock < product_variants.minimal_stock")
            ->get();

        return $notif;
    }
    
}
