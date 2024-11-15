const ctx = document.getElementById('CHARTINGRESOS');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['ENERO', 'FEBREO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIENBRE', 'DICIENBRE'],
      datasets: [{
        label: '# GANACIAS POR MES',
        data: [30000, 154239, 4646333, 646635, 244636, 67963, 8646479, 365487, 663298, 8496365, 9263658, 275697],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const ctx2 = document.getElementById('CHARTCATEGORIAS');

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['PHONE´S', 'SPEAKER´S', 'SMART WATCH', 'LAPTOP'],
      datasets: [{
        label: '# VENTAS POR CATEGORIA',
        data: [560, 398, 423, 112],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  