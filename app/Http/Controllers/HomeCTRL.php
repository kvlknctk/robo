<?php

    namespace App\Http\Controllers;

    use App\Build;
    use App\Hgallery;
    use App\Hizmetler;
    use App\Kategoriler;
    use App\Kurumsal;
    use App\Calismalar;

    use App\Mail\Contactci;
    use App\Slider;
    use App\Iletisim;
    use TCG\Voyager\Models\Category;
    use TCG\Voyager\Models\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;


    class HomeCTRL extends Controller
    {
        //

        public function index()
        {
            $title  = 'Robotaryum';
            $slider = Slider::orderBy('orders', 'asc')->get();

            return view("index", compact('title', 'slider'));
        }

        public function kurumsal_index()
        {
            $title = 'Kurumsal';

            return view('kurumsal.kurum_index', compact('title', 'images'));
        }


        public function kurumsal_detail($slug)
        {
            $detail = Build::whereSlug($slug)->first();

            $title = $detail->title;

            return view('kurumsal.kurum_detail', compact('title', 'detail'));
        }

        public function hizmetler()
        {
            $title     = 'Hizmetler';
            $hizmetler = Hizmetler::get();

            // ilk hizmetin görülmesi için rastgele çekiyoruz.
            $first_service = Hizmetler::first();

            return redirect()->route('hizmetler_slug', ['slug' => $first_service->slug]);

            //return view('hizmetler', compact('title', 'hizmetler' ));

        }

        public function hizmetler_slug($slug)
        {
            $service  = Hizmetler::whereSlug($slug)->firstOrFail();
            $services = Hizmetler::get();
            $title    = $service->title;

            //return $service;
            return view('hizmetler', compact('title', 'service', 'services'));

        }

        public function calismalar()
        {

            // ana kategorileri bulmak için
            $kategoriler = Kategoriler::whereNull('parent_id')->with('child')->get();

            $title      = 'Çalışmalar';
            $calismalar = Calismalar::get();

            return view('calismalar', compact('title', 'calismalar', 'kategoriler'));
        }

        public function calismalar_cat($slug)
        {
            $category_detail = Kategoriler::with(['works', 'child.works'])->whereSlug($slug)->firstOrFail();
            $title           = $category_detail->title;

            return view('calismalar_cat', compact('title', 'category_detail'));

        }

        public function calismalar_detail($slug, $work)
        {

            $work  = Calismalar::whereSlug($work)->firstOrFail();
            $others = Kategoriler::with(['works' => function($q){
                $q->limit(5);
            }])->whereSlug($slug)->firstOrFail();
            $title = $work->title;


            return view('calismalar_detail', compact('title', 'work', 'others', 'slug'));

        }


        public function iletisim()
        {
            $title = 'İletişim';

            return view('iletisim', compact('title'));
        }

        public function iletisim_post(Request $request)
        {
            $this->validate($request, [
                'name'    => 'required',
                'email'   => 'required|max:255|email',
                'message' => 'required',
            ]);

            $add          = new Iletisim;
            $add->name    = $request->get('name');
            $add->email   = $request->get('email');
            $add->message = $request->get('message');

            $add->save();

            Mail::to("info@robotaryum.com")->send(new Contactci($add));


            if ($add) {
                echo "1";
            } else {
                echo "0";
            }


        }


    }
