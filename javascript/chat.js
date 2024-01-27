const form = document.querySelector(".typing-area"),
inputfiled = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
  e.preventDefault(); //preventing form from submitting
}
sendBtn.onclick = ()=>{
    //let start Ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            inputfiled.value=""; //Ek baar msg send kar diya toh blank space 
            scrollToBottom();
          }
      }
    }
    // we have to send the message through ajax
    let formData = new FormData(form); // creating new formdata object
    xhr.send(formData); //sending the form data TO php
}

chatBox.onmouseenter = ()=>{
  chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
  chatBox.classList.remove("active");
}

setInterval(()=>{
  //let start Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/get-chat.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){ // usser scroll top kara in chatbox toh bina kise problem scroll hoo up and down
              scrollToBottom();
            }
        }
    }
  }
    // we have to send the message through ajax
    let formData = new FormData(form); // creating new formdata object
    xhr.send(formData); //sending the form data TO php
  }, 500); //this function will run frequently after 500ms
  
  function scrollToBottom(){
    chatBox.scrollTop = chatBox. scrollHeight;
  }