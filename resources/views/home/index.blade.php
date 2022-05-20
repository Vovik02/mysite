@extends('layouts.main')
@section('title', 'Головна сторінка')

@section('content')
    <!-- Home -->

    <div class="welcome_container">
        <div class="container">
            <div class="welcome_content text-center"><div class="welcome_title">Вітаю на моєму <span class="welcome_title_1">курсовому проєкті</span></div>
                <div class="welcome_title_1">Довідник <span class="welcome_title">друзів</span></div>
                <a href="/all"><button class="newsletter_button trans_200"><span>Всі друзі</span></button></a>
                <a href="/categories"><button class="newsletter_button trans_200"><span>Категорії друзів</span></button></a>
            </div>
        </div>

    </div>
</div>
</div>



<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="newsletter_content img"><img src="/images/icon.png" >
                </div>
            </div>
            <div class="col-lg-6 offset-lg">
                <div class="newsletter_content text-center">	<div class="newsletter_title">Про проєкт</div>
                    <div class="newsletter_text"><span>В своєму проєкті я реалізував обєктно-орієнтовну модель Довідника Друзів використавши наведені нижче технології.</span></div></div>
            </div>
        </div>
    </div>
</div>

<!-- Icon Boxes -->

<div class="icon_boxes">
    <div class="newsletter_content_1 text-center">
        <div class="newsletter_title">Використані технології</div>
    </div>
    <div class="container">
        <div class="row icon_box_row">


            <!-- Icon Box -->
            <div class="col-lg-2 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/images/html.png" alt=""></div>
                    <div class="icon_box_title">HTML</div>

                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-2 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/images/css.png" alt=""></div>
                    <div class="icon_box_title">CSS</div>

                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-2 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/images/js.png" alt=""></div>
                    <div class="icon_box_title">JS</div>

                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-2 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/images/mysql.png" alt=""></div>
                    <div class="icon_box_title">MYSQL</div>

                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-2 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/images/php.png" alt=""></div>
                    <div class="icon_box_title">PHP 8</div>

                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-2 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/images/laravel.png" alt=""></div>
                    <div class="icon_box_title">Laravel 9</div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
