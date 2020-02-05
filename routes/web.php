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

Route::get('/', function () { return view('welcome'); });
Route::get('/index', function () { return view('welcome'); });

Route::get('/about-us', function () { return view('about-us'); });
Route::get('/about-us-overview', function () { return view('about-us-overview'); });
Route::get('/about-us-note-our-chairman', function () { return view('about-us-note-our-chairman'); });
Route::get('/about-us-our-strategy', function () { return view('about-us-our-strategy'); });
Route::get('/about-us-founding-spirit', function () { return view('about-us-founding-spirit'); });
Route::get('/about-us-history', function () { return view('about-us-history'); });
Route::get('/about-us-hse', function () { return view('about-us-hse'); });

Route::get('/experiences', function () { return view('experiences'); });
Route::get('/experiences-business-development', function () { return view('experiences-business-development'); });
Route::get('/experiences-drilling', function () { return view('/experiences-drilling'); });
Route::get('/experiences-geosciences', function () { return view('experiences-geosciences'); });
Route::get('/experiences-projects', function () { return view('experiences-projects'); });
Route::get('/experiences-marine', function () { return view('experiences-marine'); });
Route::get('/experiences-operations', function () { return view('experiences-operations'); });
Route::get('/experiences-supply-chain', function () { return view('experiences-supply-chain'); });
Route::get('/experiences-marketing', function () { return view('experiences-marketing'); });
Route::get('/experiences-it', function () { return view('experiences-it'); });

Route::get('/subsidiaries', function () { return view('subsidiaries'); });
Route::get('/subsidiaries-cameroon', function () { return view('subsidiaries-cameroon'); });
Route::get('/subsidiaries-colombia', function () { return view('subsidiaries-colombia'); });
Route::get('/subsidiaries-congo', function () { return view('subsidiaries-congo'); });
Route::get('/subsidiaries-drc', function () { return view('subsidiaries-drc'); });
Route::get('/subsidiaries-gabon', function () { return view('subsidiaries-gabon'); });
Route::get('/subsidiaries-guatemala', function () { return view('subsidiaries-guatemala'); });
Route::get('/subsidiaries-mexico', function () { return view('subsidiaries-mexico'); });
Route::get('/subsidiaries-peru', function () { return view('subsidiaries-peru'); });
Route::get('/subsidiaries-trinidad-and-tobago', function () { return view('subsidiaries-trinidad-and-tobago'); });
Route::get('/subsidiaries-tunisia', function () { return view('subsidiaries-tunisia'); });
Route::get('/subsidiaries-turkey', function () { return view('subsidiaries-turkey'); });
Route::get('/subsidiaries-uk', function () { return view('subsidiaries-uk'); });
Route::get('/subsidiaries-vietnam', function () { return view('subsidiaries-vietnam'); });

Route::get('/trading', function () { return view('trading'); });
Route::get('/trading-west-africa', function () { return view('trading-west-africa'); });
Route::get('/trading-latin-america', function () { return view('trading-latin-america'); });
Route::get('/trading-nw-europe-med-asia', function () { return view('trading-nw-europe-med-asia'); });

Route::get('/innovation', function () { return view('innovation'); });
Route::get('/innovation-la-noumbi-fpso', function () { return view('innovation-la-noumbi-fpso'); });
Route::get('/innovation-flng', function () { return view('innovation-flng'); });
Route::get('/innovation-eov', function () { return view('innovation-eov'); });
Route::get('/innovation-decommissioning', function () { return view('innovation-decommissioning'); });

Route::get('/csr', function () { return view('csr'); });
Route::get('/csr-education-and-culture', function () { return view('csr-education-and-culture'); });
Route::get('/csr-employment-and-courses', function () { return view('csr-employment-and-courses'); });
Route::get('/csr-infrastructure-and-energy', function () { return view('csr-infrastructure-and-energy'); });
Route::get('/csr-health', function () { return view('csr-health'); });
Route::get('/csr-environment', function () { return view('csr-environment'); });

Route::get('/careers', function () { return view('careers'); });

Route::get('/perencostories', function () { return view('perencostories'); });




