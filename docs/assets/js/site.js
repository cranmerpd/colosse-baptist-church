(function () {
    const navToggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('#primary-nav');

    if (navToggle && nav) {
        navToggle.addEventListener('click', function () {
            const isOpen = nav.classList.toggle('is-open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
        });
    }

    const modal = document.querySelector('[data-login-modal]');
    const openButtons = document.querySelectorAll('[data-login-open]');
    const closeButtons = document.querySelectorAll('[data-login-close]');

    function openModal() {
        if (!modal) return;
        modal.hidden = false;
        const input = modal.querySelector('input');
        if (input) input.focus();
    }

    function closeModal() {
        if (!modal) return;
        modal.hidden = true;
    }

    openButtons.forEach((button) => button.addEventListener('click', openModal));
    closeButtons.forEach((button) => button.addEventListener('click', closeModal));

    if (modal) {
        modal.addEventListener('click', function (event) {
            if (event.target === modal) closeModal();
        });
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') closeModal();
    });
})();
