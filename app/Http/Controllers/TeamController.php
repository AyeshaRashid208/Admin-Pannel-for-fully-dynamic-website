<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamBanner;
use App\Models\TeamSecondSection;
use App\Models\TeamThirdSection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use App\Models\HomeEightSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Exception;

class TeamController extends Controller
{
    public function createbannersection()
    {

        return view('admin.Team.teambanner');
    }
    public function displaybannersection()
    {

        return view('admin.Team.teambannerview')
            ->with('info', TeamBanner::orderBy('id', 'DESC')->first());;
    }
    public function addbannersection(Request $request)
    {
        $info = new TeamBanner;
        $request->validate([
            'title' => 'required',

        ]);
        $info->title = $request->title;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editbanner()
    {


        return view('admin.Team.editbanner')
            ->with('users', TeamBanner::orderBy('id', 'DESC')->first());
    }



    public function displayteam2ndsection()
    {

        $info = TeamSecondSection::all();
        return view('admin.Team.teamsection2view', compact('info'));
    }
    public function createteamsecondsection()
    {

        return view('admin.Team.teamsection2');
    }
    public function addteam2ndsection(Request $request)
    {
        $info = new TeamSecondSection;
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'designation' => 'required',


        ]);

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
    public function editteam2ndsection(Request $request, $id)
    {
        $info = TeamSecondSection::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.Team.editteamsection2', ['info' => $info]);
    }
    public function updateteam2ndsection(Request $request)
    {
        $users = TeamSecondSection::find($request->id);

        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'designation' => 'required',


        ]);

        $users->name = $request->name;
        $users->designation = $request->designation;

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
        $info = TeamSecondSection::all();
        return view('admin.Team.teamsection2view', compact('info'));
        // return view('admin.home.homesection2view',compact('info')); 
    }
    public function destroysection2($id)
    {
        $max = DB::table('teamsecondsections')->max('id');
        DB::delete('delete from  teamsecondsections where id = ?', [$id]);
        DB::statement("ALTER TABLE teamsecondsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function displayteamthirdsection()
    {

        return view('admin.Team.teamsection3');
    }
    public function addteam3rdsection(Request $request)
    {
        $info = new TeamThirdSection;
        $info->message = $request->message;
        $info->heading = $request->heading;
        $info->description = $request->description;

        $info->save();

        echo "Record inserted successfully.<br/>";
    }





    public function viewteam()
    {
        try {
            $second = TeamSecondSection::all();
            $third = HomeEightSection::all();
            return View('team')

                ->with('banner', TeamBanner::orderBy('id', 'DESC')->first())
                ->with(compact('second'))

                ->with(compact('third'));
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
