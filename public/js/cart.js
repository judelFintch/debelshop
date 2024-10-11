let cart = [];

// Fonction pour afficher une notification
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification bg-green-500 text-white p-3 rounded-lg shadow-lg';
    notification.innerText = message;
    document.body.appendChild(notification);

    // Supprimer la notification après quelques secondes
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Fonction pour ajouter un produit au panier
function addToCart(productId) {
    let quantityInput = document.getElementById('quantity-' + productId);
    let quantity = parseInt(quantityInput.value);

    // Vérifier si le produit est déjà dans le panier
    let item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity += quantity; // Ajouter à la quantité existante
        showNotification(`Ajouté ${quantity} à ${item.quantity} du produit ID: ${productId}`);
    } else {
        cart.push({ id: productId, quantity: quantity }); // Ajouter un nouvel article
        showNotification(`Ajouté ${quantity} du produit ID: ${productId} au panier`);
    }
    
    updateCart(); // Mettre à jour l'affichage du panier
}

// Fonction pour mettre à jour l'affichage du panier
function updateCart() {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    
    // Vider le contenu précédent
    cartItemsContainer.innerHTML = '';
    let total = 0;

    // Afficher les articles dans le panier
    cart.forEach(item => {
        let productPrice = getProductPrice(item.id); // Fonction à définir
        total += productPrice * item.quantity;
        cartItemsContainer.innerHTML += `<div>Produit ID: ${item.id}, Quantité: ${item.quantity}, Prix: $${(productPrice * item.quantity).toFixed(2)}</div>`;
    });

    cartTotal.innerText = `$${total.toFixed(2)}`;
}

// Fonction fictive pour obtenir le prix d'un produit par ID
function getProductPrice(productId) {
    return 10.00; // Exemples de prix, ajustez selon vos données
}

// Fonction pour afficher/masquer le panier
function toggleCart() {
    const cartElement = document.getElementById('cart');
    cartElement.classList.toggle('hidden');
}
