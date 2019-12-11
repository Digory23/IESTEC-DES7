var ctx = document.getElementById("barChart");
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["AgroIndustria", "Ciencias Básicas", "Economía y Sociedad", "Educación en Ingeniería", "Energía y Ambiente", "Gestión Empresarial", "Infraestructura", "Logística y Transporte", "Robot", "TIC", "Otros"],
datasets: [{
label: '# Participantes por Área de Interés',
data: [a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(219, 0, 95, 0.2)',
'rgba(70, 0, 107, 0.2)',
'rgba(255, 159, 64, 0.2)',
'rgba(255, 158, 215, 0.2)',
'rgba(63, 209, 0, 0.2)',
'rgba(57, 57, 219, 0.2)',
'rgba(0, 214, 171, 0.2)',
'rgba(0, 0, 0, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(219, 0, 95, 1)',
'rgba(70, 0, 107, 1)',
'rgba(255, 159, 64, 1)',
'rgba(255, 158, 215, 1)',
'rgba(63, 209, 0, 1)',
'rgba(57, 57, 219, 1)',
'rgba(0, 214, 171, 1)',
'rgba(0, 0, 0, 1)'
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});