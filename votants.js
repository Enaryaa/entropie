var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var myObj = JSON.parse(this.responseText);
        //document.getElementById("main").innerHTML = myObj.abreudia.ACDA;
    }
};
xmlhttp.open("POST", "http://www.iut-fbleau.fr/projet/maths/?f=pagerank.js", true);
xmlhttp.send();
