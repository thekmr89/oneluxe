<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DesignationContoller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Landing\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LIController;
use App\Http\Controllers\OurServicesController;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\Test\TestController;
use App\Mail\SendEnquiryMail;
use App\Models\File;
use App\Models\Inquiry;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AddPostController;
use App\Http\Controllers\TestimonialController;
//use App\Http\Controllers\HdfcPaymentController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| Created On : 15-05-2024
| Created By : Test
*/

// Route::get('/', function () {
//     return view('welcome');
// });


/**
 * | Route for testing 
 * | Used to test the view route 
 */
 
 
 Route::get('/session-test', function () {
    session(['count' => session('count', 0) + 1]);
    return session('count');
});
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/login');
})->name('logout');
Route::controller(TestController::class)->group(function () {
    Route::get('test1', 'testVersion');
});
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
/**
 * | Route for the dashboard 
 * | Use for the Dashboard sections
 */
 
Route::get('addpost', [AddPostController::class, 'hello']);
    Route::post('addpost', [AddPostController::class, 'blogadd'])->name('blogs.addd');
    Route::get('blog-lists', [BlogController::class, 'bloglist'])->name('blog.lists');
    Route::get('addtestimonial',[TestimonialController::class, 'Addtestimonial'])->name('add.testimonial');
    Route::post('testicreate', [TestimonialController::class, 'createtesti'])->name('testi.addd');
    Route::get('alltestimonial', [TestimonialController::class, 'alltesti'])->name('all.testimonial');

    Route::controller(FormController::class)->group(function () {
        Route::get('admin/inquiry', 'viewInquiry')->name('admin.inquiry');
        Route::post('/thank-you', 'saveInquiry')->name('admin.save.inquiry');

        Route::get('admin/subscription', 'viewSubscription')->name('admin.subscription');
        Route::post('admin/save/subscription', 'savesubscription')->name('admin.save.subscription');
    });
 
 
 
 
Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us','aboutUs');
    Route::get('destinations', 'ourDestination');
    Route::get('inspiring-experiences', 'littileInspiration');
    Route::get('pay-online', 'payonlinebill')->name('payment.process.get');
    Route::get('services', 'ourServic');
    Route::get('responsible-travel', 'responsibleTravel');
    Route::get('contact-us', 'contactUs');
    Route::get('privacy-policy', 'privacyPolicy');
    Route::get('hero', 'hero');
}); 
 
// BlogController routes
Route::controller(BlogController::class)->group(function () {
    Route::get('blog', 'index')->name('blog');
    Route::get('blog/{cat}', 'catblog')->name('catblog');
    Route::post('update/{id}', 'updateblog');
    Route::get('blog/{category}/{url}', 'blogDetail');
    Route::get('edit/{id}', 'blogEdit');
    Route::get('bdelete/{id}', 'blogdelete');
    //Route::get('delete/{id}', 'imagedelete');
    Route::get('/delete/{image}',   'delete')->name('image.delete');

});

// Other controllers
Route::get('addpost', [AddPostController::class, 'hello']);
Route::get('delete-testi/{recid}', [TestimonialController::class, 'testidelete']);




Route::controller(PaymentController::class)->group(function () {
    Route::post('payment/process','processPayments')->name('payments.process');
    Route::post('payment-success','successPayment');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('admin/transaction-list',[PaymentController::class, 'transaction_list'])->name('admin.transaction.list');
    Route::delete('admin/transaction-list/delete/{id}',[PaymentController::class, 'transaction_delete'])->name('admin.transaction.delete');

    // Route::controller(FormController::class)->group(function () {
    //     Route::get('admin/inquiry', 'viewInquiry')->name('admin.inquiry');
    //     Route::post('/thank-you', 'saveInquiry')->name('admin.save.inquiry');

    //     Route::get('admin/subscription', 'viewSubscription')->name('admin.subscription');
    //     Route::post('admin/save/subscription', 'savesubscription')->name('admin.save.subscription');
    // });

    Route::get('/admin-dashboard', function () {

        $pageData       = array();
        $inspiration    = File::where('file_type', 'photo')->count();
        $inq            = Inquiry::where('status', 1)->count();
        $subscription   = Subscription::where('status', 1)->count();
        $pageData["inspiration"]    = $inspiration;
        $pageData["inquire"]        = $inq;
        $pageData["subscription"]   = $subscription;

        return view('admin.dashboard', $pageData);
    })->name('dashboard');

    Route::controller(LandingPageController::class)->group(function () {
        Route::get('landing-page', 'landingPage');
        // Route::get('post', [PostController::class, 'hello']);
        Route::post('section1/update', 'sectionUpdate')->name('section1.update');
        Route::post('section2/update', 'sectionUpdate2')->name('section2.update');
        Route::post('section3/update', 'sectionUpdate3')->name('section3.update');
        Route::post('section4/update', 'sectionUpdate4')->name('section4.update');


        Route::post('section6/update', 'sectionUpdate6')->name('section6.update');
    });

    // Designation
    Route::controller(DesignationContoller::class)->group(function () {
        Route::get('admin/destination/{id?}', 'viewAdminDesignation')->name('admin.designation');
        // Route::post('admin/designation/update-section', 'updateSections')->name('admin.designation.updatesection');

        Route::post('destination/section1/update', 'sectionUpdate1')->name("destination.section1.update");
        Route::post('destination/section2/update', 'sectionUpdate2')->name("destination.section2.update");
        Route::post('destination/section3/update', 'sectionUpdate3')->name("destination.section3.update");
        Route::get('file/destination/delete/{id}', 'deleteFile');
        Route::get('file/destination/active/{id}', 'activeFile');
        Route::get('file/destination/deactive/{id}', 'deactiveFile');
    });


    Route::controller(AboutUsPageController::class)->group(function () {
        Route::get('aboutus-page', 'aboutusPage')->name("admin.aboutUs");

        Route::post('about/section1/update', 'sectionUpdate1')->name("about.section1.update");
        Route::post('about/section2/update', 'sectionUpdate2')->name("about.section2.update");
        Route::post('about/section3/update', 'sectionUpdate3')->name("about.section3.update");
        Route::post('about/section4/update', 'sectionUpdate4')->name("about.section4.update");
        Route::post('about/section5/update', 'sectionUpdate5')->name("about.section5.update");
        Route::post('about/section6/update', 'sectionUpdate6')->name("about.section6.update");
    });

    // Responsible Travel
    Route::controller(ResponsibleController::class)->group(function () {
        Route::get('admin/responsible', 'viewResponsible')->name('admin.responsible');
        Route::post('admin/responsible/update-section', 'updateSections')->name('admin.responsible.updatesection');
    });



    // Little Inspirations
    Route::controller(LIController::class)->group(function () {
        Route::get('little/view', 'littleView')->name('little.inspirations');
        Route::post('little/update-section', 'updateSection')->name('admin.little.updatesection');
        Route::post('little-uploadfile', 'uploadFile')->name('little.upload.file');
        Route::get('file/delete/{id}', 'deleteFile');
        Route::get('file/view-edit/{id}', 'editFile');
        Route::post('file/process-edit/{id}', 'editFileProcess')->name('little.update.file');
    });

    Route::controller(OurServicesController::class)->group(function () {
        Route::get('services/view/{id?}', 'viewService')->name('admin.service');
        Route::post('services/saveServices', 'saveServices')->name('admin.save.services');
        Route::post('services/saveServices1', 'updateSection1')->name('admin.save.services1');

        Route::get('multi-service/delete/{id}', 'deleteMultiService')->name('admin.delete.services');

        Route::get('multi-service/active/{id}', 'activeMultiService');
        Route::get('multi-service/deactive/{id}', 'deactiveMultiService');
    });


    // Use for the SCO
    Route::controller(CollectionController::class)->group(function () {
        Route::get('collection/destination', 'viewDestination')->name('admin.view.destination');
        Route::get('collection/seo', 'viewSeo')->name('admin.view.seo');
        Route::post('collection/save-seo', 'saveSeo')->name('admin.save.seo');
    });
    
    //use for payment...
    // Route::controller(HdfcPaymentController::class)->group(function () {
    //     Route::get('/payment', [HdfcPaymentController::class, 'showForm']);
    //     Route::post('/payment/process', [HdfcPaymentController::class, 'processPayment'])->name('payment.process');
    //     Route::post('/payment/response', [HdfcPaymentController::class, 'handleResponse'])->name('payment.response');
    // });
});
