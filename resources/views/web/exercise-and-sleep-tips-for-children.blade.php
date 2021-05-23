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
                                    <img class="img-responsive" src="{{ asset('web/storage/articles/old/health5.jpg') }}">
                                </div>
                                <section class="border-bottom py-3" id="detail">
                                    <div class="container-fluid">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="flex-1 mr-2">
                                                <h1 class="h5 page-video__title mb-2 font-weight-bold">ကလေးများ၏လေ့ကျင့်ခန်းနှင့်
                                                    အိပ်စက်ခြင်းဆိုင်ရာ အကြံပြုချက်များ</h1>
                                                <h2 class="h6 page-video__sub-title mb-0"></h2>
                                            </div>
                                            <div class="page-video-buttons d-flex align-items-center ">
                                                <a id="favoriteBtn"
                                                    class="favorite-btn page-video-buttons__item btn btn-light rounded-circle mr-2 active favorite-add"
                                                    href="http://my-smartkids.com/favorites/health/32">
                                                    <i class="far fa-star"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p class="MsoNormal"><span
                                                        style="font-size: 13pt;">လေ့ကျင့်ခန်းပြုလုပ်ခြင်းနှင့်အိပ်စက်ခြင်းသည်
                                                        လိုအပ်သောခန္ဓာကိုယ်ဟန်ချက်အတွက်&nbsp;
                                                        ပေါင်းစပ်ပါဝင်ပါတယ်။သင့်အတွက် သို့မဟုတ် သင့်ကလေးများအတွက်</span></p>
                                                <p class="MsoNormal"><span style="font-size:13.0pt;line-height:115%;font-family:
            " zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";color:#333333;=""
                                                        mso-fareast-language:tr"="">&nbsp;သင့်လျော်သောအိပ်စက်ခြင်းသည်
                                                        ယနေ့လျင်မြန်သော
                                                        ကမ္ဘာကြီးအတွက် <o:p></o:p></span></p>
                                                <p class="MsoNormal"><span style="font-size:13.0pt;line-height:115%;font-family:
            " zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";color:#333333;=""
                                                        mso-fareast-language:tr"="">&nbsp;စိန်ခေါ်မှုတစ်ရပ်ဖြစ်ပါတယ်။ကျွန်ုပ်တို့နှင့်
                                                        ကျွန်ုပ်တို့၏ကလေးများကို လေ့ကျင့်ခန်း<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span style="font-size:13.0pt;line-height:115%;font-family:
            " zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";color:#333333;=""
                                                        mso-fareast-language:tr"="">ပြုလုပ်စေချင်သလို အိပ်စက်ခြင်းကိုလည်း
                                                        ပြုလုပ်စေချင်ကြပါတယ်။<o:p></o:p></span></p>
                                                <p class="MsoNormal"
                                                    style="margin: 10.2pt 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span style="font-size:13.0pt;font-family:"
                                                        zawgyi-one","sans-serif";mso-fareast-font-family:="" "times="" new="" roman"
                                                        ;color:#333333;mso-fareast-language:tr"="">ကလေးများအတွက်အကောင်းဆုံးအကြံပြုချက်များမှာ
                                                        <o:p></o:p></span></p>
                                                <p class="MsoNormal"
                                                    style="margin: 10.2pt 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span style="font-size:13.0pt;font-family:"
                                                        zawgyi-one","sans-serif";mso-fareast-font-family:="" "times="" new="" roman"
                                                        ;color:#333333;mso-fareast-language:tr"="">၁။ ကြံ့ခိုင်စေသော
                                                        လေ့ကျင့်ခန်းများကို အိပ်ရာမဝင်မီ </span><span lang="EN-US" style="font-size:13.0pt;
            font-family:" zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";=""
                                                        color:#333333;mso-ansi-language:en-us;mso-fareast-language:tr"="">ကန့်သတ်ချက်တစ်ခုဖြင့်</span><span
                                                        style="font-size:13.0pt;font-family:"
                                                        zawgyi-one","sans-serif";mso-fareast-font-family:="" "times="" new="" roman"
                                                        ;color:#333333;mso-fareast-language:tr"="">
                                                        <o:p></o:p>
                                                    </span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-size:13.0pt;line-height:115%;
            font-family:" zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";=""
                                                        color:#333333;mso-ansi-language:en-us;mso-fareast-language:tr"="">ပြုလုပ်ရပါမည်။ယောဂ၊ထိုက်ချိ
                                                        သို့မဟုတ် လမ်းလျှောက်ခြင်းစသည့် ကလေးများ၏ <o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-size:13.0pt;line-height:115%;
            font-family:" zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";=""
                                                        color:#333333;mso-ansi-language:en-us;mso-fareast-language:tr"="">အိပ်စက်ခြင်းကို
                                                        အကျိုးပြုစေမည့် လေ့ကျင့်ခန်းများကို ပြုလုပ်ရပါမည်။<o:p></o:p></span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span style="font-size:13.0pt;
            font-family:" zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";=""
                                                        color:#333333;mso-fareast-language:tr"="">၂။ အိပ်ရာမဝင်မီ မိနစ်၃၀အတွင်း
                                                        တီဗွီ၊ကွန်ပျူတာ၊တက်ပလက်၊ဖုန်းများကို<o:p></o:p></span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span style="font-size:13.0pt;
            font-family:" zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";=""
                                                        color:#333333;mso-fareast-language:tr"="">&nbsp;ပိတ်ထားရပါမည်။<o:p></o:p>
                                                        </span></p>
                                                <p class="MsoNormal"><span style="font-size:13.0pt;line-height:115%;font-family:
            " zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";color:#333333;=""
                                                        mso-fareast-language:tr"="">၃။ </span><span lang="EN-US" style="font-size:13.0pt;
            line-height:115%;font-family:" zawgyi-one","sans-serif";mso-ansi-language:en-us"="">ညစဉ်တိုင်း
                                                        သွားတိုက်၊မိနစ်၂၀ခန့်စာဖတ်ပြီးမှ အိပ်ရာဝင်ရန် စနစ်တကျသတ်မှတ်ပါ။</span><span
                                                        lang="EN-US" style="font-size:15.0pt;line-height:115%;font-family:"
                                                        zawgyi-one","sans-serif";="" mso-ansi-language:en-us"="">
                                                        <o:p></o:p>
                                                    </span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span lang="EN-US" style="font-size:13.0pt;font-family:"
                                                        zawgyi-one","sans-serif";mso-fareast-font-family:="" "times="" new="" roman"
                                                        ;color:#333333;mso-ansi-language:en-us;mso-fareast-language:="" tr"="">၄။
                                                    </span><span style="font-size:13.0pt;font-family:" zawgyi-one","sans-serif";=""
                                                        mso-fareast-font-family:"times="" new=""
                                                        roman";color:#333333;mso-fareast-language:=""
                                                        tr"="">ပုံမှန်ညအိပ်ရာဝင်ချိန်နှင့် နံနက်အိပ်ရာထချိန်ကို
                                                        အစဉ်အမြဲတင်းကြပ်ရပါမည်။</span><span lang="EN-US"
                                                        style="font-size:13.0pt;font-family:" zawgyi-one","sans-serif";=""
                                                        mso-fareast-font-family:"times="" new=""
                                                        roman";color:#333333;mso-ansi-language:en-us;=""
                                                        mso-fareast-language:tr"="">
                                                        <o:p></o:p>
                                                    </span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span style="font-size:9.0pt;
            font-family:" zawgyi-one","sans-serif";color:#444950;background:#f1f0f0"="">
                                                        <o:p>&nbsp;</o:p>
                                                    </span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span
                                                        style="background-color: rgb(241, 240, 240); color: rgb(68, 73, 80); font-size: 9pt;">&nbsp;</span><span
                                                        style="color: rgb(51, 51, 51); font-family: Zawgyi-One, sans-serif; font-size: 13pt;">၄။
                                                        အာရုံခံအပြောင်းအလဲလိုအပ်ချက်ရှိခြင်း (သို့မဟုတ်)
                                                        အထီးကျန်စိတ်ဝေဒနာရှင်</span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span lang="EN-US" style="font-size:13.0pt;font-family:"
                                                        zawgyi-one","sans-serif";mso-fareast-font-family:="" "times="" new="" roman"
                                                        ;color:#333333;mso-ansi-language:en-us;mso-fareast-language:=""
                                                        tr"="">သားသမီးများအဖို့ ကျန်းမာစွာအိပ်စက်ခြင်းပုံစံများထူထောင်ပေးခြင်းပင်
                                                        စိန်ခေါ်မှု<o:p></o:p></span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span lang="EN-US" style="font-size:13.0pt;font-family:"
                                                        zawgyi-one","sans-serif";mso-fareast-font-family:="" "times="" new="" roman"
                                                        ;color:#333333;mso-ansi-language:en-us;mso-fareast-language:=""
                                                        tr"="">ဖြစ်နိုင်ပါတယ်။<o:p></o:p></span></p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span style="font-size:13.0pt;
            font-family:" zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";=""
                                                        color:#333333;mso-fareast-language:tr"="">
                                                        <o:p>&nbsp;</o:p>
                                                    </span></p>
                                                <p>







































                                                </p>
                                                <p class="MsoNormal"
                                                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                                    <span style="font-size:13.0pt;
            font-family:" zawgyi-one","sans-serif";mso-fareast-font-family:"times="" new="" roman";=""
                                                        color:#333333;mso-fareast-language:tr"="">
                                                        <o:p>&nbsp;</o:p>
                                                    </span></p>
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