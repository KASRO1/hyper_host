@extends('content')

@section('content')




            <main>
                <div class="container wow fadeInUp">
                    <div class="slider">

                        @foreach($sliders as $slide)
                        <div class="slide">
                            <div>
                                <h1 class="title">
                                    {!! nl2br(__($slide->key_title_translate)) !!}
                                </h1>
                                <p class="text">
                                    {!! nl2br(__($slide->key_text_translat)) !!}
                                </p>
                                <a href="{{$slide->btn_link}}" class="btn"> <p>{!! __($slide->btn_text) !!}</p> <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M5 12H19M19 12L13 18M19 12L13 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div> </a>
                            </div>
                            <img src="{{$slide->img}}" alt="">
                        </div>
                        @endforeach

                    </div>
                </div>
            </main>


            <div class="slider flags">
                @php $i=1 @endphp
                @foreach($data_centers as $data_center)
                <div class="slide @if($i == 1) active @endif wow fadeInUp" data-wow-delay="0.2s" data-country="{{$data_center->en_name}}" data-id="{{$data_center->id}}">
                    <img src="{{$data_center->img}}" alt="">
                    <p>{{$data_center->name}}</p>
                </div>
                @php $i++; @endphp
                @endforeach
            </div>


            <div class="container">

                <div class="tabs wow fadeInUp" data-wow-delay="0.3s">
                    @php $i=1 @endphp
                    @foreach($categories as $category)
                    <div class="tab @if($i == 1) active @endif" data-id="{{$category->id}}">{{$category->name}}</div>
                    @php $i++; @endphp
                    @endforeach
                </div>
                <div class="slider tarifs wow fadeInUp" style="min-height: 719.14px; transition: 0.2s">
                    <!-- <div class="tarif">
                        <p class="title">
                            Mithril-[GE]
                            <img src="img/flags/germania.png" alt="">
                        </p>
                        <div class="infos">
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/cpu_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Процессор</p>
                                    <p class="text">vCore x20</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/ram_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Оперативная память</p>
                                    <p class="text">24 GB RAM ECC</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/disk_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Диск</p>
                                    <p class="text">300 GB NVMe</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/lan_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Порт</p>
                                    <p class="text">1 Gbps — Looking Glass</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/ip_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">IP адрес</p>
                                    <p class="text">v4 - 1 шт. v6 - /64 - 1 €</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/service_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Виртуализация</p>
                                    <p class="text">KVM</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/traffic_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Трафик</p>
                                    <p class="text">Безлимитный</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/window_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Операционные системы</p>
                                    <p class="text">Windows / Linux / Ubuntu / ISO</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="img/icons/panel_icon.svg" alt="">
                                </div>
                                <div>
                                    <p class="ititle">Панели управления</p>
                                    <p class="text">ISPmanager / VESTA / Cpanel</p>
                                </div>
                            </div>
                        </div>
                        <p class="price">
                            76.00 € <br>
                            <span>в месяц</span>
                        </p>
                        <a href="#" class="btn">Заказать сервер</a>
                    </div> -->
                </div>
                <div id="carousel">
                    <span class="sel"></span>
                    /
                    <span class="els"></span>
                </div>
                <div class="map_block wow fadeInUp">
                    <div class="map-dots">
                        @php $i=1 @endphp
                        @foreach($data_centers as $data_center)
                        <div class="map-dot @if($i == 1) active @endif" data-country="{{$data_center->en_name}}" style="top: {{$data_center->p_top}}%;left: {{$data_center->p_left}}%;">
                            <div class="dot"></div>
                            <span>{{$data_center->en_name}}</span>
                        </div>
                        @php $i++; @endphp
                        @endforeach
                    </div>
                    <img src="img/map_img.svg" alt="" class="map">
                </div>
            </div>

            <section class="infos">
                <h2 style="padding: 0 40px;" class="wow fadeInUp"><span>{{trans("xxxxs.xxxxxs")}}</span> для вас</h2>
                <div class="container">
                    <div class="item wow fadeInUp" data-wow-delay="0s">
                        <img src="img/icons/icon_shield.svg" alt="">
                        <p class="title">Адаптивная защита</p>
                        <p class="text">
                            Защита адаптирована под различные
                            проекты для использования на наших
                            VDS/VPS серверах.
                        </p>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay="0.15s">
                        <img src="img/icons/icon_rocket.svg" alt="">
                        <p class="title">БЫСТРАЯ РАБОТА</p>
                        <p class="text">
                            Топовые комплектующие в том числе
                            Ryzen, NVME SSD, высокоскоростное и
                            постоянное интенет соединение.
                        </p>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay="0.3s">
                        <img src="img/icons/icon_dashboard.svg" alt="">
                        <p class="title">Удобное управление</p>
                        <p class="text">
                            Многофункциональная и интуетивно
                            понятная панель управления
                            сервером
                            собственной разработки.
                        </p>
                    </div>

                    <div class="item wow fadeInUp">
                        <div class="dot"></div>
                        <img src="img/icons/icon_support.svg" alt="">
                        <p class="title">{!! __("for_you_support.title") !!}</p>
                        <p class="text">
                            Наши операторы службы поддержки
                            готовы помочь вам в решении любого
                            вопроса 24/7 без выходных.
                        </p>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay="0.15s">
                        <div class="dot"></div>
                        <img src="img/icons/icon-park-solid_speed-one.svg" alt="">
                        <p class="title">99.9% аптайм серверов</p>
                        <p class="text">
                            Мы гарантируем время непрерывной
                            работы вычислительной системы или
                            серверной части.
                        </p>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="dot"></div>
                        <img src="img/icons/connect_icon.svg" alt="">
                        <p class="title">SSH доступ, SFTP</p>
                        <p class="text">
                            Мы предоставляем
                            многофункциональный SSH/SFTP
                            доступ к нашим сервера.
                        </p>
                    </div>
                </div>
            </section>

            <section class="news">
                <h2 class="wow fadeInUp"><span>Последние новости</span> компании</h2>
                <div class="container">
                    @foreach($last_news as $new)
                    <div class="item wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img" src="{{$new->img}}" alt="">
                        <div class="content">
                            <p class="title">{{$new->title}}</p>
                            <p class="text" style="height: 53px">
                            {!! strip_tags($new->text) !!}
                            </p>
                            <a href="{{route('news_item', $new->link)}}" class="btn"> <p>Читать подробнее</p>
                                <img src="img/icons/tabler_arrow-right.svg" alt="">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{route('news')}}" class="more">Больше новостей</a>
            </section>

@endsection
