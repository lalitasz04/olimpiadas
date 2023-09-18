document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tr');
  
    for (let i = 1; i < rows.length; i++) {
      const row = rows[i];
      const cells = row.getElementsByTagName('td');
      let found = false;
  
      for (let j = 0; j < cells.length; j++) {
        const cell = cells[j];
        if (cell) {
          const cellValue = cell.textContent || cell.innerText;
          if (cellValue.toLowerCase().indexOf(searchValue) > -1) {
            found = true;
            break;
          }
        }
      }
  
      if (found) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    }
  });
  