function mouseIn(element) {
    element.style.transform = 'scale(1.1)';
}

function mouseOut(element) {
    element.style.transform = 'scale(1)';
}

function mouseInG(element) {
    element.style.transition = 'all 0.3s ease';
    element.style.transform = 'scale(1.1)';
    element.style.borderRadius = '20px';
    element.style.zIndex = '9999';
}

function mouseOutG(element) {
    element.style.transition = 'all 0.3s ease';
    element.style.transform = 'scale(1)';
    element.style.borderRadius = '0px';
    element.style.zIndex = '9988';
}