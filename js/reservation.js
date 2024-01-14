// Pour que la date de réservation ne soit jamais inférieur à celle d'aujourd'hui
document.addEventListener('DOMContentLoaded', function () {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').min = today;
});


// Pour afficher un message de confirmation que la table à bien été réserver 
function showReservationConfirmation() {
    var confirmationMessage = document.getElementById("confirmation-message");
    confirmationMessage.style.display = "block";
}