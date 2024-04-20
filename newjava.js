
    {
        var book = new Audio();
        book.src="audio/book.mp3";
    }

    function abcd()
{
var i=1;
setTimeout(disp,1500);
function disp()
{
    document.getElementById("slide").src='images/'+i+'.png';
    if(i<7)
    {
        i++;
    }
    else
    {
        i=1;
      
    }
    setTimeout(disp,1500)
}
}
window.onload= abcd()

