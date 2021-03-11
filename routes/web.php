<?php

Route::get('error',function(){
    return view('error');
});

Route::group(['middleware' => ['auth','verified']],function(){

    
    Route::get('dashboard','DashboardController@dashboard');

    /*-----------------Signin & Signup-------------------*/
      Route::get('usertype/sign_in','Admin\SignController@sign_in');
      Route::get('usertype/registration','Admin\SignController@sign_up');
    /*-----------------Signin & Signup-------------------*/

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

             /*-----------------Exam-------------------*/
             Route::get('admin/exam','Admin\Exam_Controller@exam');
             Route::get('admin/exam/question/{unique_id}/{title}','Admin\Exam_Controller@question');
             Route::get('Admin/exam/result/{unique_id}/{title}', 'Admin\Exam_Controller@result');
             /*-----------------Exam-------------------*/
             /*-----------------------Question----------- */
             Route::get('admin/question','Admin\QuestionController@question');
             Route::get('admin/question/question/{unique_id}/{title}','Admin\QuestionController@question_view');
             /*-----------------------Question----------- */

             
    });


    Route::group(['middleware' => ['student']],function(){ 

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
         
          Route::get('teacher/question-edit/{unique_id}/{title}', 'Teacher\CreateExamController@question_edit');
          Route::post('teacher/exam/question_update', 'Teacher\CreateExamController@question_update');
        /*----------------create exam -----------------*/

        /*--------------- manage exam -----------------*/
          Route::get('teacher/manage_exam', 'Teacher\ManageExamController@manage_exam');
          Route::post('teacher/manage_exam/update', 'Teacher\ManageExamController@update');
          Route::get('teacher/manage_exam/delete{id}', 'Teacher\ManageExamController@delete');
        /*----------------manage exam -----------------*/

        /*----------------Exam -----------------*/
        Route::get('teacher/exam', 'Teacher\Exam_Controller@exam');
        Route::get('teacher/exam/question/{unique_id}/{title}','Teacher\Exam_Controller@question');
        Route::get('teacher/exam/result/{unique_id}/{title}','Teacher\Exam_Controller@result');
        /*----------------Exam -----------------*/

        /*---------------------Written info and question create--------------------------*/
        Route::get('teacher/written_question', 'Teacher\WrittenController@create_question');
        Route::post('teacher/written_question/create', 'Teacher\WrittenController@create');
        Route::post('teacher/written_question/question', 'Teacher\WrittenController@written_question_store');

        Route::get('teacher/written_question-edit/{quiz_id}/{title}', 'Teacher\WrittenController@written_question_edit');
        Route::post('teacher/written_question/question_update', 'Teacher\WrittenController@question_update');
        
        /*---------------------Written info and question create--------------------------*/

        /*---------------------Total Written and update--------------------------*/
        Route::get('teacher/total_question', 'Teacher\TotallWrittenController@total_question');
        Route::post('teacher/total_question/update', 'Teacher\TotallWrittenController@total_question_update');
        Route::get('teacher/total_question/delete{id}', 'Teacher\TotallWrittenController@total_question_delete');
        /*---------------------Total Written--------------------------*/

        /*----------------Total written qustion view -----------------*/
        Route::get('teacher/view_written_question', 'Teacher\WrittenQuestionView@view_written_question');
        Route::get('teacher/exam/written_question/{id}/{title}','Teacher\WrittenQuestionView@written_question');
        
        /*----------------Total written qustion view-----------------*/

     });
});

Auth::routes(['verify' => true]);

Route::get('/', 'Coverpage\CoverpageController@coverpage')->name('coverpage');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registration/form', 'RegistrationController@registration');

Route::get('/manage_profile', 'Admin\Manage_profileController@manage_profile');

Route::post('/update_profile','Admin\Manage_profileController@update_profile');


// Route::request('url','action')->name('route');

Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
