/**
 * Digital Store - Script Principal
 * Este arquivo contém todas as funcionalidades
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Botões para ações de alternar abrir e fechar
	const menuToggles = document.querySelectorAll('.mobile-menu-toggle, .mobile-menu-close');
	//const menuToggle = document.querySelector('.mobile-menu-toggle');
	const searchToggleClose = document.getElementById('mobile-search-toggle');
	const cartBtn = document.getElementById('cart-btn');
	const overlay = document.querySelector('body');
	
    // Funcionalidades do menu para celular  
    
    // Abrir e fechar do menu para celular
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
			const isClickInside =
				event.target.closest('.mobile-menu-overlay') ||
				event.target.closest('.mobile-menu-toggle');
				//menuToggle.contains(event.target);

			if (!isClickInside && overlay.classList.contains('menu-active')) {
                //overlay.classList.remove('menu-active', 'overlay');
				overlay.removeAttribute('class');
			}
		});
    }

    // Funcionalidades da barra de pesquisa

    // Abrir e fechar da barra de pesquisa
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
			const isClickInside =
				event.target.closest('.mobile-search-bar') ||
				searchToggleClose.contains(event.target);

			if (!isClickInside && overlay.classList.contains('search-bar-active')) {
                //overlay.classList.remove('search-bar-active', 'overlay');
				overlay.removeAttribute('class');
			}
		});
    }

    // Funcionalidades do carrinho
    
    // Abrir e fechar do carrinho
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
			const isClickInside =
				event.target.closest('.cart-dropdown') ||
				cartBtn.contains(event.target);

			if (!isClickInside && overlay.classList.contains('cart-active')) {
				//overlay.classList.remove('cart-active', 'overlay');
				overlay.removeAttribute('class');
			}
		});
    }

    // Funcionalidades do slider
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.createElement('button');
    const nextBtn = document.createElement('button');
    let currentSlide = 0;
    let slideInterval;
    let isAnimating = false;
    
    // Adicionar setas de navegação para slider
    function addNavButtons() {
        prevBtn.className = 'slider-nav prev';
        nextBtn.className = 'slider-nav next';
        prevBtn.innerHTML = '<i class="fa fa-chevron-left"></i>';
        nextBtn.innerHTML = '<i class="fa fa-chevron-right"></i>';
        
        const sliderContainer = document.querySelector('.slider-container');
        if (sliderContainer) {
            sliderContainer.appendChild(prevBtn);
            sliderContainer.appendChild(nextBtn);
        }
        
        prevBtn.addEventListener('click', () => {
            if (!isAnimating) {
                goToPrevSlide();
                resetSlideshow();
            }
        });
        
        nextBtn.addEventListener('click', () => {
            if (!isAnimating) {
                goToNextSlide();
                resetSlideshow();
            }
        });
    }
    
    // Inicializar slider
    function initSlider() {
        // Definir o primeiro slide como ativo
        showSlide(currentSlide);
        
        // Adicionar setas de navegação
        //addNavButtons();
        
        // Iniciar o slider automática
        startSlideshow();
        
        // Adicionar ação de clique aos pontos de navegação
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (!isAnimating && currentSlide !== index) {
                    currentSlide = index;
                    showSlide(currentSlide);
                    resetSlideshow();
                }
            });
        });
        
        // Adicionar ação de navegação por teclado
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                if (!isAnimating) {
                    goToPrevSlide();
                    resetSlideshow();
                }
            } else if (e.key === 'ArrowRight') {
                if (!isAnimating) {
                    goToNextSlide();
                    resetSlideshow();
                }
            }
        });
        
        // Pausar o slider ao passar o mouse
        const sliderContainer = document.querySelector('.slider-container');
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });
            
            sliderContainer.addEventListener('mouseleave', () => {
                startSlideshow();
            });
        }
    }
    
    // Volta para o slide anterior
    function goToPrevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    // Vai para o próximo slide
    function goToNextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    // Mostrar o slide atual com animação
    function showSlide(index) {
        if (isAnimating) return;
        isAnimating = true;
        
        // Chama o slide ativo
        const activeSlide = document.querySelector('.slide.active');
        
        // Esconde o slide ativo com efeito fade out (desaparecendo)
        if (activeSlide) {
            activeSlide.classList.add('fade-out');
            activeSlide.classList.remove('active');
            
            setTimeout(() => {
                activeSlide.classList.remove('fade-out');
            }, 500);
        }
        
        // Remover a classe .active de todos os pontos de navegação
        dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Mostrar novo slide com efeito fade in (aparecendo)
        setTimeout(() => {
            slides[index].classList.add('active', 'fade-in');
            dots[index].classList.add('active');
            
            setTimeout(() => {
                slides[index].classList.remove('fade-in');
                isAnimating = false;
            }, 500);
        }, 50);
    }
    
    // Iniciar o slider automática
    function startSlideshow() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            goToNextSlide();
        }, 5000);
    }
    
    // Reiniciar o intervalo do slider
    function resetSlideshow() {
        clearInterval(slideInterval);
        startSlideshow();
    }
    
    // Iniciar slider se tiver elementos
    if (slides.length > 0 && dots.length > 0) {
        initSlider();
    }
	
});
