<?php



    namespace App\Services;


    use App\Breadcumb;

    class BreadcumbService
    {

        public function getBreadImage($route)
        {
            $bread_image = Breadcumb::whereSlug($route)->firstOrFail();
            return $bread_image->image;
        }

    }