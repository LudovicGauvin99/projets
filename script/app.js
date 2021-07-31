let nombre = " ";

for (let i = 1; i <= 100; i++) {

    nombre += i + "<br>"

    if (i % 3 == 0 && i % 5 == 0) {
       nombre = nombre.replace(i,"hello world") 
    }

    else if (i % 3 == 0) {
        nombre = nombre.replace(i, "hello")
    }

    else if (i % 5 == 0) {
        nombre = nombre.replace(i, "world")
    }

    document.getElementById("compteur").innerHTML = nombre;  
}