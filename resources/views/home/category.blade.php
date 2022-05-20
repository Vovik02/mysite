@extends('layouts.main')
@section('title', $cat->title)
@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/categories.css">
    <link rel="stylesheet" type="text/css" href="/styles/categories_responsive.css">
@endsection

@section('content')

    <!-- Home -->
    <div class="home_content">

        <div class="home_title">{{$cat->title}}

    </div>


    <div class="products">
        <div class="container">

            <div class="row">
                <div class="col">

                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Показано результатів:  <span>{{$cat->friend->count()}}</span></div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Сортувати за</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn" data-order="default"><span>За замовчуванням</span></li>
                                            <li class="product_sorting_btn" data-order="sex-m"><span>Стать: Чоловіча</span></li>
                                            <li class="product_sorting_btn" data-order="sex-w"><span>Стать:  Жіноча</span></li>
                                            <li class="product_sorting_btn" data-order="age-low-high"><span>Вік:  За зростанням</span></li>
                                            <li class="product_sorting_btn" data-order="age-high-low"><span>Вік:  За спаданням</span></li>
                                            <li class="product_sorting_btn" data-order="name-a-z"><span>За алфавітом:  Від А до Я</span></li>
                                            <li class="product_sorting_btn" data-order="name-z-a"><span>За алфавітом:  Від Я до А</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="product_grid">

                    @foreach($friends as $friend)
                        @php
                            $image = '';
                            if ($friend->friend_image){
                           $image =  "$friend->friend_image";
                            }else{
                              $image = 'not_image.png';
                            }
                        @endphp

                        <!-- Product -->
                            <div class="product">
                                <a href="{{route('getFriends', [$cat->alias, $friend->friend_id])}}">
                                    <div class="product_image">
                                        <img src="images/{{$image}} "alt="{{$friend->friend_name}}">
                                    </div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="{{route('getFriends', [$cat->alias, $friend->friend_id])}}">{{$friend->friend_name}}</a></div>
                                        @php
                                            $age = " років";
                                            if ($friend->friend_age == 21 || $friend->friend_age == 31){
                                            $age = " рік";
                                            }elseif ($friend->friend_age == 22 || $friend->friend_age == 23 ||$friend->friend_age == 24 ){
                                                $age = " роки";
                                            }
                                        @endphp
                                        <div class="product_price">{{$friend->friend_age}}{{$age}}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('custom_js')
    <script>
        $(document).ready(function (){
            $('.product_sorting_btn').click(function (){
                let orderBy = $(this).data('order')
                $('.sorting_text').text($(this).find("span").text())
                $.ajax({
                    url: "{{route('getCategory', $cat->alias)}}",
                    type: "GET",

                    data: {
                          orderBy: orderBy
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {

                        $('.product_grid').html(data)

                        $('.product_grid').isotope('destroy')
                        $('.product_grid').imagesLoaded( function() {
                            let grid = $('.product_grid').isotope({
                                itemSelector: '.product',
                                layoutMode: 'fitRows',
                                fitRows:
                                    {
                                        gutter: 30
                                    }
                            });
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                })
            })
        })
    </script>
@endsection
