<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Employee.home');
});

Route::group(['middleware'=>['verifyUser']], function(){
    Route::get('/reportList', 'ReportsController@reportList');
    //ReportPart
    Route::get('/reportList/{id}', 'ReportsController@userReports');
    Route::get('/banAccount/{value}/{id}', 'ReportsController@banAccount');

    //Employee

    Route::get('/emplpyee/updatePassword', 'EmployeeController@updatePassPage');
    Route::post('/emplpyee/updatePassword', 'EmployeeController@updatePass');

    //Home
    Route::get('/logout', 'HomeZController@logOut');
    
    //Shop
    Route::get('/shop/list', 'CustomerController@shopList');
    Route::get('/shop/details/{id}/{licence}', 'CustomerController@shopVerify');
    Route::post('/shop/details/{id}/{licence}', 'CustomerController@shopVerifyConfirm');
    //Subscription
    Route::get('/user/subscription', 'CustomerController@subscription');
    Route::post('/user/subscription', 'CustomerController@subscriptionUpdate');

    Route::get('/user/subscription/list/{value}', 'CustomerController@SubscriptionUsersList');
    Route::get('/user/subscription/pieChart', 'CustomerController@pieChart');


    //Economic
    Route::get('/user/economic/{year}', 'EconomicController@earningData');
    //Route::get('/user/economic/{year}', 'EconomicController@earningDataByYear');
});
//Route::get('/emplpyee/add', 'EmployeeController@create');

Route::group(['middleware'=>['verifyUsrerOnlyAdmin']], function(){
    //Employee
    Route::get('/emplpyee/add', 'EmployeeController@create');
    Route::post('/emplpyee/add', 'EmployeeController@createSucess');

    Route::get('/emplpyee/print/{id}', 'EmployeeController@createSucessPage');
    Route::post('/emplpyee/print/{id}', 'EmployeeController@createSucessPrint');

    Route::get('/emplpyee/edit', 'EmployeeController@edit');
    Route::post('/emplpyee/edit', 'EmployeeController@editPage');

    Route::get('/emplpyee/list', 'EmployeeController@list');
    Route::get('/emplpyee/update/{id}', 'EmployeeController@editPage2');
    Route::get('/chnageEmployeeAccess/{value}/{id}', 'EmployeeController@chnageEmployeeAccess');
    Route::post('/emplpyee/list', 'EmployeeController@listSearch');
    Route::get('/emplpyee/salaryList', 'EmployeeV2Contorller@salaryList');
    Route::get('/employee/giveSalary/{id}', 'EmployeeV2Contorller@giveSalaryOption');
    Route::post('/employee/giveSalary/{id}', 'EmployeeV2Contorller@confirmSalary');
});

//HOme

Route::post('/bookSearch', 'HomeZController@bookSearcWithResults');
Route::get('/bookSearch', 'HomeZController@bookSearch');

Route::get('/login', 'HomeZController@login');
Route::post('/login', 'HomeZController@loginPost');


Route::get('/contactus', 'HomeZController@contactus');
Route::post('/contactus', 'HomeZController@contactusPost');

//book_mid_project

//Book_Mid_Project
Route::get('/book/user/login', function () {
    return view('Book_Mid_Project.login');
})->name('login');

Route::post('/book/user/login', [LoginController::class, 'BookProjectUserLogin'])->name('loginPage');

Route::get('/book/user/signup', function () {
    return view('Book_Mid_Project.signup');
})->name('signupPage');

Route::post('/book/user/signup', [UserController::class, 'UserRegistration']);

Route::get('/service/landing', function () {
    return view('Book_Mid_Project.landing_page.landing');
});

Route::get('/book/list', [BookController::class, 'getAllBooksForHome']);

Route::get('book/search/p', [BookController::class, 'SearchBooks']);

Route::get('/book/details/{id}', [BookController::class, 'BookById'])->name('BookById');
Route::get('/shop/details/{shopId}', [ShopController::class, 'ShopById'])->name('ShopById');


Route::middleware(['authorization'])->group(function () {

    Route::post('/book/details/{id}', [BookController::class, 'AddToCart']);

    //account_details
    Route::get('/user/account_details', [UserController::class, 'Account_Details'])->name('account_details');
    Route::post('/user/account_details', [UserController::class, 'EditProfile'])->name('account_details');

    //change password
    Route::post('/user/changepassword', [UserController::class, 'ChangePassword'])->name('ChangePassword');
    Route::post('/user/profile/picture', [UserController::class, 'ChangeProfiePicture'])->name('ChangeProfiePicture');

    //add to wish
    Route::get('/add/wishlist/{id}', [BookController::class, 'AddToWishList']);
    Route::get('/add/wishlist/force/{id}', [BookController::class, 'AddToWishListForce']);

    //remove wishitem
    Route::get('/remove/wishlist/{bookid}', [BookController::class, 'RemoveWishList']);

    //wish list (myaccount)
    Route::get('/user/wishlist', [BookController::class, 'GetWishList'])->name('WishList');

    Route::get('/book/search', function () {
        return view('Book_Mid_Project.search');
    });

    //follow unfollow shop
    Route::get('/follow/shop/{shopId}', [ShopController::class, 'FollowShop']);
    Route::get('/unfollow/shop/{shopId}', [ShopController::class, 'UnfollowShop']);
    Route::post('/shop/contact/{shopId}', [ShopController::class, 'ContactShop']);
    

    Route::get('/book/shopping/cart', [BookController::class, 'showCart']);

    //order list myaccount 
    Route::get('/user/myaccount/orders', [PurchaseController::class, 'OrderList'])->name('OrderList');

    //order by id
    Route::get('/user/order/{id}', [PurchaseController::class, 'GetOrderById'])->name('order_received_confirm');

    //make order
    Route::get('/book/checkout', [PurchaseController::class, 'CheckoutPage'])->middleware('BlankCart');
    Route::post('/book/checkout', [PurchaseController::class, 'MakeOrder'])->middleware('BlankCart');

    Route::get('/user/blankcart', function () {
        return view('Book_Mid_Project.my_account.empty_cart');
    });


    //review a book
    Route::post('/book/review/{id}', [ReviewController::class, 'ReviewABook'])->name('review_book');

    //user crud
    Route::get('/user/profile', function () {
        return view('Book_Mid_Project.user_profile');
    });

    Route::get('/user/myaccount', [UserController::class, 'MyAccount'])->name('Dashboard');
    Route::post('/user/myaccount', [UserController::class, 'EditProfile']);

    //address
    Route::get('/user/add/address', [AddressController::class, 'CreateAddress'])->name('CreateAddress');
    Route::post('/user/add/address', [AddressController::class, 'StoreAddress']);
    Route::get('/user/myaccount/address', [UserController::class, 'MyAddress'])->name('MyAddress');
    Route::get('/user/edit/address/{id}', [UserController::class, 'EditAddress']);
    Route::post('/user/edit/address/{id}', [UserController::class, 'UpdateAddress']);
    Route::get('/user/delete/address/{id}', [AddressController::class, 'DeleteAddress']);
    Route::get('/user/confDelete/address/{id}', [AddressController::class, 'ConfirmDelete']);
});



Route::get('/user/notify', function () {
    return view('Book_Mid_Project.notification');
});




///===================================================Shop Owner Part=====================================================================//


Route::get('/Back', function(){
    return view('ShopOwner');
}) ;
Route::get('/Catagory/Create', 'catagorycontroller@create');
Route::get('/Catagory/Create', 'catagorycontroller@create');
Route::post('/Catagory/Create', 'catagorycontroller@store');
Route::get('/AllCatagory', 'ShopOwnerController@allcatagory');



Route::get('/Catagory/edit/{Id}', 'catagoryController@catagory_edit');
Route::post('/Catagory/edit/{Id}', 'CatagoryController@catagory_update');



Route::get('/Catagory/delete/{Id}', 'catagoryController@catagory_delete') ;
Route::get('/Catagory/delete/{Id}', 'catagoryController@catagory_destroy') ;


//================Books==================//


Route::get('/book_list', 'BooksController@index') ;
Route::get('/Book/Create', 'BooksController@addbook');
Route::post('/Book/Create', 'BooksController@store');
Route::get('/Book/delete/{Id}', 'BooksController@book_destroy');

Route::get('/Book/detail/{Id}', 'BooksController@show');

Route::get('/Book/edit/{Id}', 'BooksController@book_edit');
Route::post('/Book/edit/{Id}', 'BooksController@book_update');
Route::get('/Search', 'BooksController@book_search');


//Route::get('/Catagory/details/{id}', 'ShopOwnerController@catagory_details') ;

//Route::get('/Catagory/edit/{Id}', 'ShopOwnerController@catagory_edit');
//Route::post('/Catagory/edit/{Id}', 'ShopOwnerController@catagory_update');
//Route::get('/Book/delete/{Id}', 'BooksController@book_destroy');

//Route::get('/Book/delete/{Id}', 'ShopOwnerController@catagory_delete') ;
//Route::get('/Book/delete/{Id}', 'ShopOwnerController@catagory_destroy') ;



//======================Shop Owner==================//
Route::get('/owner_list', 'OwnerController@index');
Route::get('/ShopOwner/Create', 'OwnerController@owner_create');
Route::post('/ShopOwner/Create', 'OwnerController@store');
Route::get('/ShopOwner/delete/{Id}', 'OwnerController@owner_destroy');
Route::get('/ShopOwner/edit/{Id}', 'OwnerController@owner_edit');
Route::post('/ShopOwner/edit/{Id}', 'OwnerController@owner_update');




//===============================Deal======================//

Route::get('/deal_list', 'DealController@index');

Route::get('/Deal/Create', 'DealController@deal_create');
Route::post('/Deal/Create', 'DealController@store');
Route::get('/Deal/delete/{Deal_Id}', 'DealController@deal_destroy');

Route::get('/Deal/edit/{Deal_Id}', 'DealController@deal_edit');
Route::post('/Deal/edit/{Deal_Id}', 'DealController@deal_update');



//==========================Blog====================//

Route::get('/blog_list', 'BlogController@index');
Route::get('/Blog/Create', 'BlogController@blog_create');
Route::post('/Blog/Create', 'BlogController@store');
Route::get('Blog/edit/{Id}', 'BlogController@edit_blog');
Route::post('Blog/edit/{Id}', 'BlogController@update_blog');




//=======================Order===============//
Route::get('/chart', 'OrderController@index');



//================================Login=====================//

Route::get('/ShopOwner', 'OwnerController@Shop_Owner_Page')->middleware( 'loginSession'); 
//Route::get('/login','logincontroller@login_page');
  Route::get('/login',function(){

    return view('Login.LoginPage');


  }) ;
Route::post('/login', 'logincontroller@verify');

Route::get('/logout', function (Request $request) {
    $request->session()->flush();
    return redirect('/login');
});

//====================================Registration======================//
Route::get('/Registration', 'RegistrationController@index');
Route::post('/Registration', 'RegistrationController@store');
Route::get('/BackToLogin',function(){

    return redirect('/login');
});



//====================Profile Settings==============//

Route::get('/user_list', 'ProfileController@index');
Route::get('/Profile/Create','ProfileController@create');
Route::post('/Profile/Create', 'ProfileController@store');
Route::get('/Profile/delete/{Id}', 'ProfileController@book_destroy');


Route::get('/Profile/edit/{Id}', 'ProfileController@profile_edit');
Route::post('/Profile/edit/{Id}', 'ProfileController@profile_update');



//======================Best Selling=================//
Route::get('/Bbook_list', 'bestsalecontroller@index');

Route::get('/BBook/Create', 'bestsalecontroller@addbook');
Route::post('/BBook/Create', 'bestsalecontroller@store');
Route::get('/BBook/detail/{Id}', 'bestsalecontroller@show');
Route::get('/BBook/delete/{Id}', 'bestsalecontroller@book_destroy');


Route::get('/BBook/edit/{Id}', 'bestsalecontroller@book_edit');
Route::post('/BBook/edit/{Id}', 'bestsalecontroller@book_update');
Route::get('/Search', 'bestsalecontroller@book_search');

