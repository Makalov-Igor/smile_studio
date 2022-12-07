ymaps.ready(function () {
    var mapexMap = new ymaps.Map('mapexMap', {
            center: [47.2878832, 39.7566568], // центр карты
            zoom: 18, // масштаб
            controls: ['zoomControl']
        }),


        myPlacemark = new ymaps.Placemark(
            [47.2878832, 39.7566568], // координаты маркера
            {
                "iconContent": "",
                "balloonContentBody": "г. Москва, ул. Ваша улица 59, д. 422, офис 512",
                "balloonContentHeader": "Finance Group"
            }, // контент маркера
            {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: 'images/marker.png',
                // Размеры метки.
                iconImageSize: [30, 42],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-5, -38]
            });
    mapexMap.behaviors.disable('scrollZoom');
    mapexMap.geoObjects.add(myPlacemark);
});
