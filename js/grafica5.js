new Chart(document.getElementById("horizontalBar2"), {
    "type": "horizontalBar",
    "data": {
    "labels": ["Sí Asistió", "No Asistió"],
    "datasets": [{
    "label": "Asistencia",
    "data": [as1, as2],
    "fill": false,
    "backgroundColor": ["rgba(46, 205, 14, 0.2)", "rgba(205, 14, 14, 0.2)"
    ],
    "borderColor": ["rgba(46, 205, 14, 1)", "rgba(205, 14, 14, 1)"
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