use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // This returns the default welcome view
});

// Or you can return a simple string directly
Route::get('/hello', function () {
    return 'Hello, World!';
});
