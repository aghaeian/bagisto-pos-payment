use Aghaeian\POSPayment\Http\Controllers\POSController;

Route::prefix('pos-payment')->group(function () {
    Route::post('/process/{bank}', [POSController::class, 'processPayment'])->name('pospayment.process');
});
