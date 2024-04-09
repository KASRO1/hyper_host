@extends('content')

@section('content')

            <main class="other_page">  
                <div class="container">
                    <h1><span>База</span> Знаний</h1>
                </div>
            </main>
        
 


            <div class="container other_page article"> 
                <div class="pages">
                    <a href="/">Главная</a> / <a href="{{route('base')}}">База знаний</a> / <a href="{{route('base_cat', $base_cat->id)}}">{{$base_cat->name}}</a> / <span>{{$base->title}}</span>
                 </div>
                 <div class="item">
                    <div class="date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_6_436)">
                                <path d="M12.5404 2.33342H10.9848V3.50009C10.9848 3.61244 10.9627 3.72369 10.9197 3.82749C10.8767 3.93129 10.8137 4.02561 10.7342 4.10506C10.6548 4.1845 10.5605 4.24752 10.4567 4.29052C10.3529 4.33351 10.2416 4.35564 10.1292 4.35564C10.0169 4.35564 9.90564 4.33351 9.80184 4.29052C9.69804 4.24752 9.60372 4.1845 9.52428 4.10506C9.44483 4.02561 9.38181 3.93129 9.33881 3.82749C9.29582 3.72369 9.27369 3.61244 9.27369 3.50009V2.33342H4.74313V3.50009C4.74313 3.72699 4.653 3.94461 4.49255 4.10505C4.3321 4.2655 4.11449 4.35564 3.88758 4.35564C3.66067 4.35564 3.44306 4.2655 3.28261 4.10505C3.12216 3.94461 3.03202 3.72699 3.03202 3.50009V2.33342H1.47647C1.38392 2.33237 1.2921 2.34988 1.20644 2.38493C1.12078 2.41998 1.04302 2.47185 0.977761 2.53748C0.912498 2.6031 0.861058 2.68115 0.826483 2.767C0.791909 2.85285 0.774901 2.94477 0.776467 3.03731V11.7406C0.774922 11.8315 0.791301 11.9219 0.824668 12.0064C0.858036 12.091 0.907738 12.1682 0.970936 12.2336C1.03413 12.2989 1.10959 12.3512 1.19299 12.3874C1.2764 12.4236 1.36611 12.443 1.45702 12.4445H12.5404C12.6313 12.443 12.721 12.4236 12.8044 12.3874C12.8878 12.3512 12.9632 12.2989 13.0264 12.2336C13.0896 12.1682 13.1393 12.091 13.1727 12.0064C13.2061 11.9219 13.2225 11.8315 13.2209 11.7406V3.03731C13.2225 2.9464 13.2061 2.85608 13.1727 2.7715C13.1393 2.68693 13.0896 2.60975 13.0264 2.54439C12.9632 2.47902 12.8878 2.42675 12.8044 2.39055C12.721 2.35435 12.6313 2.33494 12.5404 2.33342ZM3.88758 10.1112H3.1098V9.33342H3.88758V10.1112ZM3.88758 8.16675H3.1098V7.38898H3.88758V8.16675ZM3.88758 6.22231H3.1098V5.44453H3.88758V6.22231ZM6.22091 10.1112H5.44313V9.33342H6.22091V10.1112ZM6.22091 8.16675H5.44313V7.38898H6.22091V8.16675ZM6.22091 6.22231H5.44313V5.44453H6.22091V6.22231ZM8.55425 10.1112H7.77647V9.33342H8.55425V10.1112ZM8.55425 8.16675H7.77647V7.38898H8.55425V8.16675ZM8.55425 6.22231H7.77647V5.44453H8.55425V6.22231ZM10.8876 10.1112H10.1098V9.33342H10.8876V10.1112ZM10.8876 8.16675H10.1098V7.38898H10.8876V8.16675ZM10.8876 6.22231H10.1098V5.44453H10.8876V6.22231Z" fill="black" fill-opacity="0.2"/>
                                <path d="M3.88791 3.88882C3.99105 3.88882 4.08997 3.84785 4.1629 3.77492C4.23583 3.70199 4.2768 3.60307 4.2768 3.49993V1.1666C4.2768 1.06346 4.23583 0.964544 4.1629 0.891613C4.08997 0.818682 3.99105 0.77771 3.88791 0.77771C3.78477 0.77771 3.68586 0.818682 3.61293 0.891613C3.54 0.964544 3.49902 1.06346 3.49902 1.1666V3.49993C3.49902 3.60307 3.54 3.70199 3.61293 3.77492C3.68586 3.84785 3.78477 3.88882 3.88791 3.88882Z" fill="black" fill-opacity="0.2"/>
                                <path d="M10.1106 3.88882C10.2137 3.88882 10.3126 3.84785 10.3856 3.77492C10.4585 3.70199 10.4995 3.60307 10.4995 3.49993V1.1666C10.4995 1.06346 10.4585 0.964544 10.3856 0.891613C10.3126 0.818682 10.2137 0.77771 10.1106 0.77771C10.0074 0.77771 9.90851 0.818682 9.83558 0.891613C9.76265 0.964544 9.72168 1.06346 9.72168 1.1666V3.49993C9.72168 3.60307 9.76265 3.70199 9.83558 3.77492C9.90851 3.84785 10.0074 3.88882 10.1106 3.88882Z" fill="black" fill-opacity="0.2"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_6_436">
                                <rect width="14" height="14" fill="white"/>
                                </clipPath>
                            </defs>
                            </svg>
                        <span>{{$base->date}}</span>
                    </div> 
                    <img src="{{$base->img}}" alt="" class="img">
                    {!! nl2br($base->text) !!}
                 </div>
                 <div class="other">
                    <p class="title">Другие статьи раздела</p>
                    <div class="other_items">
                        @foreach($other as $item)
                        <a href="{{route('base_article', $item->link)}}" class="other_item"> 
                            <div class="img"><img src="{{$item->img}}" alt=""></div>
                            <p class="title">{{$item->title}}</p>
                        </a> 
                        @endforeach
                    </div>
                 </div>
            </div>

            @endsection