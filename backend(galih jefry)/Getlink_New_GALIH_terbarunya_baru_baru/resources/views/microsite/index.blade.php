<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}"/>
    <script defer src="{{ asset('assets/main.js') }}"></script>
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-lite.css') }}" />
</head>
<body>
    

<center>
                @if ($background->type_background == 'color')
        <div class="bungkus" style='background: {{ $background->background }}'>
        @else
            <div class="bungkus"
                style="background-image: url('{{ asset('microsite/background/' . $background->background) }}')">
    @endif
    <?php $non_bungkus = ''; ?>
    <?php $kolom2 = ''; ?>
    @foreach ($data as $i)
        <?php $code = $i['code']; ?>
        <?php $html = str_replace('src="microsite/medsos', 'src="' . asset('microsite/medsos/'), $i['code']); ?>
        @if ($i['id'] === 9)
            <?php $kolom2 .= str_replace('src="microsite/konten', 'src="' . asset('microsite/konten/'), $i['code']); ?>
        @else
            <?php $non_bungkus .= $html; ?>
        @endif
    @endforeach
    <?php if (!empty($kolom2)) : ?>
    <?php $non_bungkus .= '<div class="bungkus-anak" id="bungkus-template-konten">' . $kolom2 . '</div>'; ?>
    <?php endif; ?>
    {!! $non_bungkus !!}
              </center>

              </body>
</html>