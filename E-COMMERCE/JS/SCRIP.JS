const ctx = document.getElementById('CHARTINGRESOS');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['ENERO', 'FEBREO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIENBRE', 'DICIENBRE'],
      datasets: [{
        label: '# GANACIAS POR MES',
        data: [587134, 587134, 639201, 728456, 704512, 951623, 673809, 489374, 562710, 545890, 807256, 621943],
        backgroundColor: [
          'rgb(0, 153, 255, 0.5)',
          'rgb(163, 0, 204, 0.5)',
          'rgb(0, 51, 17, 0.5)',
          'rgb(255, 102, 0, 0.5)',
          'rgb(179, 179, 0, 0.5)',
          'rgb(255, 0, 0, 0.5)',
          'rgb(0, 255, 255, 0.5)',
          'rgb(204, 51, 0, 0.5)',
          'rgb(68, 204, 0, 0.5)',
          'rgb(0, 0, 204, 0.5)',
          'rgb(102, 0, 102, 0.5)',
          'rgb(102, 153, 255, 0.5)'],
        borderWidth: 4
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
        data: [23560, 3498, 12123, 17612],
      
        borderWidth: 2
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

  