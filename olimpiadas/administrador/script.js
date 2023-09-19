document.getElementById('searchInput').addEventListener('input', function() {
  var searchText = this.value.toLowerCase();
  var table = document.getElementById('dataTable');
  var rows = table.getElementsByTagName('tr');

  for (var i = 1; i < rows.length; i++) {
    var row = rows[i];
    var firstName = row.getElementsByTagName('td')[0].textContent.toLowerCase();
    var lastName = row.getElementsByTagName('td')[1].textContent.toLowerCase();

    if (firstName.includes(searchText) || lastName.includes(searchText)) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  }
});
  