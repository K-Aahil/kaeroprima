<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administrator\AuthController;

use App\Http\Controllers\Administrator\BrandsController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\CategoriesController;
use App\Http\Controllers\Administrator\ProductController;
use App\Http\Controllers\Administrator\CustomerGroupController;
use App\Http\Controllers\Administrator\CustomersController;
use App\Http\Controllers\Administrator\MenuManagementController;
use App\Http\Controllers\Administrator\PagesController;
use App\Http\Controllers\Administrator\VisitorsController;
use App\Http\Controllers\Administrator\CareersVisitorsController;
use App\Http\Controllers\Administrator\ProductInquiriesController;
use App\Http\Controllers\Administrator\SubscribersController;
use App\Http\Controllers\Administrator\ContactListController;
use App\Http\Controllers\Administrator\SettingsController;
use App\Http\Controllers\Administrator\OrdersController;
use App\Http\Controllers\Administrator\UserGroupsController;
use App\Http\Controllers\Administrator\UsersController;
use App\Http\Controllers\Administrator\SystemController;
use App\Http\Controllers\Administrator\PermissionsController;
use App\Http\Controllers\Administrator\BannersController;
use App\Http\Controllers\Administrator\NewsCategoriesController;
use App\Http\Controllers\Administrator\NewsController;
use App\Http\Controllers\Administrator\OurServiceController;
use App\Http\Controllers\Administrator\OurServiceItemController;
use App\Http\Controllers\Administrator\OurPromoController;
use App\Http\Controllers\Administrator\CareersCategoriesController;
use App\Http\Controllers\Administrator\CareersPathsController;
use App\Http\Controllers\Administrator\CareersController;
use App\Http\Controllers\Administrator\PaymentsController;
use App\Http\Controllers\Administrator\StoreController;
use App\Http\Controllers\Administrator\AboutUsController;
use App\Http\Controllers\Administrator\HistoriController;
use App\Http\Controllers\Administrator\VisionMissionController;
use App\Http\Controllers\Administrator\EmployeesController;
use App\Http\Controllers\Administrator\MediaLibraryController;
use App\Http\Controllers\Administrator\SortController;
use App\Http\Controllers\Administrator\PagesFrontpageController;
use App\Http\Controllers\Administrator\GalleryController;
use App\Http\Controllers\Administrator\OurGroupController;
use App\Http\Controllers\Administrator\DoctorController;
use App\Http\Controllers\Administrator\DoctorScheduleController;
use App\Http\Controllers\Administrator\ShortListController;
use App\Http\Controllers\Administrator\DirectorListController;
use App\Http\Controllers\Administrator\FaqListController;
use App\Http\Controllers\Administrator\OurPartnerController;
use App\Http\Controllers\Administrator\BranchController;
use App\Http\Controllers\Administrator\ForgotPasswordController;
use App\Http\Controllers\Administrator\PageBannerController;
use App\Http\Controllers\Administrator\JobTitleController;
use App\Http\Controllers\Administrator\OtorisasiController;
use App\Http\Controllers\Administrator\EditProfileController;

    Route::get('login', [AuthController::class, 'index'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
    Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
    Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::get('categories',[CategoriesController::class, 'index'])->name('admin.categories');
        Route::get('categories-data', [CategoriesController::class, 'getData'])->name('admin.categories.getData');
        Route::get('categories/add',[CategoriesController::class, 'add'])->name('admin.categories.add');
        Route::post('categories/save',[CategoriesController::class, 'save'])->name('admin.categories.save');
        Route::get('categories/edit/{id}',[CategoriesController::class, 'edit'])->name('admin.categories.edit');
        Route::get('categories/detail/{id}',[CategoriesController::class, 'detail'])->name('admin.categories.detail');
        Route::put('categories/update',[CategoriesController::class, 'update'])->name('admin.categories.update');
        Route::delete('categories/delete',[CategoriesController::class, 'delete'])->name('admin.categories.delete');
        Route::post('categories/change-status',[CategoriesController::class, 'changeStatus'])->name('admin.categories.changeStatus');

        Route::get('brands',[BrandsController::class, 'index'])->name('admin.brands');
        Route::get('brands-data',[BrandsController::class, 'getData'])->name('admin.brands.getData');
        Route::get('brands/add',[BrandsController::class, 'add'])->name('admin.brands.add');
        Route::post('brands/insert',[BrandsController::class, 'insert'])->name('admin.brands.insert');
        Route::get('brands/edit/{id}',[BrandsController::class, 'edit'])->name('admin.brands.edit');
        Route::put('brands/update/{id}',[BrandsController::class, 'update'])->name('admin.brands.update');
        Route::delete('brands/delete',[BrandsController::class, 'delete'])->name('admin.brands.delete');

        Route::get('customer_group',[CustomerGroupController::class, 'index'])->name('admin.customer_group');
        Route::get('customer_group-data',[CustomerGroupController::class, 'getData']);
        Route::get('customer_group/add',[CustomerGroupController::class, 'add'])->name('admin.customer_group.add');
        Route::post('customer_group/insert',[CustomerGroupController::class, 'insert'])->name('admin.customer_group.insert');
        Route::get('customer_group/detail/{id}',[CustomerGroupController::class, 'detail'])->name('admin.customer_group.detail');
        Route::post('customer_group/insert/categories', [CustomerGroupController::class, 'categories'])->name('admin.customer_group.categories');
        Route::get('customer_group/edit/{id}',[CustomerGroupController::class, 'edit'])->name('admin.customer_group.edit');
        Route::put('customer_group/update/{id}',[CustomerGroupController::class, 'update'])->name('admin.customer_group.update');
        Route::delete('customer_group/delete',[CustomerGroupController::class, 'delete'])->name('admin.customer_group.delete');

        Route::get('customers',[CustomersController::class, 'index'])->name('admin.customers');
        Route::get('customers-data',[CustomersController::class, 'getData'])->name('admin.customers.getData');
        Route::get('customers/add',[CustomersController::class, 'add'])->name('admin.customers.add');
        Route::post('customers/insert',[CustomersController::class, 'insert'])->name('admin.customers.insert');
        Route::get('customers/detail/{id}',[CustomersController::class, 'detail'])->name('admin.customers.detail');
        Route::get('customers/edit/{id}',[CustomersController::class, 'edit'])->name('admin.customers.edit');
        Route::put('customers/update/{id}',[CustomersController::class, 'update'])->name('admin.customers.update');
        Route::delete('customers/delete',[CustomersController::class, 'delete'])->name('admin.customers.delete');


        Route::get('about_us',[AboutUsController::class, 'index'])->name('admin.about_us');
        Route::get('about_us-data',[AboutUsController::class, 'getData'])->name('admin.about_us.getData');
        Route::get('about_us/add',[AboutUsController::class, 'add'])->name('admin.about_us.add');
        Route::post('about_us/insert',[AboutUsController::class, 'insert'])->name('admin.about_us.insert');
        Route::get('about_us/detail/{id}',[AboutUsController::class, 'detail'])->name('admin.about_us.detail');
        Route::get('about_us/edit/{id}',[AboutUsController::class, 'edit'])->name('admin.about_us.edit');
        Route::put('about_us/update/{id}',[AboutUsController::class, 'update'])->name('admin.about_us.update');
        Route::delete('about_us/delete',[AboutUsController::class, 'delete'])->name('admin.about_us.delete');
        
        Route::get('histori',[HistoriController::class, 'indexHistori'])->name('admin.histori');
        Route::get('histori-data',[HistoriController::class, 'getDataHistori'])->name('admin.histori.getData');
        Route::get('histori/add',[HistoriController::class, 'addHistori'])->name('admin.histori.add');
        Route::post('histori/insert',[HistoriController::class, 'insertHistori'])->name('admin.histori.insert');
        Route::get('histori/detail/{id}',[HistoriController::class, 'detailHistori'])->name('admin.histori.detail');
        Route::get('histori/edit/{id}',[HistoriController::class, 'editHistori'])->name('admin.histori.edit');
        Route::put('histori/update/{id}',[HistoriController::class, 'updateHistori'])->name('admin.histori.update');
        Route::delete('histori/delete',[HistoriController::class, 'deleteHistori'])->name('admin.histori.delete');

        Route::get('visi',[VisionMissionController::class, 'indexVisi'])->name('admin.visi');
        Route::get('visi-data',[VisionMissionController::class, 'getDataVisi'])->name('admin.visi.getData');
        Route::get('visi/add',[VisionMissionController::class, 'addVisi'])->name('admin.visi.add');
        Route::post('visi/insert',[VisionMissionController::class, 'insertVisi'])->name('admin.visi.insert');
        Route::get('visi/detail/{id}',[VisionMissionController::class, 'detailVisi'])->name('admin.visi.detail');
        Route::get('visi/edit/{id}',[VisionMissionController::class, 'editVisi'])->name('admin.visi.edit');
        Route::put('visi/update/{id}',[VisionMissionController::class, 'updateVisi'])->name('admin.visi.update');
        Route::delete('visi/delete',[VisionMissionController::class, 'deleteVisi'])->name('admin.visi.delete');

        Route::get('employees',[EmployeesController::class, 'indexEmployees'])->name('admin.employees');
        Route::get('employees-data',[EmployeesController::class, 'getDataEmployees'])->name('admin.employees.getData');
        Route::get('employees/add',[EmployeesController::class, 'addEmployees'])->name('admin.employees.add');
        Route::post('employees/insert',[EmployeesController::class, 'insertEmployees'])->name('admin.employees.insert');
        Route::get('employees/detail/{id}',[EmployeesController::class, 'detailEmployees'])->name('admin.employees.detail');
        Route::get('employees/edit/{id}',[EmployeesController::class, 'editEmployees'])->name('admin.employees.edit');
        Route::put('employees/update/{id}',[EmployeesController::class, 'updateEmployees'])->name('admin.employees.update');
        Route::delete('employees/delete',[EmployeesController::class, 'deleteEmployees'])->name('admin.employees.delete');

        Route::get('pages_frontpage',[PagesFrontpageController::class, 'index'])->name('admin.pages_frontpage');
        Route::get('pages_frontpage-data',[PagesFrontpageController::class, 'getData'])->name('admin.pages_frontpage.getData');
        Route::get('pages_frontpage/add',[PagesFrontpageController::class, 'add'])->name('admin.pages_frontpage.add');
        Route::post('pages_frontpage/insert',[PagesFrontpageController::class, 'insert'])->name('admin.pages_frontpage.insert');
        Route::get('pages_frontpage/detail/{id}',[PagesFrontpageController::class, 'detail'])->name('admin.pages_frontpage.detail');
        Route::get('pages_frontpage/edit/{id}',[PagesFrontpageController::class, 'edit'])->name('admin.pages_frontpage.edit');
        Route::put('pages_frontpage/update/{id}',[PagesFrontpageController::class, 'update'])->name('admin.pages_frontpage.update');
        Route::delete('pages_frontpage/delete',[PagesFrontpageController::class, 'delete'])->name('admin.pages_frontpage.delete');
        Route::post('pages/change-status',[PagesController::class, 'changeStatus'])->name('admin.pages.changeStatus');

        // Route Gallery
        Route::get('galleries', [GalleryController::class, 'index'])->name('admin.galleries');
        Route::get('galleries-data', [GalleryController::class, 'getData'])->name('admin.galleries.getData');
        Route::get('galleries/add', [GalleryController::class, 'create'])->name('admin.galleries.add');
        Route::get('galleries/detail/{id}', [GalleryController::class, 'detail'])->name('admin.galleries.detail');
        Route::get('galleries/edit/{id}', [GalleryController::class, 'edit'])->name('admin.galleries.edit');
        Route::post('galleries/store', [GalleryController::class, 'store'])->name('admin.galleries.store');
        Route::put('galleries/update/{id}', [GalleryController::class, 'update'])->name('admin.galleries.update');
        Route::delete('galleries/delete', [GalleryController::class, 'destroy'])->name('admin.galleries.delete');

        // // Route Our Group
        // Route::get('our_groups', [OurGroupController::class, 'index'])->name('admin.our_groups');
        // Route::get('our_groups-data', [OurGroupController::class, 'getData'])->name('admin.our_groups.getData');
        // Route::get('our_groups/add', [OurGroupController::class, 'create'])->name('admin.our_groups.add');
        // Route::get('our_groups/detail/{id}', [OurGroupController::class, 'detail'])->name('admin.our_groups.detail');
        // Route::get('our_groups/edit/{id}', [OurGroupController::class, 'edit'])->name('admin.our_groups.edit');
        // Route::post('our_groups/store', [OurGroupController::class, 'store'])->name('admin.our_groups.store');
        // Route::put('our_groups/update/{id}', [OurGroupController::class, 'update'])->name('admin.our_groups.update');
        // Route::delete('our_groups/delete', [OurGroupController::class, 'destroy'])->name('admin.our_groups.delete');
        
        // Route Branch
        Route::get('branches', [BranchController::class, 'index'])->name('admin.branches');
        Route::get('branches-data', [BranchController::class, 'getData'])->name('admin.branches.getData');
        Route::get('branches/add', [BranchController::class, 'add'])->name('admin.branches.add');
        Route::get('branches/detail/{id}', [BranchController::class, 'detail'])->name('admin.branches.detail');
        Route::get('branches/edit/{id}', [BranchController::class, 'edit'])->name('admin.branches.edit');
        Route::post('branches/save', [BranchController::class, 'save'])->name('admin.branches.save');
        Route::put('branches/update/{id}', [BranchController::class, 'update'])->name('admin.branches.update');
        Route::delete('branches/delete', [BranchController::class, 'destroy'])->name('admin.branches.delete');
        Route::post('branches/change-status',[BranchController::class, 'changeStatus'])->name('admin.branches.changeStatus');

        // Route Doctor
        Route::get('doctors', [DoctorController::class, 'index'])->name('admin.doctors');
        Route::get('doctors-data', [DoctorController::class, 'getData'])->name('admin.doctors.getData');
        Route::get('doctors/add', [DoctorController::class, 'create'])->name('admin.doctors.add');
        Route::get('doctors/detail/{id}', [DoctorController::class, 'detail'])->name('admin.doctors.detail');
        Route::get('doctors/edit/{id}', [DoctorController::class, 'edit'])->name('admin.doctors.edit');
        Route::post('doctors/store', [DoctorController::class, 'store'])->name('admin.doctors.store');
        Route::put('doctors/update/{id}', [DoctorController::class, 'update'])->name('admin.doctors.update');
        Route::delete('doctors/delete', [DoctorController::class, 'destroy'])->name('admin.doctors.delete');

        //  Route Doctor Schedule
        Route::get('doctor_schedules', [DoctorScheduleController::class, 'index'])->name('admin.doctor_schedules');
        Route::get('doctor_schedules-data', [DoctorScheduleController::class, 'getData'])->name('admin.doctor_schedules.getData');
        Route::get('doctor_schedules/add', [DoctorScheduleController::class, 'add'])->name('admin.doctor_schedules.add');
        Route::get('doctor_schedules/detail/{id}', [DoctorScheduleController::class, 'detail'])->name('admin.doctor_schedules.detail');
        Route::get('doctor_schedules/edit/{id}', [DoctorScheduleController::class, 'edit'])->name('admin.doctor_schedules.edit');
        Route::post('doctor_schedules/save', [DoctorScheduleController::class, 'save'])->name('admin.doctor_schedules.save');
        Route::put('doctor_schedules/update/{id}', [DoctorScheduleController::class, 'update'])->name('admin.doctor_schedules.update');
        Route::delete('doctor_schedules/delete', [DoctorScheduleController::class, 'destroy'])->name('admin.doctor_schedules.delete');
        Route::post('doctor_schedules/change-status',[DoctorScheduleController::class, 'changeStatus'])->name('admin.doctor_schedules.changeStatus');
        Route::get('doctor_schedules/isExist',[DoctorScheduleController::class, 'isExist'])->name('isExist');

        Route::get('media_library',[MediaLibraryController::class, 'index'])->name('admin.media_library');
        Route::get('media_library-data',[MediaLibraryController::class, 'getData'])->name('admin.media_library.getData');
        Route::get('media_library/add',[MediaLibraryController::class, 'add'])->name('admin.media_library.add');
        Route::post('media_library/insert',[MediaLibraryController::class, 'insert'])->name('admin.media_library.insert');
        Route::get('media_library/detail/{id}',[MediaLibraryController::class, 'detail'])->name('admin.media_library.detail');
        Route::get('media_library/edit/{id}',[MediaLibraryController::class, 'edit'])->name('admin.media_library.edit');
        Route::put('media_library/update/{id}',[MediaLibraryController::class, 'update'])->name('admin.media_library.update');
        Route::delete('media_library/delete',[MediaLibraryController::class, 'delete'])->name('admin.media_library.delete');

        // Route::get('media-library',[MediaLibraryController::class, 'index'])->name('admin.media_library');
        // Route::get('media-library-data',[MediaLibraryController::class, 'getData'])->name('admin.media_library.getData');
        // Route::get('media-library/add',[MediaLibraryController::class, 'add'])->name('admin.media_library.add');
        // Route::post('media-library/insert',[MediaLibraryController::class, 'insert'])->name('admin.media_library.insert');
        // Route::get('media-library/detail/{id}',[MediaLibraryController::class, 'detail'])->name('admin.media_library.detail');
        // Route::get('media-library/edit/{id}',[MediaLibraryController::class, 'edit'])->name('admin.media_library.edit');
        // Route::put('media-library/update/{id}',[MediaLibraryController::class, 'update'])->name('admin.media_library.update');
        // Route::delete('media-library/delete',[MediaLibraryController::class, 'delete'])->name('admin.media_library.delete');

        // Route::prefix('menu-management')->group(function () {

        //     Route::get('/', [MenuManagementController::class, 'index'])->name('menu-management.index');
        //     Route::get('/get-data', [MenuManagementController::class, 'getData'])->name('menu-management.getData');
        //     Route::get('/add', [MenuManagementController::class, 'create'])->name('menu-management.add');
        //     Route::get('/detail', [MenuManagementController::class, 'show'])->name('menu-management.detail');
        //     Route::get('/edit/{id}', [MenuManagementController::class, 'edit'])->name('menu-management.edit');
        //     Route::post('/insert', [MenuManagementController::class, 'store'])->name('menu-management.insert');
        //     Route::put('/update/{id}', [MenuManagementController::class, 'update'])->name('menu-management.update');
        //     Route::delete('/delete', [MenuManagementController::class, 'destroy'])->name('menu-management.delete');
        //     Route::post('/store-item', [MenuManagementController::class, 'storeItem'])->name('menu-management.store-item');
        //     Route::post('/store-item-update', [MenuManagementController::class, 'updateItem'])->name('menu-management.update-item');
        // });

        Route::prefix('menu-management')->group(function () {

            Route::get('/', [MenuManagementController::class, 'index'])->name('menu-management.index');
            Route::get('/get-data', [MenuManagementController::class, 'getData'])->name('menu-management.getData');
            Route::get('/add', [MenuManagementController::class, 'create'])->name('menu-management.add');
            Route::get('/detail', [MenuManagementController::class, 'show'])->name('menu-management.detail');
            Route::get('/edit/{id}', [MenuManagementController::class, 'edit'])->name('menu-management.edit');
            Route::post('/insert', [MenuManagementController::class, 'store'])->name('menu-management.insert');
            Route::put('/update/{id}', [MenuManagementController::class, 'update'])->name('menu-management.update');
            Route::delete('/delete', [MenuManagementController::class, 'destroy'])->name('menu-management.delete');

            Route::post('/menu-item', [MenuManagementController::class, 'storeItem'])->name('add-menu-item');
            Route::post('/menu-item-update', [MenuManagementController::class, 'updateItem'])->name('update-menu-item');
            Route::post('/menu-item-generate', [MenuManagementController::class, 'generateItem'])->name('generate-menu-item');
            Route::post('/menu-item-delete', [MenuManagementController::class, 'deleteItem'])->name('delete-menu-item');

            Route::post('/update-order', [MenuManagementController::class, 'updateOrder'])->name('menu-management.updateOrder');
            Route::post('/change-status',[MenuManagementController::class, 'changeStatus'])->name('menu-management.changeStatus');
            Route::post('/validationKode', [MenuManagementController::class, 'isExistKode'])->name('admin.menu-management.isExistKode');
            Route::post('/validationItemKode', [MenuManagementController::class, 'isExistItemKode'])->name('admin.menu-management-item.isExistKode');

        });

        Route::get('pages',[PagesController::class, 'index'])->name('admin.pages');
        Route::get('pages-data',[PagesController::class, 'getData'])->name('admin.pages.getData');
        Route::get('pages/add',[PagesController::class, 'add'])->name('admin.pages.add');
        Route::post('pages/insert',[PagesController::class, 'insert'])->name('admin.pages.insert');
        Route::get('pages/detail/{id}',[PagesController::class, 'detail'])->name('admin.pages.detail');
        Route::get('pages/edit/{id}',[PagesController::class, 'edit'])->name('admin.pages.edit');
        Route::put('pages/update/{id}',[PagesController::class, 'update'])->name('admin.pages.update');
        Route::delete('pages/delete',[PagesController::class, 'delete'])->name('admin.pages.delete');
        Route::post('pages/change-status',[PagesController::class, 'changeStatus'])->name('admin.pages.changeStatus');

        Route::get('page-banners',[PageBannerController::class, 'index'])->name('admin.page-banners');
        Route::put('page-banners-general',[PageBannerController::class, 'updateGeneral'])->name('admin.page-banners.updateGeneral');

        Route::get('visitors',[VisitorsController::class, 'index'])->name('admin.visitors');
        Route::get('visitors-data', [VisitorsController::class, 'getData'])->name('admin.visitors.getData');
        Route::get('visitors/exportExcel', [VisitorsController::class, 'exportExcel'])->name('admin.visitors.exportExcel');
        Route::delete('visitors/delete',[VisitorsController::class, 'delete'])->name('admin.visitors.delete');

        Route::get('careers-visitors',[CareersVisitorsController::class, 'index'])->name('admin.careers-visitors');
        Route::get('careers-visitors-data', [CareersVisitorsController::class, 'getData'])->name('admin.careers-visitors.getData');
        Route::get('careers-visitors/exportExcel', [CareersVisitorsController::class, 'exportExcel'])->name('admin.careers-visitors.exportExcel');
        Route::delete('careers-visitors/delete',[CareersVisitorsController::class, 'delete'])->name('admin.careers-visitors.delete');

        //product inquiries
        Route::get('product-inquiries',[ProductInquiriesController::class, 'index'])->name('admin.product-inquiries');
        Route::get('product-inquiries-data', [ProductInquiriesController::class, 'getData'])->name('admin.product-inquiries.getData');
        Route::post('product-inquiries-filter', [ProductInquiriesController::class, 'getProduct'])->name('admin.product-inquiries.getProduct');
        Route::get('product-inquiries/exportExcel', [ProductInquiriesController::class, 'exportExcel'])->name('admin.product-inquiries.exportExcel');
        Route::delete('product-inquiries/delete',[ProductInquiriesController::class, 'delete'])->name('admin.product-inquiries.delete');

        Route::get('subscribers',[SubscribersController::class, 'index'])->name('admin.subscribers');
        Route::get('subscribers-data', [SubscribersController::class, 'getData'])->name('admin.subscribers.getData');
        Route::get('subscribers/exportExcel', [SubscribersController::class, 'exportExcel'])->name('admin.subscribers.exportExcel');
        Route::delete('subscribers/delete',[SubscribersController::class, 'delete'])->name('admin.subscribers.delete');

        // Contact List
        Route::get('contact-list',[ContactListController::class, 'index'])->name('admin.contact_list');
        Route::get('contact-list-data', [ContactListController::class, 'getData'])->name('admin.contact_list.getData');
        Route::get('contact-list/add',[ContactListController::class, 'add'])->name('admin.contact_list.add');
        Route::post('contact-list/save',[ContactListController::class, 'save'])->name('admin.contact_list.save');
        Route::get('contact-list/edit/{id}',[ContactListController::class, 'edit'])->name('admin.contact_list.edit');
        Route::get('contact-list/detail/{id}',[ContactListController::class, 'detail'])->name('admin.contact_list.detail');
        Route::put('contact-list/update',[ContactListController::class, 'update'])->name('admin.contact_list.update');
        Route::delete('contact-list/delete',[ContactListController::class, 'delete'])->name('admin.contact_list.delete');
        Route::post('contact-list/change-status',[ContactListController::class, 'changeStatus'])->name('admin.contact_list.changeStatus');

        Route::get('setting-smtp',[SettingsController::class, 'smtp'])->name('admin.settings.smtp');
        Route::put('setting-smtp',[SettingsController::class, 'updateSMTP'])->name('admin.settings.updateSMTP');
        Route::get('setting-general',[SettingsController::class, 'general'])->name('admin.settings.general');
        Route::put('setting-general',[SettingsController::class, 'updateGeneral'])->name('admin.settings.updateGeneral');
        Route::get('setting-overview',[SettingsController::class, 'overview'])->name('admin.settings.overview');
        Route::put('setting-overview',[SettingsController::class, 'updateOverview'])->name('admin.settings.updateOverview');

        Route::get('orders',[OrdersController::class, 'index'])->name('admin.orders');
        Route::get('orders-data',[OrdersController::class, 'getData']);
        Route::get('store-data',[OrdersController::class, 'getStoreData']);
        Route::get('product-data',[OrdersController::class, 'getProductData']);
        Route::get('orders/detail/{id}',[OrdersController::class, 'detail'])->name('admin.orders.detail');
        Route::put('orders/update-status',[OrdersController::class, 'updateStatus'])->name('admin.orders.update-status');
        Route::put('orders/payment-confirm',[OrdersController::class, 'paymentConfirmation'])->name('admin.order.confirm_payment');

        Route::get('user-groups',[UserGroupsController::class, 'index'])->name('admin.user_groups');
        Route::get('user-groups-data', [UserGroupsController::class, 'getData'])->name('admin.user_groups.getData');
        Route::get('user-groups/add',[UserGroupsController::class, 'add'])->name('admin.user_groups.add');
        Route::post('user-groups/save',[UserGroupsController::class, 'save'])->name('admin.user_groups.save');
        Route::get('user-groups/edit/{id}',[UserGroupsController::class, 'edit'])->name('admin.user_groups.edit');
        Route::get('user-groups/detail/{id}',[UserGroupsController::class, 'detail'])->name('admin.user_groups.detail');
        Route::put('user-groups/update',[UserGroupsController::class, 'update'])->name('admin.user_groups.update');
        Route::delete('user-groups/delete',[UserGroupsController::class, 'delete'])->name('admin.user_groups.delete');
        Route::post('user-groups/change-status',[UserGroupsController::class, 'changeStatus'])->name('admin.user_groups.changeStatus');

        Route::get('users',[UsersController::class, 'index'])->name('admin.users');
        Route::get('users-data', [UsersController::class, 'getData'])->name('admin.users.getData');
        Route::get('users/add',[UsersController::class, 'add'])->name('admin.users.add');
        Route::post('users/save',[UsersController::class, 'save'])->name('admin.users.save');
        Route::get('users/edit/{id}',[UsersController::class, 'edit'])->name('admin.users.edit');
        Route::get('users/detail/{id}',[UsersController::class, 'detail'])->name('admin.users.detail');
        Route::put('users/update',[UsersController::class, 'update'])->name('admin.users.update');
        Route::delete('users/delete',[UsersController::class, 'delete'])->name('admin.users.delete');
        Route::post('users/change-status',[UsersController::class, 'changeStatus'])->name('admin.users.changeStatus');

        Route::get('edit-profile/edit/{id}',[EditProfileController::class, 'edit'])->name('admin.edit-profile.edit');
        Route::put('edit-profile/update',[EditProfileController::class, 'update'])->name('admin.edit-profile.update');
        Route::get('change-password/edit/{id}',[EditProfileController::class, 'editPassword'])->name('admin.change-password.edit');
        Route::put('change-password/update',[EditProfileController::class, 'updatePassword'])->name('admin.change-password.update');

        Route::get('logs',[SystemController::class, 'index'])->name('admin.logs');
        Route::get('logs-data', [SystemController::class, 'getData'])->name('admin.logs.getData');

        Route::get('permissions',[PermissionsController::class, 'index'])->name('admin.permissions');
        Route::get('permissions-data', [PermissionsController::class, 'getData'])->name('admin.permissions.getData');
        Route::get('permissions/add',[PermissionsController::class, 'add'])->name('admin.permissions.add');
        Route::post('permissions/save',[PermissionsController::class, 'save'])->name('admin.permissions.save');
        Route::get('permissions/edit/{id}',[PermissionsController::class, 'edit'])->name('admin.permissions.edit');
        Route::get('permissions/detail/{id}',[PermissionsController::class, 'detail'])->name('admin.permissions.detail');
        Route::put('permissions/update',[PermissionsController::class, 'update'])->name('admin.permissions.update');
        Route::delete('permissions/delete',[PermissionsController::class, 'delete'])->name('admin.permissions.delete');

        Route::get('banners',[BannersController::class, 'index'])->name('admin.banners');
        Route::get('banners-data',[BannersController::class, 'getData'])->name('admin.banners.getData');
        Route::get('banners/add',[BannersController::class, 'add'])->name('admin.banners.add');
        Route::post('banners/insert',[BannersController::class, 'insert'])->name('admin.banners.insert');
        Route::get('banners/detail/{id}',[BannersController::class, 'detail'])->name('admin.banners.detail');
        Route::get('banners/edit/{id}',[BannersController::class, 'edit'])->name('admin.banners.edit');
        Route::put('banners/update/{id}',[BannersController::class, 'update'])->name('admin.banners.update');
        Route::delete('banners/delete',[BannersController::class, 'delete'])->name('admin.banners.delete');
        Route::post('banners/change-status',[BannersController::class, 'changeStatus'])->name('admin.banners.changeStatus');

        //
        Route::get('article-categories',[NewsCategoriesController::class, 'index'])->name('admin.article_categories');
        Route::get('article-categories-data', [NewsCategoriesController::class, 'getData'])->name('admin.article_categories.getData');
        Route::get('article-categories/add',[NewsCategoriesController::class, 'add'])->name('admin.article_categories.add');
        Route::post('article-categories/save',[NewsCategoriesController::class, 'save'])->name('admin.article_categories.save');
        Route::get('article-categories/edit/{id}',[NewsCategoriesController::class, 'edit'])->name('admin.article_categories.edit');
        Route::get('article-categories/detail/{id}',[NewsCategoriesController::class, 'detail'])->name('admin.article_categories.detail');
        Route::put('article-categories/update',[NewsCategoriesController::class, 'update'])->name('admin.article_categories.update');
        Route::delete('article-categories/delete',[NewsCategoriesController::class, 'delete'])->name('admin.article_categories.delete');
        Route::post('article-categories/change-status',[NewsCategoriesController::class, 'changeStatus'])->name('admin.article_categories.changeStatus');

        Route::get('article',[NewsController::class, 'index'])->name('admin.article');
        Route::get('article-data', [NewsController::class, 'getData'])->name('admin.article.getData');
        Route::get('article/add',[NewsController::class, 'add'])->name('admin.article.add');
        Route::post('article/save',[NewsController::class, 'save'])->name('admin.article.save');
        Route::get('article/edit/{id}',[NewsController::class, 'edit'])->name('admin.article.edit');
        Route::get('article/detail/{id}',[NewsController::class, 'detail'])->name('admin.article.detail');
        Route::put('article/update',[NewsController::class, 'update'])->name('admin.article.update');
        Route::delete('article/delete',[NewsController::class, 'delete'])->name('admin.article.delete');
        Route::post('article/change-status',[NewsController::class, 'changeStatus'])->name('admin.article.changeStatus');
        Route::get('article/short',[NewsController::class, 'short'])->name('admin.article.short');
        Route::post('article/update-short',[NewsController::class, 'updateShort'])->name('admin.article.update_short');
        
        //Product
        Route::get('product',[ProductController::class, 'index'])->name('admin.product');
        Route::get('product-data', [ProductController::class, 'getData'])->name('admin.product.getData');
        Route::get('product/add',[ProductController::class, 'add'])->name('admin.product.add');
        Route::post('product/save',[ProductController::class, 'save'])->name('admin.product.save');
        Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('admin.product.edit');
        Route::get('product/detail/{id}',[ProductController::class, 'detail'])->name('admin.product.detail');
        Route::put('product/update',[ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('product/delete',[ProductController::class, 'delete'])->name('admin.product.delete');
        Route::post('product/change-status',[ProductController::class, 'changeStatus'])->name('admin.product.changeStatus');
        Route::get('product/short',[ProductController::class, 'short'])->name('admin.product.short');
        Route::post('product/update-short',[ProductController::class, 'updateShort'])->name('admin.product.update_short');
        Route::get('product/short',[ProductController::class, 'short'])->name('admin.product.short');
        Route::post('product/update-short',[ProductController::class, 'updateShort'])->name('admin.product.update_short');

        //Our Service
        Route::get('our-service',[OurServiceController::class, 'index'])->name('admin.our_service');
        Route::get('our-service-data', [OurServiceController::class, 'getData'])->name('admin.our_service.getData');
        Route::get('our-service/add',[OurServiceController::class, 'add'])->name('admin.our_service.add');
        Route::post('our-service/save',[OurServiceController::class, 'save'])->name('admin.our_service.save');
        Route::get('our-service/edit/{id}',[OurServiceController::class, 'edit'])->name('admin.our_service.edit');
        Route::get('our-service/detail/{id}',[OurServiceController::class, 'detail'])->name('admin.our_service.detail');
        Route::put('our-service/update',[OurServiceController::class, 'update'])->name('admin.our_service.update');
        Route::delete('our-service/delete',[OurServiceController::class, 'delete'])->name('admin.our_service.delete');
        Route::post('our-service/change-status',[OurServiceController::class, 'changeStatus'])->name('admin.our_service.changeStatus');
        //

        //Our Service Item 
        Route::get('our-service-item',[OurServiceItemController::class, 'index'])->name('admin.our_service_item');
        Route::get('our-service-item-data', [OurServiceItemController::class, 'getData'])->name('admin.our_service_item.getData');
        Route::get('our-service-item/add',[OurServiceItemController::class, 'add'])->name('admin.our_service_item.add');
        Route::post('our-service-item/save',[OurServiceItemController::class, 'save'])->name('admin.our_service_item.save');
        Route::get('our-service-item/edit/{id}',[OurServiceItemController::class, 'edit'])->name('admin.our_service_item.edit');
        Route::get('our-service-item/detail/{id}',[OurServiceItemController::class, 'detail'])->name('admin.our_service_item.detail');
        Route::put('our-service-item/update',[OurServiceItemController::class, 'update'])->name('admin.our_service_item.update');
        Route::delete('our-service-item/delete',[OurServiceItemController::class, 'delete'])->name('admin.our_service_item.delete');
        Route::post('our-service-item/change-status',[OurServiceItemController::class, 'changeStatus'])->name('admin.our_service_item.changeStatus');
        // 

        // Our Promo
        Route::get('our-promo',[OurPromoController::class, 'index'])->name('admin.our_promo');
        Route::get('our-promo-data', [OurPromoController::class, 'getData'])->name('admin.our_promo.getData');
        Route::get('our-promo/add',[OurPromoController::class, 'add'])->name('admin.our_promo.add');
        Route::post('our-promo/save',[OurPromoController::class, 'save'])->name('admin.our_promo.save');
        Route::get('our-promo/edit/{id}',[OurPromoController::class, 'edit'])->name('admin.our_promo.edit');
        Route::get('our-promo/detail/{id}',[OurPromoController::class, 'detail'])->name('admin.our_promo.detail');
        Route::put('our-promo/update',[OurPromoController::class, 'update'])->name('admin.our_promo.update');
        Route::delete('our-promo/delete',[OurPromoController::class, 'delete'])->name('admin.our_promo.delete');
        Route::post('our-promo/change-status',[OurPromoController::class, 'changeStatus'])->name('admin.our_promo.changeStatus');
        //

        // Career
        Route::get('career-categories',[CareersCategoriesController::class, 'index'])->name('admin.career_categories');
        Route::get('career-categories-data', [CareersCategoriesController::class, 'getData'])->name('admin.career_categories.getData');
        Route::get('career-categories/add',[CareersCategoriesController::class, 'add'])->name('admin.career_categories.add');
        Route::post('career-categories/save',[CareersCategoriesController::class, 'save'])->name('admin.career_categories.save');
        Route::get('career-categories/edit/{id}',[CareersCategoriesController::class, 'edit'])->name('admin.career_categories.edit');
        Route::get('career-categories/detail/{id}',[CareersCategoriesController::class, 'detail'])->name('admin.career_categories.detail');
        Route::put('career-categories/update',[CareersCategoriesController::class, 'update'])->name('admin.career_categories.update');
        Route::delete('career-categories/delete',[CareersCategoriesController::class, 'delete'])->name('admin.career_categories.delete');
        Route::post('career-categories/change-status',[CareersCategoriesController::class, 'changeStatus'])->name('admin.career_categories.changeStatus');

        Route::get('career-paths',[CareersPathsController::class, 'index'])->name('admin.career_paths');
        Route::get('career-paths-data', [CareersPathsController::class, 'getData'])->name('admin.career_paths.getData');
        Route::get('career-paths/add',[CareersPathsController::class, 'add'])->name('admin.career_paths.add');
        Route::post('career-paths/save',[CareersPathsController::class, 'save'])->name('admin.career_paths.save');
        Route::get('career-paths/edit/{id}',[CareersPathsController::class, 'edit'])->name('admin.career_paths.edit');
        Route::get('career-paths/detail/{id}',[CareersPathsController::class, 'detail'])->name('admin.career_paths.detail');
        Route::put('career-paths/update',[CareersPathsController::class, 'update'])->name('admin.career_paths.update');
        Route::delete('career-paths/delete',[CareersPathsController::class, 'delete'])->name('admin.career_paths.delete');
        Route::post('career-paths/change-status',[CareersPathsController::class, 'changeStatus'])->name('admin.career_paths.changeStatus');

        Route::get('career',[CareersController::class, 'index'])->name('admin.career');
        Route::get('career-data', [CareersController::class, 'getData'])->name('admin.career.getData');
        Route::get('career/add',[CareersController::class, 'add'])->name('admin.career.add');
        Route::post('career/save',[CareersController::class, 'save'])->name('admin.career.save');
        Route::get('career/edit/{id}',[CareersController::class, 'edit'])->name('admin.career.edit');
        Route::get('career/detail/{id}',[CareersController::class, 'detail'])->name('admin.career.detail');
        Route::put('career/update',[CareersController::class, 'update'])->name('admin.career.update');
        Route::delete('career/delete',[CareersController::class, 'delete'])->name('admin.career.delete');
        Route::post('career/change-status',[CareersController::class, 'changeStatus'])->name('admin.career.changeStatus');
        Route::get('career/isExist',[CareersController::class, 'isExist'])->name('isExist');

        Route::get('bank-accounts',[PaymentsController::class, 'indexBankAccounts'])->name('admin.bank_accounts');
        Route::get('bank-accounts-data', [PaymentsController::class, 'getDataBankAccounts'])->name('admin.bank_accounts.getData');
        Route::get('bank-accounts/add',[PaymentsController::class, 'addBankAccounts'])->name('admin.bank_accounts.add');
        Route::post('bank-accounts/save',[PaymentsController::class, 'saveBankAccounts'])->name('admin.bank_accounts.save');
        Route::get('bank-accounts/edit/{id}',[PaymentsController::class, 'editBankAccounts'])->name('admin.bank_accounts.edit');
        Route::get('bank-accounts/detail/{id}',[PaymentsController::class, 'detailBankAccounts'])->name('admin.bank_accounts.detail');
        Route::put('bank-accounts/update',[PaymentsController::class, 'updateBankAccounts'])->name('admin.bank_accounts.update');
        Route::delete('bank-accounts/delete',[PaymentsController::class, 'deleteBankAccounts'])->name('admin.bank_accounts.delete');
        Route::post('bank-accounts/change-status',[PaymentsController::class, 'changeStatusBankAccounts'])->name('admin.bank_accounts.changeStatus');

        Route::get('stores',[StoreController::class, 'index'])->name('admin.store');
        Route::get('stores-data',[StoreController::class, 'getData'])->name('admin.store.getData');
        Route::get('stores/add',[StoreController::class, 'add'])->name('admin.store.add');
        Route::post('store/insert',[StoreController::class, 'insert'])->name('admin.store.save');
        // Route::get('store/detail/{id}',[StoreController::class, 'detail'])->name('admin.store.detail');
        Route::get('stores/edit/{id}',[StoreController::class, 'edit'])->name('admin.store.edit');
        Route::put('stores/update/{id}',[StoreController::class, 'update'])->name('admin.store.update');
        Route::delete('store/delete',[StoreController::class, 'delete'])->name('admin.store.delete');

        Route::prefix('short-list')->group(function () {

            Route::get('/', [ShortListController::class, 'index'])->name('short-list.index');
            Route::get('/get-data', [ShortListController::class, 'getData'])->name('short-list.getData');
            Route::get('/add', [ShortListController::class, 'create'])->name('short-list.add');
            Route::get('/detail', [ShortListController::class, 'show'])->name('short-list.detail');
            Route::get('/edit/{id}', [ShortListController::class, 'edit'])->name('short-list.edit');
            Route::post('/insert', [ShortListController::class, 'store'])->name('short-list.insert');
            Route::put('/update/{id}', [ShortListController::class, 'update'])->name('short-list.update');
            Route::delete('/delete', [ShortListController::class, 'destroy'])->name('short-list.delete');

            Route::post('/short-item', [ShortListController::class, 'storeItem'])->name('add-short-item');
            Route::post('/short-item-update', [ShortListController::class, 'updateItem'])->name('update-short-item');
            Route::post('/short-item-generate', [ShortListController::class, 'generateItem'])->name('generate-short-item');
            Route::post('/short-item-delete', [ShortListController::class, 'deleteItem'])->name('delete-short-item');

            Route::post('/update-order', [ShortListController::class, 'updateOrder'])->name('short-list.updateOrder');
            Route::post('/change-status',[ShortListController::class, 'changeStatus'])->name('short-list.changeStatus');
            Route::post('/validationKode', [ShortListController::class, 'isExistKode'])->name('admin.short-list.isExistKode');
            Route::post('/validationItemKode', [ShortListController::class, 'isExistItemKode'])->name('admin.short-list-item.isExistKode');

        });

        Route::prefix('director-list')->group(function () {

            Route::get('/', [DirectorListController::class, 'index'])->name('director-list.index');
            Route::get('/get-data', [DirectorListController::class, 'getData'])->name('director-list.getData');
            Route::get('/add', [DirectorListController::class, 'create'])->name('director-list.add');
            Route::get('/detail', [DirectorListController::class, 'show'])->name('director-list.detail');
            Route::get('/edit/{id}', [DirectorListController::class, 'edit'])->name('director-list.edit');
            Route::post('/insert', [DirectorListController::class, 'store'])->name('director-list.insert');
            Route::put('/update/{id}', [DirectorListController::class, 'update'])->name('director-list.update');
            Route::delete('/delete', [DirectorListController::class, 'destroy'])->name('director-list.delete');

            Route::post('/director-item', [DirectorListController::class, 'storeItem'])->name('add-director-item');
            Route::post('/director-item-update', [DirectorListController::class, 'updateItem'])->name('update-director-item');
            Route::post('/director-item-generate', [DirectorListController::class, 'generateItem'])->name('generate-director-item');
            Route::post('/director-item-delete', [DirectorListController::class, 'deleteItem'])->name('delete-director-item');

        });

        Route::prefix('faq-list')->group(function () {

            Route::get('/', [FaqListController::class, 'index'])->name('faq-list.index');
            Route::get('/get-data', [FaqListController::class, 'getData'])->name('faq-list.getData');
            Route::get('/add', [FaqListController::class, 'create'])->name('faq-list.add');
            Route::get('/detail', [FaqListController::class, 'show'])->name('faq-list.detail');
            Route::get('/edit/{id}', [FaqListController::class, 'edit'])->name('faq-list.edit');
            Route::post('/insert', [FaqListController::class, 'store'])->name('faq-list.insert');
            Route::put('/update/{id}', [FaqListController::class, 'update'])->name('faq-list.update');
            Route::delete('/delete', [FaqListController::class, 'destroy'])->name('faq-list.delete');

            Route::post('/faq-item', [FaqListController::class, 'storeItem'])->name('add-faq-item');
            Route::post('/faq-item-update', [FaqListController::class, 'updateItem'])->name('update-faq-item');
            Route::post('/faq-item-generate', [FaqListController::class, 'generateItem'])->name('generate-faq-item');
            Route::post('/faq-item-delete', [FaqListController::class, 'deleteItem'])->name('delete-faq-item');

        });


        Route::prefix('our-partner')->group(function () {

            Route::get('/', [OurPartnerController::class, 'index'])->name('our-partner.index');
            Route::get('/get-data', [OurPartnerController::class, 'getData'])->name('our-partner.getData');
            Route::get('/add', [OurPartnerController::class, 'create'])->name('our-partner.add');
            Route::get('/detail', [OurPartnerController::class, 'show'])->name('our-partner.detail');
            Route::get('/edit/{id}', [OurPartnerController::class, 'edit'])->name('our-partner.edit');
            Route::post('/insert', [OurPartnerController::class, 'store'])->name('our-partner.insert');
            Route::put('/update/{id}', [OurPartnerController::class, 'update'])->name('our-partner.update');
            Route::delete('/delete', [OurPartnerController::class, 'destroy'])->name('our-partner.delete');

            Route::post('/our-group', [OurPartnerController::class, 'storeItem'])->name('add-our-group');
            Route::post('/our-group-update', [OurPartnerController::class, 'updateItem'])->name('update-our-group');
            Route::post('/our-group-generate', [OurPartnerController::class, 'generateItem'])->name('generate-our-group');
            Route::post('/our-group-delete', [OurPartnerController::class, 'deleteItem'])->name('delete-our-group');

        });
        Route::prefix('otorisasi')->group(function () {
            Route::get('/', [OtorisasiController::class, 'index'])->name('otorisasi.index');
            Route::get('/get-data', [OtorisasiController::class, 'getData'])->name('otorisasi.getData');
            Route::get('/add', [OtorisasiController::class, 'create'])->name('otorisasi.add');
            Route::get('/detail', [OtorisasiController::class, 'show'])->name('otorisasi.detail');
            Route::get('/edit/{id}', [OtorisasiController::class, 'edit'])->name('otorisasi.edit');
            Route::post('/insert', [OtorisasiController::class, 'store'])->name('otorisasi.insert');
            Route::put('/update/{id}', [OtorisasiController::class, 'update'])->name('otorisasi.update');
            Route::delete('/delete', [OtorisasiController::class, 'destroy'])->name('otorisasi.delete');

            Route::post('/otorisasi', [OtorisasiController::class, 'storeItem'])->name('add-otorisasi');
            Route::post('/otorisasi-update', [OtorisasiController::class, 'updateItem'])->name('update-otorisasi');
            Route::post('/otorisasi-generate', [OtorisasiController::class, 'generateItem'])->name('generate-otorisasi');
            Route::post('/otorisasi-delete', [OtorisasiController::class, 'deleteItem'])->name('delete-otorisasi');
        });
        Route::get('job_titles',[JobTitleController::class, 'index'])->name('admin.job_titles');
        Route::get('job_titles-data',[JobTitleController::class, 'getData'])->name('admin.job_titles.getData');
        Route::get('job_titles/add',[JobTitleController::class, 'add'])->name('admin.job_titles.add');
        Route::post('job_titles/insert',[JobTitleController::class, 'insert'])->name('admin.job_titles.insert');
        Route::get('job_titles/detail/{id}',[JobTitleController::class, 'detail'])->name('admin.job_titles.detail');
        Route::get('job_titles/edit/{id}',[JobTitleController::class, 'edit'])->name('admin.job_titles.edit');
        Route::put('job_titles/update/{id}',[JobTitleController::class, 'update'])->name('admin.job_titles.update');
        Route::delete('job_titles/delete',[JobTitleController::class, 'delete'])->name('admin.job_titles.delete');
        Route::post('job_titles/change-status',[JobTitleController::class, 'changeStatus'])->name('admin.job_titles.changeStatus');

    });
