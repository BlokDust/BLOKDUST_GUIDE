
var paletteDefault = [
    new RGBA(208,201,206,1),
    new RGBA(255,255,255,1),
    new RGBA(228,223,226,1),
    new RGBA(44,61,130,1),
    new RGBA(255,89,0,1),
    new RGBA(32,170,95,1),
    new RGBA(251,191,26,1),
    new RGBA(158,51,107,1),
    new RGBA(55,54,51,1),
    new RGBA(103,203,245,1),
    new RGBA(211,65,86,1),
    new RGBA(255,255,251,1),
    new RGBA(255,255,255,1),
    new RGBA(211,65,86,1),
    new RGBA(255,174,147,1),
    new RGBA(32,170,95,1)];

//-------------------------------------------------------------------------------------------
//  INITIALISE
//-------------------------------------------------------------------------------------------



// INIT //
function init() {

    // SEARCH SUBMIT FUNCTION //
    var submitbutton = document.getElementById("sbx");
    submitbutton.onfocus = function() {
        if (submitbutton.value == 'Search'){
            submitbutton.value = '';
        }
    };
    submitbutton.onblur = function() {
        if (submitbutton.value == ''){
            submitbutton.value = 'Search';
        }
    };

    metrics();
    setupInteraction();

    //loadPalette("img/palette10.gif");
    setCSSPalette(paletteDefault);

    update();

} // END INIT

//-------------------------------------------------------------------------------------------
//  LOOP
//-------------------------------------------------------------------------------------------

function update() {
    if (TWEEN) {
        TWEEN.update();
    }
    requestAnimationFrame(update);
}

//-------------------------------------------------------------------------------------------
//  INTERACTION
//-------------------------------------------------------------------------------------------

function setupInteraction() {

    var menu = document.getElementById("menu");
    var menuClose = document.getElementById("menuClose");
    var panel = document.getElementById("menuPanel");


    menu.onmousedown = function() {
        styleTo(panel,'left',-350,0,0.3,0,'px');
    };
    menuClose.onmousedown = function() {
        styleTo(panel,'left',0,-350,0.3,0,'px');
    };

}

//-------------------------------------------------------------------------------------------
//  TWEEN
//-------------------------------------------------------------------------------------------

function styleTo(obj,style,from,to,t,d,u) {

    var pos = { x: from };
    var tween = new TWEEN.Tween(pos);
    tween.to( { x: to }, t*1000 );
    tween.delay(d*1000);
    tween.start();

    tween.onUpdate(function() {
        obj.style[""+style] = ""+this.x+u+"";
    });

    tween.easing( TWEEN.Easing.Quintic.InOut );
}

//-------------------------------------------------------------------------------------------
//  COLORS
//-------------------------------------------------------------------------------------------

// LOAD PALETTE //
function loadPalette(paletteURL) {
    var pixelPalette = new PixelPalette(paletteURL);
    pixelPalette.Load(function (palette)  {
        setCSSPalette(palette);
    });
}

function setCSSPalette(palette) {
    for (var i=0; i<palette.length; i++) {
        setCSSColor(palette[i],i);
    }
}

// SET CSS COLOR //
function setCSSColor(col,n) {

    var h;
    var name = "col" + n + "";
    var cols = document.getElementsByClassName(name);
    for (h=0; h<cols.length; h++) {
        cols[h].style.color = "rgba("+col.R+","+col.G+","+col.B+",1)";
    }

    name = "bg" + n + "";
    var bgs = document.getElementsByClassName(name);
    for (h=0; h<bgs.length; h++) {
        bgs[h].style.backgroundColor = "rgba("+col.R+","+col.G+","+col.B+",1)";
    }

}

//-------------------------------------------------------------------------------------------
//  METRICS
//-------------------------------------------------------------------------------------------

function metrics() {

    var grid = document.getElementById("grid");

    if (grid) {
        var column, block;
        var gridBlocks = document.getElementsByClassName("gridBlock");
        var pageWidth = document.body.clientWidth;

        // get columns //
        if (pageWidth<750) {
            column = 2;
        } else if (pageWidth<1000) {
            column = 3;
        } else {
            column = 4;
        }
        block = Math.floor(pageWidth/column);

        var h = 0;
        for (h=0; h<gridBlocks.length; h++) {
            gridBlocks[h].style.width = ""+block+"px";
            gridBlocks[h].style.height = ""+block+"px";
        }

        var pageWidth2 = document.body.clientWidth;
        if (pageWidth>pageWidth2) {
            console.log("change");
            setTimeout(function() {
                metrics();
            },50);
        }
    }
}

//-------------------------------------------------------------------------------------------
//  OBJECTS
//-------------------------------------------------------------------------------------------


function RGBA( r, g, b, a ) {
    this.R = r;
    this.G = g;
    this.B = b;
    this.A = a;

    this.toString = function() {
        return "rgba("+this.R+","+this.G+","+this.B+",1)";
    };

    this.clone = function () {
        return new RGBA(this.R, this.G, this.B, this.A);
    };
}






