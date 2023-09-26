function showMessage() {
    const messageContainer = document.getElementById('message-container');
    messageContainer.classList.remove('hidden');
    messageContainer.style.opacity = '1';

    setTimeout(() => {
        messageContainer.style.opacity = '0';
        setTimeout(() => {
            messageContainer.classList.add('hidden');
        }, 500);
    }, 3000); // Oculta el mensaje después de 3 segundos
}
