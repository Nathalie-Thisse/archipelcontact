

window.addEventListener('DOMContentLoaded', () => {



    function mapAnimation(className){

        region = document.querySelectorAll(className).forEach(region => {

            region.addEventListener('mouseover', function(){
                document.querySelectorAll(className).forEach(regionPiece => {
                    regionPiece.classList.add('map-overlay');
                });

            })

            region.addEventListener('mouseleave', function(){
                document.querySelectorAll(className).forEach(regionPiece => {
                    regionPiece.classList.remove('map-overlay');
                })
            })

        })
    }

    mapAnimation('.map-sumatra');
    mapAnimation('.map-sulawesi');
    mapAnimation('.map-kalimantan');
    mapAnimation('.map-bali');
    mapAnimation('.map-java');
    mapAnimation('.map-floreskomodo');
    mapAnimation('.map-lombok');
    mapAnimation('.map-sumba');
    mapAnimation('.map-papua');
    mapAnimation('.map-maluku');
    




    

});