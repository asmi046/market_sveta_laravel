export default class YandexMapLoader {

    constructor(element, center, hint) {
        this.map_dom_element = element
        this.map_coord = center
        this.hint = hint
        this.create()
    }


    initMap () {
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты
            center: this.map_coord,
            // Масштаб карты
            zoom: 17,
            // Выключаем все управление картой
            controls: []
        });

        var myGeoObjects = [];

        // Указываем координаты метки
        myGeoObjects = new ymaps.Placemark(this.map_coord,{
                                        hintContent: '<div class="map-hint">'+this.hint+'</div>',
                                        balloonContent: '<div class="map-hint">'+this.hint+'</div>',
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


    create() {
        console.log(ymaps)
        ymaps.ready( () => {
            this.initMap()
        });
    }
}
