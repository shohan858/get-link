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
                @if($background->type_background == 'color')
                  <div class="show_microsite" style="background-color: {{ $background->background }}">
                @else
                  <div class="show_microsite" style="background-image: url('{{ asset('gambar/'.$background->background) }}')">
                @endif
                    <?php $non_bungkus = ''; ?>
                    <?php $kolom2 = ''; ?>
                    @foreach($data as $i)
                    <?php $code = $i['code']; ?>
                    <?php $html = str_replace('src="gambar/', 'src="' . asset('gambar/'), $i['code']); ?>
                    @if($i['id'] === 9)
                    <?php $kolom2 .= '<div class="template5-kolom2"><img src="' . asset('gambar/' . $konten[0]['image']) . '" class="konten"></div>'; ?>
                    @else
                    <?php $non_bungkus .= $html; ?>
                    @endif
                    @endforeach
                    <?php if (!empty($kolom2)) : ?>
                      <?php $non_bungkus .= '<div class="template5-bungkuskolom">' . $kolom2 . '</div>'; ?>
                    <?php endif; ?>
                    {!! $non_bungkus !!}
                  </div>
              </center>

              </body>
</html>