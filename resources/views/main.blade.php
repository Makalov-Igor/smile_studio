
@extends('app')

@section('content')
    <div class="top-slider-wrapper">
        <div class="top-slider">
            <div class="item first" style="background: url('{{asset('images/slider/slide1.jpg')}}') 50% 50% no-repeat; background-size: cover;">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slide-content" data-animation="fadeInUp" data-delay="0.5s">
                                <div class="title">
                                    Твоя<br />
                                    идеальная<br />
                                    улыбка!
                                </div>
                                <div class="push30"></div>
                                <a href="#callback" class="btn fancyboxModal">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url('{{asset('images/slider/slide2.jpg')}}') 50% 50% no-repeat; background-size: cover;">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slide-content" data-animation="fadeInRight" data-delay="0.5s">
                                <div class="title">
                                    Как экономить на лечении зубов?
                                </div>
                                <div class="text">
                                    Работа специалистов в клинике «Студия Улыбки» организована таким образом,
                                    что пациент сам выбирает один из предложенных ему вариантов лечения,
                                    чтобы не переплачивать за ненужные услуги.
                                    Воспользоваться нашими услугами могут клиенты с любым уровнем дохода.
                                </div>

                                <div class="push30"></div>
                                <a href="#callback" class="btn fancyboxModal">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url('{{asset('images/slider/slide3.jpg')}}') 50% 50% no-repeat; background-size: cover;">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slide-content" data-animation="fadeInDown" data-delay="0.5s">
                                <div class="title">
                                    Гарантия качества <br />
                                    на все виды услуг.
                                </div>
                                <div class="text">
                                    По данным проводившегося анкетирования клиентов, почти 90% из них обращаются к нам повторно. Они приводят с собой детей, советуют нашу клинику друзьям и знакомым.
                                </div>
                                <div class="push30"></div>
                                <a href="#callback" class="btn fancyboxModal">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="advantages-wrapper  gray-bg" id="services">
        <div class="push70"></div>

        <div class="container">
            <div class="text-center">
                <div class="suptitle-h1 color-scheme-defauult">Мы выполняем комплекс</div>
                <div class="title-h1 bold">Стоматологических услуг</div>
                <div class="subtitle-h1 dental_services_title">
                    Высококвалифицированные специалисты клиники «Студия Улыбки» могут предложить Вам <br/> полный спектр
                    стоматологических услуг.
                </div>
                <div class="push10"></div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="element text-center">
                        <div class="img-wrapper">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <img src="{{asset('images/adv/adv1.png')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="element-content">
                            <div class="title black bold f16">
                                <div class="table">
                                    <div class="table-cell">
                                        Ортодонтия
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Лечение дефектов развития зубов и челюстно-лицевого скелета с применением брекет-систем, элайнеров, съемных пластин.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="element text-center delay-200">
                        <div class="img-wrapper">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <img src="{{asset('images/adv/adv2.png')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="element-content">
                            <div class="title black bold f16">
                                <div class="table">
                                    <div class="table-cell">
                                        Терапия и детское отделение
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Лечение и перелечивание каналов, лечение кариеса, профессиональная гигиена, отбеливание, реставрации. Доступно взрослым и детям.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="element text-center delay-400">
                        <div class="img-wrapper">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <img src="{{asset('images/adv/adv3.png')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="element-content">
                            <div class="title black bold f16">
                                <div class="table">
                                    <div class="table-cell">
                                        Протезирование
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Восстановление прикуса безметаловыми конструкциями, виниры, протезирование на импланте.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="element text-center delay-600">
                        <div class="img-wrapper">
                            <div class="table">
                                <div class="table-cell text-center">
                                    <img src="{{asset('images/adv/adv4.png')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="element-content">
                            <div class="title black bold f16">
                                <div class="table">
                                    <div class="table-cell">
                                        Хирургия и Имплантация
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Тотальное восстановление жевательной функции по технологиям «All in 4» и «ALl in 6».
                                Удаления зубов любой сложности.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="push60"></div>
    </div>

    <div class="about-section" id="about">
        <div class="container">
            <div class="inner" style="background-image: url({{asset('images/doctorl.png')}});">
                <div class="push60 hidden-xs hidden-sm"></div>
                <div class="push60"></div>

                <div class="row delay-1000">
                    <div class="col-md-6 col-md-offset-6">
                        <h1 class="bold">
                            Почему нам доверяют?
                        </h1>
                        <q>
                            Клиника более 10 лет предоставляет высококачественные стоматологические услуги.
                            За это время мы подарили улыбки мечты тысячам благодарных клиентов.
                        </q>
                        <p>
                            В работе мы используем только качественные импортные материалы. Для удобства наших пациентов мы используем различные виды
                            анастезии, в том числе имеются препараты подходящие людям страдающим аллергией, беременным и кормящим мамам.
                        </p>
                        <p>
                            У нас работают исключительно специалисты высокой квалификации, систематически проходящие обучение самым современным методикам и технологиям,
                            имеющие подтверждающие сертификаты. Мы очень строго относимся к компетенции каждого сотрудника.
                        </p>
                        <p>
                            В нашей клиники можно лечиться всей семьей. Для детей у нас оборудован специальный детский кабинет.
                            Детский стоматолог как опытный психолог использует приёмы показывающие ребенку что лечить зубы не страшно и не больно.
                        </p>
                        <div class="push10"></div>
                        <a href="#callback" class="btn fancyboxModal">Получить консультацию</a>
                    </div>
                </div>

                <div class="push30 hidden-xs hidden-sm"></div>
                <div class="push60"></div>
            </div>
        </div>
    </div>

    <div class="team-section" id="team">
        <div class="push60"></div>

        <div class="container">
            <div class="text-center">
                <div class="suptitle-h1">наши специалисты</div>
                <div class="title-h1 white bold">Врачи стоматологи</div>
                <div class="subtitle-h1">
                </div>
            </div>
            <div class="push10"></div>
            <div class="team-carousel text-center">
                @foreach($employees as $employee)
                <div class="item">
                    <div class="element">
                        <div class="img-wrapper team_photo_container"
                             style="background-image: url('{{asset("images/team/".$employee->image)}}')">
                        </div>
                        <div class="push15"></div>
                        <div class="title f15 bold white">
                            {{$employee->fullname}}
                        </div>
                        <div class="text f13">{{$employee->position}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="push70"></div>
    </div>

    @include('feedback')

    <div class="consult-section relative" style="background-image: url('{{asset('images/consult-section.jpg')}}');">
        <div class="push70"></div>

        <div class="container relative">
            <div class="text-center white office_image team_photo">
                <div class="title-h1 white bold">Индивидуальный подход к каждому пациенту</div>
                <div class="subtitle-h1 individual">
                    По завершении лечения мы обязательно приглашаем пациентов на профилактические осмотры, чтобы исключить вероятность нежелательных последствий. На все виды вмешательств выдаем длительную гарантию.
                </div>
                <div class="push10"></div>
                <a href="#callback" class="btn white-btn min fancyboxModal"><i class="material-icons">settings_phone</i> Получить бесплатную консультацию</a>
            </div>
        </div>

        <div class="push70"></div>
    </div>

    <div class="hit-section" id="spec">
        <div class="push70"></div>

        <div class="container text-center">
            <div class="suptitle-h1">Только у нас</div>
            <div class="title-h1 bold">Гарантия лучшей цены</div>
            <div class="subtitle-h1">
            </div>
            <div class="push10"></div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="element">
                        <div class="img-wrapper">
                            <img src="{{asset('images/hits/hit1.png')}}" />
                        </div>
                        <div class="push15"></div>
                        <div class="title f16 bold black">
                            <div class="table">
                                <div class="table-cell">
                                    Основные работы
                                </div>
                            </div>
                        </div>
                        <div class="price">от 999 руб.</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="element delay-200">
                        <div class="img-wrapper">
                            <img src="{{asset('images/hits/hit1.png')}}" />
                        </div>
                        <div class="push15"></div>
                        <div class="title f16 bold black">
                            <div class="table">
                                <div class="table-cell">
                                    Профилактика зубов
                                </div>
                            </div>
                        </div>
                        <div class="price">от 500 руб.</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="element delay-400">
                        <div class="img-wrapper">
                            <img src="{{asset('images/hits/hit2.png')}}" />
                        </div>
                        <div class="push15"></div>
                        <div class="title f16 bold black">
                            <div class="table">
                                <div class="table-cell">
                                    Протезирование
                                </div>
                            </div>
                        </div>
                        <div class="price">от 2500 руб.</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="element delay-600">
                        <div class="img-wrapper">
                            <img src="{{asset('images/hits/hit3.png')}}" />
                        </div>
                        <div class="push15"></div>
                        <div class="title f16 bold black">
                            <div class="table">
                                <div class="table-cell">
                                    Хирургическое лечение
                                </div>
                            </div>
                        </div>
                        <div class="price">от 1500 руб.</div>
                    </div>
                </div>
            </div>
            <div class="push20"></div>
            <a href="#" class="btn min color-scheme-defauult-btn2 invert"><i class="fa fa-calculator f18" aria-hidden="true"></i> Скачать прайс-лист</a>
        </div>

        <div class="push60"></div>
    </div>

    <div class="rev-section" id="reviews">
        <div class="push70"></div>

        <div class="container">
            <div class="text-center">
                <i class="material-icons f48 color-scheme-defauult">format_quote</i>
                <div class="title-h1">
                    Отзывы клиентов
                </div>
                <div class="subtitle-h1">
                </div>
                <div class="push10"></div>
            </div>
            <div class="rev-carousel">
                @foreach($reviews as $review)
                <div class="item">
                    <div class="element">
                        <div class="element-header relative">
                            <img src="{{asset('images/rev_logo.png')}}" />
                            <div class="title bold black f16">{{ $review->fullname }}</div>
                        </div>
                        <div class="push20"></div>
                        <div class="element-body">
                            {{ $review->message }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="reviews_container">
            <a href="#reviews_form" class="btn fancyboxModal">Оставить отзыв</a>
        </div>
        <div class="push50"></div>
    </div>

    <a id="contacts"></a>

    <div class="contacts-section relative">
        <div class="container">
            <div class="push60"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="inner">
                        <div class="title-h1 bold">Контакты</div>

                        <div class="push30"></div>
                        <div class="element el1 relative">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="bold f14">г. Ростов-на-Дону, пер. Днепровский, д. 115Б</span>
                        </div>
                        <div class="element el2 relative">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="bold f20">+7 (863) 307-83-93</span> <br />
                            <span class="bold f20">+7 (936) 865-60-06</span>
                        </div>
                        <div class="element el3 relative">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Режим работы: с 9.00 - 19.00, <br />
                            выходной воскресенье
                        </div>
                        <div class="element el4 relative">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:studio-smiles.kochnov@yandex.ru" class="invert">studio-smiles.kochnov@yandex.ru</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="push70"></div>
        </div>
        <script src="http://api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU" type="text/javascript"></script>
        <div id="mapexMap"></div>
    </div>

    @include('callback')
    @include('reviews')

@endsection
