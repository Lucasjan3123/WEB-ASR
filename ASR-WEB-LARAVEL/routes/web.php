<?php

use App\Http\Controllers\FilterCategories;
use App\Models\Comment;
use App\Models\kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeAsrController;
use App\Http\Controllers\Contact_SupportController;
use App\Http\Controllers\News_EventController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\adminArea;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\addfotoController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentNewsController;
use App\Http\Controllers\ShareButtonsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    //     return view('welcome');
    // });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
    
Route::get('/', [HomeAsrController::class, 'home'])->name("homes");

Route::prefix('Contact')->name('Contact.')->group(function () {
    Route::get('/NeedHelp', [Contact_SupportController::class, 'Contact'])->name("Needhelp");
    Route::get('/ContactUS', [Contact_SupportController::class, 'ContactUS'])->name("ContactUs");
    Route::get('/SendUSYourFeedback', [Contact_SupportController::class, 'Feedback'])->name("feedback");
});


    Route::get('/News&Event/News&Event', [News_EventController::class, 'index'])->name("news");
Route::get('/News&Event/blog', [News_EventController::class, 'blog'])->name('blog.show');
Route::get('/News&Event/Event&Activities', [News_EventController::class, 'event']);
Route::get('/News&Event/ShowBlog/{id}/{slug}', [News_EventController::class, 'ShowBlog'])->name('show.blog');
Route::get('/News&Event/Shownews/{id}', [News_EventController::class, 'Shownews']);
Route::get('/archive', [News_EventController::class, 'archive'])->name('blog.archive');
// Route::get('/post', [ShareButtonsController::class,'share']);
Route::get('/News&Event/ShowBlog/{id}/share/{platform}', [News_EventController::class , 'share'])->name('blog.share');

Route::prefix('AboutUs')->name('AboutUs.')->group(function () {

    Route::get('/Vision&Mission', [AboutUsController::class, 'vision'])->name("Vision");
    Route::get('/AboutUs', [AboutUsController::class, 'Profile'])->name("about");
    Route::get('/OurFinestWork', [AboutUsController::class, 'OurFinest'])->name("Finest");
    Route::get('/SturctureOrganizationASR', [AboutUsController::class, 'Structure'])->name("Structure");
    Route::get('/JoinVolunteer', [AboutUsController::class, 'Volunteer'])->name("joinVolunteer");
    Route::get('/JoinMember', [AboutUsController::class, 'home'])->name("Joinmember");

});

Route::get('/News&Event/blog', [News_EventController::class, 'blog']);
Route::resource('/comment', CommentController::class);
Route::post('/comment/{id}', [CommentController::class, 'store']);
Route::post('/commentNews/{id}', [commentNewsController::class, 'store']);
Route::delete('/commentNews/{id}', [commentNewsController::class, 'destroy']);
Route::get('/News&Event/blog/filter/{kategori_id}',[FilterCategories::class,'show'])->name('blog.filter');
Route::post('/Contact&Support/NeedHelp/sendEmail', [Contact_SupportController::class, 'sendMail'])->name("send.email");
Route::post('/Contact&Support/SendUSYourFeedback/sendEmail', [Contact_SupportController::class, 'send'])->name("email.send");
Route::post('/Subscribe', [Contact_SupportController::class, 'Subscribe'])->name("email.Subscribe");




// Route::resource('/AdminArea/comment', CommentController::class);

Route::middleware(['auth'])->group (function(){
    
    Route::get('/AdminArea/blog', [adminArea::class, 'blogAdmin']);
    Route::get('/AdminArea/blog/{id}/edit', [adminArea::class, 'edit']);

    Route::get('/AdminArea/blog/create', [News_EventController::class, 'create']);
    Route::post('/AdminArea/blog', [blogController::class, 'post']);
    Route::put('/AdminArea/blog/{id}', [blogController::class, 'update']);
    Route::get('/AdminArea/blog/{id}', [adminArea::class, 'Show']);

    Route::delete('/AdminArea/blog/{id}', [blogController::class, 'delete']);

    Route::resource('/AdminArea/news', newsController::class);
    Route::get('/addfoto/{id}', [addfotoController::class, 'addfoto']);
    // Route::post('/addfoto', [addfotoController::class, 'createFoto']);
    Route::put('/addfoto/{id}', [addfotoController::class, 'updateProfilePicture']);

    // Route::get('/AdminArea/home', [adminArea::class, 'home']);
    Route::get('/AdminArea/DaftarUser', [adminArea::class, 'daftarUser']);
    Route::get('/AdminArea/kategori', [kategoriController::class, 'index']);
    Route::post('/AdminArea/kategori', [kategoriController::class, 'create']);
    Route::put('/AdminArea/kategori/{id}', [kategoriController::class, 'Update'])->name('kategori.updated');
    Route::delete('/AdminArea/kategori/{id}', [kategoriController::class, 'delete'])->name('kategori.delete');
   
    Route::post('/AdminArea/tag', [TagController::class, 'create']);
    Route::put('/AdminArea/tag/{id}', [TagController::class, 'Update'])->name('tag.updated');
    Route::delete('/AdminArea/tag/{id}', [TagController::class, 'delete'])->name('tag.delete');
   


});












?>