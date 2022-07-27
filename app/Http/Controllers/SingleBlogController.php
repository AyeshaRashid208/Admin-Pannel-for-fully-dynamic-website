<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Carbon;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;
use App\Models\BlogSingle;
use App\Models\BlogSecondSection;
use App\Models\BlogListBanner;
use App\Models\BlogCatagory;
use App\Models\BlogTags;
use App\Models\Comment;
use App\Models\BlogBanner;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Exception;

class SingleBlogController extends Controller
{
    public function createbannersection()
    {

        return view('admin.BlogList.blog_banner');
    }
    public function displaybannersection()
    {

        return view('admin.BlogList.blog_bannerview')
            ->with('info', BlogBanner::orderBy('id', 'DESC')->first());;
    }
    public function addbannersection(Request $request)
    {
        $info = new BlogBanner;
        $request->validate([
            'title' => 'required',

        ]);
        $info->title = $request->title;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editbanner()
    {


        return view('admin.BlogList.editblogbanner')
            ->with('users', BlogBanner::orderBy('id', 'DESC')->first());
    }
    public function createblog()
    {

        return view('admin.BlogSingle.blog');
    }
    public function createtags()
    {

        return view('admin.BlogSingle.tags');
    }
    public function createcatagory()
    {

        return view('admin.BlogSingle.catagory');
    }

    public function addcatagory(Request $request)
    {
        $info = new BlogCatagory;
        $request->validate([
            'catagory' => 'required',

        ]);
        $info->catagory = $request->catagory;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function addtags(Request $request)
    {
        $info = new BlogTags;
        $request->validate([
            'tag' => 'required',

        ]);
        $info->tag = $request->tag;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function addcomment(Request $request)
    {
        $info = new Comment;
        $request->validate([
            'message' => 'required',
            'website' => 'required',
            'username' => 'required',
            'email' => 'required',

        ]);
        $info->message = $request->message;
        $info->website = $request->website;
        $info->username = $request->username;
        $info->email = $request->email;

        $info->save();

        return redirect::back()->with('message', 'Comment Added successfully');
    }
    public function addblog(Request $request)
    {
        $info = new BlogSingle;
        $request->validate([
            'date'    => 'required',
            'name'    => 'required',
            'title'    => 'required',
            'one'    => 'required',
            'fimage' => 'required',
            'image_one' => 'required',
            'image_two' => 'required',
            'catagory' => 'required',
            'tag_one' => 'required',


        ]);

        $info->date = $request->date;
        $info->name = $request->name;
        $info->title = $request->title;
        $info->one = $request->one;
        $info->two = $request->two;
        $info->heading = $request->heading;
        $info->three = $request->three;
        $info->quote = $request->quote;
        $info->catagory = $request->catagory;

        $info->tag_one = $request->tag_one;
        $info->tag_two = $request->tag_two;
        $info->tag_three = $request->tag_three;
        $info->tag_four = $request->tag_four;

        if ($request->hasfile('fimage')) {
            $file = $request->file('fimage');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->fimage = $filename;
        }
        if ($request->hasfile('image_one')) {
            $file = $request->file('image_one');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image_one = $filename;
        }
        if ($request->hasfile('image_two')) {
            $file = $request->file('image_two');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $info->image_two = $filename;
        }
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function displayblog()
    {

        $info = BlogSingle::all();
        return view('admin.BlogSingle.blogview', compact('info'));
    }
    public function displaycatagory()
    {

        $info = BlogCatagory::all();

        return view('admin.BlogSingle.catagoryview', compact('info'));
    }
    public function displaytags()
    {

        $info = BlogTags::all();

        return view('admin.BlogSingle.tagsview', compact('info'));
    }
    public function editblog(Request $request, $id)
    {
        $info = BlogSingle::find($id);
        // $info = DB::select('select * from homesecondsections where id = ?',[$id]);
        return view('admin.BlogSingle.editblog', ['info' => $info]);
    }
    public function editcatagory(Request $request, $id)
    {
        $info = BlogCatagory::find($id);
        return view('admin.BlogSingle.editcatagory', ['info' => $info]);
    }
    public function edittags(Request $request, $id)
    {
        $info = BlogTags::find($id);
        return view('admin.BlogSingle.edittags', ['info' => $info]);
    }
    public function updateblog(Request $request)
    {
        $users = BlogSingle::find($request->id);
        $request->validate([
            'date'    => 'required',
            'name'    => 'required',
            'title'    => 'required',
            'one'    => 'required',
            'fimage' => 'required',
            'image_one' => 'required',
            'image_two' => 'required',
            'catagory' => 'required',
            'tag_one' => 'required',


        ]);
        $users->date = $request->date;
        $users->name = $request->name;
        $users->title = $request->title;
        $users->one = $request->one;
        $users->two = $request->two;
        $users->heading = $request->heading;
        $users->three = $request->three;
        $users->quote = $request->quote;
        $users->catagory = $request->catagory;
        $users->tag_one = $request->tag_one;
        $users->tag_two = $request->tag_two;
        $users->tag_three = $request->tag_three;
        $users->tag_four = $request->tag_four;
        if ($request->hasfile('fimage')) {
            $destination = 'images/resource' . $users->fimage;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('fimage');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $users->fimage = $filename;
        } else {
            unset($users->fimage);
        }
        if ($request->hasfile('image_one')) {
            $destination = 'images/resource' . $users->image_one;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image_one');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $users->image_one = $filename;
        } else {
            unset($users->image_one);
        }
        if ($request->hasfile('image_two')) {
            $destination = 'images/resource' . $users->image_two;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image_two');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('images/resource', $filename);
            $users->image_two = $filename;
        } else {
            unset($users->image_two);
        }
        $users->save();
        $info = BlogSingle::all();
        return view('admin.BlogSingle.blogview', compact('info'));
    }
    public function updatecatagory(Request $request)
    {

        $users = BlogCatagory::find($request->id);
        $request->validate([
            'catagory' => 'required',


        ]);
        $users->catagory = $request->catagory;

        $users->save();
        $info = BlogCatagory::all();
        return view('admin.BlogSingle.catagoryview', compact('info'));
    }
    public function updatetags(Request $request)
    {

        $users = BlogTags::find($request->id);
        $request->validate([
            'tag' => 'required',


        ]);
        $users->tag = $request->tag;

        $users->save();
        $info = BlogTags::all();
        return view('admin.BlogSingle.tagsview', compact('info'));
    }
    public function destroyblog($id)
    {
        $max = DB::table('blogs')->max('id');
        DB::delete('delete from  blogs where id = ?', [$id]);
        DB::statement("ALTER TABLE blogs AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function destroycatagory($id)
    {
        $max = DB::table('catagorys')->max('id');
        DB::delete('delete from  catagorys where id = ?', [$id]);
        DB::statement("ALTER TABLE catagorys AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function destroytags($id)
    {
        $max = DB::table('tags')->max('id');
        DB::delete('delete from  tags where id = ?', [$id]);
        DB::statement("ALTER TABLE tags AUTO_INCREMENT =  $max");
        return redirect::back();
    }

    public function showblog(Request $request, $id)
    {
        try {
            $news = BlogSingle::orderBy('date', 'desc')->limit(3)->get();
            $gallery = BlogSingle::orderBy('fimage', 'desc')->limit(6)->get();
            $tags = BlogTags::all();;
            $items = BlogSingle::whereBetween(
                'created_at',
                [Carbon::now()->subMonth(3), Carbon::now()]
            )->limit(3)
                ->get();
            $items_count = $items->count();
            // dd($items_count);
            $banner = BlogBanner::all();
            $comment = Comment::orderBy('id', 'desc')->limit(3)->get();
            $third = BlogCatagory::all();
            $tech_words = BlogSingle::where('catagory', 'Technology')->get();
            $tech = $tech_words->count();
            $con_words = BlogSingle::where('catagory', 'Consulting')->get();
            $con = $con_words->count();
            $life_words = BlogSingle::where('catagory', 'LifeStyle')->get();
            $life = $life_words->count();
            $i = BlogSingle::find($id);

            return view('blog-single', ['i' => $i])
                ->with(compact('comment'))
                ->with(compact('tags'))
                ->with(compact('items'))
                ->with(compact('items_count'))
                ->with(compact('gallery'))
                ->with(compact('news'))
                ->with(compact('third'))
                ->with(compact('tech'))
                ->with(compact('con'))
                ->with(compact('life'))
                ->with('banner', BlogBanner::orderBy('id', 'DESC')->first());
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
    public function viewbloglist()
    {
        try {

            $sec = BlogSingle::Paginate(3);
            $third = BlogCatagory::all();
            $tags = BlogTags::all();

            $gallery = BlogSingle::orderBy('fimage', 'desc')->limit(6)->get();
            $items = BlogSingle::whereBetween(
                'created_at',
                [Carbon::now()->subMonth(3), Carbon::now()]
            )->limit(3)
                ->get();
            $items_count = $items->count();
            $news = BlogSingle::orderBy('date', 'desc')->limit(3)->get();
            $tech_words = BlogSingle::where('catagory', 'Technology')->get();
            $tech = $tech_words->count();
            $con_words = BlogSingle::where('catagory', 'Consulting')->get();
            $con = $con_words->count();
            $life_words = BlogSingle::where('catagory', 'LifeStyle')->get();
            $life = $life_words->count();
            // dd($life);
            return View('blog-list')
                ->with(compact('sec'))
                ->with(compact('gallery'))
                ->with(compact('tags'))
                ->with(compact('news'))
                ->with(compact('items'))
                ->with(compact('items_count'))
                ->with(compact('third'))
                ->with(compact('tech'))
                ->with(compact('con'))
                ->with(compact('life'))
                ->with('banner', BlogListBanner::orderBy('id', 'DESC')->first());
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
