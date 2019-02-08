
// Get modal element
// var modal = document.getElementById('simpleModal');

// Get close button
// var closeBtn = document.getElementsByClassName('closeBtn')[0];


// Listen for close click
// closeBtn.addEventListener('click', closeModal);
// Listen for outside click
// window.addEventListener('click', outsideClick);

// Function pour ouvrir modal
/*function openModal(){
    modal.style.display = 'block';
}*/

// Function pour fermer modal
/*function closeModal(){
    modal.style.display = 'none';
}*/

// Function pour fermer modal en dehors de la box
/*function outsideClick(e){
    if(e.target == modal){
       modal.style.display = 'none';
    }
}*/

var twitterShare = document.querySelector('[data-js="twitter-share"]');

twitterShare.onclick = function(e) {
    e.preventDefault();
    var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
    if(twitterWindow.focus) { twitterWindow.focus(); }
    return false;
}

var facebookShare = document.querySelector('[data-js="facebook-share"]');

facebookShare.onclick = function(e) {
    e.preventDefault();
    var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
    if(facebookWindow.focus) { facebookWindow.focus(); }
    return false;
}