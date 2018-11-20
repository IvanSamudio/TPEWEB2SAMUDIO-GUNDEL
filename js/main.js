'use strict'
let templateComments;

fetch('js/templates/comments.handlebars')
.then(response => response.text())
.then(template => {
    templateComments = Handlebars.compile(template); // compila y prepara el template
    GetComments();
});


function GetComments() {
    fetch("api/comentarios")
    .then(response => response.json())
    .then(jsonComments => {
        mostrarComments(jsonComments);
    })
}

function mostrarComments(jsonComments) {
    console.log(jsonComments);
    let context = { // como el assign de smarty
        comentarios: jsonComments,
        titulo: "COMENTARIOS",
    }
    let html = templateComments(context);
    console.log(html);
    document.querySelector(".comments").innerHTML = html;
}
