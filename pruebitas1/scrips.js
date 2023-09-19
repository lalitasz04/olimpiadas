function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
  
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
    } else {
      passwordInput.type = 'password';
    }
  }
  
  // Función para cambiar el fondo cada 2 segundos
  function changeBackground() {
    const colors = ['#007BFF', '#f5f5dc', '#a7c4f7', '#b5c2d8']; // Colores para el degradado
    let index = 0;
  
    setInterval(() => {
      document.body.style.background = `linear-gradient(to right, ${colors[index]}, ${colors[(index + 1) % colors.length]})`;
      index = (index + 1) % colors.length;
    }, 2000);
  }
  
  changeBackground(); // Llama a la función para iniciar el cambio de fondos