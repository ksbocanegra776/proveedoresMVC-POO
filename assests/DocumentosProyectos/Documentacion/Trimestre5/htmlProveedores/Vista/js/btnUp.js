window.onscroll = function() {
    if (document.documentElement.scrollTop > 150) {
        document.getElementById('ir-arriba').classList.add('show')
    } else {
        document.getElementById('ir-arriba').classList.remove('show')
    }
}

document.querySelector('.ir-arriba').addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
})