{{--
<div class="col-md-8 col-xs-12">
    <div class="onStep" data-animation="fadeInLeft" data-time="600" id="contact">
        <form  class="row" id="form-contact" method="get" name="form-contact">
            <input id="name" name="name" placeholder="İsim" type="text">
            <input id="email" name="email" placeholder="E-Posta" type="text">
            <textarea cols="50" id="message" name="message" placeholder="Mesajınız"
                      rows="4"></textarea>
            <div class="success" id="mail_success">Teşekkürler. Mesajınız gönderildi. </div>
            <div class="error" id="mail_failed">Hata, Lütfen telefon yolu ile iletişime geçiniz. </div>
            <button class="btn" id="send-contact" type="button" onclick="gonder()">Gönder</button>
        </form>
    </div>
</div>
--}}

<div class="col-md-3 col-xs-12">
    <div class="wrapaddres onStep" data-animation="fadeInRight" data-time="900">
        <h5>Kurumsal</h5>
        <ul>
            @foreach($kurumsal as $item)
                <li>
                    <a href="{{route('kurumsal_slug', ['slug'=>$item->slug])}}">{{$item->title}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>


<div class="col-md-3 col-xs-12">
    <div class="wrapaddres onStep" data-animation="fadeInRight" data-time="900">
        <h5>Son Çalışmalarımız</h5>

        <ul>
            @foreach($works as $item)
                <li>
                    <a href="{{route('calismalar_detail', ['slug' =>$item->categories->slug, 'work' => $item->slug])}}">{{$item->title}}</a>
                </li>
            @endforeach

        </ul>

    </div>
</div>


<div class="col-md-6 col-xs-12">
    <div class="wrapaddres onStep" data-animation="fadeInRight" data-time="900">
        <h5>Hızlı İletişim</h5>

        <address>

            <span><strong>Telefon :</strong> {{Voyager::setting('iletisim.tel1')}}</span>
            <span><strong>Telefon :</strong> {{Voyager::setting('iletisim.tel2')}}</span>
            <span><strong>Fax :</strong> {{Voyager::setting('iletisim.fax')}}</span>
            <span><strong>E-posta :</strong> <a
                        href="mailto:{{Voyager::setting('iletisim.email')}}">{{Voyager::setting('iletisim.email')}}</a></span>
            <span><strong>{{Voyager::setting('iletisim.adres')}}</strong></span>
        </address>
    </div>
</div>

