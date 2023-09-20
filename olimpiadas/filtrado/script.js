document.getElementById('convertButton').addEventListener('click', () => {
    // Obtén la página actual
    const body = document.body;
  
    // Opciones para la conversión a PDF
    const options = {
      filename: 'pagina_pdf.pdf',
      image: { type: 'jpeg', quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
  
    // Convierte la página a PDF
    html2pdf(body, options);
  });
  