@extends('welcome')

@section('content')
    <div class="container">
        <div class="box__subcontainer__botton">
            @foreach ($dataLigas as $item)
            <li class="sub__box__botton" style="list-style-type: none;"><a href="#">
                <img class="sub__botton__imagen" src="{{$item["league_logo"]}}" alt="" width="40px" rcset="">
                </a></li>
            @endforeach
        </div>
    </div>    
@endsection

