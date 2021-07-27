

window.addEventListener('DOMContentLoaded', () => {


    /* Function to animate the Indonesian map with the blocks */
    function mapAnimation(regionName, blockName){

        blockName = document.querySelector(blockName);

        function eventListenerAddClass(element){

            element.addEventListener('mouseover', function(){
                document.querySelectorAll(regionName).forEach(regionPiece => {
                    regionPiece.classList.add('map-overlay');
                    blockName.classList.add('block-overlay');
                });
            })
        }

        function eventListenerRemoveClass(element){

            element.addEventListener('mouseleave', function(){
                document.querySelectorAll(regionName).forEach(regionPiece => {
                    regionPiece.classList.remove('map-overlay');
                    blockName.classList.remove('block-overlay');
                });
            })
        }
       

        /* select all the svg parts that have the same class */
        region = document.querySelectorAll(regionName).forEach(region => {

            /* add a class when hovered */
            eventListenerAddClass(region);
            eventListenerAddClass(blockName);

            /* remove a class when hovered */
            eventListenerRemoveClass(region);
            eventListenerRemoveClass(blockName);
           
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