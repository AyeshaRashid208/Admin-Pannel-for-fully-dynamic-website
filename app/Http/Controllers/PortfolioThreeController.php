<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioThreeBanner;
use App\Models\PortfoliothrSecondSection;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Exception;

class PortfolioThreeController extends Controller
{
    public function createbannersection()
    {

        return view('admin.PortfolioThree.portfolio_banner');
    }
    public function displaybannersection()
    {

        return view('admin.PortfolioThree.portfoliobannerview')
            ->with('info', PortFolioThreeBanner::orderBy('id', 'DESC')->first());;
    }
    public function addbannersection(Request $request)
    {
        $info = new PortFolioThreeBanner;
        $request->validate([
            'title' => 'required',

        ]);
        $info->title = $request->title;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editbanner()
    {


        return view('admin.PortfolioThree.editportfoliobanner')
            ->with('users', PortFolioThreeBanner::orderBy('id', 'DESC')->first());
    }



    public function displaygallery()
    {

        $info = PortfoliothrSecondSection::all();
        return view('admin.PortfolioThree.portfolio3section2view', compact('info'));
    }

    public function creategallery()
    {

        return view('admin.PortfolioThree.portfolio3section2');
    }
    public function addgallery(Request $request)
    {
        $info = new PortfoliothrSecondSection;
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'catagory' => 'required',

        ]);
        $info->title = $request->title;
        $info->description = $request->description;
        $info->catagory = $request->catagory;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/gallery', $filename);
            $info->image = $filename;
        }
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editgallery(Request $request, $id)
    {
        $info = PortfoliothrSecondSection::find($id);
        return view('admin.PortfolioThree.editportfolio3section2', ['info' => $info]);
    }
    public function updategallery(Request $request)
    {
        $users = PortfoliothrSecondSection::find($request->id);
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'catagory' => 'required',

        ]);
        $users->title = $request->title;
        $users->description = $request->description;
        $users->catagory = $request->catagory;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/gallery', $filename);
            $users->image = $filename;
        }
        $users->save();

        $info = PortfoliothrSecondSection::all();
        return view('admin.PortfolioThree.portfolio3section2view', compact('info'));
    }
    public function delgallery($id)
    {
        $max = DB::table('portfoliogallerys')->max('id');
        DB::delete('delete from  portfoliogallerys where id = ?', [$id]);
        DB::statement("ALTER TABLE portfoliogallerys AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function displayportfolio3thirdsection()
    {

        return view('admin.PortfolioThree.portfolio3section3');
    }
    public function viewport()
    {
        try {
            $second = PortfoliothrSecondSection::all();
            $buisness = PortfoliothrSecondSection::where('catagory', 'buisness')->get();
            $finance = PortfoliothrSecondSection::where('catagory', 'finance')->get();
            $consulting = PortfoliothrSecondSection::where('catagory', 'consulting')->get();
            $insurance = PortfoliothrSecondSection::where('catagory', 'insurance')->get();
            $others = PortfoliothrSecondSection::where('catagory', 'others')->get();

            return View('portfolio-3-column')
                ->with(compact('second'))
                ->with(compact('buisness'))
                ->with(compact('finance'))
                ->with(compact('consulting'))
                ->with(compact('insurance'))
                ->with(compact('others'))
                ->with('banner', PortFolioThreeBanner::orderBy('id', 'DESC')->first());
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
