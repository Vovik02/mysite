
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
        <a href="{{route('getFriends', ['category', $friend->friend_id])}}">
            <div class="product_image">
                <img src="images/{{$image}} "alt="{{$friend->friend_name}}">
            </div>
            <div class="product_content">
                <div class="product_title"><a href="{{route('getFriends', ['category', $friend->friend_id])}}">{{$friend->friend_name}}</a></div>
                <div class="product_price">{{$friend->friend_age}}</div>
            </div>
        </a>
    </div>
@endforeach
