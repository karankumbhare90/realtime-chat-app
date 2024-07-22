const form = document.querySelector('.signup form');
const continueBtn = document.querySelector('.button input');
const errorText = document.querySelector('.error-txt');

form.onsubmit = (e) => {
    e.preventDefault();
}


continueBtn.onclick = () => {
    // AJAX Script
    let xhr = new XMLHttpRequest(); // Creating XML Object
    xhr.open("POST", "./php/signup.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if (data == 'Success') {
                    location.href = "users.php";
                }
                else {
                    errorText.textContent = data;
                    errorText.style.display = 'block';
                }
            }
        }
    }

    // Send the form data
    let formData = new FormData(form);
    xhr.send(formData); // Sending the formData
}