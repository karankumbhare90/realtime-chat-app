const form = document.querySelector('.signup form');
const continueBtn = document.querySelector('.button input');

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    // AJAX Script
    let xhr = new XMLHttpRequest(); // Creating XML Object
    xhr.open("POST", "php/signup.php", true);

    xhr.onload = () => {

    }

    xhr.send();
}