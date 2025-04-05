window.onload = function() {
    document.querySelectorAll('.btn_more').forEach(button => {
        button.addEventListener('click', function() {
            const desc = this.closest('.main__desc-wrapper');
            desc.classList.toggle('expanded');
            this.textContent = desc.classList.contains('expanded') 
                ? 'Show less' 
                : 'Show more';
        });
    });
}



document.addEventListener('DOMContentLoaded', function() {
    const menu = document.querySelector('.menu');
    const burger = document.querySelector('.burger'); 
    const closeBtn = document.querySelector('.menu .close');
    let overlay = null;
    
    function createOverlay() {
        overlay = document.createElement('div');
        overlay.className = 'overlay';
        document.body.appendChild(overlay);
        
        setTimeout(() => {
            overlay.style.opacity = '1';
        }, 10);
        
        overlay.addEventListener('click', closeMenu);
    }
    function removeOverlay() {
        if (overlay) {
            overlay.style.opacity = '0';
            setTimeout(() => {
                overlay.remove();
                overlay = null;
            }, 300); // Ждём завершения анимации
        }
    }
    function openMenu() {
        menu.classList.add('active');
        document.body.style.overflow = 'hidden'; 
        createOverlay();
    }
    
    function closeMenu() {
        menu.classList.remove('active');
        document.body.style.overflow = ''; 
        removeOverlay();
    }
    
    if (burger) {
        burger.addEventListener('click', function(e) {
            e.stopPropagation();
            openMenu();
        });
    }
    
    if (closeBtn) {
        closeBtn.addEventListener('click', closeMenu);
    }
    
    document.addEventListener('click', function(e) {
        if (menu.classList.contains('active') && !menu.contains(e.target) && !burger.contains(e.target)) {
            closeMenu();
        }
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && menu.classList.contains('active')) {
            closeMenu();
        }
    });
});