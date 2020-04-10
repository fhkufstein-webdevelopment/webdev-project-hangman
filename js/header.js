
var header = document.getElementById('bg')
window.addEventListener('scroll',function(){
    header.style.oppacity = 1 + - window.pageYOffset/550 + ' '
    header.style.top = +window.pageYOffset + 'px'
    header.style.backgroundPositionY= +window.pageYOffset/2+'px'
});