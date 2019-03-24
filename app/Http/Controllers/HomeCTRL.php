<?php

    namespace App\Http\Controllers;

    use App\Build;
    use App\Hizmetler;
    use App\Kategoriler;
    use App\Calismalar;
    use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
    use App\Mail\Contactci;
    use App\Slider;
    use App\Iletisim;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;


    class HomeCTRL extends Controller
    {
        use SEOToolsTrait;

        public function index()
        {
            $slider = Slider::orderBy('orders', 'asc')->get();

            $this->seo()->setTitle('Anasayfa');
            return view("index", compact( 'slider'));
        }

        public function kurumsal_index()
        {
            $this->seo()->setTitle('Kurumsal');
            return view('kurumsal.kurum_index', compact( 'images'));
        }


        public function kurumsal_detail($slug)
        {
            $detail = Build::whereSlug($slug)->first();

            $this->seo()->setTitle($detail->title);
            return view('kurumsal.kurum_detail', compact( 'detail'));
        }

        public function hizmetler()
        {

            // ilk hizmetin görülmesi için rastgele çekiyoruz.
            $first_service = Hizmetler::first();

            return redirect()->route('hizmetler_slug', ['slug' => $first_service->slug]);
        }

        public function hizmetler_slug($slug)
        {
            $service  = Hizmetler::whereSlug($slug)->firstOrFail();
            $services = Hizmetler::get();

            $this->seo()->setTitle($service->title);
            return view('hizmetler', compact( 'service', 'services'));

        }

        public function calismalar()
        {

            // ana kategorileri bulmak için
            $kategoriler = Kategoriler::whereNull('parent_id')->with('child')->get();

            $calismalar = Calismalar::get();

            $this->seo()->setTitle('Çalışmalar');
            return view('calismalar', compact( 'calismalar', 'kategoriler'));
        }

        public function calismalar_cat($slug)
        {
            $category_detail = Kategoriler::with(['works', 'child.works'])->whereSlug($slug)->firstOrFail();

            $this->seo()->setTitle($category_detail->title);
            return view('calismalar_cat', compact( 'category_detail'));

        }

        public function calismalar_detail($slug, $work)
        {

            $work   = Calismalar::with('images')
                ->whereSlug($work)
                ->firstOrFail();

            $others = Kategoriler::with(['works' => function ($q) {
                $q->limit(5);
            }])->whereSlug($slug)->firstOrFail();

            $categories = Kategoriler::limit(5)->get();

            $this->seo()->setTitle($work->title);
            return view('calismalar_detail', compact( 'work', 'others', 'slug', 'categories'));

        }


        public function iletisim()
        {

            $this->seo()->setTitle('İletişim');
            return view('iletisim');
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
