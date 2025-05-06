document.addEventListener('DOMContentLoaded', function () {
    const experiencesLink = document.querySelector('a[href="#"]'); // Target "Experiences" link
    const experiencesDropdown = document.getElementById('experiences-dropdown');
    
    // Toggle the dropdown visibility when "Experiences" is clicked
    experiencesLink.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default link behavior (e.g., jumping to #)

        // Toggle the visibility
        experiencesDropdown.classList.toggle('hidden');
    });
});