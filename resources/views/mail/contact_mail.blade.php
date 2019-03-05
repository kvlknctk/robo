<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Kuran</title>
</head>
<body>
Adsoyad : {{$contact->name}} <br>
Mail : {{$contact->email}} <br>
Mesaj : {{$contact->message}}


<hr>
Bu mesaj robotaryum.com üzerinden gelen iletişim isteklerini içerir.
{{$contact->created_at}} tarihinde işlendi.



</body>
</html>