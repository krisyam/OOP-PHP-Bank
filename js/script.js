function openhome(){
    document.querySelector('#h').style.display = 'block';
    document.querySelector('#w').style.display = 'none';
    document.querySelector('#d').style.display = 'none';
    document.querySelector('#t').style.display = 'none';
}
function openwithdraw(){
    document.querySelector('#h').style.display = 'none';
    document.querySelector('#w').style.display = 'block';
    document.querySelector('#d').style.display = 'none';
    document.querySelector('#t').style.display = 'none';
}
function opendeposit(){
    document.querySelector('#h').style.display = 'none';
    document.querySelector('#w').style.display = 'none';
    document.querySelector('#d').style.display = 'block';
    document.querySelector('#t').style.display = 'none';
}
function opentransfer(){
    document.querySelector('#h').style.display = 'none';
    document.querySelector('#w').style.display = 'none';
    document.querySelector('#d').style.display = 'none';
    document.querySelector('#t').style.display = 'block';
}