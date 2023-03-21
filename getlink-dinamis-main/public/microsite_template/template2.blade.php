<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.sembarang{
    display: none;
}
.gambar1{
    margin-top: 10%;
}
.tulisan1{
    margin-top: 2%;
width: 219px;
height: 28px;
left: 113px;
top: 182px;

font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 28px;

color: #FFFFFF;
}
.bungkusbunderan{
    margin-left: 32%;
    align-items: center;
    display: flex;
}
.ikon{
    margin-top: 25%;
}
.ikon1{
    margin-top: 32%;
}
.template1-kolom{
    margin-top: 5%;
width: 339px;
height: 156px;
left: 53px;
top: 293px;

background: rgba(255, 255, 255, 0.35);
border-radius: 15px;
}
.template1-kolom2{
    margin-top: 2%;
    width: 339px;
height: 74px;
left: 53px;
top: 455px;

background: rgba(255, 255, 255, 0.35);
border-radius: 15px;
}
.tulisan2{
    margin-top: 1%;
    width: 78%;
height: 19px;
left: 128px;
top: 539px;

font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 19px;
/* identical to box height */


color: #FFFFFF;
}
.tulisan3{
    margin-top: 1%;
    width: 35%;
height: 72px;
left: 75px;
top: 566px;

font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 15px;
line-height: 18px;
text-align: center;

color: #FFFFFF;
}

/* TEMPLATE 2 */
.template2{
    background: #9E3030;
    width: 100%;
height: 100%;
left: 957px;
top: 177px;
border-radius: 10px;
}
.elipsetemplate2{
    margin-left: 4%;
width: 48px;
height: 48px;
left: 43px;
top: 226px;
background: #FF0000;
border-radius: 50%;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.gariss{
    position: absolute;
    border-radius: 10px;
    margin-top: 52px;
    margin-left: 62%;
width: 224px;
height: 316px;
left: 244px;
top: -44px;
}
.template2-tulisan2{
    margin-left: 34%;
    text-align: left;
    width: 78%;
height: 23px;
left: 1001px;
top: 466px;

font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 23px;

color: #FFFFFF;
}
.template2-tulisan3{
    margin-top: -15px;
    margin-left: 34%;
    text-align: left;
    width: 70%;
height: 36px;
left: 1005px;
top: 490px;

font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-style: normal;
font-weight: 600;
font-size: 15px;
line-height: 18px;

color: #FFFFFF;
}
.template2-kolom{
    margin-top: 8%;
width: 339px;
height: 156px;
left: 53px;
top: 293px;

background: rgba(255, 255, 255, 0.35);
border-radius: 15px;
}
.gambar15{
    margin-top: 4%;
}
@media (max-width: 800px) {
    .bungkusbunderan{
        margin-left: 12%;
        align-items: center;
        display: flex;
    }
    .tulisan3{
        width: 70%
    }
    .gariss{
        margin-left: 3%;
    }
    .template2-tulisan2{
        margin-left: 10%;
    }
    .template2-tulisan3{
        margin-left: 2%;
    }
    .bungkusbunderan2{
        margin-left: 16%;
    }
    .template4-tulisan4{
        width: 70%;
    }
    .bungkusbunderan5{
        margin-left: 14%;
    }
    .template5-tulisan4{
        width: 70%;
    }
    .template5-kolom2{
        margin-top: -20px;
        width: 22%
    }
  }
</style>
<body>
    <center>
    <div class="template2">
        <img src=" {{ asset('microsite_assets/img/garis2.png') }} " alt="" class="gariss">
        <img src=" {{ asset('microsite_assets/img/rai.png') }} " alt="" class="gambar1">
        <h4 class="tulisan1">PDI PERJUANGAN</h4>
        <div class="bungkusbunderan">
        <div class="elipsetemplate2">
            <p class="sembarang">p</p>
            <img src=" {{ asset('microsite_assets/img/ig.png') }} " alt="" class="ikon">
        </div>
        <div class="elipsetemplate2">
            <p class="sembarang">p</p>
            <img src=" {{ asset('microsite_assets/img/twit.png') }} " alt="" class="ikon1">
        </div>
        <div class="elipsetemplate2">
            <p class="sembarang">p</p>
            <img src=" {{ asset('microsite_assets/img/fb.png') }} " alt="" class="ikon">
        </div>
        <div class="elipsetemplate2">
            <p class="sembarang">p</p>
            <img src=" {{ asset('microsite_assets/img/yt.png') }} " alt="" class="ikon1">
        </div>
        <div class="elipsetemplate2">
            <p class="sembarang">p</p>
            <img src=" {{ asset('microsite_assets/img/tiktod.png') }} " alt="" class="ikon">
        </div>
    </div>
    <div class="template2-tulisan2">
        <p>Visi</p>
    </div>
    <div class="template2-tulisan3">
        <p>Lorem ipsum is placeholder text commonly used in the graphic</p>
    </div>
    <div class="template2-tulisan2">
        <p>Misi</p>
    </div>
    <div class="template2-tulisan3">
        <p>1. Lorem ipsum is placeholder text <br>
            2. Lorem ipsum is placeholder text <br>
            3. Lorem ipsum is placeholder text
        </p>
    </div>
    <div class="template2-kolom">
        <img src=" {{ asset('microsite_assets/img/ytred.png') }} " alt="" style="margin-top: 18%;">
    </div>
    </div>
</center>
</body>
</html>