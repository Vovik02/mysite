@extends('layouts.main')
@section('title', 'Категорії')
@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/cat.css">
@endsection
@section('custom_js')
    <script src="/js/product.js"></script>
@endsection
@section('content')

    <!-- Home -->



    <div class="cats">
        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="cat_grid">

                    @foreach($categories as $catategory)
                        @php
                            $image = '';
                            if ($catategory->c_img){
                           $image =  "$catategory->c_img";
                            }else{
                              $image = 'not_image.png';
                            }
                        @endphp

                        <!-- Product -->
                            <div class="cat">
                                <div class="cat_image"><a href="/{{$catategory->alias}}"><img src="images/{{$image}} "alt="{{$catategory->title}}"></a></div>
                                <div class="cat_content">
                                    <div class="cat_title"><a href="/{{$catategory->alias}}">{{$catategory->title}}</a></div>
                                </div>
                            </div>
                    @endforeach





                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

