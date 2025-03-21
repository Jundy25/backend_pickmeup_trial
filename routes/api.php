<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PasswordResetController;
use App\Models\Sanctum\PersonalAccessToken;
use App\Http\Controllers\EmailVerificationController;
use Laravel\Sanctum\Sanctum;



//USER MANAGEMENT
Route::prefix('/user')->group(function() {
    Route::post('/login', [AuthController::class, 'loginAccount']);
    Route::post('/loginMob', [AuthController::class, 'loginAccountMobile']);
    Route::post('/signup', [AuthController::class, 'createAccount']);
    Route::get('/check_token', [AuthController::class, 'validateToken'])->middleware(['auth:sanctum']);
    Route::patch('/me', [AuthController::class, 'accountUpdate'])->middleware(['auth:sanctum']);
    Route::post('/logout', [AuthController::class, 'logoutAccount'])->middleware(['auth:sanctum']);

    Route::get('/dashboard/counts', [DashboardController::class, 'getCounts']);
    Route::get('/riders', [RiderController::class, 'getRiders']);
    Route::get('/riders_req', [AdminController::class, 'getRidersRequirements']);

    Route::post('/upload', [RiderController::class, 'upload'])->middleware('auth:sanctum');
    Route::post('/update-rider-info', [RiderController::class, 'updateRiderInfo'])->middleware('auth:sanctum');
    Route::get('/requirement_photos/{rider_id}', [RiderController::class, 'getUploadedImages']);

    Route::post('/send-verification-code', [EmailVerificationController::class, 'sendVerificationCode']);
    Route::post('/verify-email-code', [EmailVerificationController::class, 'verifyCode']);
    
    Route::put('rider_available', [RiderController::class, 'updateAvailability']);
    Route::put('rider_online_status', [RiderController::class, 'updateOnlineStatus']);
    Route::put('update_rider_loc', [RiderController::class, 'updateRiderLocation']);
    Route::put('rider/{user_id}/status', [CustomerController::class, 'updateStatus']);
    Route::get('/available-rides', [RiderController::class, 'getAvailableRides']);
    Route::get('/apply/{userId}', [RiderController::class, 'getApplications']);
    Route::get('riderId/{user_id}', [RiderController::class, 'getRiderById']);
    Route::post('/apply_ride/{ride_id}', [RiderController::class, 'apply_ride']);
    Route::put('/decline_ride/{apply_id}', [RiderController::class, 'decline_ride']);
    Route::get('check-active-ride/{user_id}', [RiderController::class, 'checkActiveRide']);
    Route::put('/start_pakyaw/{ride_id}', [RiderController::class, 'startPakyaw']);
    Route::put('/start_ride/{ride_id}', [RiderController::class, 'start_ride']);
    Route::put('/finish_ride/{ride_id}', [RiderController::class, 'finish_ride']);

    Route::get('/customers', [CustomerController::class, 'getCustomers']);
    Route::get('customerId/{user_id}', [CustomerController::class, 'getCustomerById']);
    Route::post('/book', [CustomerController::class, 'book']);
    Route::post('/book_delivery', [BookController::class, 'book_delivery']);
    Route::post('/book_pakyaw', [BookController::class, 'book_pakyaw']);
    Route::get('check-existing-booking/{user_id}', [CustomerController::class, 'checkActiveRide']);
    Route::get('check-existing-pakyaw/{user_id}', [CustomerController::class, 'checkActiveRide']);
    Route::get('latest-available/{user_id}', [CustomerController::class, 'getLatestAvailableRide']);
    Route::get('latest-available2/{user_id}', [CustomerController::class, 'getLatestAvailableRide2']);
    Route::put('cancel_ride/{ride_id}', [CustomerController::class, 'cancelRide']);
    Route::put('/complete_ride/{ride_id}', [CustomerController::class, 'finish_ride']);
    Route::get('/riders_apply', [CustomerController::class, 'viewApplications']);
    Route::get('/riders_loc', [CustomerController::class, 'getRiderLocations']);
    Route::get('/rider_loc_id/{rider_id}', [CustomerController::class, 'getRiderLocationById']);
    Route::post('/apply_rider/{ride_id}', [CustomerController::class, 'apply_rider']);
    Route::post('/accept_rider/{ride_id}', [CustomerController::class, 'accept_rider']);
    Route::put('/request_start_pakyaw/{ride_id}', [CustomerController::class, 'request_startPakyaw']);
    

    Route::get('/admin', [AdminController::class, 'getAdmin']);
    Route::get('adminId/{user_id}', [AdminController::class, 'getAdminById']);
    Route::get('notifications', [AdminController::class, 'getNotifications']);
    Route::get('/riders_req', [AdminController::class, 'getRidersRequirements']);
    Route::put('admin/{user_id}/status', [AdminController::class, 'updateStatus']);
    Route::put('customer/{user_id}/status', [CustomerController::class, 'updateStatus']);
    Route::put('rider/{user_id}/status', [RiderController::class, 'updateStatus']);
    Route::put('/update_admin/{id}', [AdminController::class, 'updateAdmin']);
    Route::put('update_account/{userId}', [AdminController::class, 'updateProfile'])->middleware('auth:sanctum');
    Route::put('/notify_rider/{user_id}', [AdminController::class, 'notify_rider']);
    Route::put('/verify_rider/{user_id}', [AdminController::class, 'verify_rider']);
    Route::put('/reject_rider/{user_id}', [AdminController::class, 'reject_rider']);
    Route::get('/riders/locations', [AdminController::class, 'getRiderLocations']);
    Route::get('/view_fare', [AdminController::class, 'getFare']);
    Route::put('/update_fare', [AdminController::class, 'updateFare'])->middleware('auth:sanctum');
    // Route::middleware('auth:api')->put('/update_account/{userId}', [AdminController::class, 'updateProfile']);

    
    Route::get('/history', [HistoryController::class, 'index']);
    Route::get('/cus_history/{user_id}', [HistoryController::class, 'customerHistory']);
    Route::get('/rider_history/{user_id}', [HistoryController::class, 'riderHistory']);
    Route::get('/feedbacks', [FeedbackController::class, 'index']);
    Route::get('/reports', [FeedbackController::class, 'reports']);
    Route::post('/submit_feedback', [FeedbackController::class, 'submitFeedback']);
    Route::post('/submit_report', [FeedbackController::class, 'submitReport']);

    Route::post('/book-location', [RideController::class, 'saveBookLocation']);
    Route::post('/rider-location', [RideController::class, 'setRiderLocation']);


    Route::post('/password-reset/send-code', [PasswordResetController::class, 'sendResetCode']);
    Route::post('/password-reset/verify-code', [PasswordResetController::class, 'verifyResetCode']);
    Route::post('/password-reset/reset', [PasswordResetController::class, 'resetPassword']);
    


    Route::post('/broadcasting/auth', function (Request $request) {
        return Broadcast::auth($request);
    })->middleware('auth:api');
    
    // routes/channels.php
    Broadcast::channel('dashboard', function ($user) {
        return true; // Modify based on your authentication needs
    });

    Broadcast::channel('bookings', function ($user) {
        return true; // Modify based on your authentication needs
    });
});

