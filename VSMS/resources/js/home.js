// Counter Animation
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        if (element.textContent.includes('K')) {
            element.textContent = Math.floor(current) + 'K+';
        } else if (element.textContent.includes('%')) {
            element.textContent = Math.floor(current) + '%';
        } else {
            element.textContent = Math.floor(current) + '+';
        }
    }, 16);
}

// Initialize counters when in viewport
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target.querySelector('.counter');
            if (counter) {
                animateCounter(counter);
            }
        }
    });
});

document.querySelectorAll('.animate-scale-in').forEach(el => {
    observer.observe(el);
});

// Quick Book Service
document.querySelectorAll('.quick-book-btn').forEach(button => {
    button.addEventListener('click', function() {
        const serviceName = this.getAttribute('data-service');
        window.location.href = `/booking?service=${encodeURIComponent(serviceName)}`;
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Video play button
document.querySelector('.play-video-btn')?.addEventListener('click', function() {
    alert('Video playback would start here.');
});

// Scroll animations
const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-in-up');
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.service-card, .testimonial-card, .process-step').forEach(el => {
    scrollObserver.observe(el);
});
