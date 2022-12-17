
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
                                    Лечение зубов <br />
                                    под микроскопом
                                </div>
                                <div class="text">
                                    Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и
                                    реализации соответствующий условий активизации.
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
                                    Эффективные методы <br />
                                    постановки диагноза
                                </div>
                                <div class="text">
                                    Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и
                                    реализации соответствующий условий активизации.
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
                <div class="subtitle-h1">
                    Равным образом консультация с широким активом позволяет оценить значение существенных финансовых и <br />
                    административных условий.
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
                                        Зубные импланты
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Идейные соображения высшего порядка, а также реализация намеченных плановых заданий.
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
                                        Отбеливание зубов
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Идейные соображения высшего порядка, а также реализация намеченных плановых заданий.
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
                                        Косметические брекеты
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Идейные соображения высшего порядка, а также реализация намеченных плановых заданий.
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
                                        Протезирование зубов
                                    </div>
                                </div>
                            </div>
                            <div class="text f13">
                                Идейные соображения высшего порядка, а также реализация намеченных плановых заданий.
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
                            Залог качественного <br />
                            лечения
                        </h1>
                        <q>
                            Значимость этих проблем настолько очевидна, что новая модель организационной деятельности влечет за собой
                            процесс внедрения и модернизации новых предложений.
                        </q>
                        <p>
                            Равным образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия.
                            Таким образом дальнейшее развитие различных форм деятельности требуют от нас анализа направлений прогрессивного развития.
                        </p>
                        <p>
                            С другой стороны дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке модели развития.
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
                    Дальнейшее развитие различных форм деятельности требуют от нас анализа направлений <br />
                    прогрессивного развития, другой стороны дальнейшее развитие.
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
                <div class="title-h1 white bold">Комплекс стоматологических услуги для всей семьи!</div>
                <div class="subtitle-h1">
                    Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности представляет <br />
                    собой интересный эксперимент проверки направлений прогрессивного развития.
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
                Задача организации, в особенности же реализация намеченных плановых заданий требуют от нас анализа. <br />
                Повседневная практика показывает, что консультация с широким активом позволяет выполнять важные задания.
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
                    Повседневная практика показывает, что начало повседневной работы по формированию позиции способствует <br />
                    подготовки и реализации соответствующий условий активизации.
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
                            <span class="bold f20">8(9999) 22-88-88</span> <br />
                            <span class="bold f20">8(9999) 22-88-99</span>
                        </div>
                        <div class="element el3 relative">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Режим работы: с 9.00 - 19.00, <br />
                            выходной воскресенье
                        </div>
                        <div class="element el4 relative">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:finance@service.com" class="invert">finance@service.com</a>
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
