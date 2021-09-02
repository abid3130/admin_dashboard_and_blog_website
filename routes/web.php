<?php

use App\Http\Controllers\Admin_lte;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------
|-----------------------------------------------------------------------------
| Web Routes---------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//website
Route::prefix('article')->group(function () {
    Route::get('', [BlogController::class, 'allarticles'])->name('article');

    Route::get('delete/{id}', [BlogController::class, 'destroy'])->name('delete-article');

    Route::get('edit/{slug}', [BlogController::class, 'showArticles'])->name('edit-article');

    Route::get('show',[ArticlesController::class, 'showarticles'])->name('show-article');

    Route::post('update/{slug}', [BlogController::class, 'updatearticles'])->name('update-article');




});

Route::prefix('articles')->group(function () {

    Route::get('/', [ArticlesController::class, 'articlesList'])->name('total-articles');

    Route::get('/{article:slug}', [ArticlesController::class, 'show'])->name('article-detail');
    Route::post('/projects',[ProjectsController::class, 'storeProject'])->name('project.request');

});
//COMMENTS


Route::prefix('comments')->group(function () {

Route::post('store', [BlogController::class, 'storeComment'])->name('store-comments');
});


/*~
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// login and register routes
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');

Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// admin panel routes
Route::prefix('/admin')->group(function () {



    Route::get('/', [Admin_lte\AdminController::class,'dashboard'] )->name('admin.dashboard');

    Route::prefix('users')->middleware('auth')->group(function () {

        Route::get('detail/{id}',[Admin_lte\AdminController::class, 'detailUser'])->name('user.details');

        Route::get('create',[Admin_lte\AdminController::class, 'createUser'])->name('create-user');

        Route::post('store', [Admin_lte\AdminController::class,'storeUser'])->name('save-user');

        Route::get('/', [Admin_lte\AdminController::class,'users'] )->name('user.index');

        Route::get('edit/{id}', [Admin_lte\AdminController::class,'userEdit'] )->name('user.edit');

        Route::post('update', [Admin_lte\AdminController::class,'userUpdate'] )->name('user.update');

        Route::get('delete{id}', [Admin_lte\AdminController::class,'userDelete'] )->name('user.delete');
    });

    // admin panel articles routes
    Route::prefix('articles')->middleware('auth')->group(function () {

        Route::get('/', [Admin_lte\AdminController::class,'articles'] )->name('articles.index');

        Route::get('create',[Admin_lte\AdminController::class, 'createArticle'])->name('create-article');

        Route::post('store', [Admin_lte\AdminController::class,'storeArticle'])->name('save-article');

        Route::get('/details/{id}', [Admin_lte\AdminController::class,'articlesDetails'] )->name('article.details');

        Route::get('edit/{id}', [Admin_lte\AdminController::class,'editArticle'] )->name('article.edit');

        Route::post('update', [Admin_lte\AdminController::class,'updateArticle'] )->name('article.update');

        Route::get('delete{id}', [Admin_lte\AdminController::class,'deleteArticle'] )->name('article.delete');
    });

    // admin panel category routes
    Route::prefix('categories')->middleware('auth')->group(function () {


        Route::get('detail/{id}',[Admin_lte\AdminController::class, 'categoryDetails'])->name('category.details');

        Route::get('create',[Admin_lte\AdminController::class, 'createCategory'])->name('create-category');

        Route::post('store', [Admin_lte\AdminController::class,'storeCategory'])->name('save-category');

        Route::get('/', [Admin_lte\AdminController::class,'categories'] )->name('category.index');

        Route::get('edit/{id}', [Admin_lte\AdminController::class,'editCategory'] )->name('category.edit');

        Route::post('update', [Admin_lte\AdminController::class,'updateCategory'] )->name('category.update');

        Route::get('delete/{id}', [Admin_lte\AdminController::class,'deleteCategory'] )->name('category.delete');
    });

    // admin panel Comments  routes
    Route::prefix('comments')->middleware('auth')->group(function () {

        Route::get('detail/{id}',[Admin_lte\AdminController::class, 'detailComment'])->name('comment.details');

        Route::get('/', [Admin_lte\AdminController::class,'comments'] )->name('comment.index');

        Route::get('edit/{id}', [Admin_lte\AdminController::class,'editComment'] )->name('comment.edit');

        Route::post('update', [Admin_lte\AdminController::class,'updateComment'] )->name('comment.update');

        Route::get('delete{id}', [Admin_lte\AdminController::class,'deleteComment'] )->name('comment.delete');
    });
     // admin panel project  routes
    Route::prefix('projects')->middleware('auth')->group(function () {

        Route::get('detail/{id}',[Admin_lte\AdminController::class, 'detailProject'])->name('project.details');

        Route::get('/', [Admin_lte\AdminController::class,'projects'] )->name('project.index');

        Route::get('edit/{id}', [Admin_lte\AdminController::class,'editProject'] )->name('project.edit');

        Route::post('update', [Admin_lte\AdminController::class,'updateProject'])->name('project.update');

        Route::get('delete{id}', [Admin_lte\AdminController::class,'deleteProject'] )->name('project.delete');
    });



});
