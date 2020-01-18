<?php

//User Route
Route::group(['namespace' => 'User'], function(){
Route::get('/', 'HomeController@index');
Route::get('post/{post?}', 'PostController@post')->name('post');
Route::get('members', 'AcaMemberController@index')->name('members');
Route::get('coursetimetable', 'CourseTimeTableController@index');
Route::get('courseadvertise', 'CourseAdvertiseController@index');
Route::resource('assignment', 'ResearchPostController');
Route::get('students', 'StudentListController@index');
Route::get('results', 'ExamResultController@index');
Route::get('registed/students', 'StudentRegistrationController@index');
Route::resource('history/department', 'HistoryDepartmentController');
//English Department Post Route
Route::resource('fileupload', 'MultiplUploadController');
//English Grammar Route
Route::resource('englishgrammar', 'EnglishGrammarController');
//English Essay Route
Route::resource('essayenglish', 'EnglishEssayController');
//SayadawPdf Route

Route::resource('sayadawpdf', 'SayadawPdfController');

//ComputerDepartment Route

Route::resource('computerdepartment', 'ComputerDepartmentController');

//ComputerLesson Route
Route::resource('computerlesson', 'ComputerLessonController');

//Php Lesson Route

Route::resource('phpprogramming', 'PhPLessonController');

// C++ Programming Route
Route::resource('cplugprogramming', 'CplugProgrammingController');
//Android Lesson Route
Route::resource('androidlesson', 'AndroidController');


Route::get('/downloadpdf', 'SayadawPdfController@download');
Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
Route::get('post/category/{category}', 'HomeController@category')->name('category');
});


//admin Route  // 'middleware' => 'auth:admin'
Route::group(['namespace' => 'Admin'], function(){
Route::get('admin/home', 'HomeController@index')->name('admin.home');

// Role Route
Route::resource('admin/role', 'RoleController');

// Permission Route
Route::resource('admin/permission', 'PermissionController');


// User Route
Route::resource('admin/user', 'UserController');

// Post Route
Route::resource('admin/post', 'PostController');

//Tag Route
Route::resource('admin/tag', 'TagController');

//Category Route
Route::resource('admin/category', 'CategoryController');

//Academic_Member_Route

Route::resource('academic/member', 'AcademicMemberController');

//MA Courses TimeTable Route

Route::resource('ma/first', 'MAFirstController');

// Course Advertise Route
Route::resource('course/advertise', 'CourseAdvertiseController');
//Research Post Route

Route::resource('student/research', 'ResearchPostController');

//Student List Route

Route::resource('student/list', 'StudentListController');

// MA Exam Result Route

Route::resource('exam/result', 'ExamResultController');

//Student Registration Route

Route::resource('students/registration', 'StudentRegistrationController');

//History Department Route 
Route::resource('department/history', 'HistoryDepartmentController');

//Englsih Department Post Route
Route::resource('file/upload', 'MultiplUploadController');
//Englsih Grammar Post Route

Route::resource('english/grammar', 'EnglishGrammarController');
//English Essay Route
Route::resource('english/essay', 'EnglishEssayController');
//SayadawPdf Route

Route::resource('sayadaw/pdf', 'SayadawPdfController');

//ComputerDepartment Route

Route::resource('department/computer', 'ComputerDepartmentController');

//Computer Lesson Route

Route::resource('computer/lesson', 'ComputerLessonController');

//Php Lesson Route

Route::resource('php/programming', 'PhPLessonController');

//C++ Programming Route
Route::resource('programming/cplug', 'CplugProgrammingController');
Route::resource('lesson/android', 'AndroidController');

//Admin Auth Routes
Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login');
});

//Text Speech Route
Route::get('/textspeech', function () {
    return view('user.TextSpeech.index');
});


/*Route::get('/', function () {
    return view('user.blog');
});

Route::get('/post', function () {
    return view('user.post');
})->name('post'); */

/*Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin');

Route::get('/admin/post', function () {
    return view('admin.posts.post');
});

Route::get('/admin/tag', function () {
    return view('admin.Tag.tag');
});

Route::get('/admin/category', function () {
    return view('admin.category.category');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
