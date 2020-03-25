// var xmlhttp = new XMLHttpRequest();
// xmlhttp.onreadystatechange = function(){
//     if(this.readyState == 4 && this.status == 200){
//         var myObj = JSON.parse(this.responseText);
//         //document.getElementById("main").innerHTML = myObj.abreudia.ACDA;
//     }
// };
// xmlhttp.open("POST", "http://www.iut-fbleau.fr/projet/maths/?f=pagerank.js", true);
// xmlhttp.send();




var trace1 = {
    type: 'bar',
    x: [1, 2, 3, 4,5,34],
    y: [5, 10, 2, 8,23],
    marker: {
        color: '#C8A2C8',
        line: {
            width: 2
        }
    }
  };
  
  var data = [ trace1 ];
  
  var layout = { 
    title: 'Liste des Votants',
    font: {size: 18}
  };
  
  var config = {responsive: true}

  Plotly.newPlot('myDiv', data, layout, config );
  