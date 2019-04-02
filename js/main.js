/************************************/
/* REQUETTE AJAX SUR API GOOGLEBOOK */
/************************************/

var cleApi = "AIzaSyCpPJzXnHzlC0E9ZmiCSJwH3VKu505cD-M";
var url = "https://www.googleapis.com/books/v1/volumes?q=Harry+potter&key=";

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var tab = JSON.parse(this.responseText);
            console.log(tab);
        }
    };
    xhttp.open("GET", url + cleApi, true);
    xhttp.send();
}
loadDoc();

//function makeRequest() {
//    return $.ajax({
//      url: `https://www.googleapis.com/books/v1/volumes?q=subject=Fiction`,
//      method: 'GET',
//      data: {
//        api_key: "AIzaSyCpPJzXnHzlC0E9ZmiCSJwH3VKu505cD-M",
//        langRestrict: "fr",
//        orderBy: "newest"
//      },
//    })
//  };
//
//  $.when(makeRequest("project=full")).done(function(project){
//    console.log(project.items)
//  })

