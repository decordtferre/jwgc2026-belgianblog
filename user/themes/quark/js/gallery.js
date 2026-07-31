function isVideo(src) {
    return /\.(mp4|mov|webm)$/i.test(src);
}

function renderGallery(containerId, images) {
    const container = document.getElementById(containerId);
    let galleryHTML = '<div class="gallery">';
    let lightboxHTML = '';

    images.forEach((img, i) => {
        const id = containerId + '-img' + i;
        const video = isVideo(img.src);

        galleryHTML += `
            <figure>
                ${video
                    ? `<video src="${img.src}" autoplay muted loop playsinline onclick="openLightbox('${id}')"></video>`
                    : `<img src="${img.src}" alt="${img.alt}" onclick="openLightbox('${id}')">`
                }
                <figcaption>${img.caption}</figcaption>
            </figure>`;

        lightboxHTML += `
            <div class="lightbox" id="${id}">
                <span class="close" onclick="closeLightbox('${id}')">&times;</span>
                <div class="lightbox-overlay" onclick="closeLightbox('${id}')">
                    ${video
                        ? `<video src="${img.src}" controls autoplay playsinline onclick="event.stopPropagation()"></video>`
                        : `<img src="${img.src}">`
                    }
                </div>
            </div>`;
    });

    galleryHTML += '</div>';
    container.innerHTML = galleryHTML + lightboxHTML;
}

function openLightbox(id) {
    document.getElementById(id).classList.add('active');
    // sync the lightbox video to where the thumbnail was, then let it play with sound
    const thumb = document.querySelector(`[onclick="openLightbox('${id}')"]`);
    const lightboxVid = document.querySelector('#' + id + ' video');
    if (thumb && thumb.tagName === 'VIDEO' && lightboxVid) {
        lightboxVid.currentTime = thumb.currentTime;
    }
}

function closeLightbox(id) {
    const vid = document.querySelector('#' + id + ' video');
    if (vid) vid.pause();
    document.getElementById(id).classList.remove('active');
}