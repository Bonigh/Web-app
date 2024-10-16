document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const albumContainer = document.getElementById('albumContainer');

    if (!searchInput || !albumContainer) {
        console.error('Search input or album container element not found.');
        return;
    }

    let albumData = [];

    // Fetch the album data
    fetch('https://jsonplaceholder.typicode.com/albums')
        .then(response => response.json())
        .then(data => {
            albumData = data;
            displayAlbums(albumData); // Initially display all albums
        })
        .catch(error => console.error('Error fetching albums:', error));

    // Respond to input changes and show matching albums
    searchInput.addEventListener('keyup', function() {
        const searchTerm = this.value.toLowerCase();
        const filteredAlbums = !searchTerm.length ? albumData : albumData.filter(album => 
            album.title.toLowerCase().includes(searchTerm)
        );

        displayAlbums(filteredAlbums);
    });

    function displayAlbums(albums) {
        albumContainer.innerHTML = ''; // Clear previous results

        if (!albums.length) {
            albumContainer.innerHTML = '<p>No albums found</p>';
            return;
        }

        albums.forEach(album => {
            const albumElement = document.createElement('div');
            albumElement.className = 'album';
            albumElement.innerHTML = `
                <p>${album.title}</p>
            `;
            albumContainer.appendChild(albumElement);
        });
    }
});
