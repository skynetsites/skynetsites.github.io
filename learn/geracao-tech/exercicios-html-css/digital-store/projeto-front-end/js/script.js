/**
 * Digital Store - Script Principal
 * Este arquivo contém todas as funcionalidades
 */

document.addEventListener('DOMContentLoaded', function() {
    
	// Botões para ações de alternar abrir e fechar
	const menuToggles = document.querySelectorAll('.mobile-menu-toggle, .mobile-menu-close');
    const searchToggleClose = document.getElementById('mobile-search-toggle');
    const cartBtn = document.getElementById('cart-btn');
    const overlay = document.querySelector('body');

    // Abrir e fechar menu para celular
    if (menuToggles.length > 0 && overlay) {
        menuToggles.forEach(menuToggle => {
            menuToggle.addEventListener('click', function(e) {
                if (overlay.classList.contains('menu-active')) {
                    // Fechar
                    //overlay.classList.remove('menu-active', 'overlay');
                    overlay.removeAttribute('class');
                } else {
                    // Abrir
                    overlay.classList.add('menu-active', 'overlay');
                }
            });
        });

        // Clique fora e fechar
        document.addEventListener('click', function(event) {
            const isClickInside = overlay.contains(event.target) ||
            Array.from(menuToggles).some(btn => btn.contains(event.target));
            if (!isClickInside && overlay.classList.contains('menu-active')) {
                //overlay.classList.remove('menu-active', 'overlay');
                overlay.removeAttribute('class');
            }
        });
    }
    
    // Abrir e fechar barra de pesquisa
    if (searchToggleClose && overlay) {
        searchToggleClose.addEventListener('click', function() {
            if (overlay.classList.contains('search-bar-active')) {
                // Fechar
                //overlay.classList.remove('search-bar-active', 'overlay');
                overlay.removeAttribute('class');
            } else {
                // Abrir
                overlay.classList.add('search-bar-active', 'overlay');
            }
        });

        // Clique fora e fechar
        document.addEventListener('click', function(event) {
            const isClickInside = overlay.contains(event.target) ||
            Array.from(searchToggleClose).some(btn => btn.contains(event.target));
            if (!isClickInside && overlay.classList.contains('search-bar-active')) {
                //overlay.classList.remove('search-bar-active', 'overlay');
                overlay.removeAttribute('class');
            }
        });
    }
    
    // Abrir e fechar carrinho
    if (cartBtn && overlay) {
        cartBtn.addEventListener('click', function() {
            if (overlay.classList.contains('cart-active')) {
				// Fechar
				//overlay.classList.remove('cart-active', 'overlay');
				overlay.removeAttribute('class');
			} else {
				// Abrir
				overlay.classList.add('cart-active', 'overlay');
			}
        });

        // Clique fora e fechar
        document.addEventListener('click', function(event) {
            const isClickInside = overlay.contains(event.target) ||
            Array.from(cartBtn).some(btn => btn.contains(event.target));
            if (!isClickInside && overlay.classList.contains('cart-active')) {
                //overlay.classList.remove('cart-active', 'overlay');
                overlay.removeAttribute('class');
            }
        });
    }
	
});
