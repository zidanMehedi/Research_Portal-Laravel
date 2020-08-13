<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'login@index')->name('rootLogin.index');
Route::post('/', 'login@verify');


Route::get('/login', 'login@index')->name('login');
Route::post('/login', 'login@verify');
Route::get('/student/registration', 'studentReg@index')->name('studentReg');
Route::post('/student/registration', 'studentReg@send');



Route::group(['middleware'=>['sess']],function(){

	//ADMIN

	Route::get('/admin/home', 'adminHome@index')->name('adminHome.index');


	Route::get('/admin/addFaculty', 'adminAddFaculty@index')->name('adminAddFaculty.index');
	Route::post('/admin/addFaculty', 'adminAddFaculty@facultyRegister');


	Route::get('/admin/activeFaculty', 'adminActiveFacultyList@index')->name('activeFacultyList.index');
	Route::get('/admin/inactiveFaculty', 'adminInactiveFacultyList@index')->name('inactiveFacultyList.index');
	Route::get('/admin/updateFaculty/{id}', 'adminUpdateFaculty@index')->name('adminUpdateFaculty.index');
	Route::post('/admin/updateFaculty/{id}', 'adminUpdateFaculty@facultyUpdate');


	Route::get('/admin/deleteFaculty/{id}', 'adminDeleteFaculty@index')->name('adminDeleteFaculty.index');
	Route::post('/admin/deleteFaculty/{id}', 'adminDeleteFaculty@facultyDelete');


	Route::get('/admin/blockFaculty/{id}', 'adminFacultyAccountManage@facultyBlock')->name('adminBlockFaculty');
	Route::post('/admin/blockFaculty/{id}', 'adminFacultyAccountManage@facultyBlockDone');


	Route::get('/admin/unblockFaculty/{id}', 'adminFacultyAccountManage@facultyUnblock')->name('adminUnblockFaculty');
	Route::post('/admin/unblockFaculty/{id}', 'adminFacultyAccountManage@facultyUnblockDone');


	Route::get('/admin/addStudent', 'adminAddStudent@index')->name('adminAddStudent.index');
	Route::post('/admin/addStudent', 'adminAddStudent@studentRegister');


	Route::get('/admin/activeStudent', 'adminActiveStudentList@index')->name('activeStudentList.index');
	Route::get('/admin/inactiveStudent', 'adminInactiveStudentList@index')->name('inactiveStudentList.index');


	Route::get('/admin/updateStudent/{id}', 'adminStudentAccountManage@studentUpdate')->name('adminUpdateStudent');
	Route::post('/admin/updateStudent/{id}', 'adminStudentAccountManage@studentUpdateDone');


	Route::get('/admin/blockStudent/{id}', 'adminStudentAccountManage@studentBlock')->name('adminBlockStudent');
	Route::post('/admin/blockStudent/{id}', 'adminStudentAccountManage@studentBlockDone');


	Route::get('/admin/deleteStudent/{id}', 'adminStudentAccountManage@studentDelete')->name('adminDeleteStudent');
	Route::post('/admin/deleteStudent/{id}', 'adminStudentAccountManage@studentDeleteDone');


	Route::get('/admin/unblockStudent/{id}', 'adminStudentAccountManage@studentUnblock')->name('adminUnblockStudent');
	Route::post('/admin/unblockStudent/{id}', 'adminStudentAccountManage@studentUnblockDone');


	Route::get('/admin/approveStudent', 'adminApproveStudentList@index')->name('approveStudentList.index');
	Route::get('/admin/studentProfile/{id}', 'adminApproveStudentList@studentProfile')->name('adminStudentProfile');
	Route::get('/admin/file/download/{id}', 'adminApproveStudentList@download')->name('adminStudentFileDownload');
	Route::get('/admin/studentApproval/accept/{id}', 'adminApproveStudentList@accept')->name('adminStudentApprovalAccept');
	Route::post('/admin/studentApproval/accept/{id}', 'adminApproveStudentList@acceptDone');
	Route::get('/admin/studentApproval/decline/{id}', 'adminApproveStudentList@decline')->name('adminStudentApprovalDecline');
	Route::post('/admin/studentApproval/decline/{id}', 'adminApproveStudentList@declineDone');


	Route::get('/admin/addSemester', 'adminAddSemester@index')->name('adminAddSemester.index');
	Route::post('/admin/addSemester', 'adminAddSemester@addSemester');


	Route::get('/admin/semesterList', 'adminSemesterList@index')->name('semesterList.index');
	Route::get('/admin/updateSemester/{id}', 'adminSemesterList@semesterUpdate')->name('adminUpdateSemester');
	Route::post('/admin/updateSemester/{id}', 'adminSemesterList@semesterUpdateDone');
	Route::get('/admin/deleteSemester/{id}', 'adminSemesterList@semesterDelete')->name('adminDeleteSemester');
	Route::post('/admin/deleteSemester/{id}', 'adminSemesterList@semesterDeleteDone');


	Route::get('/admin/addThesisType', 'adminAddThesisType@index')->name('adminAddThesisType.index');
	Route::post('/admin/addThesisType', 'adminAddThesisType@addThesisType');


	Route::get('/admin/thesisTypeList', 'adminThesisTypeList@index')->name('thesisTypeList.index');
	Route::get('/admin/updateThesisType/{id}', 'adminThesisTypeList@thesisTypeUpdate')->name('adminUpdateThesisType');
	Route::post('/admin/updateThesisType/{id}', 'adminThesisTypeList@thesisTypeUpdateDone');
	Route::get('/admin/deleteThesisType/{id}', 'adminThesisTypeList@thesisTypeDelete')->name('adminDeleteThesisType');
	Route::post('/admin/deleteThesisType/{id}', 'adminThesisTypeList@thesisTypeDeleteDone');


	Route::get('/admin/addDomain', 'adminAddDomain@index')->name('adminAddDomain.index');
	Route::post('/admin/addDomain', 'adminAddDomain@addDomain');


	Route::get('/admin/domainList', 'adminDomainList@index')->name('domainList.index');
	Route::get('/admin/updateDomain/{id}', 'adminDomainList@domainUpdate')->name('adminUpdateDomain');
	Route::post('/admin/updateDomain/{id}', 'adminDomainList@domainUpdateDone');
	Route::get('/admin/deleteDomain/{id}', 'adminDomainList@domainDelete')->name('adminDeleteDomain');
	Route::post('/admin/deleteDomain/{id}', 'adminDomainList@domainDeleteDone');


	Route::get('/admin/addTopic', 'adminAddTopic@index')->name('adminAddTopic.index');
	Route::post('/admin/addTopic', 'adminAddTopic@addTopic');


	Route::get('/admin/topicList', 'adminTopicList@index')->name('topicList.index');
	Route::get('/admin/updateTopic/{id}', 'adminTopicList@topicUpdate')->name('adminUpdateTopic');
	Route::post('/admin/updateTopic/{id}', 'adminTopicList@topicUpdateDone');
	Route::get('/admin/deleteTopic/{id}', 'adminTopicList@topicDelete')->name('adminDeleteTopic');
	Route::post('/admin/deleteTopic/{id}', 'adminTopicList@topicDeleteDone');


	Route::get('/admin/allocateExternal', 'adminAllocateExternal@index')->name('adminAllocateExternal.index');
	Route::post('/admin/allocateExternal', 'adminAllocateExternal@allocate');


	Route::get('/admin/thesisList', 'adminThesisList@index')->name('thesisList.index');
	Route::get('/admin/thesisList/groupDetails/{id}', 'adminThesisList@groupDetails')->name('groupDetails');


	Route::get('/admin/uploadFile', 'adminUploadFile@index')->name('adminUploadFile.index');
	Route::post('/admin/uploadFile', 'adminUploadFile@fileUpload');


	Route::get('/admin/changePassword', 'adminChangePassword@index')->name('adminChangePassword.index');
	Route::post('/admin/changePassword', 'adminChangePassword@change');


	Route::get('/logout', 'logout@index');




	//FACULTY

	Route::get('/home','facultyHome@index');

	Route::get('/profile','facultyHome@profileDetails');
	Route::post('/profile','facultyHome@updateProfile');

	Route::get('/changePassword','facultyHome@changePasswordView');
	Route::post('/changePassword','facultyHome@updatePassword');

	Route::get('/studentReg','FacultyStudentReg@studRegView');
	Route::post('/studentReg','FacultyStudentReg@addStudent');

	Route::get('/studentDetails','StudentDetails@index');
	Route::get('/studentApproval','StudentDetails@studentApproveView');

	Route::get('/studentApproval/approve/{id}','StudentDetails@approveStudent');


	Route::get('/topicAdd','Topic@index');
	
	Route::post('/topicAdd','Topic@addTopic');

	Route::get('/viewTopic','Topic@viewTopic');
	Route::get('/viewTopic/topicDetails/{id}','Topic@viewAbotTopic');

	Route::get('/studentDetails/search/{id}','StudentDetails@studentSearch');
	Route::get('/studentApproval/search/{id}','StudentDetails@inactiveStudentSearch');


	Route::get('/progressUpdate','StudentThesis@index');
	Route::get('/progressUpdate/update/{id}','StudentThesis@updateView');
	Route::post('/progressUpdate/update/{id}','StudentThesis@update');

	Route::get('/uploadFiles','FileUpload@index');
	
	Route::post('/uploadFiles','FileUpload@uploadFile');

	Route::get('/download/{id}','FileUpload@downloadVer');

	Route::get('/viewTopic/download/{id}','FileUpload@downloadUpFile');

	Route::get('/uploadFiles/sem/{id}','FileUpload@semWise');

	Route::get('/semesterDetails/view/{id}','Topic@ajaxSemWiseTopic');
	Route::get('/semesterDetails','Topic@SemWiseTopic');




	//STUDENT

	Route::get('/student/registration/credentials', 'studentReg@cred')->name('studentRegCred');

	Route::get('/student/home', 'studentHome@index')->name('studentHome');
	Route::post('/student/home', 'studentHome@update');

	Route::get('/student/research', 'studentResearch@index')->name('studentResearch');

	Route::get('/student/research/groupMembers', 'studentResearch@groupMembers')->name('groupMembers');

	Route::get('/student/availableTopics', 'studentTopicsWindow@index')->name('studentTopicsWindow');
	
	Route::get('/student/topicDetails/{id}', 'studentTopicsWindow@topicDetails')->name('topicDetails');
	Route::post('/student/topicDetails/{id}', 'studentTopicsWindow@apply');

	Route::get('/student/file/upload', 'studentFile@uploadIndex')->name('file.upload');
	Route::post('/student/file/upload', 'studentFile@upload');

	Route::get('/student/file/download', 'studentFile@downloadIndex')->name('file.download');
	Route::get('/student/file/download/{id}', 'studentFile@download')->name('file.downloadFile');

	Route::get('/student/passwordChange', 'studentPassword@index')->name('studentPassword');
	Route::post('/student/passwordChange', 'studentPassword@update');

	Route::get('/student/availableTopics/search/{value}', 'studentTopicsWindow@search')->name('topicSearch');


});