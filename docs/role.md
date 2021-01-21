// использование директивы Роли в шаблонизаторе blade
@role('project-manager')
    Project Manager Panel
@endrole
@role('web-developer')
    Web Developer Panel
@endrole

// проверка Разрешения пользователей (использование фасада Gate Laravel)
Gate::allows('manage-users');

// Использование middleware в routes/web.php
Route::group(['middleware' => 'role:web-developer'], function() {
    Route::get('/dashboard', function() {
        return 'Добро пожаловать, Веб-разработчик';
    });
});
