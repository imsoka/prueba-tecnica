import './bootstrap';
const xhr = new XMLHttpRequest();
let response, publicaciones, currentPage, lastPage, nextPage, prevPage, prevButton, nextButton, firstPage = null;

const publicacionesList = document.querySelector(".publicaciones_list");

if(!publicaciones) {
    getPublicaciones('/api/publicaciones/')
}

xhr.onreadystatechange = () => { // Call a function when the state changes.
  if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      response = JSON.parse(xhr.response);
      publicaciones = response.publicaciones.data;
      currentPage = response.publicaciones.current_page;
      lastPage = response.publicaciones.last_page;
      nextPage = response.publicaciones.next_page_url; 
      prevPage = response.publicaciones.prev_page_url; 
      firstPage = response.publicaciones.first_page_url; 

      while(publicacionesList.hasChildNodes())
          publicacionesList.removeChild(publicacionesList.firstChild);

      if(prevButton && currentPage === 1) prevButton.style.display = "none";
      else prevButton.style.display = "inline";

      if(nextButton && currentPage === lastPage) nextButton.style.display = "none";
      else nextButton.style.display = "inline";

      publicaciones.forEach((element) => {
          const listItem = document.createElement("li");
          const publicacion = document.createTextNode(element.title);
          listItem.appendChild(publicacion);
          publicacionesList.appendChild(listItem);
      });

  }
}

window.onload = () => {
    prevButton = document.querySelector(".prevButton");
    nextButton = document.querySelector(".nextButton");

    prevButton.addEventListener('click', () => {
        getPublicaciones(prevPage);
    });

    nextButton.addEventListener('click', () => {
        getPublicaciones(nextPage);
    });
}

function getPublicaciones(url) {
    xhr.open("GET", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send();
}
