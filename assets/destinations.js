

window.addEventListener('DOMContentLoaded', () => {


    /* Function to animate the Indonesian map with the blocks */
    function mapAnimation(className, blockName){

        blockName = document.querySelector(blockName);

        /* select all the svg parts that have the same class */
        region = document.querySelectorAll(className).forEach(region => {

            /* add a class when hovered */
            region.addEventListener('mouseover', function(){
                document.querySelectorAll(className).forEach(regionPiece => {
                    regionPiece.classList.add('map-overlay');
                    blockName.classList.add('block-overlay');
                });

            })

            /* remove a class when hovered */
            region.addEventListener('mouseleave', function(){
                document.querySelectorAll(className).forEach(regionPiece => {
                    regionPiece.classList.remove('map-overlay');
                    blockName.classList.remove('block-overlay');
                })
            })

        })
    }

    /* call the function on all the islands */
    mapAnimation('.map-sumatra', '.block-sumatra');
    mapAnimation('.map-sulawesi', '.block-sulawesi');
    mapAnimation('.map-kalimantan', '.block-kalimantan');
    mapAnimation('.map-bali', '.block-bali');
    mapAnimation('.map-java', '.block-java');
    mapAnimation('.map-floreskomodo', '.block-floreskomodo');
    mapAnimation('.map-lombok', '.block-lombok');
    mapAnimation('.map-sumba', '.block-sumba');
        /*     mapAnimation('.map-papua', '.block-papua');
            mapAnimation('.map-maluku', '.block-maluku'); */
    




    

});