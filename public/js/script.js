const time = new Date().getHours();
let str = '';

if( time < 12 ) {
    str += 'Selamat Pagi';
}else if( time < 18 ) {
    str += 'Selamat Siang';
}else {
    str += 'Selamat Malam';
}

const waktu = document.querySelector('.waktu');
waktu.innerHTML = str;