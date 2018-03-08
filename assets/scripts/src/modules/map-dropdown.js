// Handles URL switching based on dropdown options on the multiregion homepage map
document.getElementById('map-dropdown').onchange = function() {
  if(this.children[this.selectedIndex].getAttribute('href') != 'none') {
    window.location.href = this.children[this.selectedIndex].getAttribute('href');
  }
}
