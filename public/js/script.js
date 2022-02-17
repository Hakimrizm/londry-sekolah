const time = new Date().getHours();
let string = '';

if( time < 12 ) {
    string += 'Good morning!';
}else if( time < 18 ) {
    string += 'Good afternoon!';
}else {
    string += 'Good evening!';
}