function something() {
    var setAction = document.getElementById('sortBySelect');
    document.getElementById('sortBy').setAttribute("href", setAction.options[setAction.selectedIndex].value);
}