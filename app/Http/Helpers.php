<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LogSystem;
use App\Models\UserGroupPermission;
use App\Models\Module;
use App\Models\ModuleAccess;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Support\Facades\DB;

function asset_administrator($url)
{
	return asset('administrator/' . $url);
}

function asset_frontpage($url)
{
	return asset('frontpage/' . $url);
}

function asset_storage($url)
{
	return asset('storage_kaero/' . $url);
}

function asset_sinar_gemilang($url)
{
	return asset('Sinar_Gemilang/' . $url);
}

function asset_bpr($url)
{
	return asset('bpr/' . $url);
}

function upload_path($type = '', $file = '')
{
	switch ($type) {
		case 'careers-visitors':
			$target_folder = 'careers-visitors';
			break;
		case 'short':
			$target_folder = 'short';
			break;
		case 'product':
			$target_folder = 'product';
			break;
		case 'testimonial':
			$target_folder = 'testimonials';
			break;
		case 'job_titles':
			$target_folder = 'job_titles';
			break;
		case 'category':
			$target_folder = 'categories';
			break;
		case 'brand':
			$target_folder = 'brands';
			break;
		case 'customer':
			$target_folder = 'customers';
			break;
		case 'logo':
			$target_folder = 'settings';
			break;
		case 'logo_footer':
			$target_folder = 'settings';
			break;
		case 'favicon':
			$target_folder = 'settings';
			break;
		case 'services_background':
			$target_folder = 'settings';
			break;
		case 'factory_image':
			$target_folder = 'settings';
			break;
		case 'page':
			$target_folder = 'pages';
			break;
		case 'banner':
			$target_folder = 'banners';
			break;
		case 'page_banners':
			$target_folder = 'page_banners';
			break;
		case 'news':
			$target_folder = 'news';
			break;
		case 'icon':
			$target_folder = 'icon';
			break;
		case 'our_promo':
			$target_folder = 'our_promo';
			break;
		case 'doctor':
			$target_folder = 'doctor';
			break;
		case 'our_service':
			$target_folder = 'our_service';
			break;
		case 'our_service_item':
			$target_folder = 'our_service_item';
			break;
		case 'gallery':
			$target_folder = 'gallery';
			break;
		case 'our_group':
			$target_folder = 'our_group';
			break;
		case 'payment_confirmation':
			$target_folder = 'payment_confirmations';
			break;
        case 'store':
            $target_folder = 'stores';
            break;
        case 'article':
            $target_folder = 'articles';
            break;
        case 'items':
            $target_folder = 'items';
            break;
		case 'menus':
			$target_folder = 'menus';
			break;
		case 'director_items':
			$target_folder = 'director_items';
			break;
		case 'about_us':
			$target_folder = 'about_us';
			break;
		case 'media_library':
			$target_folder = 'media_library';
			break;
		default:
			$target_folder = '';
			break;
	}

	return Str::finish('administrator/assets/media/' . $target_folder, '/') . $file;
}

function uploads_path($type = '', $file = '')
{
	switch ($type) {
		case 'careers':
			$target_folder = 'careers';
			break;
		}
return Str::finish('storage_kaero/app/' . $target_folder, '/') . $file;
}

function img_src($image = '', $img_type = '')
{
	$file_notfound = 'media/notfound.jpg';

	if (filter_var($image, FILTER_VALIDATE_URL)) {
		return $image;
	} else {
		switch ($img_type) {
			case 'careers-visitors':
				$folder = '/careers-visitors/';
				break;
			case 'job_titles':
				$folder = '/job_titles/';
				break;
			case 'product':
				$folder = '/product/';
				break;
			case 'short':
				$folder = '/short/';
				break;
			case 'about_us':
				$folder = '/about_us/';
				break;
			case 'category':
				$folder = '/categories/';
				break;
			case 'logo':
				$folder = '/settings/';
				break;
			case 'logo_navbar':
				$folder = '/settings/';
				break;
			case 'logo_footer':
				$folder = '/settings/';
				break;
			case 'favicon':
				$folder = '/settings/';
				break;
			case 'services_background':
				$folder = '/settings/';
				break;
			case 'factory_image':
				$folder = '/settings/';
				break;
			case 'news':
				$folder = '/news/';
				break;
			case 'our_promo':
				$folder = '/our_promo/';
				break;
			case 'doctor':
				$folder = '/doctor/';
				break;
			case 'page_banners':
				$folder = '/page_banners/';
				break;
			case 'our_service':
				$folder = '/our_service/';
				break;
			case 'our_service_item':
				$folder = '/our_service_item/';
				break;	
			case 'pages':
				$folder = '/pages/';
				break;
			case 'icon':
				$folder = '/icon/';
				break;
			case 'payment_confirmation':
				$folder = '/payment_confirmations/';
				break;
            case 'items':
                $folder = '/items/';
                break;
			case 'menus':
				$folder = '/menus/';
				break;
			case 'director_items':
				$folder = '/director_items/';
				break;
			default:
				$folder = '/';
				break;
		}
		$file = 'administrator/assets/media' . $folder . $image;
		//echo $file;
		if ($image === true) {
			return url('media' . $folder);
		} else if (file_exists($file) && !is_dir($file)) {
			return url($file);
		} elseif (file_exists($file_notfound)) {
			return url($file_notfound);
		} else {
			return 'http://placehold.it/500x500?text=Not Found';
		}
	}
}

function createLog($module, $action, $data_id)
{
	$log['ip_address'] 	= request()->ip();
	$log['user_id'] 	= auth()->check() ? auth()->user()->id : 1;
	$log['module'] 		= $module;
	$log['action'] 		= $action;
	$log['data_id'] 	= $data_id;
	$log['created_at'] 	= date('Y-m-d H:i:s');
	LogSystem::create($log);
}

function isAllowed($modul, $modul_akses)
{
	$data_user = User::find(auth()->user()->id);
	$grup_pengguna_id = $data_user->user_group_id;
	$permission = getPermissionGroup($grup_pengguna_id);
	if ($grup_pengguna_id == 0) {
		return TRUE;
	} else {
		if ($permission[$grup_pengguna_id][$modul][$modul_akses] == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

function getDefaultPermission()
{
	$query = ModuleAccess::select(DB::raw("modules_access.*,user_group_permissions.user_group_id,user_group_permissions.status"))
		->leftJoin(
			DB::raw("user_group_permissions"),
			function ($join) {
				$join->on('user_group_permissions.module_access_id', '=', 'modules_access.id');
			}
		);
	$data_akses = $query->get();
	$data_grup_pengguna = UserGroup::all();
	$permission = array();
	foreach ($data_grup_pengguna as $val) {
		foreach ($data_akses as $row) {
			$permission[$val->id][$row->module_id][$row->id] = 0;
		}
	}
	return $permission;
}

function getPermissionGroup($user_group_id)
{

	$data_akses = ModuleAccess::select(DB::raw('modules.identifiers as module_identifiers,modules_access.*,user_group_permissions.user_group_id,user_group_permissions.status'))
		->leftJoin(
			DB::raw("user_group_permissions"),
			function ($join) use ($user_group_id) {
				$join->on('user_group_permissions.module_access_id', '=', 'modules_access.id')->where("user_group_permissions.user_group_id", "=", $user_group_id);
			}
		)
		->leftJoin(DB::raw("modules"), "modules.id", "=", "modules_access.module_id")
		->get();
	$permission = [];
	$index = 0;

	foreach ($data_akses as $row) {
		if ($row->status == "") {
			$status = 0;
		} else {
			$status = $row->status;
		}
		$permission[$user_group_id][$row->module_identifiers][$row->identifiers] = $status;
	}
	$index++;

	return $permission;
}


function getPermissionGroup2($x)
{

	$data_akses = ModuleAccess::select(DB::raw('mmodules.identifiers as module_identifiers,modules_access.*,user_group_permissions.user_group_id,user_group_permissions.status'))
		->leftJoin(
			DB::raw("user_group_permissions"),
			function ($join) use ($x) {
				$join->on('user_group_permissions.module_access_id', '=', 'modules_access.id')->where("user_group_permissions.user_group_id", "=", $x);
			}
		)
		->leftJoin(DB::raw("modules"), "modules.id", "=", "modules_access.module_id")
		->get();


        // dd($x);



	$permission = [];
	$index = 0;

	foreach ($data_akses as $row) {
		if ($row->status == "") {
			$status = 0;
		} else {
			$status = $row->status;
		}
		$permission[$x][$row->module_identifiers][$row->identifiers] = $status;
	}
	$index++;

	return $permission;
}

function getPermissionModuleGroup()
{
	$data_user = User::find(auth()->user()->id);
	$grup_pengguna_id = $data_user->user_group_id;
	$data_akses = ModuleAccess::select(DB::raw('modules.identifiers as module_identifiers, COUNT(user_group_permissions.id) as permission_given'))
		->leftJoin(
			DB::raw("user_group_permissions"),
			function ($join) use ($grup_pengguna_id) {
				$join->on('user_group_permissions.module_access_id', '=', 'modules_access.id')->where("user_group_permissions.user_group_id", "=", $grup_pengguna_id)->where("user_group_permissions.status", 1);
			}
		)
		->leftJoin(DB::raw("modules"), "modules.id", "=", "modules_access.module_id")
		->groupBy("modules.id")
		->get();

	$permission = [];
	$index = 0;

	foreach ($data_akses as $row) {
		if ($row->permission_given > 0) {
			$status = TRUE;
		} else {
			$status = FALSE;
		}
		$permission[$row->module_identifiers] = $status;
	}
	$index++;

	return $permission;
}

function showModule($module, $permission_module)
{
	$data_user = User::find(auth()->user()->id);
	$grup_pengguna_id = $data_user->user_group_id;
	if ($grup_pengguna_id == 0) {
		return TRUE;
	} else {
		if (array_key_exists($module, $permission_module)) {
			return $permission_module[$module];
		} else {
			return FALSE;
		}
	}
}
