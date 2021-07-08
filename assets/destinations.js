

window.addEventListener('DOMContentLoaded', () => {



    function mapAnimation(className){

        region = document.querySelectorAll(className).forEach(region => {

            region.addEventListener('mouseover', function(){
                document.querySelectorAll(className).forEach(regionPiece => {
                    regionPiece.classList.add('map-overlay');
                })


                let regionName = document.querySelector('.region-name');
                let regionDetail = document.querySelector('.region-detail');

                switch (className){
                    case '.map-sumatra':
                    regionName.textContent = "L'île de Sumatra";
                    regionDetail.textContent = "";
                    break;

                    case '.map-sulawesi':
                    regionName.textContent = "L'île de Sulawesi";
                    regionDetail.textContent = "";
                    break;

                    case '.map-kalimantan':
                    regionName.textContent = "L'île de Kalimantan";
                    regionDetail.textContent = "";
                    break;

                    case '.map-bali':
                    regionName.textContent = "L'île de Bali";
                    regionDetail.textContent = "";
                    break;

                    case '.map-java':
                    regionName.textContent = "L'île de Java";
                    regionDetail.textContent = "";
                    break;

                    case '.map-nusatenggara':
                    regionName.textContent = 'La province de Nusa Tenggara Timur';
                    regionDetail.textContent = "Elle est composée de la partie orientale des petites îles de la Sonde.";
                    break;

                    case '.map-papua':
                    regionName.textContent = 'Papouasie';
                    regionDetail.textContent = "";
                    break;
                }
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
    mapAnimation('.map-nusatenggara');
    mapAnimation('.map-papua');
    




    

});