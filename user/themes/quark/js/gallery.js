// gallery.js
function renderGallery(containerId, images) {
    const container = document.getElementById(containerId);
    let galleryHTML = '<div class="gallery">';
    let lightboxHTML = '';

    images.forEach((img, i) => {
        const id = containerId + '-img' + i;
        galleryHTML += `
            <figure>
                <img src="${img.src}" alt="${img.alt}" onclick="openLightbox('${id}')">
                <figcaption>${img.caption}</figcaption>
            </figure>`;
        lightboxHTML += `
            <div class="lightbox" id="${id}">
                <span class="close" onclick="closeLightbox('${id}')">&times;</span>
                <div class="lightbox-overlay" onclick="closeLightbox('${id}')">
                    <img src="${img.src}">
                </div>
            </div>`;
    });

    galleryHTML += '</div>';
    container.innerHTML = galleryHTML + lightboxHTML;
}

function openLightbox(id) {
    document.getElementById(id).classList.add('active');
}
function closeLightbox(id) {
    document.getElementById(id).classList.remove('active');
}