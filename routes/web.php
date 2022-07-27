<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioThreeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SingleBlogController;
Route::get("/",[HomeController::class,"viewhome"]);
Route::get("/home",[HomeController::class,"viewhome"]);
Route::get("/about",[AboutController::class,"viewabout"]);
Route::get("/team",[TeamController::class,"viewteam"]);
Route::get("/testimonial",[TestimonialController::class,"viewtest"]);
Route::get("/services",[HomeController::class,"viewservices"]);
Route::get("/portfolio",[PortfolioThreeController::class,"viewport"]);
Route::get("/portfolio-single",[PortfolioController::class,"viewport"]);
Route::get("/blog-list",[SingleBlogController::class,"viewbloglist"]);
Route::get("/contact",[Controller::class,"viewcontact"]);
Route::get("/blog-single",[SingleBlogController::class,"viewblog"]);
Route::get('/blog/{id}',[SingleBlogController::class,'showblog']);


Route::post('/comment',[SingleBlogController::class,'addcomment']);
Route::post("/upload_details",[Controller::class,"upload"]);
Route::get('/login',[AdminController::class,'index'])->name('login');
Route::post('/login',[AdminController::class,"makelogin"]);

Route::group(['middleware' => 'auth:admin'],function(){
Route::get("/dashboard",[AdminController::class,"dashboard"]);
Route::get("/logout",[AdminController::class,"logout"]);

//home banner
Route::get('/view_banner',[HomeController::class,'displaybanner']);
Route::get('/create_banner',[HomeController::class,'createbanner']);
Route::get('/edit_banner',[HomeController::class,'editbanner']);
Route::put('/add_banner',[HomeController::class,'addbanner']);
Route::post('/add_banner',[HomeController::class,'addbanner']);

//homesection2
Route::get('/view_homeservices',[HomeController::class,'displayhome2ndsection']);
Route::get('/create_homeservices',[HomeController::class,'createhome2ndsection']);
Route::get('/edit_homeservices/{id}',[HomeController::class,'edithome2ndsection']);
Route::post('/edit',[HomeController::class,'updatehome2ndsection']);
Route::get('del_homeservices/{id}',[HomeController::class,'destroy']);
Route::post('/add_homeservices',[HomeController::class,'addhome2ndsection']);

//homesection3
Route::get('/create_homefeatures',[HomeController::class,'createhome3rdsection']);
Route::post('/create_homefeatures',[HomeController::class,'addhome3rdsection']);
Route::get('/view_homefeatures',[HomeController::class,'displayhome3rdsection']);
Route::get('/edit_homefeatures/{id}',[HomeController::class,'edithome3rdsection']);
Route::post('/updatehomefeatures',[HomeController::class,'updatehome3rdsection']);
Route::get('del_homefeatures/{id}',[HomeController::class,'destroysection3']);


//homesection4
Route::get('/create_homeconsultation',[HomeController::class,'createhome4rthsection']);
Route::post('/create_homeconsultation',[HomeController::class,'addhome4rthsection']);
Route::get('/view_homeconsultation',[HomeController::class,'displayhome4rthsection']);
Route::get('/edit_homeconsultation/{id}',[HomeController::class,'edithome4rthsection']);
Route::post('/updatehomeconsultation',[HomeController::class,'updatehome4rthsection']);
Route::get('del_homeconsultation/{id}',[HomeController::class,'destroysection4']);

//homesection5
Route::get('/create_homeportfolio',[HomeController::class,'createhome5thsection']);
Route::post('/create_homeportfolio',[HomeController::class,'addhome5thsection']);
Route::get('/view_homeportfolio',[HomeController::class,'displayhome5thsection']);
Route::get('/edit_homeportfolio/{id}',[HomeController::class,'edithome5thsection']);
Route::post('/updatehomeportfolio',[HomeController::class,'updatehome5thsection']);
Route::get('del_homeportfolio/{id}',[HomeController::class,'destroysection5']);

//homesection6
Route::get('/create_homesection6',[HomeController::class,'createhome6thsection']);
Route::post('/create_homesection6',[HomeController::class,'addhome6thsection']);
Route::get('/view_homesection6',[HomeController::class,'displayhome6thsection']);
Route::get('/edit_homesection6/{id}',[HomeController::class,'edithome6thsection']);
Route::post('/updatehomesection6',[HomeController::class,'updatehome6thsection']);
Route::get('del_homesection6/{id}',[HomeController::class,'destroysection6']);

//homesection8

Route::get('/create_sponsers',[HomeController::class,'createhome8thsection']);
Route::post('/create_sponsers',[HomeController::class,'addhome8thsection']);
Route::get('/view_sponsers',[HomeController::class,'displayhome8thsection']);
Route::get('/edit_sponsers/{id}',[HomeController::class,'edithome8thsection']);
Route::post('/updatesponsers',[HomeController::class,'updatehome8thsection']);
Route::get('del_sponsers/{id}',[HomeController::class,'destroysection8']);

//homesection9

Route::get('/create_homesection7',[HomeController::class,'createhome7thsection']);
Route::post('/create_homesection7',[HomeController::class,'addhome7thsection']);
Route::get('/view_homesection7',[HomeController::class,'displayhome7thsection']);
Route::get('/edit_homesection7/{id}',[HomeController::class,'edithome7thsection']);
Route::post('/updatehomesection7',[HomeController::class,'updatehome7thsection']);
Route::get('del_homesection7/{id}',[HomeController::class,'destroysection7']);

//about banner
Route::get('/create_aboutbanner',[AboutController::class,'createaboutbannersection']);
Route::post('/create_aboutbanner',[AboutController::class,'addaboutbannersection']);
Route::get('/view_aboutbanner',[AboutController::class,'displayaboutbannersection']);
Route::get('/edit_aboutbanner',[AboutController::class,'editaboutbanner']);


//aboutsection2
Route::get('/create_aboutservices',[AboutController::class,'createabout2ndsection']);
Route::post('/add_aboutservices',[AboutController::class,'addabout2ndsection']);
Route::get('/view_aboutservices',[AboutController::class,'displayabout2ndsection']);
Route::get('/edit_aboutservices/{id}',[AboutController::class,'editabout2ndsection']);
Route::post('/updateaboutservices',[AboutController::class,'updateabout2ndsection']);
Route::get('del_aboutservices/{id}',[AboutController::class,'destroysection2']);




//aboutsection4
Route::get('/create_aboutexpertise',[AboutController::class,'createabout4rthsection']);
Route::post('/create_aboutexpertise',[AboutController::class,'addabout4rthsection']);
Route::get('/view_aboutexpertise',[AboutController::class,'displayabout4rthsection']);
Route::get('/edit_aboutexpertise/{id}',[AboutController::class,'editabout4rthsection']);
Route::post('/updateaboutexpertise',[AboutController::class,'updateabout4rthsection']);
Route::get('del_aboutexpertise/{id}',[AboutController::class,'destroysection4']);


//Team banner
Route::get('/create_teambanner',[TeamController::class,'createbannersection']);
Route::post('/create_teambanner',[TeamController::class,'addbannersection']);
Route::get('/view_teambanner',[TeamController::class,'displaybannersection']);
Route::get('/edit_teambanner',[TeamController::class,'editbanner']);



//teamsection2
Route::get('/create_team',[TeamController::class,'createteamsecondsection']);
Route::post('/create_team',[TeamController::class,'addteam2ndsection']);
Route::get('/view_team',[TeamController::class,'displayteam2ndsection']);
Route::get('/edit_team/{id}',[TeamController::class,'editteam2ndsection']);
Route::post('/updateteam',[TeamController::class,'updateteam2ndsection']);
Route::get('del_team/{id}',[TeamController::class,'destroysection2']);



//Testimonial banner
Route::get('/create_testimonialbanner',[TestimonialController::class,'createbannersection']);
Route::post('/create_testimonialbanner',[TestimonialController::class,'addbannersection']);
Route::get('/view_testimonialbanner',[TestimonialController::class,'displaybannersection']);
Route::get('/edit_testimonialbanner',[TestimonialController::class,'editbanner']);



//testimonialsection2
Route::get('/create_reviews',[TestimonialController::class,'createtestsecondsection']);
Route::post('/add_reviews',[TestimonialController::class,'addtest2ndsection']);
Route::get('/view_reviews',[TestimonialController::class,'displaytestsecondsection']);
Route::get('del_reviews/{id}',[TestimonialController::class,'destroysection2']);
Route::get('edit_reviews/{id}',[TestimonialController::class,'edittest2ndsection']);
Route::post('/updatereviews',[TestimonialController::class,'updatetest2ndsection']);


//Services banner
Route::get('/create_servicebanner',[HomeController::class,'createservicebannersection']);
Route::post('/create_servicebanner',[HomeController::class,'addservicebannersection']);
Route::get('/view_servicebanner',[HomeController::class,'displayservicebannersection']);
Route::get('/edit_servicebanner',[HomeController::class,'editservicebanner']);


//service Plan
Route::get('/create_monthlyplan',[HomeController::class,'createservice4rthsection']);
Route::post('/create_monthlyplan',[HomeController::class,'addservice4rthsection']);
Route::get('/view_monthlyplan',[HomeController::class,'displayservice4rthsection']);
Route::get('/view_yearlyplan',[HomeController::class,'displayserviceyearlysection']);
Route::get('/edit_plan/{id}',[HomeController::class,'editplan']);
Route::post('/updateplan',[HomeController::class,'updateplan']);

//Portfolio 3 banner
Route::get('/create_portfoliobanner',[PortfolioThreeController::class,'createbannersection']);
Route::post('/create_portfoliobanner',[PortfolioThreeController::class,'addbannersection']);
Route::get('/view_portfoliobanner',[PortfolioThreeController::class,'displaybannersection']);
Route::get('/edit_portfoliobanner',[PortfolioThreeController::class,'editbanner']);

//portfolio3section2
Route::get('/create_gallery',[PortfolioThreeController::class,'creategallery']);
Route::post('/create_gallery',[PortfolioThreeController::class,'addgallery']);
Route::get('/view_gallery',[PortfolioThreeController::class,'displaygallery']);
Route::get('/edit_gallery/{id}',[PortfolioThreeController::class,'editgallery']);
Route::post('/updategallery',[PortfolioThreeController::class,'updategallery']);
Route::get('del_gallery/{id}',[TestimonialController::class,'delgallery']);



//Blog List banner
Route::get('/create_bloglistbanner',[BlogController::class,'createbannersection']);
Route::post('/create_bloglistbanner',[BlogController::class,'addbannersection']);
Route::get('/view_bloglistbanner',[BlogController::class,'displaybannersection']);
Route::get('/edit_bloglistbanner',[BlogController::class,'editbanner']);




//Blog Single banner
Route::get('/create_blogbanner',[SingleBlogController::class,'createbannersection']);
Route::post('/create_blogbanner',[SingleBlogController::class,'addbannersection']);
Route::get('/view_blogbanner',[SingleBlogController::class,'displaybannersection']);
Route::get('/edit_blogbanner',[SingleBlogController::class,'editbanner']);

//Single blog create
Route::get('/create_blog',[SingleBlogController::class,'createblog']);
Route::POST('/create_blog',[SingleBlogController::class,'addblog']);
Route::get('/view_blog',[SingleBlogController::class,'displayblog']);
Route::get('/edit_blog/{id}',[SingleBlogController::class,'editblog']);
Route::post('/updateblog',[SingleBlogController::class,'updateblog']);
Route::get('del_blog/{id}',[SingleBlogController::class,'destroyblog']);

//catagory
Route::get('/create_catagory',[SingleBlogController::class,'createcatagory']);
Route::POST('/create_catagory',[SingleBlogController::class,'addcatagory']);
Route::get('/view_catagory',[SingleBlogController::class,'displaycatagory']);
Route::get('/edit_catagory/{id}',[SingleBlogController::class,'editcatagory']);
Route::post('/updatecatagory',[SingleBlogController::class,'updatecatagory']);
Route::get('del_catagory/{id}',[SingleBlogController::class,'destroycatagory']);

//tags
Route::get('/create_tags',[SingleBlogController::class,'createtags']);
Route::POST('/create_tags',[SingleBlogController::class,'addtags']);
Route::get('/view_tags',[SingleBlogController::class,'displaytags']);
Route::get('/edit_tags/{id}',[SingleBlogController::class,'edittags']);
Route::post('/updatetags',[SingleBlogController::class,'updatetags']);
Route::get('del_tags/{id}',[SingleBlogController::class,'destroytags']);
//Contact banner
Route::get('/create_contactbanner',[Controller::class,'createbannersection']);
Route::post('/create_contactbanner',[Controller::class,'addbannersection']);
Route::get('/view_contactbanner',[Controller::class,'displaybannersection']);
Route::get('/edit_contactbanner',[Controller::class,'editbanner']);

//comment


Route::get('/add_contactsection2',[Controller::class,'displaycontactsection2']);
//contact Details
Route::get('/create_contactdetails',[Controller::class,'createdetailsection']);    
Route::post('/create_contactdetails',[Controller::class,'adddetailsection']);    
Route::get('/view_contactdetails',[Controller::class,'displaydetailsection']);    
Route::get('/edit_contactdetails/{id}',[Controller::class,'editdetailsection']);
Route::post('/updatecontactdetails',[Controller::class,'updatedetailsection']);
Route::get('del_contactdetails/{id}',[Controller::class,'destroydetail']);
});