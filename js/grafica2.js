new Chart(document.getElementById("horizontalBar"), {
    "type": "horizontalBar",
    "data": {
    "labels": ["Estudiantes con Artículo", "Estudiantes Internacionales", "Estudiantes Nacionales de Postgrado", "Estudiantes Nacionales de Pregrado", "Participantes Internacionales", "Profesionales con Artículo", "Profesionales Nacionales"],
    "datasets": [{
    "label": "My First Dataset",
    "data": [p1, p2, p3, p4, p5, p6, p7],
    "fill": false,
    "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)", "rgba(0, 0, 0, 0.2)"
    ],
    "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)",
    "rgba(0, 0, 0)"
    ],
    "borderWidth": 1
    }]
    },
    "options": {
    "scales": {
    "xAxes": [{
    "ticks": {
    "beginAtZero": true
    }
    }]
    }
    }
    });