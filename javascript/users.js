const searchBar = document.querySelector(" .users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = () =>{
    searchBar.classList.toggle("active2");
    searchBar.focus();
    searchBtn.classList.toggle("active2");
    searchBar.value = "";
}
//code on searchbar

searchBar.onkeyup = () =>{
    let searchTerm = searchBar.value;
    if(searchTerm !=""){
        searchBar.classList.add("active2"); 
    }else{
        searchBar.classList.remove("active2");
    }

    //let start Ajax
let xhr = new XMLHttpRequest(); //cretaing object inm xml
xhr.open("POST", "php/search.php", true);
xhr.onload = ()=>{
  if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
          let data = xhr.response;
               usersList.innerHTML = data;
      }
  }
}
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhr.send("searchTerm=" + searchTerm);          //user ka search term sa php file ajax ka sath
}


setInterval(()=>{
//let start Ajax
let xhr = new XMLHttpRequest();
xhr.open("GET", "php/users.php", true);
xhr.onload = ()=>{
  if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active2")){  //if active not contains in search bar the add this data 
          usersList.innerHTML = data;
          }
      }
  }
}
 xhr.send();
}, 500); //this function will run frequently after 500ms

