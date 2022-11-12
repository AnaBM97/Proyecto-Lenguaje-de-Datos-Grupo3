window.onload = getSize;       // When the page first loads
window.onresize = getSize;     // When the browser changes size
function getSize() {
    var width = window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;

   // document.getElementById('jsWidth').innerHTML = width;  // Display the width

    var mycheckbox = document.getElementById('check');

    if(width < 785){
        mycheckbox.checked = true;
    }else{
        mycheckbox.checked = false;
    }
};