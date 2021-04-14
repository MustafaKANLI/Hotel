var subMenuDisplayState = false;
function subMenuAction() {
    var subMenu = document.getElementById("subMenu");
    subMenuDisplayState = !subMenuDisplayState;
    subMenu.style.display = subMenuDisplayState ? "block" : "none";
}
function subMenuIconAction() {
    var icon = document.getElementById("icon");
    subMenuDisplayState = !subMenuDisplayState;
    icon.class = subMenuDisplayState ? "bi bi-chevron-double-right" : "bi bi-chevron-double-down";
}