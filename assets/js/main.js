document.addEventListener('DOMContentLoaded', function() {
    var questions = document.querySelectorAll('.question');

    questions.forEach(function(question) {
        question.addEventListener('click', function() {
            var answer = this.nextElementSibling;

            var isAnswerOpen = answer.style.display === 'block';

            document.querySelectorAll('.answer').forEach(function(ans) {
                ans.style.display = 'none';
            });

            if (isAnswerOpen) {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        });
    });
});

var flkty = new Flickity('.carousel', {
    // Opções de configuração do Flickity
    cellAlign: 'left', // Alinhamento dos slides
    contain: true, // Limitar os slides ao contêiner
    wrapAround: true, // Permitir navegação infinita
    autoPlay: true, // Avançar automaticamente os slides 
});