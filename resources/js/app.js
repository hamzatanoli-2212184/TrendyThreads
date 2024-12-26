import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const searchButton = document.getElementById('searchButton'); // Button ID
    const searchInput = document.getElementById('searchQuery');   // Input ID
    const resultsDiv = document.getElementById('searchResults'); // Results container ID

    if (searchButton && searchInput && resultsDiv) {
        searchButton.addEventListener('click', () => {
            const query = searchInput.value.trim();

            if (!query) {
                alert('Please enter a search query.');
                return;
            }

            fetch(`/search?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    resultsDiv.innerHTML = ''; // Clear previous results

                    if (data.length > 0) {
                        data.forEach(product => {
                            resultsDiv.innerHTML += `
                                <div class="product-item">
                                    <h3>${product.name}</h3>
                                    <p>${product.description}</p>
                                    <p><strong>Price:</strong> $${product.price}</p>
                                </div>
                            `;
                        });
                    } else {
                        resultsDiv.innerHTML = '<p>No products found.</p>';
                    }
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                    alert('Something went wrong.');
                });
        });
    }
});
