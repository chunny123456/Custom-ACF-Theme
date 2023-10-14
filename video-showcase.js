 

function showVideo(videoId) {
  // Replace the 'youtube-container' with the ID or class name of your container element
  var container = document.getElementById('youtube-container');

  // Remove any existing child elements
  while (container.firstChild) {
    container.removeChild(container.firstChild);
  }

  // Create the iframe element
  var iframe = document.createElement('iframe');
  iframe.src = 'https://www.youtube.com/embed/' + videoId;
  iframe.frameBorder = '0';
  iframe.allowFullscreen = true;

  // Append the iframe to the container
  container.appendChild(iframe);
}

function showContainer(containerId, defaultVideo) {
  // Hide all containers
  document.getElementById("UCSWwb_YyNB8vuC1VDcfPPaQ").style.display = "none";
  document.getElementById("UCeBWh-0p7vgBeD6HOHBpfwQ").style.display = "none";
  document.getElementById("UCDnEa2HC2eeT-cN3pAKnNTw").style.display = "none";
  document.getElementById("UCMPNAq4xRaz2XMtYSvm8oOA").style.display = "none";

  // Show the selected container
  document.getElementById(containerId).style display = "block";

  showVideo(defaultVideo);
}
