<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}">

    <style>
        /* wahda */
        .bungkus {
            width: 100%;
            height: max-content;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top left;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2% 2% 2% 2%;
            box-sizing: border-box;
            /* position: fixed;
   top: -200px;
   left: 0;
   right: 0;
   bottom: 0; */
            overflow: auto;
        }

        .bungkus .bungkus-anak:first-child {
            margin-top: 60px;
        }

        /* .bungkus .bungkus-anak:last-child {
   margin-bottom: 60px;
} */

        .bungkus-anak-gmb {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            width: 450px;
        }

        .bungkus-anak p {
            text-align: center;
        }

        .deskripsi {
            width: 450px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 18px;
            text-align: center;
            color: #FFFFFF;
        }

        .ba_iframe {
            width: 450px;
            height: 220px;
            border-radius: 15px;
        }

        .bungkus .bungkus-anak {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 7px 0 10px 0;
            flex-wrap: wrap;
            box-sizing: border-box;
        }

        .konten-template {
            width: 20%;
            margin: 10px;
        }

        .konten-template img {
            width: 100%;
            border-radius: 15px;
        }

        .icon-template {
            border-radius: 50%;
            width: 130px;
            height: 130px;
        }

        .title-template {
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 28px;
            color: #FFFFFF;
            text-align: center;
        }

        .medsos-template {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 10px;
            background-color: #ccc;
        }

        .medsos-template img {
            max-width: 100%;
            max-height: 100%;
        }

        @media screen and (max-width: 600px) {
            .konten-template {
                width: 25%;
                margin: 10px;
            }
        }

        @media screen and (max-width: 550px) {
            .icon-template {
                width: 100px;
                height: 100px;
            }

            .title-template {
                font-size: 22px;
            }

            .medsos-template {
                width: 50px;
                height: 50px;
            }

            .deskripsi {
                width: 350px;
                font-size: 15px;
            }

            .ba_iframe {
                width: 350px;
                height: 155px;
            }
        }

        @media screen and (max-width: 390px) {
            .medsos-template {
                width: 40px;
                height: 40px;
            }

            .medsos-template img {
                max-width: 70%;
                max-height: 70%;
            }

            .deskripsi {
                width: 300px;
                font-size: 15px;
            }

            .ba_iframe {
                width: 300px;
                height: 155px;

            }
        }
    </style>

</head>

<body>
    @if ($background->type_background == 'color')
        <div class="bungkus" style='background: {{ $background->background }}'>
        @else
            <div class="bungkus"
                style="background-image: url('{{ asset('microsite/background/' . $background->background) }}')">
    @endif
    <?php $non_bungkus = ''; ?>
    @foreach ($data as $d)
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
