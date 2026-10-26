/*
 * Haven Carty — model portfolio
 * Scrolling gallery behaviour: vertical mouse wheel scrolls the gallery
 * sideways, arrow keys step image by image, images fade in as they load.
 */
(function () {
    'use strict';

    document.documentElement.classList.remove('no-js');

    // Mobile menu toggle.
    var header = document.querySelector('.site-header');
    var toggle = document.querySelector('.menu-toggle');

    if (header && toggle) {
        toggle.addEventListener('click', function () {
            var open = header.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    }

    // Fade images in once loaded.
    document.querySelectorAll('.h-gallery__frame img').forEach(function (img) {
        if (img.complete && img.naturalWidth) {
            img.classList.add('is-loaded');
        } else {
            img.addEventListener('load', function () { img.classList.add('is-loaded'); });
            img.addEventListener('error', function () { img.classList.add('is-loaded'); });
        }
    });

    var gallery = document.querySelector('.h-gallery');

    if (!gallery) {
        return;
    }

    var isHorizontal = function () {
        return gallery.scrollWidth > gallery.clientWidth && getComputedStyle(gallery).display === 'flex';
    };

    // Translate vertical wheel movement into horizontal scrolling.
    gallery.addEventListener('wheel', function (event) {
        if (!isHorizontal() || Math.abs(event.deltaX) > Math.abs(event.deltaY)) {
            return;
        }

        event.preventDefault();
        gallery.scrollLeft += event.deltaY * (event.deltaMode === 1 ? 32 : 1);
    }, { passive: false });

    // Arrow keys move one image at a time.
    var step = function (direction) {
        var items = Array.prototype.slice.call(gallery.querySelectorAll('.h-gallery__item'));
        var left = gallery.scrollLeft;
        var target;

        if (direction > 0) {
            target = items.find(function (item) { return item.offsetLeft > left + 2; });
        } else {
            target = items.slice().reverse().find(function (item) { return item.offsetLeft < left - 2; });
        }

        gallery.scrollTo({
            left: target ? target.offsetLeft : (direction > 0 ? gallery.scrollWidth : 0),
            behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth'
        });
    };

    document.addEventListener('keydown', function (event) {
        if (!isHorizontal() || event.altKey || event.ctrlKey || event.metaKey) {
            return;
        }

        var tag = (event.target.tagName || '').toLowerCase();
        if (tag === 'input' || tag === 'textarea') {
            return;
        }

        if (event.key === 'ArrowRight') {
            event.preventDefault();
            step(1);
        } else if (event.key === 'ArrowLeft') {
            event.preventDefault();
            step(-1);
        }
    });
})();
