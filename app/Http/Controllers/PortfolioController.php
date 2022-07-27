<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioBanner;
use App\Models\PortfoliothrSecondSection;
use App\Models\ServiceThirdSection;
use App\Models\ServiceFourthSection;
use App\Models\PortfolioSecondSection;
use App\Models\PortfolioThirdSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Exception;

use Illuminate\Foundation\Validation\ValidatesRequests;

class PortfolioController extends Controller
{
    public function createbannersection()
    {

        return view('admin.PortfolioSingle.portfolioBanner');
    }
    public function displaybannersection()
    {

        return view('admin.PortfolioSingle.portfoliobannerview')
            ->with('info', PortFolioBanner::orderBy('id', 'DESC')->first());;
    }
    public function addbannersection(Request $request)
    {
        $info = new PortFolioBanner;
        $request->validate([
            'title' => 'required',

        ]);
        $info->title = $request->title;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editbanner()
    {


        return view('admin.PortfolioSingle.editportfoliobanner')
            ->with('users', PortFolioBanner::orderBy('id', 'DESC')->first());
    }


    public function editport2ndsection(Request $request, $id)
    {
        $info = PortfolioSecondSection::find($id);
        return view('admin.PortfolioSingle.editportsection2', ['info' => $info]);
    }
    public function displayportfoliosecondsection()
    {
        $info = PortfolioSecondSection::all();
        return view('admin.PortfolioSingle.portsection2view', compact('info'));
    }
    public function createportfoliosecondsection()
    {

        return view('admin.PortfolioSingle.portfoliosection2');
    }
    public function addportfoliosecondsection(Request $request)
    {

        $info = new PortfolioSecondSection;
        $request->validate([
            'title'    => 'required',
            'description' => 'required',
            'catagory' => 'required',
            'client' => 'required',
            'date' => 'required',
            'website' => 'required',
            'image' => 'required',

        ]);
        $info->title = $request->title;
        $info->description = $request->description;
        $info->catagory = $request->catagory;
        $info->client = $request->client;
        $info->date = $request->date;
        $info->website = $request->website;
        if ($request->hasfile('image')) {
            $destination = 'images/gallery' . $info->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/gallery', $filename);
            $info->image = $filename;
        } else {
            unset($info->image);
        }
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function updateport2ndsection(Request $request)
    {
        $users = PortfolioSecondSection::find($request->id);
        $request->validate([
            'title'    => 'required',
            'description' => 'required',
            'catagory' => 'required',
            'client' => 'required',
            'date' => 'required',
            'website' => 'required',
            'image' => 'required',

        ]);
        $users->title = $request->title;
        $users->description = $request->description;
        $users->catagory = $request->catagory;
        $users->client = $request->client;
        $users->date = $request->date;
        $users->website = $request->website;
        if ($request->hasfile('image')) {
            $destination = 'images/gallery' . $users->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/gallery', $filename);
            $users->image = $filename;
        } else {
            unset($users->image);
        }
        $users->save();
        $info = PortfolioSecondSection::all();
        return view('admin.PortfolioSingle.portsection2view', compact('info'));
    }
    public function destroysection2($id)
    {
        $max = DB::table('portfoliosecondsections')->max('id');
        DB::delete('delete from  portfoliosecondsections where id = ?', [$id]);
        DB::statement("ALTER TABLE portfoliosecondsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function displayportfoliothirdsection()
    {

        $info = PortfolioThirdSection::all();
        return view('admin.PortfolioSingle.portsection3view', compact('info'));
    }
    public function displayportfoliofourthsection()
    {

        return view('admin.PortfolioSingle.portfoliosection4');
    }

    public function createportfoliothirdsection()
    {

        return view('admin.PortfolioSingle.portfoliosection3');
    }
    public function addportfoliothirdsection(Request $request)
    {

        $info = new PortfolioThirdSection;
        $request->validate([
            'title'    => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);
        $info->title = $request->title;
        $info->description = $request->description;
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
    public function editport3rdsection(Request $request, $id)
    {
        $info = PortfolioThirdSection::find($id);
        return view('admin.PortfolioSingle.editportsection3', ['info' => $info]);
    }
    public function updateport3rdsection(Request $request)
    {
        $users = PortfolioThirdSection::find($request->id);
        $request->validate([
            'title'    => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);
        $users->title = $request->title;
        $users->description = $request->description;


        if ($request->hasfile('image')) {
            $destination = 'images/gallery' . $users->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/gallery', $filename);
            $users->image = $filename;
        } else {
            unset($users->image);
        }
        $users->save();
        $info = PortfolioThirdSection::all();
        return view('admin.PortfolioSingle.portsection3view', compact('info'));
    }
    public function destroysection3($id)
    {
        $max = DB::table('portfoliothirdsections')->max('id');
        DB::delete('delete from  portfoliothirdsections where id = ?', [$id]);
        DB::statement("ALTER TABLE portfoliothirdsections AUTO_INCREMENT =  $max");
        return redirect::back();
    }

    public function viewport()
    {
        try {
            $second = PortfolioSecondSection::all();
            $third = PortfolioThirdSection::all();
            return View('portfolio-single')
                ->with(compact('second'))
                ->with(compact('third'))
                ->with('banner', PortFolioBanner::orderBy('id', 'DESC')->first());
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
