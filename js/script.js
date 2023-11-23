function showSection(sectionId) {
    // Oculta todas as seções
    var sections = document.querySelectorAll('.home-section, .produto-section, .pedido-section');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    // Exibe a seção correspondente ao ID fornecido
    var selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.style.display = 'block';

        // Atualiza a URL para refletir a seção selecionada
        history.pushState(null, null, '#' + sectionId);
    }
}
