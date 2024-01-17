function printCV(cvUrl) {
    var newWindow = window.open(cvUrl, '_blank');
    if (newWindow) {
        newWindow.onload = function () {
            newWindow.print();
        };
    } else {
        alert("Impossible d'ouvrir une nouvelle fenêtre. Veuillez autoriser les nouvelles fenêtres.");
    }
}
