const searchBar = document.querySelector('.users .search input');
const searchBtn = document.querySelector('.users .search button');

console.log(searchBar)

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}