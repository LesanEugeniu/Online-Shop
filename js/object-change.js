function text_black(){
    const buttons = document.querySelectorAll('.color-btn');
    const title_up = document.querySelector('.title-up');
    const h2 = document.querySelector('h2');
    const h3 = document.querySelector('h3');
    const body = document.querySelector('body');
    const h5 = document.querySelector('h5');
    const label = document.querySelectorAll('label');
    const span = document.querySelector('span');
    const svg = document.querySelector('svg');
    const icon = document.querySelector('.icon');
    const btn = document.querySelector('.btn');

    btn.addEventListener('mouseover', function(){
        icon.style.color = "white";
    })
    btn.addEventListener('mouseout', function(){
        icon.style.color = "black";
    })
    icon.style.color = "black";
    title_up.style.color = "black";
    h2.style.color = "black";
    h3.style.color = "black";
    body.style.color = "black";
    h5.style.color = "black";
    svg.style.fill = "black";
    label.forEach(element => {
        element.style.color = "black";
    });
    span.style.color = "black";
}

function text_white(){
    const buttons = document.querySelectorAll('.color-btn');
    const title_up = document.querySelector('.title-up');
    const h2 = document.querySelector('h2');
    const h3 = document.querySelector('h3');
    const body = document.querySelector('body');
    const h5 = document.querySelector('h5');
    const label = document.querySelectorAll('label');
    const span = document.querySelector('span');
    const svg = document.querySelector('svg');
    const icon = document.querySelector('.icon');
    const btn = document.querySelector('.btn');

    btn.addEventListener('mouseover', function(){
        icon.style.color = "white";
    })
    btn.addEventListener('mouseout', function(){
        icon.style.color = "white";
    })
    icon.style.color = "white";
    svg.style.fill = "white";
    title_up.style.color = "white";
    h2.style.color = "white";
    h3.style.color = "white";
    body.style.color = "white";
    h5.style.color = "white";
    label.forEach(element => {
        element.style.color = "white";
    });
    span.style.color = "white";
}

function addListenerMulti(element, eventNames, listener) {
    var events = eventNames.split(' ');
    for (var i=0, iLen=events.length; i<iLen; i++) {
      element.addEventListener(events[i], listener, false);
    }
  }

function lightOrDark(color) {

    var r, g, b, hsp;
    
    if (color.match(/^rgb/)) {

        color = color.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/);
        
        r = color[1];
        g = color[2];
        b = color[3];
    } 
    else {
        
        color = +("0x" + color.slice(1).replace( 
        color.length < 5 && /./g, '$&$&'));

        r = color >> 16;
        g = color >> 8 & 255;
        b = color & 255;
    }
    
    hsp = Math.sqrt(
    0.299 * (r * r) +
    0.587 * (g * g) +
    0.114 * (b * b)
    );

    if (hsp>127.5) {

        return 'light';
    } 
    else {

        return 'dark';
    }
}

function addListenerMulti(element, eventNames, listener) {
    var events = eventNames.split(' ');
    for (var i=0, iLen=events.length; i<iLen; i++) {
      element.addEventListener(events[i], listener, false);
    }
  }

    window.addEventListener('change',function(){
    // const buttons = document.querySelectorAll('.color-btn');
    let color = this.document.querySelector('body').style.backgroundImage;;
    console.log();
    if(lightOrDark(color) == 'dark'){
        text_white();
    }
    else{
        text_black();
    }
    
});

window.addEventListener('load',function(){
    // const buttons = document.querySelectorAll('.color-btn');
    let color = this.document.querySelector('body').style.backgroundImage;;
    console.log();
    if(lightOrDark(color) == 'dark'){
        text_white();
    }
    else{
        text_black();
    }
    
});