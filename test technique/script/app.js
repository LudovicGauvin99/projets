let nombre = " ";
let helloCompteur = " ";
let worldCompteur = " ";
let helloWorldCompteur = " ";

for (let i = 1; i <= 100; i++) {

    nombre += i + "<br>";

    if (i % 3 == 0 && i % 5 == 0) {
       nombre = nombre.replace(i,"hello world");
       helloWorldCompteur ++;
    }

    else if (i % 3 == 0) {
        nombre = nombre.replace(i, "hello");
        helloCompteur ++;
    }

    else if (i % 5 == 0) {
        nombre = nombre.replace(i, "world");
        worldCompteur ++;
    }

    document.getElementById("compteur").innerHTML = nombre;  
    document.getElementById("helloWorld").innerHTML = "hello World = " + helloWorldCompteur;
    document.getElementById("hello").innerHTML = "hello = " + helloCompteur;
    document.getElementById("world").innerHTML = "world = " + worldCompteur;
}