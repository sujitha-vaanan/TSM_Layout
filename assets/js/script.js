// Fetch the HTML content of the included files

fetch('nav.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('nav').innerHTML = data;
  });

