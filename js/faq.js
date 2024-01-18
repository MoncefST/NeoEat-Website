document.addEventListener("DOMContentLoaded", function() {
    const faqelements = document.querySelectorAll('.faq-element');

    faqelements.forEach(element => {
        const questionBtn = element.querySelector('.faq-question-btn');

        questionBtn.addEventListener('click', () => {
            // Ferme toutes les autres réponses
            faqelements.forEach(otherelement => {
                if (otherelement !== element) {
                    otherelement.classList.remove('active');
                    otherelement.querySelector('.faq-reponse').style.display = 'none';
                }
            });

            // Affiche ou masque la réponse de la question actuelle
            element.classList.toggle('active');
            const reponse = element.querySelector('.faq-reponse');
            reponse.style.display = element.classList.contains('active') ? 'block' : 'none';
        });
    });
});
