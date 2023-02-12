<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\YearLevelController;
use App\Models\Grade;
use App\Models\YearLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::prefix('admin')->middleware('auth:sanctum')->group(function () {

// });
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('roles', RoleController::class);
});
Route::apiResource('users', UserController::class);
Route::apiResource('sections', SectionController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('sections', SectionController::class);
Route::apiResource('yearLevels', YearLevelController::class);
Route::apiResource('subjects', SubjectController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('grades', GradeController::class);

Route::post('students/{student}/subject', [StudentController::class, 'assignSubjects']);
// Route::put('year-levels/{yearLevel}', [YearLevelController::class, 'update']);
