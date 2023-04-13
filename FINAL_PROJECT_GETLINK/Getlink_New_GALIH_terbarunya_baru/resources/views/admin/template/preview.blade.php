<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style_admin.css')}}">
</head>
<body>
    @if($background->type_background == 'color')
        <div class="bungkus" style='background: {{ $background->background }}'>
    @else
        <div class="bungkus" style="background-image: url('{{ asset('microsite/background/'.$background->background) }}')">
    @endif
            <?php $non_bungkus = ''; ?>
            @foreach($data as $d)
                <?php
                    // mengganti string "src=" pada folder "microsite/konten/"
                    $html = str_replace('src="microsite/konten', 'src="' . asset('microsite/konten/'), $d['code']);
                    // mengganti string "src=" pada folder "microsite/medsos/"
                    $html = str_replace('src="microsite/medsos', 'src="' . asset('microsite/medsos/'), $html);
                    $non_bungkus .= $html;
                ?>
            @endforeach
            {!! $non_bungkus !!}
        </div>
</body>
</html>