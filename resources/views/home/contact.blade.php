@extends('layouts.main')
@section('title', 'Контакти')
@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/contact.css">
@endsection


@section('content')



    <!-- Product Details -->

    <div class="contact_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-4">
                    <div class="details_image">

                        <div class="details_image_large"><img src="/images/myphoto.jpg" alt=""></div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-8">
                    <div class="details_content">
                        <div class ="details_upper" >
                            <div class="details_name">Босак Володимир &nbsp &nbsp  </div>
                            <div class="details_share"><a href="https://www.instagram.com/vovik_02/" target=”_blank”><i class="fa fa-instagram" aria-hidden="true"></i></a> </div>
                        </div>


                        <div class="details_text">
                            <ul>
                                <li><b>Вік:</b> &nbsp19 років</li>
                                <li><b>Адреса: </b>  &nbspм. Львів</li>
                                <li><b>Місце навчаня:</b>  &nbspЛьвівський торговельно-економічний університет</li>
                            </ul>
                        </div>


                        <div class="details_text_1">
                            <div><b>Телефон: </b> &nbsp+380674945236</div>
                            <div><b>Пошта: </b>&nbsp bosakvolodia@gmail.com</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection

