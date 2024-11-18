const ctx1 = document.getElementById('CHARTCATEGORIA1');

  new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: ['CHIHUAHUA', 'SONORA', 'CULIACAN', 'MEXICO', 'MONTEREY', 'DURANGO'],
      datasets: [{
        label: '# ENVIOS POR MEXICO',
        data: [560, 398, 423, 112,123,876,],
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

  const ctx2 = document.getElementById('CHARTCATEGORIA2');

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['ALABAMA', 'ARIZONA', 'CALIFORNIA', 'COLORADO', 'FLORIDA', 'INDIANA'],
      datasets: [{
        label: '# ENVIOS POR ESTADOS UNIDOS',
        data: [60, 308, 223, 12,34,79,98],
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

  const ctx4 = document.getElementById('CHARTCATEGORIA3');

  new Chart(ctx4, {
    type: 'pie',
    data: {
      labels: ['ALBERTA', 'MANITOBA', ' TERRANOVA', 'NUEVA ESCOCIA', 'OMTARIO'],
      datasets: [{
        label: '# ENVIOS POR CANADA',
        data: [78, 38, 23, 11, 32,5, 87],
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

  const ctx5 = document.getElementById('CHARTCATEGORIA4');

  new Chart(ctx5, {
    type: 'pie',
    data: {
      labels: ['CHINA', 'BRAZIL', ' AFRICA', 'COREA', 'OCEANIA'],
      datasets: [{
        label: '# ENVIOS POR RESTO DEL MUNDO',
        data: [786, 348, 236, 111, 342,58],
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