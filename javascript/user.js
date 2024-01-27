const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = ()=>{
    searchBar.focus();
    searchBtn.classList.toggle("active");
}