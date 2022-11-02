ymaps.ready(init); 

function init () {
    let hint = map_text
    var myMap = new ymaps.Map("map", {
        // Координаты центра карты
        center: map_coord,
        // Масштаб карты
        zoom: 17,
        // Выключаем все управление картой
        controls: []
    }); 

    var myGeoObjects = [];

    // Указываем координаты метки
    myGeoObjects = new ymaps.Placemark(map_coord,{
                                    hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
                                    balloonContent: '<div class="map-hint">'+hint+'</div>', 
                                    }
                                    ,{
                                        iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref: '/img/icons/map-marker.svg',  
                    // Размеры иконки
                    iconImageSize: [60, 60],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-25, -90]
                });

    var clusterer = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
    });
    
    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

}