<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Smart Kids | က႑မ်ား</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="v3TwdJDYhw8dGeKkTzypt04ggz344PZWr1t3tlmg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description">
    <meta name="author">
    <meta name="tags">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('web/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/jquery.scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/index.css@v=5.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/custom.css@v=5.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84607448-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-84607448-2');
    </script>

</head>

<body>
    @include('web.layout.menu')

        <div class="page">
            @include('web.layout.backactive')                
            
            <div class="page-content">
                <style>
                    .fav {
                        color: #fcad04;
                    }
                </style>
                <div class="page-video">
                    <div class="text-center">
                        <img class="img-responsive" src="{{ asset('web/storage/articles/old/healthy-kid4.jpg') }}">
                    </div>
                    <section class="border-bottom py-3" id="detail">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between align-items-start flex-wrap">
                                <div class="flex-1 mr-2">
                                    <h1 class="h5 page-video__title mb-2 font-weight-bold">မွေးကင်းစ ကလေးများနှင့်
                                        ကလေးငယ်များအတွက် ရေချိုးခန်းအတွင်း ဘေးကင်းစေမည့် အချက် (၅) ချက်</h1>
                                    <h2 class="h6 page-video__sub-title mb-0"></h2>
                                </div>
                                <div class="page-video-buttons d-flex align-items-center ">
                                    <a id="favoriteBtn"
                                        class="favorite-btn page-video-buttons__item btn btn-light rounded-circle mr-2 active favorite-add"
                                        href="http://my-smartkids.com/favorites/health/31">
                                        <i class="far fa-star"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <p class="MsoNormal" style="text-align:justify"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">ရေချိုးခန်းအတွင်း
                                            ဖြစ်တတ်သည့် ထိခိုက်အနာတရများကို
                                            ရှောင်ရှားဖို့အတွက် အလွယ်ကူဆုံး နည်းလမ်း ကတော့ ကလေးကို အရွယ်ရောက်သူတစ်ဦး
                                            အတူလိုက်ပါခြင်းမရှိဘဲ
                                            ရေချိုးခန်းအား အသုံးပြုလို့မရအောင် ပြုလုပ်ခြင်းဘဲ ဖြစ်ပါတယ်။ ဒါဟာတော့
                                            သင်အနားမှာမရှိတဲ့အခါ
                                            ကလေးရေချိုးခန်းထဲ ဝင်မရနိုင်အောင် တံခါး တွင် လူကြီးတစ်ယောက် အမြင့်လောက်မှာ
                                            တံခါးကျင်တစ်ခု
                                            တပ်ဆင်ခြင်းကို ဆိုလိုတာပါ။ထို့ပြင်ရေးချိုးခန်းထဲ ကလေး သူ့ကိုယ်သူ
                                            ပိတ်မိသွားတဲ့အခါမျိုးအတွက်
                                            တံခါးကို အပြင်မှ ဖွင့်၍ရနိုင်အောင် စီမံထားပါ။<o:p></o:p></span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">
                                            <o:p>&nbsp;</o:p>
                                        </span></p>
                                    <p class="MsoNormal"><b><span lang="EN-US"
                                                style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">သင့်ရေချိုးခန်းကို
                                                ကလေးအတွက် အန္တရာယ်ကင်းစေပြီး
                                                အနာတရဖြစ်မှုများမှ တားဆီးနိုင်မည့် လွယ်ကူသော အချက်များ<o:p></o:p>
                                                </span></b></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">
                                            <o:p>&nbsp;</o:p>
                                        </span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">(၁)
                                            ကြီးကြပ်မှု။&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;။ ကလေးငယ်တွေဟာ
                                            ရေလက်မ အနည်းငယ်မှာပင် နစ်မြုပ်နိုင်တာမို့
                                            တစ်ခဏလေး အတွက်ဖြစ်စေ ရေချိုးခန်းထဲ ကလေးငယ် တစ်ဦးတည်း ဘယ်တော့မှ
                                            မချန်ရစ်ပါနဲ့။ တံခါးဘဲလ်တီးသံ
                                            (သို့) ဖုန်းသံကို သင် လျစ်လျူရှုမထားနိုင်ပါက တံခါးဆီသော်လည်းကောင်း၊
                                            ဖုန်းရှိရာသို့လည်းကောင်း
                                            အဖြေပေးဖို့ သွားတဲ့အခါ ကလေးကို တဘက်တစ်ခုထဲပတ်ပြီး သင်နဲ့အတူခေါ်သွားပါ။
                                            ရေချိူးထိုင်ခုံတွေ၊
                                            ကလေးလည်ပင်း မှာ စွပ်ပေးတဲ့ ကွင်းတွေဟာ ရေချိုးခန်းသုံး
                                            အထောက်အကူပစ္စည်းတွေဖြစ်ပေမဲ့
                                            ကလေးကို မစောင့်ကြည့်ဘဲ ထားမယ်ဆိုရင်တော့ ရေနစ်ခြင်းမှ
                                            တားဆီးပေးနိုင်မှာမဟုတ်ပါဘူး။
                                            အသုံးမပြုတဲ့အခါမှာ ရေကို ရေချိုးကန်ထဲ ဘယ်တော့မှ ချန်မထားပါနဲ့။ ကလေးကို ရေ
                                            စတင် မချိုးပေးမီအရင်
                                            လက်တစ်ကမ်းတွင် သင်လိုအပ်မယ်&nbsp;&nbsp; ထင်သမျှ အရာတိုင်း
                                            ရှိနေဖို့ကလည်း အရေးကြီးပါတယ်။ သင့်ကလေး၏ ရေချိုးဧရိယာအတွက် လိုအပ်သည့်
                                            အထောက်အပံ့ပစ္စည်းများအား
                                            ကြိုတင် အသင့်ပြင်ဆင်ပုံကို ဆက်လက်ကြည့်ရှုပါ….<o:p></o:p></span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">
                                            <o:p>&nbsp;</o:p>
                                        </span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">(၂)
                                            ချော်ကျခြင်း နှင့် လဲကျခြင်းများ။&nbsp;&nbsp;&nbsp;&nbsp; ။ ရေချိုးကန်၏
                                            အောက်ခြေတွင် ချော်မကျစေရန် အသုံးပြုလေ့ရှိကြ သည့် ပစ္စည်းများကို တပ်ဆင်ပါ။
                                            ရေပိုက်ခေါင်းနှင့်
                                            ခေါင်းဆောင့်မိသည့်အခါ ကလေး အနာတရ မဖြစ်ရလေ အောင် နူးညံတဲ့ အဖုံး/အစွပ် တစ်ခုခု
                                            ရေပိုက်ပေါ်စွပ်ထားပါ။
                                            ဘိုထိုင်အိမ်သာ အဖုံးကို ပိတ်တက်သည့် အကျင့် လုပ်ယူပြီး အဖုံးကိုသော့ခတ်ထားပါ။
                                            စပ်စပ်စုစုလမ်းလျှောက်တတ်စအရွယ်
                                            ကလေးတွေဆို ရေနဲ့ဆော့ကစားဖို့ ကြိုးစားရင်း သူ့ကိုယ်သူ မထိန်းနိုင်တော့ဘဲ
                                            ဟန်ချက်ပျက်ကာ
                                            အထဲပြုတ်ကျသွားနိုင်ပါတယ်။<o:p></o:p></span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">
                                            <o:p>&nbsp;</o:p>
                                        </span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">(၃)
                                            ရေအပူချိန်။&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ။ ရေနွေးပူလောင်ခြင်းမှ
                                            ကာကွယ်ဖို့ ရေပိုက်ခေါင်းရှိ အမြင့်ဆုံး ရေအပူချိန်ကို ၁၂၀ ဒီဂရီ
                                            ဖာရင်ဟိုက်(၄၈.၉ ဒီဂရီ
                                            ဆဲလ်ဆီးရပ်စ်) ထက်မများရအောင် ရေအပူပေးစက်ကိုချိန်ညှိပါ။ ရေဟာ နွေးနွေးလေး
                                            ရှိသလား၊ပူနေသလားဆိုတာကို
                                            သင့်လက်ကောက်ဝတ် (သို့) တံတောင်ဆစ်ဖြင့် စမ်းကြည့်ပါ။ သင့်ကလေးဟာ ရေပိုက်ကို
                                            သူ့ဘာသာ
                                            ဖွင့်နိုင်တဲ့ အရွယ်ရောက်ရင်တော့ ရေပူကိုမဖွင့်မီ ရေအေးကို အရင်စဖွင့်ဖို့
                                            သူ့အား သင်ပေးပါ။<o:p></o:p></span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">
                                            <o:p>&nbsp;</o:p>
                                        </span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">(၄)
                                            ဆေးဝါးနှင့် သန့်စင်ခန်းသုံးပစ္စည်း
                                            သိုလှောင်မှု။&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ။ ဆေးဝါးအားလုံးကို
                                            သက်ဆိုင်ရာ ထည့်စရာများထဲ
                                            ဘေးကင်းစေသည့် အဖုံး၊အခွံများနှင့်အတူ သိမ်းထားပါ။သတိရှိရမှာက
                                            ထိုဆေးအခွံ၊အဖုံးတွေဟာ
                                            ကလေးတွေ &nbsp;ဖွင့်ဖို့၊ ဖောက်ဖို့ မလွယ်ကူအောင်
                                            ပြုလုပ်ထားတာဖြစ်ပေမဲ့ ကလေးများအဖို့ လုံးဝဖွင့်ဖောက်လို့မရအောင် ခက်ခဲ
                                            တာမျိုးလည်း
                                            မဟုတ်ပါဘူး။ ဒါ့ကြောင့်မို့ ဆေးဝါးနှင့် အလှကုန်ပစ္စည်းအားလုံးကို
                                            ကလေးမမီနိုင်သည့်
                                            အမြင့် တစ်နေရာတွင် ဘီဒိုတစ်ခုထဲ သော့ခတ်၍ သိမ်းပါ။ သွားတိုက်ဆေး၊ ဆပ်ပြာ၊
                                            ခေါင်းလျှော်ရည်နှင့်
                                            အခြားသော မကြာမကြာ အသုံးပြုသည့် ပစ္စည်းများကို ဆေးနှင့် အလှကုန်များထားသည့်
                                            ဘီဒိုတစ်ခုတည်းတွင်
                                            မထားဘဲ ကလေးလှမ်းမီရန် မလွယ်နိုင်သော သော့ခလောက် (သို့) တံခါးကျင်တစ်ခု
                                            တပ်ဆင်ထားသည့်
                                            ဘီဒိုတစ်ခုထဲ သိမ်းပါ။<o:p></o:p></span></p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">
                                            <o:p>&nbsp;</o:p>
                                        </span></p>
                                    <p>























                                    </p>
                                    <p class="MsoNormal"><span lang="EN-US"
                                            style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;">(၅)
                                            လျှပ်စစ်ပစ္စည်းများ။&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ။ သင်ဟာ
                                            ရေချိုးခန်းထဲ
                                            လျှပ်စစ်ပစ္စည်းတွေ အသုံးပြုတယ်။ အထူးသဖြင့် ဆံပင် အခြောက်ခံစက်တွေ၊
                                            အမွှေးရိတ်စက်တွေ
                                            အသုံးပြုတယ်ဆိုပါက ယင်းပစ္စည်းများအား အသုံးပြုပြီးသည့်အခါ ပလပ်ခေါင်းကို
                                            မှတ်မှတ်ရရဖြုတ်ပြီး
                                            လုံခြုံရေးသော့ပါသည့် ဘီဒိုတစ်ခုထဲတွင် သိမ်းပါ။ သို့သော်ငြားလည်း ဤ
                                            ပစ္စည်းများကို
                                            ရေမရှိသည့် အခြားအခန်းတစ်ခုတွင် သုံးခြင်းက ပို၍ကောင်းမွန်ပေသည်။
                                            ရေချိုးခန်းနံရံများတွင်&nbsp; အထူးအသုံးပြသည့် ground-fault circuit
                                            interrupters ပလပ်ပေါက်များအား လျှပ်စစ်ကျွမ်းကျင်တစ်ဦးကို
                                            တပ်ဆင်ခိုင်းခြင်းဖြင့်
                                            လျှပ်စစ်ပစ္စည်းတစ်ခုခု ချိုးရေထဲ (သို့) လက်ဆေးအင်တုံထဲ ပြုတ်ကျသွားသည့်အခါ
                                            ဖြစ်ပေါ်နိုင်သည့်
                                            လျှပ်စစ်အန္တရာယ်ကို လျှော့ချနိုင်ပေသည်။<o:p></o:p></span></p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script type="text/javascript"
                        src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b06d274b98b9384"></script>
                </div>
            </div>


        </div>
    </div>
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('web/js/amplitude.min.js') }}"></script>
    <script src="{{ asset('web/js/index.js@v=5') }}"></script>
    <script src="{{ asset('web/js/custom.js@v=5') }}"></script>
</body>

</html>