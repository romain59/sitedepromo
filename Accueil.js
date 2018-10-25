
// Get modal element
var modal = document.getElementById('simpleModal');

// Get close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];


// Listen for close click
closeBtn.addEventListener('click', closeModal);
// Listen for outside click
window.addEventListener('click', outsideClick);

// Function pour ouvrir modal
function openModal(){
    modal.style.display = 'block';
}

// Function pour fermer modal
function closeModal(){
    modal.style.display = 'none';
}

// Function pour fermer modal en dehors de la box
function outsideClick(e){
    if(e.target == modal){
       modal.style.display = 'none';
    }
}

