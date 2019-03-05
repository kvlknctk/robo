<?php

    namespace App\Http\Controllers;

    use App\Build;
    use App\Hgallery;
    use App\Hizmetler;
    use App\Kurumsal;
    use App\Calismalar;

    use App\Mail\Contactci;
    use App\Slider;
    use App\Iletisim;
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
            $title  = 'Kurumsal';

            return view('kurumsal.kurum_index', compact('title', 'images'));
        }


        public function kurumsal_detail($slug)
        {
            $detail = Build::whereSlug($slug)->first();

            $title  = $detail->title;

            return view('kurumsal.kurum_detail', compact('title', 'detail'));
        }

        public function hizmetler()
        {
            $title     = 'Hizmetler';
            $hizmetler = Hizmetler::get();

            return view('hizmetler', compact('title', 'hizmetler'));

        }

        public function calismalar()
        {
            $title      = 'Çalışmalar';
            $calismalar = Calismalar::get();

            return view('calismalar', compact('title', 'calismalar'));

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
