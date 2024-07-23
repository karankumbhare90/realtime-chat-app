const form = document.querySelector('.typing-area');
const inputField = form.querySelector('.input-field');
const sendBtn = form.querySelector('button');
const chatBox = document.querySelector('.chat-box');


form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
    // AJAX Script
    let xhr = new XMLHttpRequest(); // Creating XML Object
    xhr.open("POST", "./php/insert-chat.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = ""; //Blank the input field after the message delivered.
                scrollToBottom();
            }
        }
    }

    // Send the form data
    let formData = new FormData(form);
    xhr.send(formData); // Sending the formData
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");
}

setInterval(() => {
    // AJAX Script
    let xhr = new XMLHttpRequest(); // Creating XML Object
    xhr.open("POST", "./php/get-chat.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if (!chatBox.classList.contains("active")) {
                    scrollToBottom();
                }
            }
        }
    }

    // Send the form data
    let formData = new FormData(form);
    xhr.send(formData); // Sending the formData

}, 500); // This function will run frequently after .5s 

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}