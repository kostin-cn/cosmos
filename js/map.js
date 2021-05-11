let map = document.querySelector('#map');
let btn = document.querySelector('#createRoute');
let myMap,
    myPlacemark,
    myPlacemarkWithContent,
    mylat,
    mylng,
    mycenterLat,
    mycenterLng,
    myzoom,
    myplacemark,
    myTop,
    myTop2,
    panel;
if (map) {
        mylat = parseFloat(map.dataset.lat);
        mylng = parseFloat(map.dataset.lng);
        mycenterLat = parseFloat(map.dataset.center_lat);
        mycenterLng= parseFloat(map.dataset.center_lng);
        myzoom = parseInt(map.dataset.zoom);
        myplacemark = map.dataset.placemark;
    ymaps.ready(init);

    btn.addEventListener('click', function () {
        if (!panel) {
            panel = new ymaps.control.RoutePanel();
            panel.routePanel.state.set({
                // Тип маршрутизации.
                type: 'masstransit',
                // Включим возможность задавать пункт отправления в поле ввода.
                fromEnabled: true,
                // Адрес или координаты пункта отправления.
                // from: [56.130862, 36.504313],
                // Выключим возможность задавать пункт назначения в поле ввода.
                toEnabled: false,
                // Адрес или координаты пункта назначения.
                to: [mylat, mylng]
                // to: map.dataset.address
            });
            panel.routePanel.options.set({
                // Адрес будет автоматически подставляться в поле ввода на панели, а также в подпись метки маршрута.
                reverseGeocoding: true,
            });
            myMap.controls.add(panel);
        }
    })
}

function init() {

    if (window.innerWidth < 960) {
        mycenterLat = mylat;
        mycenterLng = mylng;
        myTop = 10;
        myTop2 = 76;
    }else {
        myTop = 250;
        myTop2 = 316;
    }

    myMap = new ymaps.Map("map", {
        center: [mycenterLat, mycenterLng],
        controls: ['geolocationControl', 'zoomControl'],
        zoom: myzoom,
    }, {
        suppressMapOpenBlock: true
    });

    // myPlacemark = new ymaps.Placemark(
    //     [56.130862, 36.504313],
    //     {
    //         hintContent: 'Cosmos',
    //     },
    //     {
    //         preset: 'islands#glyphIcon',
    //         iconGlyph: 'glass',
    //         iconColor: '#22AA39'
    //     }
    // );

    // myMap.geoObjects.add(myPlacemark);

    myPlacemarkWithContent = new ymaps.Placemark(
        [mylat, mylng],
        {
            // hintContent: 'Собственный значок метки с контентом',
            // balloonContent: 'А эта — кастомная',
            iconContent: myplacemark
        },
        {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            // iconImageHref: 'images/ball.png',
            // Размеры метки.
            iconImageSize: [70, 70],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-35, -35],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            // iconContentOffset: [15, 15],
            // Макет содержимого.
            // iconContentLayout: MyIconContentLayout
        });

    myMap.geoObjects.add(myPlacemarkWithContent);


    // меняем расположение элементов управления

    let zoomControl = myMap.controls.get('zoomControl');
    zoomControl.options.set('size', 'small');
    zoomControl.options.set('float', 'none');
    zoomControl.options.set('position', {right: 10, top: myTop});

    let geoControl = myMap.controls.get('geolocationControl');
    geoControl.options.set('position', {right: 10, top: myTop2});

// отключаем зум колёсиком мышки
    myMap.behaviors.disable('scrollZoom');

//на мобильных устройствах... (проверяем по userAgent браузера)
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        //... отключаем перетаскивание карты
        // myMap.behaviors.disable('drag');
    }
}
