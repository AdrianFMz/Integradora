

<h1>Clases en Línea</h1>
</div>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pantalla de videollamada</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="video-container">
    <video id="video" autoplay muted playsinline>
        
      <source src="video.mp4" type="video/mp4">
    </video>
    <div class="loading-icon">
      <i class="bx bx-loader bx-spin bx-lg"></i>
    </div>
    <div class="controls">
      <button class="search-tutor">Buscar tutor</button>
    </div>
  </div>
</body>
</html>

<SCRipt>
const video = document.getElementById('video');
const loadingIcon = document.querySelector('.loading-icon');

// Mostrar el icono de carga al iniciar la videollamada
video.addEventListener('loadstart', () => {
  loadingIcon.classList.add('active');
});

// Ocultar el icono de carga cuando la videollamada se carga
video.addEventListener('canplaythrough', () => {
  loadingIcon.classList.remove('active');
});

// Función para buscar un tutor (ejemplo)
function searchTutor() {
  // Implementar la lógica para buscar un tutor
  alert('Buscando tutor...');
}

// Agregar evento al botón de búsqueda de tutor
document.querySelector('.search-tutor').addEventListener('click', searchTutor);
</SCRipt>


<STYle>
    .video-container {
  width: 600px;
  height: 400px;
  border: 1px solid #ccc;
  margin: 20px auto;
  position: relative;
}

.video-container video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.loading-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
}

.loading-icon i {
  font-size: 36px;
  color: #333;
}

.controls {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 10px;
}

.search-tutor {
  margin-right: 10px;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  cursor: pointer;
}

/* Animación del icono de carga */

@keyframes loading {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.loading-icon i {
  animation: loading 2s linear infinite;
}
</STYle>