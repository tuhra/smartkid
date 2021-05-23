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
    <link href="{{ asset('web/css/jquery.scrollbar.min.css') }}" rel="stylesheet">
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
    <div class="wrapper">
        <?php
            $url = asset('web/images/bg-7.png');
        ?>
        @include('web.layout.menu')
        <div class="page">
            <header class="row m-0 fixed-header top-menu bg-yellow">
                <div class="top-menu-left">
                    <a class="top-menu-back active" href="{{ url('cagegories') }}">
                        <i class="fas fa-arrow-left"></i></a>
                    <a class="top-menu-left-open" href="{{ url('faq') }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
                <div class="top-menu-center"><a class="logo" href="{{ url('storyforkid/hansel-and-gretel') }}">ကလေးပုံပြင်များ</a></div>
                <div class="top-menu-right">
                    <a class="menu-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                    <a class="top-menu-close" href="#"><i class="fas fa-times"></i></a>
                    <a class="top-menu-right-open active" href="#"><i class="fas fa-bars"></i></a>
                </div>
            </header>
            
                        <div class="page-content">
                            <style>
                                .fav {
                                    color: #fcad04;
                                }
                            </style>
                            <div class="page-video">
                                <div class="text-center">
                                    <img class="img-responsive"
                                        src="{{ asset('web/storage/articles/old/classic-children-story-hansel-and-gretel-vector-6152159.jpg') }}">
                                </div>
                                <section class="border-bottom py-3" id="detail">
                                    <div class="container-fluid">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="flex-1 mr-2">
                                                <h1 class="h5 page-video__title mb-2 font-weight-bold">စုန်းမကြီးရဲ့ ရတနာတွေ
                                                    ရယူနိုင်ခဲ့တဲ့ ဟန်ဆယ်နဲ့ ဂရက်တယ်</h1>
                                                <h2 class="h6 page-video__sub-title mb-0"></h2>
                                            </div>
                                            <div class="page-video-buttons d-flex align-items-center ">
                                                <a id="favoriteBtn"
                                                    class="favorite-btn page-video-buttons__item btn btn-light rounded-circle mr-2 active favorite-add"
                                                    href="http://my-smartkids.com/favorites/stories-for-kids/13">
                                                    <i class="far fa-star"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p><span lang="EN-US" style="font-size:14.0pt;line-height:
            115%;font-family:&quot;Zawgyi-One&quot;,sans-serif;mso-fareast-font-family:&quot;Segoe UI&quot;;
            mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">တစ်ခါတုန်းက
                                                        ဆင်းရဲလှတဲ့ သစ်ခုတ်သမား ဇနီးမောင်နှံနှစ်ဦးမှာ ဟန်ဆယ်နဲ့ ဂရက်တယ် ဆိုတဲ့
                                                        သားသမီးနှစ်ဦး
                                                        ရှိပါသတဲ့။ တစ်နေ့မှာ ဟန်ဆယ်နဲ့ ဂရက်တယ် တို့ရဲ့ မေမေဆုံးပါးသွားပြီး
                                                        မကြာခင်မှာပဲ
                                                        သူတို့ရဲ့ ဖခင်က နောက်မိန်းမထပ်ယူလိုက်ပါတယ်။ ဟန်ဆယ်နဲ့ဂရက်တယ်တို့ရဲ့
                                                        မိထွေးဖြစ်သူဟာ
                                                        ရက်စက်သူတစ်ဦးဖြစ်တာကြောင့် တစ်နေ့မှာ ဟန်ဆယ်နဲ့ ဂရက်တယ်ကို တောနက်ထဲကို
                                                        ခေါ်သွားပြီး
                                                        လမ်းပျောက်အောင်လုပ်ကာ ပစ်ထားခဲ့ပါတယ်။ ဒါပေမယ့် ဉာဏ်ကောင်းလှတဲ့ ဟန်ဆယ်က
                                                        သူ့မိထွေးတောထဲကို
                                                        စပြီး ခေါ်လာကတည်းက သူ့အိတ်ကပ်ထဲမှာ ရှိတဲ့ ပေါင်မုန့်လေးတွေကို
                                                        လမ်းတလျှောက်ပစ်ချခဲ့ပြီး
                                                        အပြန်လမ်းကို မှတ်သားခဲ့တာကြောင့် သူတို့မောင်နှမနှစ်ဦးကို
                                                        မိထွေးကပစ်ထားခဲ့ချိန်မှာ
                                                        ပေါင်မုန့်လေးတွေကိုကြည့်ပြီး အိမ်အပြန်လမ်းအတိုင်း ပြန်လာခဲ့ကြပါတယ်။ ဒါပေမယ့်
                                                        ကံတရားက
                                                        မျက်နှာသာမပေးတာကြောင့် လမ်းတစ်ဝက်မှာပဲ သူပစ်ချခဲ့တဲ့ ပေါင်မုန့်လေးတွေကို
                                                        မတွေ့ရတော့ပါဘူး
                                                        ။ အကြောင်းကတော့ သူ့ရဲ့ပေါင်မုန့်တွေကို ငှက်တွေက စားပစ်လိုက်လို့ပါပဲ။
                                                        လမ်းပျောက်သွားပြီဖြစ်တဲ့
                                                        ဟန်ဆယ်နဲ့ ဂရက်တယ်တို့နှစ်ဦးဟာ တောထဲမှာ စမ်းတဝါးဝါးသွားရင်းနဲ့
                                                        တောနက်ထဲကိုရောက်သွားခဲ့ပါတော့တယ်။
                                                        အဲဒီအချိန်မှာ သူတို့နှစ်ဦးလုံး ဗိုက်လည်း ဆာပြီး အရမ်းကို
                                                        ပင်ပန်းနေခဲ့ကြပြီဖြစ်ပါတယ်။
                                                        အချိန်အတော်ကြာလမ်းလျှောက်လာခဲ့ကြပြီးချိန်မှာတော့ သူတို့မောင်နှမနှစ်ယောက်
                                                        အံ့အားသင့်စရာ
                                                        မြင်ကွင်းတစ်ခုကို မြင်လိုက်ကြရပါတယ်။ အဲဒါကတော့ ချော့ကလက်၊ သကြားလုံး၊
                                                        ကိတ်မုန့်တွေနဲ့
                                                        ပြုလုပ်ထားတဲ့ အိမ်ငယ်လေးတစ်လုံး တွေ့လိုက်ရတာပါပဲ။ အငယ်မလေး ဂရက်တယ်က
                                                        "ဟိုမှာကြည့်စမ်း
                                                        အစ်ကိုဟန်ဆယ်! ချော့ကလက်တံတားကြီး ရှိနေတယ်" လို့အော်ပြီး
                                                        ချော့ကလက်တံတားဆီပြေးသွားကာ
                                                        မောင်နှမနှစ်ယောက် အားရပါးရ စားလိုက်ကြပါတော့တယ်။ တကယ်တမ်းကတော့
                                                        ဒီချော့ကလက်တွေက ကလေးငယ်တွေကို
                                                        ဆွဲဆောင်ဖို့လုပ်ထားတဲ့ စုန်းမကြီးရဲ့ အကြံအစည်ပါပဲ။ ဒီအိမ်ထဲမှာ
                                                        စုန်းမကြီးတစ်ဦးနေနေတယ်လေ။
                                                        ဟန်ဆယ်နဲ့ ဂရက်တယ်တို့ကို တွေ့သွားတဲ့ စုန်းမကြီးက သူတို့နှစ်ဦးကို
                                                        လှောင်အိမ်တစ်ခုစီမှာ
                                                        ထည့်ဖမ်းပြီး ချက်ပြုတ်စားသောက်ဖို့ ပြင်ဆင်နေပါတော့တယ်။ စုန်းမကြီးက
                                                        သူတို့မောင်နှမနှစ်ယောက်ထဲက
                                                        ဟန်ဆယ်ကို အရင်ဆုံးစွပ်ပြုတ်ထဲ ထည့်သောက်ဖို့ အကြံနဲ့&nbsp; ဟင်းရည်အိုးကြီးကို
                                                        အရင်ဆုံးတည်နေတဲ့အချိန်မှာပဲ
                                                        ဂရက်တယ်က လှောင်အိမ်ထဲကနေ လွတ်မြောက်ခွင့်ရဖို့ ကြိုးစားနေတာပါ။ ဂရက်တယ်ရဲ့
                                                        ကြိုးစားမှုအောင်မြင်သွားပြီး&nbsp; အမှတ်မထင် လှောင်အိမ်တံခါးသော့
                                                        ပွင့်သွားခဲ့ချိန်မှာတော့
                                                        ဂရက်တယ်က ဟင်းအိုးနားမှာရှိနေတဲ့ စုန်းမကြီးကို ဟင်းအိုးထဲကို
                                                        အားကုန်တွန်းချလိုက်ပါတော့တယ်။
                                                        ဟင်းရည်ပူအိုးထဲကျသွားတဲ့ စုန်းမကြီးက ငြီးတွားအော်ဟစ်ပြီး မကြာခင်မှာပဲ
                                                        သေဆုံးသွားခဲ့ပါတယ်။
                                                        ဂရက်တယ်က ဟန်ဆယ်ကို လှောင်အိမ်တံခါးဖွင့်ပေးလိုက်ပြီး စုန်းမကြီးရဲ့ အိမ်ကို
                                                        လှည့်ပတ်ကြည့်ရှုကြတဲ့အခါမှာ
                                                        ရတနာတွေ အမြောက်အမြားရှိနေတာကိုလည်း တွေ့လိုက်ကြရပါတယ်။ သူတို့မောင်နှမနှစ်ဦးဟာ
                                                        ရတနာတွေကို
                                                        သယ်ဆောင်ပြီး သူတို့အိမ်ဆီကို မှန်းဆပြန်လာခဲ့ကြတဲ့အချိန်မှာ သူတို့ကို
                                                        တောထဲမှာ ပစ်ထားခဲ့တဲ့
                                                        မိထွေးဖြစ်သူက သေဆုံးသွားခဲ့ပြီပဲ ဖြစ်ပါတယ်။ ဟန်ဆယ်တို့ပြောပြလို့
                                                        အကြောင်းစုံသိသွားတဲ့
                                                        ဖခင်ဖြစ်သူက ဟန်ဆယ်တို့ကို နွေးထွေးစွာကြိုဆိုပြီး သူတို့သားအဖသုံးဦး
                                                        အသက်ထက်ဆုံး
                                                        ပျော်ရွှင်စွာနဲ့ နေထိုင်သွားကြသတဲ့ကွယ်။ ဟန်ဆယ်နဲ့ ဂရက်တယ်တို့ဘဝမှာ
                                                        နောက်ထပ်ဆာလောင်မှု
                                                        ဆိုတာလည်း မရှိတော့ပါဘူးတဲ့။&nbsp;</span></p>
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