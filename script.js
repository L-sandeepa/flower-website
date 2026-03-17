document.addEventListener('DOMContentLoaded', () => {
    
    // Modal Elements
    const checkoutModal = document.getElementById('checkoutModal');
    const successModal = document.getElementById('successModal');
    const closeBtns = document.querySelectorAll('.close-modal');
    const orderForm = document.getElementById('orderForm');
    
    // Elements to populate in modal
    const modalProductName = document.getElementById('modal-product-name');
    const modalProductPrice = document.getElementById('modal-product-price');
    const inputProductName = document.getElementById('input-product-name');
    const inputProductPrice = document.getElementById('input-product-price');

    // Cart Icon Logic
    const cartIcon = document.querySelector('.cart-icon');
    if (cartIcon) {
        cartIcon.addEventListener('click', () => {
            const shopSection = document.getElementById('shop');
            if (shopSection) {
                shopSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // Buy Now Buttons
    const buyButtons = document.querySelectorAll('.buy-now-btn');

    // Open Checkout Modal
    buyButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const card = e.target.closest('.product-card');
            const name = card.getAttribute('data-name');
            const price = card.getAttribute('data-price');

            // Populate Modal
            modalProductName.textContent = name;
            modalProductPrice.textContent = price;
            inputProductName.value = name;
            inputProductPrice.value = price;

            // Show Modal
            checkoutModal.style.display = 'flex';
        });
    });

    // Track Orders Logic
    const trackOrdersLink = document.getElementById('track-orders-link');
    const trackOrdersModal = document.getElementById('trackOrdersModal');
    const trackOrdersForm = document.getElementById('trackOrdersForm');
    const ordersList = document.getElementById('orders-list');

    if (trackOrdersLink) {
        trackOrdersLink.addEventListener('click', (e) => {
            e.preventDefault();
            trackOrdersModal.style.display = 'flex';
        });
    }

    if (trackOrdersForm) {
        trackOrdersForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('track-email').value;
            const formData = new FormData();
            formData.append('email', email);

            ordersList.innerHTML = '<p>Loading...</p>';

            fetch('get_order_history.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    if (data.orders.length > 0) {
                        let html = '<h3>Your Orders:</h3><ul style="list-style: none; padding: 0;">';
                        data.orders.forEach(order => {
                            html += `
                                <li style="border-bottom: 1px solid #eee; padding: 10px 0;">
                                    <strong>${order.flower_type}</strong><br>
                                    Quantity: ${order.quantity}<br>
                                    Total: $${order.total_price}<br>
                                    <small>${order.order_time}</small>
                                </li>
                            `;
                        });
                        html += '</ul>';
                        ordersList.innerHTML = html;
                    } else {
                        ordersList.innerHTML = '<p>No orders found for this email.</p>';
                    }
                } else {
                    ordersList.innerHTML = '<p>Error fetching orders.</p>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                ordersList.innerHTML = '<p>An error occurred.</p>';
            });
        });
    }

    // Close Modals (Updated to include trackOrdersModal)
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            checkoutModal.style.display = 'none';
            successModal.style.display = 'none';
            trackOrdersModal.style.display = 'none';
        });
    });

    // Close on click outside (Updated)
    window.addEventListener('click', (e) => {
        if (e.target == checkoutModal) {
            checkoutModal.style.display = 'none';
        }
        if (e.target == successModal) {
            successModal.style.display = 'none';
        }
        if (e.target == trackOrdersModal) {
            trackOrdersModal.style.display = 'none';
        }
    });

    // Form Submission
    orderForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(orderForm);

        fetch('submit_order.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                checkoutModal.style.display = 'none';
                successModal.style.display = 'flex';
                orderForm.reset();
            } else {
                alert('Something went wrong: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });

    // Newsletter Submission
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for subscribing! You will receive our latest updates soon.');
            newsletterForm.reset();
        });
    }

    // Success Modal Close Action
    window.closeSuccessModal = () => {
        successModal.style.display = 'none';
    };
});
