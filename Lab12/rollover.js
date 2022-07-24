function show(id, URL)
{
    var elt = window.document.getElementById(id);
    elt.setAttribute("src", URL);
    return;
}