function loadPage(page)
{
    var chosen = new XMLHttpRequest();
    chosen.open("GET", page, false);
    chosen.send(null);
    document.getElementById('content').innerHTML = chosen.responseText;
}