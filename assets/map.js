

window.addEventListener('DOMContentLoaded', () => {



    function mapAnimation(className){

        region = document.querySelectorAll(className).forEach(region => {

            region.addEventListener('mouseover', function(){
                document.querySelectorAll(className).forEach(regionPiece => {
                    regionPiece.classList.add('map-overlay');
                })


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

            let nom = document.querySelector('.nom');
            nom.textContent = 'coucou'
            
        })

        item.addEventListener('mouseleave', function(event){
            document.querySelectorAll('.essay').forEach(itemmm => {
                itemmm.classList.remove('essayy');
            })
        })

        


    });

});