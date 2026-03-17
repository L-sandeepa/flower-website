<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floré | Exquisite Blooms</title>
    <meta name="description" content="Premium bouquet shop offering exquisite blooms for every moment.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">Floré</div>
        <ul class="nav-links">
            <li><a href="#shop">Shop</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#" id="track-orders-link">My Orders</a></li>
        </ul>
        <div class="cart-icon" onclick="document.getElementById('shop').scrollIntoView({ behavior: 'smooth' });"><i class="fas fa-shopping-bag"></i></div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Exquisite Blooms for Every Moment.</h1>
                <p>Curated arrangements for life's most beautiful occasions.</p>
                <a href="#shop" class="btn-primary">Shop Now</a>
            </div>
            <div class="hero-image">
                 <img src="images/hero.png" alt="Exquisite Bouquet">
            </div>
        </div>
    </header>

    <!-- Product Grid -->
    <section id="shop" class="products-section">
        <h2 class="section-title">Our Collection</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card" data-name="Midnight Roses" data-price="120">
                <div class="image-container">
                    <img src="images/roses.png" alt="Midnight Roses">
                </div>
                <div class="product-info">
                    <h3>Midnight Roses</h3>
                    <p class="price">$120.00</p>
                    <button class="btn-secondary buy-now-btn">Buy Now</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card" data-name="Summer Lilies" data-price="95">
                <div class="image-container">
                    <img src="images/lilies.png" alt="Summer Lilies">
                </div>
                <div class="product-info">
                    <h3>Summer Lilies</h3>
                    <p class="price">$95.00</p>
                    <button class="btn-secondary buy-now-btn">Buy Now</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card" data-name="Enchanted Orchids" data-price="150">
                <div class="image-container">
                    <img src="images/orchids.png" alt="Enchanted Orchids">
                </div>
                <div class="product-info">
                    <h3>Enchanted Orchids</h3>
                    <p class="price">$150.00</p>
                    <button class="btn-secondary buy-now-btn">Buy Now</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card" data-name="Sunshine Tulips" data-price="85">
                <div class="image-container">
                    <img src="images/lilies.png" alt="Sunshine Tulips">
                </div>
                <div class="product-info">
                    <h3>Sunshine Tulips</h3>
                    <p class="price">$85.00</p>
                    <button class="btn-secondary buy-now-btn">Buy Now</button>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card" data-name="Velvet Peonies" data-price="130">
                <div class="image-container">
                    <img src="images/roses.png" alt="Velvet Peonies">
                </div>
                <div class="product-info">
                    <h3>Velvet Peonies</h3>
                    <p class="price">$130.00</p>
                    <button class="btn-secondary buy-now-btn">Buy Now</button>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card" data-name="Royal Irises" data-price="110">
                <div class="image-container">
                    <img src="images/orchids.png" alt="Royal Irises">
                </div>
                <div class="product-info">
                    <h3>Royal Irises</h3>
                    <p class="price">$110.00</p>
                    <button class="btn-secondary buy-now-btn">Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="reviews" class="testimonials-section">
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p>"The Midnight Roses were absolutely stunning. They lasted for over a week and the packaging was so premium. Highly recommended!"</p>
                <h4>- Sarah Perera</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p>"Ordered the Summer Lilies for my wife's birthday. She was in tears. The delivery was on time and the handwritten note was a lovely touch."</p>
                <h4>- Dimuthu Karunaratne</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p>"Elegant and sophisticated. Floré is now my go-to for all corporate gifts. The Enchanted Orchids are a showstopper."</p>
                <h4>- Anika Gooneratne</h4>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <h2 class="section-title">Moments of Beauty</h2>
        <div class="gallery-grid">
            <div class="gallery-item"><img src="images/hero.png" alt="Gallery Image 1"></div>
            <div class="gallery-item"><img src="images/roses.png" alt="Gallery Image 2"></div>
            <div class="gallery-item"><img src="images/lilies.png" alt="Gallery Image 3"></div>
            <div class="gallery-item"><img src="images/orchids.png" alt="Gallery Image 4"></div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="newsletter-content">
            <h2>Join Our Blooming Community</h2>
            <p>Subscribe to receive exclusive offers and floral care tips.</p>
            <form id="newsletterForm" class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit" class="btn-primary">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/94779641090" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- About Us Section -->
    <section id="about" class="about-section">
        <div class="about-content">
            <h2>The Art of Floristry</h2>
            <p>At Floré, we believe flowers are more than just plants; they are a language of emotion. Our master florists hand-select each stem to create breathtaking arrangements that speak volumes. From the midnight mystique of our roses to the sun-kissed warmth of our lilies, every bouquet is a masterpiece designed to captivate.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <div class="footer-brand">
                <h3>Floré</h3>
                <p>Elevating nature's beauty.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="footer-info">
                <h4>Contact</h4>
                <p>hello@flore.com</p>
                <p>(+94) 77 964 1090</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Floré. All rights reserved.</p>
        </div>
    </footer>

    <!-- Checkout Modal -->
    <div id="checkoutModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Complete Your Order</h2>
            <p class="order-summary">Ordering: <span id="modal-product-name"></span> - $<span id="modal-product-price"></span></p>
            
            <form id="orderForm">
                <input type="hidden" id="input-product-name" name="product_name">
                <input type="hidden" id="input-product-price" name="product_price">

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone (WhatsApp)</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="address">Recipient's Address</label>
                    <textarea id="address" name="address" required></textarea>
                </div>

                <div class="form-group">
                    <label for="date">Delivery Date</label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" required>
                </div>

                <div class="form-group">
                    <label for="message">Gift Message (Optional)</label>
                    <textarea id="message" name="message"></textarea>
                </div>

                <button type="submit" class="btn-submit">Place Order</button>
            </form>
        </div>
    </div>
    
    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content success-content">
            <div class="success-icon"><i class="fas fa-check-circle"></i></div>
            <h2>Order Placed!</h2>
            <p>Thank you for choosing Floré. We will confirm your order shortly.</p>
            <button class="btn-primary" onclick="closeSuccessModal()">Continue Shopping</button>
        </div>
    </div>

    <!-- Track Orders Modal -->
    <div id="trackOrdersModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>My Orders</h2>
            <p>Enter your email to view your order history.</p>
            
            <form id="trackOrdersForm">
                <div class="form-group">
                    <label for="track-email">Email Address</label>
                    <input type="email" id="track-email" name="email" required>
                </div>
                <button type="submit" class="btn-submit">View Orders</button>
            </form>

            <div id="orders-list" style="margin-top: 20px; text-align: left;">
                <!-- Orders will be populated here -->
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
