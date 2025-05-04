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
			const isClickInside =
				event.target.closest('.mobile-search-bar') ||
				searchToggleClose.contains(event.target);

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
			const isClickInside =
				event.target.closest('.cart-dropdown') ||
				cartBtn.contains(event.target);

			if (!isClickInside && overlay.classList.contains('cart-active')) {
				//overlay.classList.remove('cart-active', 'overlay');
				overlay.removeAttribute('class');
			}
		});
    }

    // Hero Slider Functionality
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.createElement('button');
    const nextBtn = document.createElement('button');
    let currentSlide = 0;
    let slideInterval;
    let isAnimating = false;
    
    // Add navigation arrows to slider
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
    
    // Initialize slider
    function initSlider() {
        // Set first slide as active
        showSlide(currentSlide);
        
        // Add navigation buttons
        //addNavButtons();
        
        // Start automatic slideshow
        startSlideshow();
        
        // Add click event to dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (!isAnimating && currentSlide !== index) {
                    currentSlide = index;
                    showSlide(currentSlide);
                    resetSlideshow();
                }
            });
        });
        
        // Add keyboard navigation
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
        
        // Pause slideshow on hover
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
    
    // Go to previous slide
    function goToPrevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    // Go to next slide
    function goToNextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    // Show specific slide with animation
    function showSlide(index) {
        if (isAnimating) return;
        isAnimating = true;
        
        // Get current active slide
        const activeSlide = document.querySelector('.slide.active');
        
        // Hide current active slide with fade out
        if (activeSlide) {
            activeSlide.classList.add('fade-out');
            activeSlide.classList.remove('active');
            
            setTimeout(() => {
                activeSlide.classList.remove('fade-out');
            }, 500);
        }
        
        // Remove active class from all dots
        dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Show new slide with fade in
        setTimeout(() => {
            slides[index].classList.add('active', 'fade-in');
            dots[index].classList.add('active');
            
            setTimeout(() => {
                slides[index].classList.remove('fade-in');
                isAnimating = false;
            }, 500);
        }, 50);
    }
    
    // Start automatic slideshow
    function startSlideshow() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            goToNextSlide();
        }, 5000); // Change slide every 5 seconds
    }
    
    // Reset slideshow timer
    function resetSlideshow() {
        clearInterval(slideInterval);
        startSlideshow();
    }
    
    // Initialize slider if elements exist
    if (slides.length > 0 && dots.length > 0) {
        initSlider();
    }
	
});
