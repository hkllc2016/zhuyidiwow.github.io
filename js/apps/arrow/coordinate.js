$(document).ready(function() {
    $('#mainContent').mousemove(function(e) {
        var x = e.clientX;
        var y = e.clientY;
        var r;
        var dx1 = x - 250;
        var dy1 = y - 200;
        var tan = dx1/dy1;
        var a = Math.atan(tan);
        if (dx1 > 0 && dy1 < 0) 
            r = Math.PI-a;
        else if (dx1 < 0 && dy1 < 0)
            r = Math.PI-a;
        else 
            r = -a;
        move(dx1, dy1,a, r, 'a1');
        var dx2 = x - 550;
        var dy2 = y - 400;
        tan = dx1/dy1;
        a = Math.atan(tan);
        if (dx1 > 0 && dy1 < 0) 
            r = Math.PI-a;
        else if (dx1 < 0 && dy1 < 0)
            r = Math.PI-a;
        else 
            r = -a;
        move(dx1, dy1,a, r, 'a1');
    })
});
/*
var tan1 = dx1/dy1;
        var a1 = Math.atan(tan1);
        if (dx1 > 0 && dy1 < 0) 
            var r1 = Math.PI-a1;
        else if (dx1 < 0 && dy1 < 0)
            var r1 = Math.PI-a1;
        else 
            var r1 = -a1;
        $('.output').html('left: ' + x + '<br>' + 'top: ' + y + 
                         '<br>' + a1 + '<br>' + r1);
        $('.a1').css('transform', 'rotate('+r1+'rad)');*/
function move(x, y, a, r, element) {
    $('.output').html('left: ' + x + '<br>' + 'top: ' + y + 
                         '<br>' + a + '<br>' + r);
    $('.'+element).css('transform', 'rotate('+r+'rad)');
}