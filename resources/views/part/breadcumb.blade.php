@inject('bread', 'App\Services\BreadcumbService')



<section id="subheader" style="background: url({{Storage::url($bread->getBreadImage(Request::segment(1)))}}) top fixed;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{SEOMeta::getTitleSession()}}</h1>
                <ul class="subdetail hidden-xs">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="sep">/</li>
                    <li>{{SEOMeta::getTitleSession()}}</li>

                </ul>
            </div>
        </div>
    </div>
</section>