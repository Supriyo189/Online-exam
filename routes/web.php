<?php

Route::get('error',function(){
    return view('error');
});

Route::group(['middleware' => 'auth'],function(){

    
    Route::get('/','DashboardController@dashboard');

    Route::group(['middleware' => 'admin'],function(){
             /*---------------- Department -----------------*/
            Route::get('admin-department','Admin\DepartmentController@index');
            Route::post('admin-department/store','Admin\DepartmentController@store');
            Route::get('admin-department/delete{id}','Admin\DepartmentController@delete');
            //Route::get('/admin-department/update_page/{id}','Admin\DepartmentController@update_page');
            Route::post('admin-department/update','Admin\DepartmentController@update');
            /*---------------- Department -----------------*/

            /*-----------------Exam type-------------------*/ 
            Route::get('admin-examtype','Admin\ExamtypeController@examtype');
            Route::post('admin-examtype/store','Admin\ExamtypeController@store');
            Route::post('admin-examtype/update','Admin\ExamtypeController@update');
            Route::get('admin-examtype/delete{id}','Admin\ExamtypeController@delete');
            /*-----------------Exam type-------------------*/
            
            /*-----------------Users-------------------*/
            Route::get('admin-usertype/teacher','Admin\UsersController@teacher');
            Route::get('admin-usertype/student','Admin\UsersController@student');
            Route::get('admin-usertype/admin','Admin\UsersController@admin');
            /*-----------------Users-------------------*/

            /*-----------------Question-------------------*/
            Route::get('admin/question','Admin\QuestionController@question');
            /*-----------------Question-------------------*/

             /*-----------------Result-------------------*/
            Route::get('admin/result','Admin\ResultController@result');
             /*-----------------Result-------------------*/

             /*-----------------Signin & Signup-------------------*/
            Route::get('usertype/sign_in','Admin\SignController@sign_in');
            Route::get('usertype/registration','Admin\SignController@sign_up');
             /*-----------------Signin & Signup-------------------*/
    });


    Route::group(['middleware' => 'student'],function(){ 

        /*----------------Give Exam -----------------*/
        Route::get('student/give_exam','Student\GiveExamController@give_exam')->name('give_exam');
        Route::get('student/exam', 'Student\GiveExamController@question');
        Route::post('student/participation', 'Student\GiveExamController@participation');
        Route::post('student/answer/submit', 'Student\GiveExamController@store_answer');
        /*----------------Give Exam -----------------*/

        /*---------------- See Results -----------------*/
        Route::get('student/see_results','Student\SeeResultsController@see_results');
        /*---------------- See Results -----------------*/
     });

    Route::group(['middleware' => 'teacher'], function(){

        /*--------------- create exam -----------------*/
          Route::get('teacher/create_exam', 'Teacher\CreateExamController@create_exam');
          Route::post('teacher/exam/create', 'Teacher\CreateExamController@create');
          Route::post('teacher/exam/question', 'Teacher\CreateExamController@question_store');
          Route::get('teacher/question-ready', 'Teacher\CreateExamController@question_ready');
        /*----------------create exam -----------------*/

        /*--------------- manage exam -----------------*/
          Route::get('teacher/manage_exam', 'Teacher\ManageExamController@manage_exam');
          Route::post('teacher/manage_exam/update', 'Teacher\ManageExamController@update');
          Route::get('teacher/manage_exam/delete{id}', 'Teacher\ManageExamController@delete');
        /*----------------manage exam -----------------*/

        /*--------------- manage student -----------------*/
          Route::get('teacher/manage_student', 'Teacher\ManageStudentController@manage_student');
        /*----------------manage student -----------------*/

        /*----------------manage student -----------------*/
        Route::get('teacher/manage_question', 'Teacher\ManageQuestionController@manage_question');
        /*----------------manage student -----------------*/

     });
});

Auth::routes();

Route::get('/coverpage', 'Coverpage\CoverpageController@coverpage');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registration/form', 'RegistrationController@registration');

Route::get('/manage_profile', 'Admin\Manage_profileController@manage_profile');

Route::post('/update_profile','Admin\Manage_profileController@update_profile');


// Route::request('url','action')->name('route');


