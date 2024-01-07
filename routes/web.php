<?php

use App\Helpers\MyCustomModifier;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Gateway\PayPalController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/image', function(){
    $manager = new ImageManager(new Driver());
    //read image in filepath
    $image = $manager->read('Image.jpg');

    $image->modify(new MyCustomModifier());
    $image->toPng()->save('image123.png');

    return "test123";

});

Route::get('/shop', [CartController::class,'shop'])->name('shop');
Route::get('/cart', [CartController::class,'cart'])->name('cart');
Route::get('/add-to-cart/{product_id}', [CartController::class,'addToCart'])->name('add-to-cart');

Route::get('/qty-increment/{rowId}', [CartController::class,'qTyIncrement'])->name('qTyIncrement');
Route::get('/qty-decrement/{rowId}', [CartController::class,'qTyDecrement'])->name('qTyDecrement');
Route::get('/remove-product/{rowId}', [CartController::class,'removeProduct'])->name('remove-product');

Route::get('/create-role', function(){
    //$role = Role::create(['name'=> 'publisher']);
    // $permission = Permission::create(['name' => 'edit articles']);
    // return $permission;

    // $user = auth()->user()->load(['roles','permissions']);
    // // $user->assignRole('writer');
    // $user->givePermissionTo('edit articles');

    $user = auth()->user();
    // $user->getPermissionNames();

    if($user->can('edit articles')){
        return "User has permission";
    }else{
        return "User dosen't have permission";
    }
});

Route::get('/posts', function(){

    $posts = Post::all();
    return view('posts.post',compact('posts'));

});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('github.login');

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();

    dd($user);
});

Route::post('/paypal/payment', [PayPalController::class,'payment'])->name('paypal.payment');
Route::get('/paypal/success', [PayPalController::class,'success'])->name('paypal.success');
Route::get('/paypal/cancel', [PayPalController::class,'cancel'])->name('paypal.cancel');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


