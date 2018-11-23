'use strict'
document.addEventListener("DOMContentLoaded",load);
function load() {
  let templateComments;
  let url = "api/comentarios";
  loadComents();

  function loadComents() {
    fetch('js/templates/comments.handlebars')
    .then(response => response.text())
    .then(template => {
        templateComments = Handlebars.compile(template); // compila y prepara el template
        GetComments();
    });
  }



  function GetComments() {
      let id =  document.querySelector(".enviar").id;
      fetch(url+"/"+id)
      .then(response => response.json())
      .then(jsonComments => {
          console.log(jsonComments);
          mostrarComments(jsonComments);
      })
  }

  function mostrarComments(jsonComments) {
      let context = { // como el assign de smarty
          comentarios: jsonComments,
          titulo: "COMENTARIOS",
      }
      let html = templateComments(context);
      document.querySelector(".comments").innerHTML = html;
      document.querySelector(".borrarComentario").addEventListener("click", borrarComentario);
      console.log("LISTO");
  }

  function enviarComentario() {
    let comentario = document.querySelector(".comentario").value;
    let id =  document.querySelector(".enviar").id;
    let puntaje =  document.querySelector(".puntaje").value;
    let datos = {
		"id_peliculas": id,
    "id_usuario": 1,
    "comentario": comentario,
    "puntaje": puntaje
}
    fetch(url, {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify(datos)

      })
      .then(r => loadComents());
    }

    function borrarComentario() {
      let idBorrar = document.querySelector(".borrarComentario").id;
      console.log(idBorrar);
      let urlBorrar = url+"/"+idBorrar;
      fetch(urlBorrar, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
        })
        .then(r => loadComents())
    }

    function crear3Comentarios() {
      for (var i = 0; i < 3; i++) {
        enviarComentario();
      }
    }
    document.querySelector(".enviar3").addEventListener("click", crear3Comentarios);
    document.querySelector(".enviar").addEventListener("click", enviarComentario);
}
