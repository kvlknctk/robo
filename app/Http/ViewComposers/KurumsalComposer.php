<?php

    namespace App\Http\ViewComposers;

    use App\Build;
    use Illuminate\View\View;

    class KurumsalComposer
    {
        public $linkler = [];
        /**
         * Create a movie composer.
         *
         * @return void
         */
        public function __construct()
        {
            $this->linkler = Build::all();
        }

        /**
         * Bind data to the view.
         *
         * @param  View  $view
         * @return void
         */
        public function compose(View $view)
        {
            $view->with('linkler', $this->linkler);
        }
    }
