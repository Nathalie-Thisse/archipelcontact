

window.addEventListener('DOMContentLoaded', () => {



    function mapAnimation(className){

        region = document.querySelectorAll(className).forEach(region => {

            region.addEventListener('mouseover', function(){
                document.querySelectorAll(className).forEach(regionPiece => {
                    regionPiece.classList.add('map-overlay');
                })


                let regionName = document.querySelector('.region-name');
                
                switch(className){
                    case'.map-sumatra':
                    regionName.textContent = 'sumatra';

                    case'.map-sulawesi':
                    regionName.textContent = 'sulawesi';

                    case'.map-kalimantan':
                    regionName.textContent = 'kalimantan';

                    case'.map-bali':
                    regionName.textContent = 'bali';

                    case'.map-java':
                    regionName.textContent = 'java';

                    case'.map-nusatenggara':
                    regionName.textContent = 'nusatenggara';

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
    




    item = document.querySelectorAll('.essay').forEach(item => {
        item.addEventListener('mouseover', function(event){

            document.querySelectorAll('.essay').forEach(itemm => {
                itemm.classList.add('essayy');
            })

            
        })

        item.addEventListener('mouseleave', function(event){
            document.querySelectorAll('.essay').forEach(itemmm => {
                itemmm.classList.remove('essayy');
            })
        })

        


    });

});