<?php

use Aghaeian\BagistoPosPayment\Http\Controllers\POSController;

Route::prefix('bagisto-pos-payment')->group(function () {
    Route::post('/process/{bank}', [POSController::class, 'processPayment'])->name('bagistopospayment.process');
});
