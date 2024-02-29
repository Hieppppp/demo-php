function get_categories(){
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/categorie_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.onload = function(){
        document.getElementById('categorie-data').innerHTML = this.responseText;
    }
    xhr.send('get_categories');
}
window.onload = function(){
    get_categories();
}