<?php

use Illuminate\Support\Facades\Route;

// Authentication
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Logout;

// Livewire Structure
use App\Livewire\Roles\Owner\Pages\Dashboard\OwnerDashboard\DashboardOwner;
use App\Livewire\Roles\Owner\Pages\Background\MoreInfo\CompanyInfo;
use App\Livewire\Roles\Owner\Pages\Background\MoreInfo\VisitHomePage;
use App\Livewire\Roles\Owner\Pages\CreateBackup\Backup\BackupDatabase;
use App\Livewire\Roles\Owner\Pages\Dashboard\ManageAssistant\Assistants;
use App\Livewire\Roles\Owner\Pages\Invoice\TenantsInvoice\InvoiceList;
use App\Livewire\Roles\Owner\Pages\Invoice\TenantsInvoice\ViewInvoice;
use App\Livewire\Roles\Owner\Pages\Manage\Beds\BedAssignment;
use App\Livewire\Roles\Owner\Pages\Manage\Beds\ManageBeds;
use App\Livewire\Roles\Owner\Pages\Manage\Room\RoomManagement;
use App\Livewire\Roles\Owner\Pages\Manage\Tenant\TenantsInfo;
use App\Livewire\Roles\Owner\Pages\Notification\Notice\NoticeBoard;
use App\Livewire\Roles\Owner\Pages\Notification\Requests\TenantsRequests;
use App\Livewire\Roles\Owner\Pages\Notification\Sms\SmsConfiguration;

use App\Livewire\Roles\Owner\Pages\Reports\Collectibles\CollectiblesMonth;
use App\Livewire\Roles\Owner\Pages\Reports\Collectibles\CollectiblesTenants;
use App\Livewire\Roles\Owner\Pages\Reports\OtherReports\Deductions;
use App\Livewire\Roles\Owner\Pages\Reports\Payment\MonthlyPayment;
use App\Livewire\Roles\Owner\Pages\Reports\Payment\PaymentList;
use App\Livewire\Roles\Owner\Pages\UserManagement\Logs\UserActivityLogs;
use App\Livewire\Roles\Owner\Pages\UserManagement\ManageUsers\Users;


// Authentication

Route::get('/logout', Logout::class)->name('logout');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');


// Route::get('/dashboard-owner', function () {
//     return view('/dashboard-owner'); // Create a dashboard-owner.blade.php
// })->middleware('auth')->name('dashboard-owner');

// Home dashboard
Route::get('/dashboard-owner', DashboardOwner::class)->name('dashboard-owner');
Route::get('/permission-management', Assistants::class)->name('permission-management');

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Assistants Dashboard

Route::get('/custom-permission', Assistants::class)->name('custom-permission');


// Room Management
Route::get('/room-management', RoomManagement::class)->name('room-management');
Route::get('/bed-assignment', BedAssignment::class)->name('bed-assignment');
Route::get('/manage-beds', ManageBeds::class)->name('manage-beds');
Route::get('/tenants-information', TenantsInfo::class)->name('tenants-information');

//  Invoice
Route::get('/utility-bills', Deductions::class)->name('utility-bills');
Route::get('/view-invoice', ViewInvoice::class)->name('view-invoice');
Route::get('/invoice-list', InvoiceList::class)->name('invoice-list');

// Notification
Route::get('/requests', TenantsRequests::class)->name('requests');
Route::get('/sms-configuration', SmsConfiguration::class)->name('sms-configuration');
Route::get('/notice-board', NoticeBoard::class)->name('notice-board');

// Genarate Reports
Route::get('/collectibles-month', CollectiblesMonth::class)->name('collectibles-month');
Route::get('/collectibles-tenants', CollectiblesTenants::class)->name('collectibles-tenants');
Route::get('/monthly-payment', MonthlyPayment::class)->name('monthly-payment');
Route::get('/payment-list', PaymentList::class)->name('payment-list');



// Create Accounts
// Route::get('/register-tenants', UserActivityLogs::class)->name('register-tenants');
// Route::get('/new-assistant', Users::class)->name('new-assistant');

// Background
Route::get('/company-info', CompanyInfo::class)->name('company-info');
Route::get('/visit', VisitHomePage::class)->name('visit');

// User Management
Route::get('/activity-logs', UserActivityLogs::class)->name('activity-logs');
Route::get('/users', Users::class)->name('users');

// Create Backup
Route::get('/backup-database', BackupDatabase::class)->name('backup-database');



