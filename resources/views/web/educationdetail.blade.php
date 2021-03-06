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
            <header class="row m-0 fixed-header top-menu bg-red">
                <div class="top-menu-left">
                    <a class="top-menu-back active" href="{{ url('categories') }}">
                        <i class="fas fa-arrow-left"></i></a>
                    <a class="top-menu-left-open" href="{{ url('faq') }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
                <div class="top-menu-center"><a class="logo"
                        href="">ပညာပေးရုပ်သံ</a></div>
                <div class="top-menu-right">
                    <a class="menu-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                    <a class="top-menu-close" href="#"><i
                            class="fas fa-times"></i></a>
                    <a class="top-menu-right-open active"
                        href="#"><i class="fas fa-bars"></i></a>
                </div>
            </header>
            <div class="page-content">
                <div class="page-video">
                    <video width="100%" height="260px" poster="{{ asset($video['image']) }}" controls>
                        <source src="{{ asset($video['video']) }}" type="video/mp4">
                    </video>
                    <section class="border-bottom py-3" id="detail">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between align-items-start flex-wrap">
                                <div class="flex-1 mr-2">
                                    <h1 class="h5 page-video__title mb-2 font-weight-bold">{{ $video['title'] }}</h1>
                                    <h2 class="h6 page-video__sub-title mb-0"></h2>
                                </div>
                                <div class="page-video-buttons d-flex align-items-center">
                                    <a class="favorite-btn page-video-buttons__item btn btn-light rounded-circle mr-2 active "
                                        id="favoriteBtn" href="{{ url('post/'.$id.'/education/favourite') }}">
                                        <i class="{{$fav}} fa-star"></i>
                                    </a>
                                    <div class="page-share">
                                        <a class="page-video-buttons__item btn btn-red rounded-circle" id="shareBtn"
                                            href="#"><i class="fas fa-share"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="videos py-1 col-md-6 m-auto" id="otherVideos">
                        <?php
                            $videos = config('education');
                            unset($videos[$id]);
                        ?>

                        @foreach($videos as $key => $video)
                            <div class="border-bottom p-2 ">
                                <a class="section-videos-item  px-1"
                                    href="{{ url('education/'.$key.'/detail') }}">
                                    <div class="section-videos-item__picture w-100"><img
                                            src="{{ asset($video['image']) }}"></div>
                                    <div class="px-3 py-1">
                                        <div class="section-videos-item__title">{{ $video['title'] }}</div>
                                        <div class="section-videos-item__sub-title mt-2"></div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </section>
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