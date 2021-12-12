window.onload = () => {
    const baseSelector = document.getElementById('base')
    const substratSelector = document.getElementById('substrat')
    const plantsSelector = document.getElementById('plants')

    const baseSVG = document.getElementById('base-svg-background')

    baseSelector.addEventListener('change', (event) => {
        $value = event.target.value


        switch ($value) {
            case 'pouzzolane':
                baseSVG.setAttribute('fill', 'green')
                break;
            case 'argile':
                baseSVG.setAttribute('fill', 'blue')
                break;
            case 'charbon':
                baseSVG.setAttribute('fill', 'yellow')
                break;
            case 'cailloux':
                baseSVG.setAttribute('fill', 'red')
                break;
        }
    });
    substratSelector.addEventListener('change', (event) => {
        // TODO Changer les SVG
    });
    plantsSelector.addEventListener('change', (event) => {
        // TODO Changer les SVG
    });
}
