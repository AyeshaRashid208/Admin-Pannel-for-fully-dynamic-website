<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use App\Models\Banner;
use App\Models\BlogSingle;
use Exception;
use App\Models\TestimonialSecondSection;
use Illuminate\Support\Facades\DB;
use App\Models\HomeSecondSection;
use App\Models\ServiceBanner;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
use App\Models\ServiceSecondSection;
use App\Models\HomeThirdSection;
use App\Models\HomeFourthSection;
use App\Models\HomeFifthSection;
use App\Models\HomeSixthSection;
use App\Models\HomeSevenSection;
use App\Models\HomeEightSection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    public function addbanner(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $info = new Banner;
        $info->title = $request->title;
        $info->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image = $filename;
        }
        $info->save();
        return view('admin.home.banner')
            ->with('users', Banner::orderBy('id', 'DESC')->first());
    }

    public function updatebanner(Request $request, $id)
    {
        $users = Banner::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $users->title = $request->input('title');
        $users->description = $request->input('description');
        if ($request->hasfile('image')) {
            $destination = 'images/resource' . $users->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $users->image = $filename;
        }
        $users->update();
        return view('admin.home.banner')
            ->with('users', Banner::orderBy('id', 'DESC')->first());
    }
    public function editbanner()
    {

        return view('admin.home.editbanner')
            ->with('users', Banner::orderBy('id', 'DESC')->first());
    }

    public function displaybanner()
    {

        return view('admin.home.banner')
            ->with('users', Banner::orderBy('id', 'DESC')->first());
    }

    public function createbanner()
    {

        return View('admin.home.bannerview');
    }

    //service banner
    public function createservicebannersection()
    {

        return view('admin.Services.services_banner');
    }
    public function displayservicebannersection()
    {

        return view('admin.Services.servicebannerview')
            ->with('info', ServiceBanner::orderBy('id', 'DESC')->first());;
    }
    public function addservicebannersection(Request $request)
    {
        $info = new ServiceBanner;
        $request->validate([
            'title' => 'required',
          
        ]);
        $info->title = $request->title;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editservicebanner()
    {


        return view('admin.Services.editbanner')
            ->with('users', ServiceBanner::orderBy('id', 'DESC')->first());
    }


    public function displayhome2ndsection()
    {
        $info = HomeSecondSection::all();
        return view('admin.home.homesection2view', compact('info'));
    }
    public function createhome2ndsection()
    {

        return view('admin.home.homesection2');
    }
    public function updatehome2ndsection(Request $request)
    {
        $users = HomeSecondSection::find($request->id);
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);
        $users->title = $request->title;
        $users->description = $request->description;
        $users->icon = $request->icon;
        $users->save();
        $info = HomeSecondSection::all();
        return view('admin.home.homesection2view', compact('info'));
    }
    public function addhome2ndsection(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $info = new HomeSecondSection;
        $info->title = $request->title;
        $info->description = $request->description;
        $info->icon = $request->icon;
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function edithome2ndsection(Request $request, $id)
    {
        $info = HomeSecondSection::find($id);
        return view('admin.home.edithomesection2', ['info' => $info]);
    }
    public function destroy($id)
    {
        $max = DB::table('homesecondsections')->max('id');
        DB::delete('delete from  homesecondsections where id = ?', [$id]);
        DB::statement("ALTER TABLE homesecondsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }

    public function createhome3rdsection()
    {

        return view('admin.home.homesection3');
    }
    public function displayhome3rdsection()
    {
        $info = HomeThirdSection::all();
        return view('admin.home.homesection3view', compact('info'));
    }
    public function edithome3rdsection(Request $request, $id)
    {
        $info = HomeThirdSection::find($id);
        return view('admin.home.edithomesection3', ['info' => $info]);
    }
    public function addhome3rdsection(Request $request)
    {
        $info = new HomeThirdSection;
        $request->validate([
            'name'    => 'required',
            'description' => 'required',
            'detail' => 'required',
            'title_one' => 'required',
            'desc_one' => 'required',
            'title_two' => 'required',
            'desc_two' => 'required',
            'title_thr' => 'required',
            'desc_thr' => 'required',
            'image' => 'required',
        ]);
        $info->name = $request->name;
        $info->description = $request->description;
        $info->detail = $request->detail;
        $info->title_one = $request->title_one;
        $info->desc_one = $request->desc_one;
        $info->title_two = $request->title_two;
        $info->desc_two = $request->desc_two;
        $info->title_thr = $request->title_thr;
        $info->desc_thr = $request->desc_thr;
        if ($request->hasfile('image')) {
            $destination = 'images/resource' . $info->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image = $filename;
        } else {
            unset($info->image);
        }

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function updatehome3rdsection(Request $request)
    {
        $users = HomeThirdSection::find($request->id);
        $request->validate([
            'name'    => 'required',
            'description' => 'required',
            'detail' => 'required',
            'title_one' => 'required',
            'desc_one' => 'required',
            'title_two' => 'required',
            'desc_two' => 'required',
            'title_thr' => 'required',
            'desc_thr' => 'required',
            'image' => 'required',
        ]);
        $users->name = $request->name;
        $users->description = $request->description;
        $users->detail = $request->detail;
        $users->title_one = $request->title_one;
        $users->desc_one = $request->desc_one;
        $users->title_two = $request->title_two;
        $users->desc_two = $request->desc_two;
        $users->title_thr = $request->title_thr;
        $users->desc_thr = $request->desc_thr;
        if ($request->hasfile('image')) {
            $destination = 'images/resource' . $users->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $users->image = $filename;
        } else {
            unset($users->image);
        }

        $users->save();
        $info = HomeThirdSection::all();
        return view('admin.home.homesection3view', compact('info'));
    }
    public function destroysection3($id)
    {
        $max = DB::table('homethirdsections')->max('id');
        DB::delete('delete from  homethirdsections where id = ?', [$id]);
        DB::statement("ALTER TABLE homethirdsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }


    //4rth section

    public function createhome4rthsection()
    {

        return view('admin.home.homesection4');
    }
    public function displayhome4rthsection()
    {

        $info = HomeFourthSection::all();
        return view('admin.home.homesection4view', compact('info'));
    }
    public function edithome4rthsection($id)
    {

        $info = HomeFourthSection::find($id);
        return view('admin.home.edithomesection4', ['info' => $info]);
    }
    public function addhome4rthsection(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);
        $info = new HomeFourthSection;
        $info->icon = $request->icon;
        $info->title = $request->title;
        $info->description = $request->description;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function updatehome4rthsection(Request $request)
    {
        $users = HomeFourthSection::find($request->id);
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);
        $users->title = $request->title;
        $users->description = $request->description;
        $users->icon = $request->icon;
        $users->save();
        $info = HomeFourthSection::all();
        return view('admin.home.homesection4view', compact('info'));
    }
    public function destroysection4($id)
    {
        $max = DB::table('homefourthsections')->max('id');
        DB::delete('delete from  homefourthsections where id = ?', [$id]);
        DB::statement("ALTER TABLE homefourthsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }

    //fifth section

    public function createhome5thsection()
    {

        return view('admin.home.homesection5');
    }
    public function displayhome5thsection()
    {
        $info = HomeFifthSection::all();
        return view('admin.home.homesection5view', compact('info'));
    }
    public function edithome5thsection(Request $request, $id)
    {
        $info = HomeFifthSection::find($id);
        return view('admin.home.edithomesection5', ['info' => $info]);
    }
    public function addhome5thsection(Request $request)
    {
        $info = new HomeFifthSection;
        $request->validate([
            'image' => 'required',

        ]);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image = $filename;
        }
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function updatehome5thsection(Request $request)
    {
        $info = HomeFifthSection::find($request->id);
        $request->validate([
            'image' => 'required',


        ]);
        if ($request->hasfile('image')) {
            $destination = 'images/resource' . $info->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image = $filename;
        } else {
            unset($info->image);
        }
        $info->save();
        $info = HomeFifthSection::all();
        return view('admin.home.homesection5view', compact('info'));
    }
    public function destroysection5($id)
    {
        $max = DB::table('homefifthsections')->max('id');
        DB::delete('delete from  homefifthsections where id = ?', [$id]);
        DB::statement("ALTER TABLE homefifthsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }


    public function createhome6thsection()
    {

        return view('admin.home.homesection6');
    }
    public function edithome6thsection(Request $request, $id)
    {
        $info = HomesixthSection::find($id);
        return view('admin.home.edithomesection6', ['info' => $info]);
    }
    public function updatehome6thsection(Request $request)
    {
        $users = HomeSixthSection::find($request->id);

        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'reviews' => 'required',

        ]);

        $users->name = $request->name;
        $users->designation = $request->designation;
        $users->reviews = $request->reviews;
        if ($request->hasfile('image')) {
            $destination = 'images/resource' . $users->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $users->image = $filename;
        } else {
            unset($users->image);
        }
        $users->save();
        $info = HomeSixthSection::all();
        return view('admin.home.homesection6view', compact('info'));
    }

    public function displayhome6thsection()
    {
        $info = HomeSixthSection::all();
        return view('admin.home.homesection6view', compact('info'));
    }
    public function addhome6thsection(Request $request)
    {
        $info = new HomeSixthSection;
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'reviews' => 'required',

        ]);
        $info->reviews = $request->reviews;
        $info->name = $request->name;
        $info->designation = $request->designation;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image = $filename;
        }
        $info->save();


        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function destroysection6($id)
    {
        $max = DB::table('homesixthsections')->max('id');
        DB::delete('delete from  homesixthsections where id = ?', [$id]);
        DB::statement("ALTER TABLE homesixthsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }

    public function createhome8thsection()
    {

        return view('admin.home.homesection8');
    }
    public function addhome8thsection(Request $request)
    {
        $info = new HomeEightSection;
        $request->validate([
            'image' => 'required',

        ]);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/clients', $filename);
            $info->image = $filename;
        }
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function displayhome8thsection()
    {
        $info = HomeEightSection::all();
        return view('admin.home.homesection8view', compact('info'));
    }
    public function edithome8thsection(Request $request, $id)
    {
        $info = HomeEightSection::find($id);
        return view('admin.home.edithomesection8', ['info' => $info]);
    }
    public function updatehome8thsection(Request $request)
    {
        $info = HomeEightSection::find($request->id);
        $request->validate([
            'image' => 'required',
        ]);
        if ($request->hasfile('image')) {
            $destination = 'images/clients' . $info->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/clients', $filename);
            $info->image = $filename;
        } else {
            unset($info->image);
        }
        $info->save();
        $info = HomeEightSection::all();
        return view('admin.home.homesection8view', compact('info'));
    }
    public function destroysection8($id)
    {
        $max = DB::table('homeeightsections')->max('id');
        DB::delete('delete from  homeeightsections where id = ?', [$id]);
        DB::statement("ALTER TABLE homeeightsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }


    //homesection9
    public function createhome7thsection()
    {

        return view('admin.home.homesection7');
    }


    public function displayhome7thsection()
    {

        $info = HomeSevenSection::all();
        return view('admin.home.homesection7view', compact('info'));
    }
    public function addhome7thsection(Request $request)
    {
        $info = new HomeSevenSection;
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'author_image' => 'required',
            'time' => 'required',
            'title' => 'required',

        ]);


        $info->title = $request->title;
        $info->name = $request->name;
        $info->time = $request->time;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image = $filename;
        }
        if ($request->hasfile('author_image')) {
            $file = $request->file('author_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->author_image = $filename;
        }
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function edithome7thsection(Request $request, $id)
    {
        $info = HomeSevenSection::find($id);
        return view('admin.home.edithomesection7', ['info' => $info]);
    }
    public function updatehome7thsection(Request $request)
    {
        $info = HomeSevenSection::find($request->id);

        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'author_image' => 'required',
            'time' => 'required',
            'title' => 'required',

        ]);
        $info->title = $request->title;
        $info->name = $request->name;
        $info->time = $request->time;
        if ($request->hasfile('image')) {
            $destination = 'images/clients' . $info->image;
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/clients', $filename);
            $info->image = $filename;
        }
        if ($request->hasfile('author_image')) {
            $file = $request->file('author_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->author_image = $filename;
        }
        $info->save();
        $info = HomeSevenSection::all();
        return view('admin.home.homesection7view', compact('info'));
    }
    public function destroysection7($id)
    {
        $max = DB::table('homesevensections')->max('id');
        DB::delete('delete from  homesevensections where id = ?', [$id]);
        DB::statement("ALTER TABLE homesevensections AUTO_INCREMENT =  $max");
        return redirect::back();
    }



    public function createservice4rthsection()
    {

        return view('admin.Services.servicesection4');
    }
    public function addservice4rthsection(Request $request)
    {
        $info = new ServiceThirdSection;
        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'one' => 'required',
            'two' => 'required',
            'three' => 'required',
            'four' => 'required',

        ]);
        $info->name  = $request->name;
        $info->description = $request->description;
        $info->price = $request->price;
        $info->one = $request->one;
        $info->two = $request->two;
        $info->three = $request->three;
        $info->four = $request->four;
        $info->save();
        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function displayservice4rthsection()
    {

        $info = ServiceThirdSection::where('hidden_id', 'package-monthly')->get();
        return view('admin.Services.servicesection4view', compact('info'));
    }
    public function displayserviceyearlysection()
    {

        $info = ServiceThirdSection::where('hidden_id', 'package-yearly')->get();
        return view('admin.Services.servicesection4view', compact('info'));
    }
    public function editplan(Request $request, $id)
    {
        $info = ServiceThirdSection::find($id);
        return view('admin.Services.editplan', ['info' => $info]);
    }
    public function updateplan(Request $request)
    {
        $info = ServiceThirdSection::find($request->id);

        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'one' => 'required',
            'two' => 'required',
            'three' => 'required',
            'four' => 'required',

        ]);

        $info->name  = $request->name;
        $info->description = $request->description;
        $info->price = $request->price;
        $info->one = $request->one;
        $info->two = $request->two;
        $info->three = $request->three;
        $info->four = $request->four;

        $info->save();
        $info = ServiceThirdSection::all();
        return view('admin.Services.servicesection4view', compact('info'));
    }



    public function viewhome()
    {   
        try{
            $second = HomeSecondSection::all();
        $third = HomeThirdSection::all();
        $trial = HomeThirdSection::where('id', 1)->value('name');
        $tri = HomeThirdSection::where('id', 2)->value('name');
        $tria = HomeThirdSection::where('id', 3)->value('name');
        $value = HomeThirdSection::where('id', 1)->value('hidden_id');
        $val = HomeThirdSection::where('id', 2)->value('hidden_id');
        $valu = HomeThirdSection::where('id', 3)->value('hidden_id');
        $fourth = HomeFourthSection::all();
        $fifth = HomeFifthSection::all();
        $sixth = TestimonialSecondSection::Paginate(3);
        // $seven = HomeSevenSection::all();
        $eight = HomeEightSection::all();
        $seven = BlogSingle::Paginate(3);

        return View('index')
            ->with('users', Banner::orderBy('id', 'DESC')->first())
            ->with(compact('second'))
            ->with(compact('third'))
            ->with(compact('trial'))
            ->with(compact('tria'))
            ->with(compact('value'))
            ->with(compact('val'))
            ->with(compact('valu'))
            ->with(compact('tri'))
            ->with(compact('fourth'))
            ->with(compact('fifth'))
            ->with(compact('sixth'))
            ->with(compact('seven'))
            ->with(compact('eight'));
    }
    catch(Exception $e){
    
       return $e->getMessage();
    
    }
        
    }


    public function viewservices()
    {

        try{
        $second = HomeSecondSection::all();
        $monthly = ServiceThirdSection::where('hidden_id', 'package-monthly')->get();
        $yearly = ServiceThirdSection::where('hidden_id', 'package-yearly')->get();
        $fourth = ServiceThirdSection::all();
        $eight = HomeEightSection::all();
        return View('services')
            ->with('banner', ServiceBanner::orderBy('id', 'DESC')->first())
            ->with(compact('fourth'))
            ->with(compact('second'))
            ->with(compact('monthly'))
            ->with(compact('yearly'))
            ->with(compact('eight'));
        }
        catch(Exception $e){

            return $e->getMessage();
         
        }
    }
}
