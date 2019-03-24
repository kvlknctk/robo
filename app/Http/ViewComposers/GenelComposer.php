<?php

    namespace App\Http\ViewComposers;

    use App\Build;
    use App\Calismalar;
    use App\Hizmetler;
    use Illuminate\View\View;

    class GenelComposer
    {
        public $kurumsal   = [];
        public $hizmet     = [];
        public $calismalar = [];

        /**
         * Create a movie composer.
         *
         * @return void
         */
        public function __construct()
        {
            $this->kurumsal   = Build::all();
            $this->hizmet     = Hizmetler::all();
            $this->calismalar = Calismalar::with('categories')->limit(7)->get();
        }

        /**
         * Bind data to the view.
         *
         * @param  View $view
         * @return void
         */
        public function compose(View $view)
        {
            $view->with('kurumsal', $this->kurumsal);
            $view->with('hizmet', $this->hizmet);
            $view->with('works', $this->calismalar);
        }
    }
