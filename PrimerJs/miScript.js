

function pintarCarta(){
let tarjeta="";
tarjeta+= ' <div class="card" id="caribe">';
tarjeta+='<img src="https://images.unsplash.com/photo-1503756234508-e32369269deb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWFyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">';
tarjeta+='<h2>Caribe</h2>';
tarjeta+='<p class="fechas">15 marzo</p>';
tarjeta+='<p class="texto">Disfruta de las playas más exóticas en la costa caribeña</p>';
tarjeta+='<a href="caribe.html">Ver más</a>';
tarjeta+='</div> ';

return tarjeta;

}


let texto="";

for (let i=0;i<10;i++){
    texto+=pintarCarta();
}


document.write(texto);
