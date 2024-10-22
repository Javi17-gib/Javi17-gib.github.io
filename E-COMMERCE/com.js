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