let darkmode =document.querySelector('#darkmode');

darkmode.onclick = () => {
    if(darkmode.classList.contains('ri-moon-fill')){
        darkmode.classList.replace('ri-moon-fill', 'ri-sun-line');
        document.body.classList.add('color');
    }else{
        darkmode.classList.replace('ri-sun-line', 'ri-moon-fill');
        document.body.classList.remove('color');
    }
}
const sr = ScrollReveal({
    distance: '10px',
    duration: '2400',
    rest: true
});
sr.reveal('.contenido-texto',{delay:250, origin: 'top'})
sr.reveal('.contenido-img',{delay:550, origin: 'botton'})