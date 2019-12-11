//pie
var ctxP = document.getElementById("pieChart2").getContext('2d');
var myPieChart = new Chart(ctxP, {
type: 'pie',
data: {
labels: ["Asistirá Solo", "Asistirá con Acompañante", "No Asistirá"],
datasets: [{
data: [c1, c2, c3],
backgroundColor: ["#3d2645", "#832161", "#da4167"],
hoverBackgroundColor: ["#653f72", "#a5297a", "#f44974"]
}]
},
options: {
responsive: true
}
});