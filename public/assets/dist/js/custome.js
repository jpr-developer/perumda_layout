const toggleSidebar = document.querySelector(".toggle-sidebar");
var sidebar = document.getElementById("getSidebar");
toggleSidebar.addEventListener("click", () => {
    sidebar.style.display = "block";
});

var close = document.getElementById("getClose");
close.addEventListener("click", () => {
    sidebar.style.display = "none";
});
