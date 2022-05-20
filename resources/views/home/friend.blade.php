@extends('layouts.main')
@section('title', $item->friend_name)
@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/product.css">
@endsection
@section('custom_js')
    <script src="/js/product.js"></script>
@endsection


@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                @php
                                $cat_f = 'Інший друг';


                                switch ($item->friend_cat) {
                                    case 1:
                                    $cat_f = 'Друг зі школи';
                                    break;
                                case 2:
                                    $cat_f = 'Друг з коледжу';
                                    break;
                                case 3:
                                    $cat_f = 'Друг з університету';
                                    break;
                                case 4:
                                    $cat_f = "Друг з футбoлу";
                                    break;
}
                                @endphp
                                <div class="home_title">{{$cat_f}}</div>
                                 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Image -->
                <div class="col-lg-4">
                    <div class="details_image">
                        @php
                        $image = '';
                        if ($item->friend_image){
                        $image =  "$item->friend_image";
                        }else{
                        $image = 'not_image.png';
                        }
                        @endphp
                        <div class="details_image_large"><img src="/images/{{$image}}" alt=""></div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="details_content">
                       <div class ="details_upper" >
                           <div class="details_name"><span style="margin-right: 50px">{{$item->friend_name}}</span>
                           </div>
                           <div class="details_share"><a href="{{$item->friend_inst}} " target=”_blank”><i class="fa fa-instagram" aria-hidden="true"></i></a> </div>
                       </div>
                        @php
                            $age = " років";
                            if ($item->friend_age == 21 || $item->friend_age == 31){
                            $age = " рік";
                            }elseif ($item->friend_age == 22 || $item->friend_age == 23 ||$item->friend_age == 24 ){
                                $age = " роки";
                            }
                        @endphp

                        <div class="details_text">
                            <ul>
                                <li><b>Вік:</b> {{$item->friend_age}}{{$age}}</li>
                                <li><b>Стать:</b> {{$item->friend_sex}}</li>
                                <li><b>Адреса: </b> {{$item->friend_adress}}</li>
                                <li><b>Місце навчаня:</b> {{$item->friend_study}}</li>
                            </ul>
                        </div>
                        <div class="details_text_1">
                            <div><b>Телефон: </b>{{$item->friend_phone}}</div>
                            <div><b>Пошта: </b>{{$item->friend_email}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
