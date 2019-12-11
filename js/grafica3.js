//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
type: 'pie',
data: {
labels: ["Masculino", "Femenino", "Otro"],
datasets: [{
data: [s1, s2, s3],
backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
}]
},
options: {
responsive: true
}
});