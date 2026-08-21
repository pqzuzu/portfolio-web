// Scroll fade animation for hero section
window.addEventListener('scroll', function() {
    const hero = document.getElementById('hero');
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;

    // Fade out hero as user scrolls down
    const opacity = Math.max(1 - (scrollPosition / windowHeight), 0);
    hero.style.opacity = opacity;
});

// Category and navigation logic
document.addEventListener('DOMContentLoaded', function() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const artworkItems = document.querySelectorAll('.artwork-item');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    let currentCategory = 'all';
    let currentIndex = 0;
    let filteredArtworks = Array.from(artworkItems);

    // Function to filter artworks by category
    function filterArtworks(category) {
        filteredArtworks = category === 'all' ? Array.from(artworkItems) : Array.from(artworkItems).filter(item => item.getAttribute('data-category') === category);
        currentIndex = 0;
        updateDisplay();
    }

    // Function to update display based on current category and index
    function updateDisplay() {
        // Hide all artworks
        artworkItems.forEach(item => item.style.display = 'none');

        // Show filtered artworks
        filteredArtworks.forEach(item => item.style.display = 'block');

        // Update navigation buttons
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= filteredArtworks.length - 1;
    }

    // Category button click events
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            categoryBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            currentCategory = this.getAttribute('data-category');
            filterArtworks(currentCategory);
        });
    });

    // Navigation button events
    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateDisplay();
        }
    });

    nextBtn.addEventListener('click', function() {
        if (currentIndex < filteredArtworks.length - 1) {
            currentIndex++;
            updateDisplay();
        }
    });

    // Initial display
    updateDisplay();
});

// Artwork click interaction - Modal display
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('artwork-modal');
    const modalImage = document.getElementById('modal-image');
    const modalTitle = document.getElementById('modal-title');
    const modalDescription = document.getElementById('modal-description');
    const modalYear = document.getElementById('modal-year');
    const modalTools = document.getElementById('modal-tools');
    const closeBtn = document.querySelector('.close');

    // Add click event to each artwork item
    const artworkItems = document.querySelectorAll('.artwork-item');
    artworkItems.forEach(item => {
        item.addEventListener('click', function() {
            const img = this.getAttribute('data-img');
            const title = this.getAttribute('data-title');
            const description = this.getAttribute('data-description');
            const year = this.getAttribute('data-year');
            const tools = this.getAttribute('data-tools');

            modalImage.src = '/' + img; // Full path to image
            modalTitle.textContent = title;
            modalDescription.textContent = description;
            modalYear.textContent = year;
            modalTools.textContent = tools;

            modal.style.display = 'block';
        });
    });

    // Close modal when clicking the close button
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Close modal when clicking outside the modal content
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});