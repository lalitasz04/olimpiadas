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


document.addEventListener("DOMContentLoaded", () => {
  // Escuchamos el click del botón
  const $boton = document.querySelector("#btnCrearPdf");
  $boton.addEventListener("click", () => {
      const $elementoParaConvertir = document.body; // <-- Aquí puedes elegir cualquier elemento del DOM
      html2pdf()
          .set({
              margin: 1,
              filename: 'reporte.pdf',
              image: {
                  type: 'jpeg',
                  quality: 0.98
              },
              html2canvas: {
                  scale: 3, // A mayor escala, mejores gráficos, pero más peso
                  letterRendering: true,
              },
              jsPDF: {
                  unit: "in",
                  format: "a3",
                  orientation: 'landcape' // landscape o portrait
              }
          })
          .from($elementoParaConvertir)
          .save()
          .catch(err => console.log(err))
  });
});
  