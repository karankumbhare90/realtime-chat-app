const searchBar = document.querySelector('.users .search input');
const searchBtn = document.querySelector('.users .search button');
const usersList = document.querySelector('.users .users-list');

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
}

searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;

    if (searchTerm != "") {
        searchBar.classList.add('active');
    }
    else {
        searchBar.classList.remove('active');
    }
    // AJAX Script
    let xhr = new XMLHttpRequest(); // Creating XML Object
    xhr.open("POST", "./php/search.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    xhr.send("searchTerm=" + searchTerm);
}


setInterval(() => {
    // AJAX Script
    let xhr = new XMLHttpRequest(); // Creating XML Object
    xhr.open("GET", "php/users.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (!searchBar.classList.contains('active')) {
                    usersList.innerHTML = data;
                }
            }
        }
    }

    xhr.send();
}, 500); // This function will run frequently after .5s 