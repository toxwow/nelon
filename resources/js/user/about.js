var start,stop;

var startItem = 1;
var count = $("#draggable2 > *").length;
console.log(count);


$("#draggable2").draggable({
    axis: "x",
    start: function(event, ui) {
        start = ui.position.left;
        console.log("start");
    },
    stop: function(event, ui) {
        stop = ui.position.left;
        if(start < stop){
            startItem = startItem  - 1;
            console.log(startItem);
            if(startItem < 1){
                $("#draggable2").css('left', '-215%');
                startItem = 3;
            }
            else{
                if(startItem == 2){
                    $("#draggable2").css('left', '-115%');
                }
                else if(startItem == 1){
                    $("#draggable2").css('left', '-15%');
                }
            }
            //
        }
        else{

            startItem = startItem + 1;
            console.log(startItem);
            if(startItem > count){
                $("#draggable2").css('left', '-15%');
                startItem = 1;
            }

            else{
                if(startItem == 2){
                    $("#draggable2").css('left', '-115%');
                }

                else if(startItem == 3){
                    $("#draggable2").css('left', '-215%');
                }
            }
        }
    }
});