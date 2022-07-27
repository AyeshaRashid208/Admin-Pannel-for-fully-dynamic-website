<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

use App\Models\AboutBanner;
use App\Models\AboutSecondSection;
use App\Models\AboutThirdSection;
use App\Models\AboutFourthSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Exception;

class AboutController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function createaboutbannersection()
    {

        return view('admin.About.about_banner');
    }
    public function displayaboutbannersection()
    {

        // $info = AboutBanner::all();   
        return view('admin.About.about_bannerview')
            ->with('info', AboutBanner::orderBy('id', 'DESC')->first());;
    }
    public function addaboutbannersection(Request $request)
    {
        //$info = new banner;
        $info = new AboutBanner;
        $request->validate([
            'title' => 'required',

        ]);
        $info->title = $request->title;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editaboutbanner()
    {


        return view('admin.About.editaboutbanner')
            ->with('users', AboutBanner::orderBy('id', 'DESC')->first());
    }

    public function createabout2ndsection()
    {

        return view('admin.About.aboutsection2');
    }
    public function createabout4rthsection()
    {

        return view('admin.About.aboutsection4');
    }
    public function displayabout2ndsection()
    {

        $info = AboutSecondSection::all();
        return view('admin.About.aboutsection2view', compact('info'));
    }
    public function displayabout4rthsection()
    {

        $info = AboutFourthSection::all();
        return view('admin.About.aboutsection4view', compact('info'));
    }
    public function editabout2ndsection(Request $request, $id)
    {
        $info = AboutSecondSection::find($id);
        return view('admin.About.editaboutsection2', ['info' => $info]);
    }
    public function editabout4rthsection(Request $request, $id)
    {
        $info = AboutFourthSection::find($id);
        return view('admin.About.editaboutsection4', ['info' => $info]);
    }
    public function addabout2ndsection(Request $request)
    {
        $info = new AboutSecondSection;
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);
        $info->title = $request->title;
        $info->description = $request->description;
        $info->image = $request->image;
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function addabout4rthsection(Request $request)
    {
        $info = new AboutFourthSection;
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => 'required',

        ]);
        $info->name = $request->name;
        $info->description = $request->description;
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
    public function updateabout2ndsection(Request $request)
    {
        $users = AboutSecondSection::find($request->id);
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);
        $users->title = $request->title;
        $users->description = $request->description;
        $users->image = $request->image;
        $users->save();
        $info = AboutSecondSection::all();
        return view('admin.About.aboutsection2view', compact('info'));
    }
    public function updateabout4rthsection(Request $request)
    {
        $users = AboutFourthSection::find($request->id);
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => 'required',

        ]);
        $users->name = $request->name;
        $users->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $users->image = $filename;
        }
        $users->save();
        $info = AboutFourthSection::all();
        return view('admin.About.aboutsection4view', compact('info'));
    }
    public function destroysection2($id)
    {
        $max = DB::table('aboutsecondsections')->max('id');
        DB::delete('delete from  aboutsecondsections where id = ?', [$id]);
        DB::statement("ALTER TABLE aboutsecondsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function destroysection4($id)
    {
        $max = DB::table('aboutexpertisesections')->max('id');
        DB::delete('delete from  aboutexpertisesections where id = ?', [$id]);
        DB::statement("ALTER TABLE aboutexpertisesections AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function displayabout3rdsection()
    {

        return view('admin.About.aboutsection3');
    }
    public function addabout3rdsection(Request $request)
    {
        $info = new AboutThirdSection;
        $info->message = $request->message;
        $info->heading = $request->heading;
        $info->main_title = $request->main_title;
        $info->description = $request->description;
        $info->skill_one = $request->skill_one;
        $info->skill_two = $request->skill_two;
        $info->skill_three = $request->skill_three;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }


    public function viewabout()
    {
        try {
            $second = AboutSecondSection::all();
            $fourth = AboutFourthSection::all();
            return View('about')
                ->with('banner', AboutBanner::orderBy('id', 'DESC')->first())
                ->with(compact('second'))
                ->with(compact('fourth'));
                
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
