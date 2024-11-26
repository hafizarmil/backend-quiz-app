use App\Http\Controllers\UserController;

Route::prefix('users')->group(function() {
    Route::get('/', [UserController::class, 'index']); // Menampilkan semua users
    Route::post('/', [UserController::class, 'store']); // Menambah user
    Route::get('{id}', [UserController::class, 'show']); // Menampilkan user berdasarkan id
    Route::put('{id}', [UserController::class, 'update']); // Mengupdate user berdasarkan id
    Route::delete('{id}', [UserController::class, 'destroy']); // Menghapus user berdasarkan id
});
