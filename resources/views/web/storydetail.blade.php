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
                    <a class="top-menu-back active" href="{{ url('categories') }}">
                        <i class="fas fa-arrow-left"></i></a>
                    <a class="top-menu-left-open" href="{{ url('faq') }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
                <div class="top-menu-center"><a class="logo" href="#">ကလေးပုံပြင်များ</a></div>
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
                                    <img class="img-responsive" src="{{ asset($story['image']) }}">
                                </div>
                                <section class="border-bottom py-3" id="detail">
                                    <div class="container-fluid">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="flex-1 mr-2">
                                                <h1 class="h5 page-video__title mb-2 font-weight-bold">{{ $story['title'] }}</h1>
                                                <h2 class="h6 page-video__sub-title mb-0"></h2>
                                            </div>
                                            <div class="page-video-buttons d-flex align-items-center ">
                                                <a id="favoriteBtn"
                                                    class="favorite-btn page-video-buttons__item btn btn-light rounded-circle mr-2 active favorite-add"
                                                    href="{{ url('post/'.$id.'/story/favourite') }}">
                                                    <i class="{{$fav}} fa-star"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                {!! $story['description'] !!}
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
    <script src="{{ asset('web/js/favourite.js') }}"></script>
</body>

</html>