const likeBtn = document.querySelectorAll('.like-button');

likeBtn.forEach((button) => {
  button.addEventListener('click', () => {
    const itemId = button.dataset.itemId;

    fetch(`/like/${itemId}`, {
      method: 'POST',
    })
    .then((response) => response.json())
    .then((data) => {
      // Actualizar la UI con la respuesta del servidor (por ejemplo, actualizar el contador de likes)
    })
    .catch((error) => {
      console.error('Error:', error);
    });
  });
});
