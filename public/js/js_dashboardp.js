// search.js

const games = [
    {
        id: 1,
        name: "PUBG Mobile",
        image: "pubg.jpg",
        description: "Tencent Games",
        link: "/produk1-pembeli",
    },
    {
        id: 2,
        name: "Mobile Legends",
        image: "mobile_legends.jpg",
        description: "Moonton",
        link: "/produk2-pembeli",
    },
    {
        id: 3,
        name: "Free Fire",
        image: "freefire.jpg",
        description: "Garena",
        link: "/produk3-pembeli",
    },
];

try {
    const searchInput = document.getElementById("searchInput");
    const searchPopup = document.getElementById("searchPopup");
    const searchOverlay = document.getElementById("searchOverlay");
    const searchTerm = document.getElementById("searchTerm");
    const searchResults = document.getElementById("searchResults");

    if (
        !searchInput ||
        !searchPopup ||
        !searchOverlay ||
        !searchTerm ||
        !searchResults
    ) {
        throw new Error(
            "One or more DOM elements are missing. Please check the IDs in your HTML."
        );
    }

    function createGameElement(game) {
        try {
            return `
                <a href="${game.link}" class="search-result-item">
                    <img src="{{ asset('images') }}/${game.image}" alt="${game.name}" class="game-preview-img">
                    <div class="game-info">
                        <h2 class="game-preview-title">${game.name}</h2>
                        <p>${game.description}</p>
                    </div>
                </a>
            `;
        } catch (error) {
            console.error("Error in createGameElement:", error.message);
            return '<div class="error">Error rendering game item</div>';
        }
    }

    function filterGames(searchTerm) {
        try {
            return games.filter(
                (game) =>
                    game.name
                        .toLowerCase()
                        .includes(searchTerm.toLowerCase()) ||
                    game.description
                        .toLowerCase()
                        .includes(searchTerm.toLowerCase())
            );
        } catch (error) {
            console.error("Error in filterGames:", error.message);
            return [];
        }
    }

    function updateSearchResults(searchTerm) {
        try {
            const filteredGames = filterGames(searchTerm);

            if (filteredGames.length === 0) {
                searchResults.innerHTML =
                    '<div class="no-results">No games found</div>';
            } else {
                searchResults.innerHTML = filteredGames
                    .map((game) => createGameElement(game))
                    .join("");
            }
        } catch (error) {
            console.error("Error in updateSearchResults:", error.message);
            searchResults.innerHTML =
                '<div class="error">Failed to update search results</div>';
        }
    }

    searchInput.addEventListener("input", function () {
        try {
            if (this.value.length > 0) {
                searchPopup.classList.add("active");
                searchOverlay.classList.add("active");
                searchTerm.textContent = this.value;
                updateSearchResults(this.value);
            } else {
                searchPopup.classList.remove("active");
                searchOverlay.classList.remove("active");
            }
        } catch (error) {
            console.error("Error in input event listener:", error.message);
        }
    });

    searchOverlay.addEventListener("click", function () {
        try {
            searchPopup.classList.remove("active");
            searchOverlay.classList.remove("active");
            searchInput.value = "";
        } catch (error) {
            console.error("Error in click event listener:", error.message);
        }
    });
} catch (error) {
    console.error("Initialization Error:", error.message);
}
