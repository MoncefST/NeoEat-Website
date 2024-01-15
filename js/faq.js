document.addEventListener("DOMContentLoaded", function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question-btn');

        questionBtn.addEventListener('click', () => {
            // Ferme toutes les autres réponses
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.display = 'none';
                }
            });

            // Affiche ou masque la réponse de la question actuelle
            item.classList.toggle('active');
            const answer = item.querySelector('.faq-answer');
            answer.style.display = item.classList.contains('active') ? 'block' : 'none';
        });
    });
});
