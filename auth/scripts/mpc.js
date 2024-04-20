
let pad1 = document.querySelector('#pad1');
let pad2 = document.querySelector('#pad2');
let pad3 = document.querySelector('#pad3');
let pad4 = document.querySelector('#pad4');
let pad5 = document.querySelector('#pad5');
let pad6 = document.querySelector('#pad6');
let pad7 = document.querySelector('#pad7');
let pad8 = document.querySelector('#pad8');
let pad9 = document.querySelector('#pad9');
let pad10 = document.querySelector('#pad10');
let pad11 = document.querySelector('#pad11');
let pad12 = document.querySelector('#pad12');
let pad13 = document.querySelector('#pad13');
let pad14 = document.querySelector('#pad14');
let pad15 = document.querySelector('#pad15');
let pad16 = document.querySelector('#pad16');



let s1 = new Howl({
    src: ['../samples/1.wav']
});
let s2 = new Howl({
    src: ['../samples/2.wav']
});
let s3 = new Howl({
    src: ['../samples/3.wav']
});
let s4 = new Howl({
    src: ['../samples/4.wav']
});
let s5 = new Howl({
    src: ['../samples/5.wav']
});
let s6 = new Howl({
    src: ['../samples/6.wav']
});
let s7 = new Howl({
    src: ['../samples/7.wav']
});
let s8 = new Howl({
    src: ['../samples/8.wav']
});
let s9 = new Howl({
    src: ['../samples/9.wav']
});
let s10 = new Howl({
    src: ['../samples/10.wav']
});
let s11 = new Howl({
    src: ['../samples/11.wav']
});
let s12 = new Howl({
    src: ['../samples/12.wav']
});
let s13 = new Howl({
    src: ['../samples/13.wav']
});
let s14 = new Howl({
    src: ['../samples/14.wav']
});
let s15 = new Howl({
    src: ['../samples/15.wav']
});
let s16 = new Howl({
    src: ['../samples/16.mp3']
});



document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad7') {
        if (s1.playing()){
            s1.stop();
        }
        s1.play();
        pad1.classList.add('active');
        setTimeout(function(){
            pad1.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad8') {
      s2.play();
      pad2.classList.add('active');
        setTimeout(function(){
            pad2.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad9') {
        s3.play();
        pad3.classList.add('active');
            setTimeout(function(){
                pad3.classList.remove('active'); 
            }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad4') {
        if (s5.playing()){
            s5.stop();
        }
        s5.play();
        pad5.classList.add('active');
        setTimeout(function(){
            pad5.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad5') {
      s6.play();
      pad6.classList.add('active');
        setTimeout(function(){
            pad6.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad6') {
        if (s7.playing()){
            s7.stop();
        }
        s7.play();
        pad7.classList.add('active');
            setTimeout(function(){
                pad7.classList.remove('active'); 
            }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad1') {
        s9.play();
        pad9.classList.add('active');
        setTimeout(function(){
            pad9.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad2') {
      s10.play();
      pad10.classList.add('active');
        setTimeout(function(){
            pad10.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad3') {
        s11.play();
        pad11.classList.add('active');
            setTimeout(function(){
                pad11.classList.remove('active'); 
            }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Numpad0') {
        if (s13.playing()){
            s13.stop();
        }
        s13.play();
        pad13.classList.add('active');
        setTimeout(function(){
            pad13.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'NumpadDecimal') {
        if (s14.playing()){
            s14.stop();
        } 
        s14.play();
      pad14.classList.add('active');
        setTimeout(function(){
            pad14.classList.remove('active'); 
        }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'NumpadEnter') {
        if (s15.playing()){
            s15.stop();
        }
        s15.play();
        pad15.classList.add('active');
            setTimeout(function(){
                pad15.classList.remove('active'); 
            }, 50);
    }
});

document.addEventListener('keydown', function(event) {
    if (event.code == 'Slash') {
        if (s13.playing()){
            s13.stop();
        }
        if (s14.playing()){
            s14.stop();
        }
        if (s15.playing()){
            s15.stop();
        }
        if (s16.playing()){
            s16.stop();
        }
    }
});


pad1.addEventListener('click', function(){
    s1.play();
});

pad2.addEventListener('click', function(){
    s2.play();
});

pad3.addEventListener('click', function(){
    s3.play();
});

pad4.addEventListener('click', function(){
    s4.play();
});

pad5.addEventListener('click', function(){
    if (s5.playing()){
        s5.stop();
    }
    s5.play();
});

pad6.addEventListener('click', function(){
    s6.play();
});

pad7.addEventListener('click', function(){
    if (s7.playing()){
        s7.stop();
    }
    s7.play();
});

pad8.addEventListener('click', function(){
    s8.play();
});

pad9.addEventListener('click', function(){
    s9.play();
});

pad10.addEventListener('click', function(){
    s10.play();
});

pad11.addEventListener('click', function(){
    s11.play();
});

pad12.addEventListener('click', function(){
    s12.play();
});

pad13.addEventListener('click', function(){
    if (s13.playing()){
        s13.stop();
    }
    s13.play();
});

pad14.addEventListener('click', function(){
    if (s14.playing()){
        s14.stop();
    }
    s14.play();
});

pad15.addEventListener('click', function(){
    if (s15.playing()){
        s15.stop();
    }
    s15.play();
});

pad16.addEventListener('click', function(){
    if (s16.playing()){
        s16.stop();
    }
    s16.play();
});
