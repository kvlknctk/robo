<?php

    namespace App\Http\ViewComposers;

    use App\Build;
    use App\Hizmetler;
    use App\Kurumsal;
    use Illuminate\View\View;

    class GenelComposer
    {
        public $kurumsal = [];
        public $hizmet   = [];

        /**
         * Create a movie composer.
         *
         * @return void
         */
        public function __construct()
        {
            $this->kurumsal = Build::all();
            $this->hizmet   = Hizmetler::all();
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
        }
    }
