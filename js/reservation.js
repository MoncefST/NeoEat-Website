// Pour que la date de réservation ne soit jamais inférieur à celle d'aujourd'hui
document.addEventListener('DOMContentLoaded', function() {
    var today = new Date().toISOString().split('T')[0];
    document.getElementById('date').setAttribute('min', today);
});