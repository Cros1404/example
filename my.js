function loadPage(page)
{
    var chosen = new XMLHttpRequest();
    chosen.open("GET", page, false);
    chose.send(null);
    document.getElementById('content').innerHTML = chosen.responseText;
}