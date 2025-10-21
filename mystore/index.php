<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raghade' Luxury - Luxury Makeup for the Elegant You</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&family=Playfair+Display:wght@400;600;700;900&family=Cormorant+Garamond:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --gold: #D4AF37;
            --gold-light: #F4E4C1;
            --gold-dark: #B8941E;
            --black: #000000;
            --dark: #1a1a1a;
            --white: #FFFFFF;
            --cream: #FAF8F3;
            --text: #2c2c2c;
            --gray: #666666;
            --red: #C41E3A;
            --green: #2D5016;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background: var(--cream);
            color: var(--text);
            line-height: 1.8;
            overflow-x: hidden;
        }

        /* ========== NAVBAR ========== */
        .navbar {
            background: linear-gradient(180deg, #000000 0%, #1a1a1a 100%);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 2000;
            border-bottom: 3px solid var(--gold);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.8), 0 4px 20px rgba(212, 175, 55, 0.3);
            backdrop-filter: blur(10px);
        }

        .nav-container {
            max-width: 1800px;
            margin: 0 auto;
            padding: 1.2rem 4%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 3rem;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1.8rem;
            flex-shrink: 0;
            order: 3;
        }

        .logo-section img {
            height: 120px;
            width: 120px;
            object-fit: contain;
            background: transparent;
            filter: drop-shadow(0 0 25px rgba(212, 175, 55, 0.9)) drop-shadow(0 0 50px rgba(212, 175, 55, 0.5));
            transition: all 0.4s ease;
            -webkit-mask-image: radial-gradient(circle, white 45%, transparent 50%);
            mask-image: radial-gradient(circle, white 45%, transparent 50%);
        }

        .logo-section img:hover {
            transform: scale(1.1) translateY(-2px);
            filter: drop-shadow(0 0 35px rgba(212, 175, 55, 1)) drop-shadow(0 0 60px rgba(212, 175, 55, 0.7));
        }

        .logo-text {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--gold);
            letter-spacing: 3px;
            text-shadow: 0 3px 15px rgba(212, 175, 55, 0.5), 0 0 30px rgba(212, 175, 55, 0.3);
            white-space: nowrap;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 50%, var(--gold) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-menu {
            display: flex;
            gap: 2.5rem;
            list-style: none;
            flex: 1;
            justify-content: center;
            order: 2;
        }

        .nav-menu a {
            color: var(--gold);
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
            padding: 0.5rem 1.2rem;
            border-radius: 8px;
            position: relative;
            white-space: nowrap;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: width 0.3s;
        }

        .nav-menu a:hover::after {
            width: 80%;
        }

        .nav-menu a:hover {
            color: var(--white);
            background: rgba(212, 175, 55, 0.1);
        }

        .nav-actions {
            display: flex;
            gap: 1.5rem;
            align-items: center;
            flex-shrink: 0;
            order: 3;
        }

        .search-container {
            position: relative;
        }

        .search-container input {
            padding: 0.75rem 3.5rem 0.75rem 1.5rem;
            border: 2px solid var(--gold);
            border-radius: 30px;
            width: 280px;
            transition: all 0.4s ease;
            background: rgba(255, 255, 255, 0.08);
            color: var(--white);
            font-size: 1rem;
            font-family: 'Tajawal', sans-serif;
        }

        .search-container input::placeholder {
            color: rgba(255, 255, 255, 0.65);
        }

        .search-container input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.15);
            width: 320px;
            box-shadow: 0 0 30px rgba(212, 175, 55, 0.5), inset 0 2px 8px rgba(212, 175, 55, 0.1);
            border-color: var(--gold-light);
        }

        .search-container button {
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--gold);
            color: var(--black);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .search-container button:hover {
            background: var(--gold-light);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
        }

        .btn {
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.4s ease;
            font-size: 1rem;
            white-space: nowrap;
            font-family: 'Tajawal', sans-serif;
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            color: var(--black);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
        }

        .btn-gold:hover {
            background: linear-gradient(135deg, var(--gold-light) 0%, var(--gold) 100%);
            transform: translateY(-3px);
            box-shadow: 0 10px 35px rgba(212, 175, 55, 0.6);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--gold);
            color: var(--gold);
        }

        .btn-outline:hover {
            background: var(--gold);
            color: var(--black);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
        }

        .cart-icon {
            position: relative;
            font-size: 2rem;
            cursor: pointer;
            padding: 0.7rem;
            color: var(--gold);
            transition: all 0.4s ease;
            border-radius: 50%;
            background: rgba(212, 175, 55, 0.1);
        }

        .cart-icon:hover {
            transform: scale(1.2) rotate(5deg);
            filter: drop-shadow(0 0 15px rgba(212, 175, 55, 0.8));
            background: rgba(212, 175, 55, 0.2);
        }

        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--red);
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 900;
            box-shadow: 0 2px 10px rgba(196, 30, 58, 0.5);
        }

        /* ========== HERO ========== */
        .hero {
            margin-top: 95px;
            height: 85vh;
            background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(26,26,26,0.5)),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><defs><linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23FAF8F3;stop-opacity:1" /><stop offset="100%" style="stop-color:%23F4E4C1;stop-opacity:1" /></linearGradient></defs><rect fill="url(%23grad1)" width="1920" height="1080"/><circle cx="300" cy="250" r="200" fill="%23D4AF37" opacity="0.1"/><circle cx="1620" cy="830" r="250" fill="%23D4AF37" opacity="0.08"/></svg>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, transparent 0%, rgba(0,0,0,0.4) 100%);
        }

        .hero-content {
            max-width: 1000px;
            padding: 3rem;
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 5rem;
            color: var(--white);
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 20px rgba(0,0,0,0.7);
            line-height: 1.2;
            font-weight: 700;
        }

        .hero h1 .gold-text {
            color: var(--gold);
            display: block;
            font-size: 3.5rem;
            margin-top: 1rem;
            text-shadow: 0 4px 20px rgba(212, 175, 55, 0.5);
        }

        .hero p {
            font-size: 1.6rem;
            color: var(--gold-light);
            margin-bottom: 3rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
            font-weight: 400;
        }

        .hero-btn {
            padding: 1.5rem 4rem;
            font-size: 1.3rem;
            background: var(--gold);
            color: var(--black);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 900;
            transition: all 0.4s;
            box-shadow: 0 8px 30px rgba(212, 175, 55, 0.4);
        }

        .hero-btn:hover {
            background: var(--gold-light);
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(212, 175, 55, 0.6);
        }

        /* ========== TIMER SECTION ========== */
        .timer-section {
            background: linear-gradient(135deg, var(--black) 0%, #1a1a1a 100%);
            padding: 3.5rem 3%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .timer-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .timer-section h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3rem;
            color: var(--gold);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .timer-section p {
            color: var(--gold-light);
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .timer-display {
            font-size: 4rem;
            color: var(--white);
            font-weight: 900;
            margin-top: 1.5rem;
            letter-spacing: 5px;
            text-shadow: 0 0 30px rgba(212, 175, 55, 0.5);
            font-family: 'Courier New', monospace;
        }

        /* ========== STATS SECTION ========== */
        .stats-section {
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            padding: 5rem 3%;
            position: relative;
        }

        .stats-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 4rem;
            text-align: center;
        }

        .stat-item {
            color: var(--black);
            background: rgba(255, 255, 255, 0.2);
            padding: 2.5rem;
            border-radius: 20px;
            transition: all 0.3s;
            backdrop-filter: blur(10px);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .stat-icon {
            font-size: 4.5rem;
            margin-bottom: 1rem;
            filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.2));
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 0.8rem;
            font-family: 'Cormorant Garamond', serif;
        }

        .stat-label {
            font-size: 1.4rem;
            font-weight: 700;
        }

        /* ========== PRODUCTS SECTION ========== */
        .section {
            padding: 6rem 3%;
            max-width: 1600px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-family: 'Cormorant Garamond', serif;
            font-size: 4rem;
            color: var(--black);
            margin-bottom: 1.5rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.4rem;
            color: var(--gray);
            margin-bottom: 4rem;
            font-weight: 400;
        }

        .category-tabs {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 4rem;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 1rem 2.5rem;
            background: var(--white);
            border: 2px solid var(--gold-light);
            border-radius: 50px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s;
            color: var(--text);
            font-size: 1.05rem;
        }

        .tab-btn:hover, .tab-btn.active {
            background: var(--gold);
            color: var(--black);
            border-color: var(--gold);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 3rem;
        }

        .product-card {
            background: var(--white);
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
            border: 1px solid rgba(212, 175, 55, 0.1);
        }

        .product-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 60px rgba(212, 175, 55, 0.25);
            border-color: var(--gold);
        }

        .product-img-wrap {
            position: relative;
            height: 350px;
            overflow: hidden;
            background: var(--cream);
        }

        .discount-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--red);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            font-weight: 900;
            font-size: 1rem;
            z-index: 10;
            box-shadow: 0 4px 15px rgba(196, 30, 58, 0.4);
        }

        .product-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-img-wrap img {
            transform: scale(1.15);
        }

        .product-body {
            padding: 2rem;
        }

        .product-brand {
            color: var(--gold-dark);
            font-weight: 900;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--black);
            margin: 0.8rem 0;
            line-height: 1.5;
            min-height: 60px;
        }

        .product-description {
            color: var(--gray);
            font-size: 0.95rem;
            margin: 0.8rem 0;
            line-height: 1.6;
            min-height: 45px;
        }

        .product-rating {
            color: var(--gold);
            margin: 0.8rem 0;
            font-size: 1rem;
            font-weight: 600;
        }

        .product-price-row {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            margin: 1.2rem 0;
        }

        .old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1.2rem;
        }

        .new-price {
            color: var(--gold-dark);
            font-size: 2rem;
            font-weight: 900;
        }

        .add-cart-btn {
            width: 100%;
            padding: 1.2rem;
            background: var(--gold);
            color: var(--black);
            border: none;
            border-radius: 50px;
            font-weight: 900;
            font-size: 1.05rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }

        .add-cart-btn:hover {
            background: var(--gold-light);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.5);
        }

        /* ========== REVIEWS SECTION ========== */
        .reviews-section {
            background: var(--cream);
            padding: 6rem 3%;
        }

        .reviews-grid {
            max-width: 1400px;
            margin: 4rem auto 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
        }

        .review-card {
            background: var(--white);
            padding: 3rem;
            border-radius: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
            border: 1px solid rgba(212, 175, 55, 0.1);
        }

        .review-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(212, 175, 55, 0.25);
            border-color: var(--gold);
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .reviewer-avatar {
            font-size: 4rem;
            filter: drop-shadow(0 4px 10px rgba(212, 175, 55, 0.3));
        }

        .reviewer-name {
            font-weight: 900;
            font-size: 1.3rem;
            color: var(--black);
        }

        .review-stars {
            color: var(--gold);
            font-size: 1.2rem;
            margin-top: 0.3rem;
        }

        .review-text {
            font-size: 1.1rem;
            color: var(--gray);
            line-height: 2;
            font-style: italic;
        }

        /* ========== NEWSLETTER ========== */
        .newsletter-section {
            background: linear-gradient(135deg, var(--black) 0%, #1a1a1a 100%);
            padding: 5rem 3%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .newsletter-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .newsletter-section h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3rem;
            color: var(--gold);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .newsletter-section p {
            color: var(--gold-light);
            font-size: 1.3rem;
            margin-bottom: 3rem;
        }

        .newsletter-form {
            max-width: 700px;
            margin: 0 auto;
            display: flex;
            gap: 1.5rem;
        }

        .newsletter-form input {
            flex: 1;
            padding: 1.5rem;
            border: 2px solid var(--gold);
            border-radius: 50px;
            font-size: 1.1rem;
            background: rgba(255, 255, 255, 0.05);
            color: var(--white);
            transition: all 0.3s;
        }

        .newsletter-form input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .newsletter-form input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 30px rgba(212, 175, 55, 0.3);
        }

        .newsletter-form button {
            padding: 1.5rem 3.5rem;
            background: var(--gold);
            color: var(--black);
            border: none;
            border-radius: 50px;
            font-weight: 900;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 1.1rem;
        }

        .newsletter-form button:hover {
            background: var(--gold-light);
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(212, 175, 55, 0.5);
        }

        /* ========== CART PAGE ========== */
        .cart-container {
            background: var(--white);
            padding: 3rem;
            border-radius: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            display: grid;
            grid-template-columns: 140px 2fr 1fr auto;
            gap: 2.5rem;
            padding: 2.5rem;
            border-bottom: 2px solid var(--cream);
            align-items: center;
            transition: all 0.3s;
        }

        .cart-item:hover {
            background: var(--cream);
            border-radius: 20px;
        }

        .cart-item-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .cart-item-name {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: var(--black);
        }

        .cart-item-brand {
            color: var(--gold-dark);
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cart-item-price {
            color: var(--gold-dark);
            font-weight: 900;
            font-size: 1.5rem;
            margin-top: 0.5rem;
        }

        .qty-controls {
            display: flex;
            align-items: center;
            gap: 1.2rem;
        }

        .qty-btn {
            width: 40px;
            height: 40px;
            border: 2px solid var(--gold);
            background: var(--white);
            color: var(--gold);
            border-radius: 50%;
            cursor: pointer;
            font-weight: 900;
            font-size: 1.3rem;
            transition: all 0.3s;
        }

        .qty-btn:hover {
            background: var(--gold);
            color: var(--black);
            transform: scale(1.1);
        }

        .qty-display {
            font-weight: 900;
            font-size: 1.5rem;
            min-width: 50px;
            text-align: center;
        }

        .remove-btn {
            background: var(--red);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 900;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(196, 30, 58, 0.3);
        }

        .remove-btn:hover {
            background: #a01828;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(196, 30, 58, 0.5);
        }

        .cart-summary {
            background: var(--cream);
            padding: 3rem;
            border-radius: 25px;
            margin-top: 3rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 1.2rem 0;
            font-size: 1.2rem;
            border-bottom: 1px solid #ddd;
        }

        .summary-row.total {
            border-top: 3px solid var(--gold);
            border-bottom: none;
            margin-top: 1.5rem;
            padding-top: 2rem;
            font-size: 2rem;
            font-weight: 900;
            color: var(--gold-dark);
        }

        /* ========== CHECKOUT ========== */
        .checkout-form {
            background: var(--white);
            padding: 4rem;
            border-radius: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 700;
            color: var(--black);
            font-size: 1.1rem;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 1.2rem;
            border: 2px solid var(--cream);
            border-radius: 15px;
            font-size: 1.05rem;
            transition: all 0.3s;
            background: var(--white);
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.2);
        }

        /* ========== SUCCESS PAGE ========== */
        .success-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .success-icon {
            font-size: 7rem;
            color: var(--green);
            margin-bottom: 2rem;
            filter: drop-shadow(0 4px 20px rgba(45, 80, 22, 0.3));
        }

        .success-container h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3.5rem;
            color: var(--gold-dark);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .receipt {
            background: var(--cream);
            padding: 3rem;
            border-radius: 25px;
            margin: 3rem 0;
            text-align: right;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .receipt-row {
            display: flex;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px solid #ddd;
            font-size: 1.1rem;
        }

        /* ========== CONTACT PAGE ========== */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
        }

        .contact-card {
            background: var(--white);
            padding: 3rem;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
            border: 1px solid rgba(212, 175, 55, 0.1);
        }

        .contact-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 60px rgba(212, 175, 55, 0.25);
            border-color: var(--gold);
        }

        .contact-icon-wrap {
            width: 100px;
            height: 100px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 30px rgba(212, 175, 55, 0.3);
            font-size: 3rem;
            transition: all 0.3s;
        }
        
        .contact-icon-wrap:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 40px rgba(212, 175, 55, 0.5);
        }

        .contact-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1.2rem;
            color: var(--black);
            font-weight: 700;
        }

        .contact-card a {
            color: var(--gold-dark);
            text-decoration: none;
            word-break: break-word;
            font-weight: 700;
            font-size: 1.05rem;
        }

        .contact-card a:hover {
            color: var(--gold);
        }

        /* ========== ABOUT PAGE ========== */
        .about-content {
            background: var(--white);
            padding: 4rem;
            border-radius: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            line-height: 2.2;
        }

        .about-content h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3rem;
            color: var(--gold-dark);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .about-content p {
            font-size: 1.2rem;
            color: var(--text);
            margin-bottom: 2rem;
        }

        /* ========== FOOTER ========== */
        .footer {
            background: var(--black);
            color: var(--white);
            padding: 5rem 3%;
            border-top: 3px solid var(--gold);
        }

        .footer-grid {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 4rem;
        }

        .footer-section h3 {
            font-size: 1.8rem;
            color: var(--gold);
            margin-bottom: 2rem;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
        }

        .footer-section p,
        .footer-section a {
            color: var(--gold-light);
            text-decoration: none;
            display: block;
            margin-bottom: 1rem;
            transition: color 0.3s;
            font-size: 1.1rem;
        }

        .footer-section a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 4rem;
            padding-top: 3rem;
            border-top: 1px solid rgba(212, 175, 55, 0.2);
            color: var(--gold-light);
            font-size: 1.1rem;
        }

        /* ========== MODAL ========== */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: 3000;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }

        .modal-box {
            background: var(--white);
            padding: 4rem;
            border-radius: 25px;
            max-width: 550px;
            width: 90%;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 2.5rem;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .modal-close:hover {
            background: var(--cream);
            transform: rotate(90deg);
        }

        .modal h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            margin-bottom: 2.5rem;
            text-align: center;
            color: var(--black);
            font-weight: 700;
        }

        /* ========== PAGE MANAGEMENT ========== */
        .page {
            display: none;
            min-height: calc(100vh - 95px);
        }

        .page.active {
            display: block;
        }

        .empty-state {
            text-align: center;
            padding: 6rem 2rem;
        }

        .empty-icon {
            font-size: 7rem;
            opacity: 0.3;
            margin-bottom: 2rem;
        }

        .empty-state h3 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            color: var(--black);
            font-family: 'Cormorant Garamond', serif;
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .reviews-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 1024px) {
            .contact-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero h1 {
                font-size: 3.5rem;
            }

            .hero h1 .gold-text {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
            }
            
            .nav-menu {
                order: 3;
                width: 100%;
                justify-content: center;
                gap: 1rem;
                margin-top: 1rem;
            }

            .search-container input {
                width: 200px;
            }

            .search-container input:focus {
                width: 220px;
            }
            
            .hero {
                height: 70vh;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero h1 .gold-text {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1.2rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
            }

            .reviews-grid {
                grid-template-columns: 1fr;
            }
            
            .cart-item {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .section-title {
                font-size: 2.5rem;
            }
        }

        /* ========== ANIMATIONS ========== */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }

        .product-card,
        .review-card,
        .contact-card {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>
<body>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar">
        <div class="nav-container">
            <!-- Logo & Brand (Left Side) -->
            <div class="logo-section">
                <img src="images\Log.jpeg" alt="Raghade Luxury Logo">
                <div class="logo-text">Raghade' Luxury</div>
            </div>

            <!-- Navigation Menu (Center) -->
            <ul class="nav-menu">
                <li><a href="#" onclick="goToPage('home')">الرئيسية</a></li>
                <li><a href="#" onclick="goToPage('products')">المنتجات</a></li>
                <li><a href="#" onclick="goToPage('about')">من نحن</a></li>
                <li><a href="#" onclick="goToPage('contact')">تواصل معنا</a></li>
            </ul>

            <!-- Actions (Right Side) -->
            <div class="nav-actions">
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="ابحثي عن المنتجات...">
                    <button onclick="searchProducts()">بحث</button>
                </div>
                <button class="btn btn-outline" onclick="openModal('login')">دخول</button>
                <button class="btn btn-gold" onclick="openModal('register')">تسجيل</button>
                <div class="cart-icon" onclick="goToPage('cart')">
                    🛒
                    <span class="cart-count" id="cartCount">0</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- ========== HOME PAGE ========== -->
    <div id="homePage" class="page active">
        <!-- HERO -->
        <section class="hero">
            <div class="hero-content">
                <h1>
                    مرحباً بك في عالم الفخامة
                    <span class="gold-text">Raghade' Luxury </span>
                </h1>
                <p>تجربة تسوق حقيقية وفاخرة - Luxury Makeup for the Elegant You</p>
                <button class="hero-btn" onclick="goToPage('products')">
                    تسوقي الآن ✨
                </button>
            </div>
        </section>

        <!-- TIMER -->
        <section class="timer-section">
            <h2>عروض حصرية لفترة محدودة 🔥</h2>
            <p>ينتهي العرض خلال:</p>
            <div class="timer-display" id="timerDisplay">14:10:01</div>
        </section>

        <!-- STATS -->
        <section class="stats-section">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-icon">👥</div>
                    <div class="stat-number">15000+</div>
                    <div class="stat-label">عميلة سعيدة</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">🎁</div>
                    <div class="stat-number">23</div>
                    <div class="stat-label">منتج فاخر</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">⭐</div>
                    <div class="stat-number">4.9</div>
                    <div class="stat-label">تقييم العملاء</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">🚚</div>
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">خدمة التوصيل</div>
                </div>
            </div>
        </section>

        <!-- PRODUCTS -->
        <section class="section">
            <h2 class="section-title">منتجاتنا المميزة</h2>
            <p class="section-subtitle">اكتشفي مجموعتنا الفاخرة من أرقى العلامات التجارية العالمية</p>

            <div class="category-tabs">
                <button class="tab-btn active" onclick="filterProducts('all')">الكل</button>
                <button class="tab-btn" onclick="filterProducts('KIKO')">KIKO</button>
                <button class="tab-btn" onclick="filterProducts('Luxora')">Luxora</button>
                <button class="tab-btn" onclick="filterProducts('Bellezza')">Bellezza</button>
                <button class="tab-btn" onclick="filterProducts('YSL')">Yves Saint Laurent</button>
            </div>

            <div class="products-grid" id="homeProducts"></div>
        </section>

        <!-- REVIEWS -->
        <section class="reviews-section">
            <h2 class="section-title">آراء عملائنا الكرام 💝</h2>
            <p class="section-subtitle">استمعي لتجارب عميلاتنا المميزات</p>

            <div class="reviews-grid">
                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">👩</div>
                        <div>
                            <div class="reviewer-name">نورة العتيبي</div>
                            <div class="review-stars">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                    <p class="review-text">"منتجات رائعة وجودة عالية! التوصيل كان سريع والتغليف فاخر جداً. أنصح بالتسوق من هذا المتجر"</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">👸</div>
                        <div>
                            <div class="reviewer-name">ريم السالم</div>
                            <div class="review-stars">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                    <p class="review-text">"أفضل موقع للمكياج في السعودية! المنتجات أصلية 100% وخدمة العملاء ممتازة. تجربة تسوق رائعة"</p>
                </div>

                <div class="review-card">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">💁‍♀️</div>
                        <div>
                            <div class="reviewer-name">سارة الشمري</div>
                            <div class="review-stars">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                    <p class="review-text">"تجربة تسوق فاخرة! الأسعار منافسة والمنتجات ذات جودة عالية. سأكرر الشراء بكل تأكيد"</p>
                </div>
            </div>
        </section>

        <!-- NEWSLETTER -->
        <section class="newsletter-section">
            <h3>اشتركي في نشرتنا البريدية 📧</h3>
            <p>احصلي على أحدث العروض والمنتجات الحصرية</p>
            <form class="newsletter-form" onsubmit="subscribeNewsletter(event)">
                <input type="email" placeholder="أدخلي بريدك الإلكتروني..." required>
                <button type="submit">اشتراك</button>
            </form>
        </section>
    </div>

    <!-- ========== PRODUCTS PAGE ========== -->
    <div id="productsPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <h2 class="section-title">جميع المنتجات</h2>
            <p class="section-subtitle">تصفحي مجموعتنا الكاملة من المنتجات الفاخرة</p>

            <div class="category-tabs">
                <button class="tab-btn active" onclick="filterProducts('all')">الكل</button>
                <button class="tab-btn" onclick="filterProducts('KIKO')">KIKO</button>
                <button class="tab-btn" onclick="filterProducts('Luxora')">Luxora</button>
                <button class="tab-btn" onclick="filterProducts('Bellezza')">Bellezza</button>
                <button class="tab-btn" onclick="filterProducts('YSL')">Yves Saint Laurent</button>
            </div>

            <div class="products-grid" id="allProducts"></div>
        </section>
    </div>

    <!-- ========== CART PAGE ========== -->
    <div id="cartPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <h2 class="section-title">سلة التسوق</h2>
            <div id="cartContent"></div>
        </section>
    </div>

    <!-- ========== CHECKOUT PAGE ========== -->
    <div id="checkoutPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <h2 class="section-title">إتمام الطلب</h2>
            <form class="checkout-form" onsubmit="processOrder(event)">
                <div class="form-grid">
                    <div class="form-group">
                        <label>الاسم الكامل *</label>
                        <input type="text" required placeholder="أدخلي اسمك الكامل">
                    </div>
                    <div class="form-group">
                        <label>رقم الجوال *</label>
                        <input type="tel" required placeholder="+966 XXX XXX XXX">
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label>البريد الإلكتروني *</label>
                        <input type="email" required placeholder="example@email.com">
                    </div>
                    <div class="form-group">
                        <label>المدينة *</label>
                        <input type="text" required placeholder="الرياض">
                    </div>
                </div>

                <div class="form-group">
                    <label>العنوان الكامل *</label>
                    <input type="text" required placeholder="الحي، الشارع، رقم المبنى">
                </div>

                <div class="form-group">
                    <label>طريقة الدفع *</label>
                    <select required>
                        <option>الدفع عند الاستلام</option>
                        <option>بطاقة ائتمانية</option>
                        <option>تحويل بنكي</option>
                        <option>Apple Pay</option>
                    </select>
                </div>

                <div class="cart-summary">
                    <h3 style="margin-bottom: 2rem; font-size: 2rem; font-family: 'Cormorant Garamond', serif; color: var(--black);">ملخص الطلب</h3>
                    <div class="summary-row">
                        <span>المجموع الفرعي:</span>
                        <span id="checkoutSubtotal">0 ريال</span>
                    </div>
                    <div class="summary-row">
                        <span>الخصم:</span>
                        <span id="checkoutDiscount" style="color: var(--green);">0 ريال</span>
                    </div>
                    <div class="summary-row">
                        <span>الضريبة (15%):</span>
                        <span id="checkoutTax">0 ريال</span>
                    </div>
                    <div class="summary-row total">
                        <span>المجموع الإجمالي:</span>
                        <span id="checkoutTotal">0 ريال</span>
                    </div>
                </div>

                <button type="submit" class="btn btn-gold" style="width: 100%; padding: 1.5rem; font-size: 1.3rem; margin-top: 3rem;">
                    تأكيد الطلب وإتمام الدفع 🎁
                </button>
            </form>
        </section>
    </div>

    <!-- ========== SUCCESS PAGE ========== -->
    <div id="successPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <div class="success-container">
                <div class="cart-container">
                    <div class="success-icon">✅</div>
                    <h2>تم الدفع بنجاح!</h2>
                    <p style="font-size: 1.4rem; color: var(--gray); margin-bottom: 3rem;">
                        شكراً لثقتك بنا. سيتم توصيل طلبك في أقرب وقت ممكن
                    </p>

                    <div class="receipt" id="receiptContent"></div>

                    <div style="display: flex; gap: 2rem; justify-content: center; flex-wrap: wrap; margin-top: 3rem;">
                        <button class="btn btn-gold" onclick="window.print()">طباعة الإيصال 🖨️</button>
                        <button class="btn btn-outline" onclick="goToPage('home')">العودة للرئيسية</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ========== ABOUT PAGE ========== -->
    <div id="aboutPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <h2 class="section-title">من نحن</h2>
            <div class="about-content">
                <h2> راغدي الفاخر</h2>
                <p>
                    Raghade' Luxury  هو وجهتك الأولى للحصول على أفخم منتجات المكياج العالمية. 
                    نحن نؤمن بأن كل امرأة تستحق أن تشعر بالجمال والثقة، ولهذا نقدم لك مجموعة مختارة بعناية 
                    من أرقى العلامات التجارية العالمية.
                </p>

                <h2>رؤيتنا</h2>
                <p>
                    نسعى لأن نكون الخيار الأول للمرأة العصرية التي تبحث عن التميز والأناقة في كل تفصيلة.
                    نقدم تجربة تسوق استثنائية تجمع بين الفخامة والراحة والأسعار التنافسية.
                </p>

                <h2>لماذا تختاريننا؟</h2>
                <p>✨ منتجات أصلية 100% من علامات تجارية عالمية معتمدة</p>
                <p>🚚 شحن سريع وآمن لجميع مناطق المملكة</p>
                <p>💎 أسعار تنافسية مع عروض حصرية مستمرة</p>
                <p>🎁 تغليف فاخر يليق بذوقك الرفيع</p>
                <p>💝 خدمة عملاء متميزة على مدار الساعة</p>
                <p>🔒 دفع آمن ومضمون بأحدث تقنيات الحماية</p>
            </div>
        </section>
    </div>

    <!-- ========== CONTACT PAGE ========== -->
    <div id="contactPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <h2 class="section-title">تواصلي معنا</h2>
            <p class="section-subtitle">نحن دائماً في خدمتك! تواصلي معنا عبر القنوات التالية</p>

            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon-wrap">📧</div>
                    <h3>البريد الإلكتروني</h3>
                    <a href="mailto:raghad.alshawafy2023@icloud.com">raghad.alshawafy2023@icloud.com</a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon-wrap">💻</div>
                    <h3>GitHub</h3>
                    <a href="https://github.com/engraghad20" target="_blank">github.com/engraghad20</a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon-wrap">💼</div>
                    <h3>LinkedIn</h3>
                    <a href="https://www.linkedin.com/in/raghad-alshawafy" target="_blank">Raghad Alshawafy</a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon-wrap">🐦</div>
                    <h3>Twitter</h3>
                    <a href="https://x.com/engraghad02" target="_blank">@engraghad02</a>
                </div>
            </div>
        </section>
    </div>

    <!-- ========== LOGIN MODAL ========== -->
    <div id="loginModal" class="modal">
        <div class="modal-box">
            <button class="modal-close" onclick="closeModal('login')">&times;</button>
            <h2>تسجيل الدخول</h2>
            <form onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" required placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="password" required placeholder="••••••••">
                </div>
                <button type="submit" class="btn btn-gold" style="width: 100%; padding: 1.3rem; font-size: 1.1rem;">دخول</button>
                <p style="text-align: center; margin-top: 2rem; font-size: 1.1rem;">
                    ليس لديك حساب؟ 
                    <a href="#" onclick="closeModal('login'); openModal('register')" style="color: var(--gold-dark); font-weight: 700;">سجلي الآن</a>
                </p>
            </form>
        </div>
    </div>

    <!-- ========== REGISTER MODAL ========== -->
    <div id="registerModal" class="modal">
        <div class="modal-box">
            <button class="modal-close" onclick="closeModal('register')">&times;</button>
            <h2>إنشاء حساب جديد</h2>
            <form onsubmit="handleRegister(event)">
                <div class="form-group">
                    <label>الاسم الكامل</label>
                    <input type="text" required placeholder="أدخلي اسمك الكامل">
                </div>
                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" required placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label>رقم الجوال</label>
                    <input type="tel" required placeholder="+966 XXX XXX XXX">
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="password" required placeholder="••••••••">
                </div>
                <button type="submit" class="btn btn-gold" style="width: 100%; padding: 1.3rem; font-size: 1.1rem;">إنشاء الحساب</button>
                <p style="text-align: center; margin-top: 2rem; font-size: 1.1rem;">
                    لديك حساب بالفعل؟ 
                    <a href="#" onclick="closeModal('register'); openModal('login')" style="color: var(--gold-dark); font-weight: 700;">سجلي الدخول</a>
                </p>
            </form>
        </div>
    </div>

    <!-- ========== FOOTER ========== -->
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-section">
                <h3>Raghade' Luxury</h3>
                <p>متجرك الأول لأفخم منتجات المكياج العالمية</p>
                <p>Luxury Makeup for the Elegant You</p>
                <p>تجربة تسوق فاخرة لا تُنسى</p>
            </div>

            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <a href="#" onclick="goToPage('home')">الرئيسية</a>
                <a href="#" onclick="goToPage('products')">المنتجات</a>
                <a href="#" onclick="goToPage('about')">من نحن</a>
                <a href="#" onclick="goToPage('contact')">تواصل معنا</a>
            </div>

            <div class="footer-section">
                <h3>خدمة العملاء</h3>
                <a href="#">سياسة الإرجاع</a>
                <a href="#">الشحن والتوصيل</a>
                <a href="#">الأسئلة الشائعة</a>
                <a href="#">سياسة الخصوصية</a>
            </div>

            <div class="footer-section">
                <h3>تواصل معنا</h3>
                <p>📧 raghad.alshawafy2023@icloud.com</p>
                <p>📱 خدمة العملاء 24/7</p>
                <p>🌍 نشحن لجميع أنحاء المملكة</p>
                <p>🎁 عروض حصرية يومياً</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Raghade' Luxury Store. جميع الحقوق محفوظة</p>
        </div>
    </footer>

    <script>
        // ========== MODALS ==========
        function openModal(name) {
            const modal = document.getElementById(name + 'Modal');
            if (modal) {
                modal.style.display = 'flex';
            }
        }

        function closeModal(name) {
            const modal = document.getElementById(name + 'Modal');
            if (modal) {
                modal.style.display = 'none';
            }
        }

        window.onclick = e => {
            if (e.target.classList.contains('modal')) {
                e.target.style.display = 'none';
            }
        };

        // ========== AUTH ==========
        function handleLogin(e) {
            e.preventDefault();
            
            const email = e.target[0].value;
            const password = e.target[1].value;
            
            const users = JSON.parse(localStorage.getItem('raghadeLuxuryUsers') || '[]');
            const user = users.find(u => u.email === email && u.password === btoa(password));
            
            if (user) {
                localStorage.setItem('raghadeLuxuryCurrentUser', JSON.stringify(user));
                showNotif('تم تسجيل الدخول بنجاح! 🎉');
                closeModal('login');
            } else {
                showNotif('البريد الإلكتروني أو كلمة المرور غير صحيحة ❌');
            }
        }

        function handleRegister(e) {
            e.preventDefault();
            
            const name = e.target[0].value;
            const email = e.target[1].value;
            const phone = e.target[2].value;
            const password = e.target[3].value;
            
            const users = JSON.parse(localStorage.getItem('raghadeLuxuryUsers') || '[]');
            
            if (users.find(u => u.email === email)) {
                showNotif('البريد الإلكتروني مسجل مسبقاً ❌');
                return;
            }
            
            const newUser = {
                name,
                email,
                phone,
                password: btoa(password),
                date: new Date().toISOString()
            };
            
            users.push(newUser);
            localStorage.setItem('raghadeLuxuryUsers', JSON.stringify(users));
            localStorage.setItem('raghadeLuxuryCurrentUser', JSON.stringify(newUser));
            
            showNotif('تم إنشاء الحساب بنجاح! 🎉');
            closeModal('register');
        }

        // ========== NEWSLETTER ==========
        function subscribeNewsletter(e) {
            e.preventDefault();
            
            const email = e.target[0].value;
            const subscribers = JSON.parse(localStorage.getItem('raghadeLuxurySubscribers') || '[]');
            
            if (subscribers.includes(email)) {
                showNotif('أنت مشتركة بالفعل في النشرة البريدية');
                return;
            }
            
            subscribers.push(email);
            localStorage.setItem('raghadeLuxurySubscribers', JSON.stringify(subscribers));
            showNotif('تم الاشتراك في النشرة البريدية بنجاح! 📧');
            e.target.reset();
        }

        // ========== NOTIFICATION ==========
        function showNotif(message) {
            const notif = document.createElement('div');
            notif.style.cssText = `
                position: fixed;
                top: 120px;
                right: 30px;
                background: linear-gradient(135deg, var(--gold), var(--gold-light));
                color: var(--black);
                padding: 1.5rem 2.5rem;
                border-radius: 20px;
                box-shadow: 0 10px 40px rgba(212, 175, 55, 0.5);
                z-index: 5000;
                font-weight: 900;
                font-size: 1.15rem;
                animation: slideIn 0.4s ease-out;
                max-width: 450px;
                border: 2px solid var(--gold-dark);
            `;
            notif.textContent = message;
            
            document.body.appendChild(notif);
            
            setTimeout(() => {
                notif.style.animation = 'slideOut 0.4s ease-out';
                setTimeout(() => notif.remove(), 400);
            }, 3500);
        }

        // ========== CONSOLE ==========
        console.log('%c🎨 Raghade\' Luxury Store 💎', 'color: #D4AF37; font-size: 32px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);');
        console.log('%cDeveloped with ❤️ by Raghad Alshawafy', 'color: #8b7355; font-size: 18px; font-weight: bold;');
        console.log('%cWebsite loaded successfully! ✅', 'color: #2D5016; font-size: 16px; font-weight: bold;');
        console.log('%c━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', 'color: #D4AF37;');
        console.log('%cLuxury Makeup for the Elegant You 👑', 'color: #D4AF37; font-size: 14px;');
    </script>
</body>
</html>== PRODUCTS DATA ==========
        const products = [
            { id: 1, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-1.jpg', description: 'مظهر عصري وأنيق يدوم طويلاً' },
            { id: 2, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-2.jpg', description: 'لإطلالة لامعة وجذابة' },
            { id: 3, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-3.jpg', description: 'تغطية مثالية وإشراقة طبيعية' },
            { id: 4, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.6, image: 'images/task3-4.jpg', description: 'تحافظ على نعومة الشفاه طوال' },
            { id: 5, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-5.jpg', description: 'توهج طبيعي يدوم طوال اليوم' },
            { id: 6, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.5, image: 'images/task3-6.jpg', description: 'عبوة أنيقة تضيف لمسة فخامة لمكياجك' },
            
            { id: 7, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-7.jpg', description: ' لنظهري باجمل اطلاله دون الحاجة لتعديل مستمر' },
            { id: 8, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-8.jpg', description: 'مرطب للعناية بالشفاه الجافة مع لمسة لون طبيعية' },
            { id: 9, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-9.jpg', description: 'لون غني وثبات طويل دون جفاف' },
            { id: 10, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-10.jpg', description: 'ملمس مخملي ناعم لإطلالة راقية' },
            
            { id: 11, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-12.jpg', description: 'فخامة إيطالية بتركيبة مغذية' },
            { id: 12, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-13.jpg', description: 'رسم دقيق وثبات احترافي' },
            { id: 13, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-14.jpg', description: 'لإطلالة لامعة وجذابة' },
            { id: 14, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.6, image: 'images/task3-15.jpg', description: 'عناية فاخرة لشفاه ناعمة كالحرير' },
            { id: 15, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-16.jpg', description: 'مظهر عصري وأنيق يدوم طويلاً' },
            { id: 16, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.5, image: 'images/task3-17.jpg', description: 'مرطب للعناية بالشفاه الجافة مع لمسة لون طبيعية' },
            
            { id: 17, name: 'YSL Rouge ', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 5.0, image: 'images/task3-18.jpeg', description: 'عبوة أنيقة تضيف لمسة فخامة لمكياجك' },
            { id: 18, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-19.jpeg', description: 'تحضير مثالي لتطبيق سلس وثابت' },
            { id: 19, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 5.0, image: 'images/task3-20.jpeg', description: 'لإطلالة لامعة وجذابة' },
            { id: 20, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-22.jpeg', description: 'مرطب للعناية بالشفاه الجافة مع لمسة لون طبيعية' },
            { id: 21, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-23.jpeg', description: 'مظهر عصري وأنيق يدوم طويلاً' },
            { id: 22, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-24.jpeg', description: 'ثبات استثنائي يدوم حتى 8 ساعات' },
            { id: 23, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 5.0, image: 'images/task3-26.jpeg', description: 'ملمس خفيف منعش لإطلالة طبيعية' }
        ];

        // ========== STATE ==========
        let cart = [];
        let currentFilter = 'all';

        // ========== INITIALIZE ==========
        document.addEventListener('DOMContentLoaded', function() {
            loadCart();
            renderProducts();
            updateCartCount();
            startTimer();
        });

        // ========== LOCAL STORAGE ==========
        function loadCart() {
            const savedCart = localStorage.getItem('raghadeLuxuryCart');
            if (savedCart) {
                try {
                    cart = JSON.parse(savedCart);
                } catch (e) {
                    cart = [];
                }
            }
        }

        function saveCart() {
            localStorage.setItem('raghadeLuxuryCart', JSON.stringify(cart));
        }

        // ========== TIMER ==========
        function startTimer() {
            let hours = 14, minutes = 10, seconds = 1;
            
            setInterval(() => {
                seconds--;
                if (seconds < 0) {
                    seconds = 59;
                    minutes--;
                }
                if (minutes < 0) {
                    minutes = 59;
                    hours--;
                }
                if (hours < 0) {
                    hours = 23;
                    minutes = 59;
                    seconds = 59;
                }
                
                const display = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                const timerEl = document.getElementById('timerDisplay');
                if (timerEl) {
                    timerEl.textContent = display;
                }
            }, 1000);
        }

        // ========== NAVIGATION ==========
        function goToPage(page) {
            document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
            const pageEl = document.getElementById(page + 'Page');
            if (pageEl) {
                pageEl.classList.add('active');
            }
            
            if (page === 'cart') displayCart();
            if (page === 'checkout') updateCheckoutSummary();
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // ========== PRODUCTS ==========
        function renderProducts(category = 'all', search = '') {
            let filtered = products;
            
            if (category !== 'all') {
                filtered = products.filter(p => p.category === category);
            }

            if (search) {
                filtered = filtered.filter(p => 
                    p.name.toLowerCase().includes(search.toLowerCase()) ||
                    p.brand.toLowerCase().includes(search.toLowerCase())
                );
            }

            const html = filtered.map(p => `
                <div class="product-card">
                    <div class="product-img-wrap">
                        <div class="discount-badge">خصم 25%</div>
                        <img src="${p.image}" alt="${p.name}">
                    </div>
                    <div class="product-body">
                        <div class="product-brand">${p.brand}</div>
                        <h3 class="product-name">${p.name}</h3>
                        <p class="product-description">${p.description}</p>
                        <div class="product-rating">${'⭐'.repeat(Math.floor(p.rating))} ${p.rating}</div>
                        <div class="product-price-row">
                            <span class="old-price">${p.oldPrice} ريال</span>
                            <span class="new-price">${p.price} ريال</span>
                        </div>
                        <button class="add-cart-btn" onclick="addToCart(${p.id})">أضف للسلة 🛒</button>
                    </div>
                </div>
            `).join('');

            const homeEl = document.getElementById('homeProducts');
            const allEl = document.getElementById('allProducts');
            if (homeEl) homeEl.innerHTML = html;
            if (allEl) allEl.innerHTML = html;
        }

        function filterProducts(category) {
            currentFilter = category;
            renderProducts(category);
            
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }

        function searchProducts() {
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                const term = searchInput.value;
                renderProducts(currentFilter, term);
                goToPage('products');
            }
        }

        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keypress', e => {
                if (e.key === 'Enter') searchProducts();
            });
        }

        // ========== CART ==========
        function addToCart(id) {
            const product = products.find(p => p.id === id);
            if (!product) return;

            const existing = cart.find(item => item.id === id);

            if (existing) {
                existing.quantity++;
            } else {
                cart.push({...product, quantity: 1});
            }

            saveCart();
            updateCartCount();
            showNotif('تم إضافة المنتج للسلة ✅');
        }

        function updateCartCount() {
            const count = cart.reduce((sum, item) => sum + item.quantity, 0);
            const countEl = document.getElementById('cartCount');
            if (countEl) {
                countEl.textContent = count;
            }
        }

        function displayCart() {
            const content = document.getElementById('cartContent');
            if (!content) return;
            
            if (cart.length === 0) {
                content.innerHTML = `
                    <div class="empty-state">
                        <div class="empty-icon">🛒</div>
                        <h3>سلة التسوق فارغة</h3>
                        <p style="font-size: 1.2rem; color: var(--gray); margin-bottom: 3rem;">ابدأي التسوق الآن واستمتعي بأفخم المنتجات!</p>
                        <button class="btn btn-gold" onclick="goToPage('products')">تسوقي الآن</button>
                    </div>
                `;
                return;
            }

            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const discount = cart.reduce((sum, item) => sum + ((item.oldPrice - item.price) * item.quantity), 0);
            const tax = subtotal * 0.15;
            const total = subtotal + tax;

            content.innerHTML = `
                <div class="cart-container">
                    ${cart.map(item => `
                        <div class="cart-item">
                            <img src="${item.image}" alt="${item.name}" class="cart-item-img">
                            <div>
                                <div class="cart-item-name">${item.name}</div>
                                <div class="cart-item-brand">${item.brand}</div>
                                <div class="cart-item-price">${item.price} ريال</div>
                            </div>
                            <div class="qty-controls">
                                <button class="qty-btn" onclick="changeQty(${item.id}, -1)">-</button>
                                <span class="qty-display">${item.quantity}</span>
                                <button class="qty-btn" onclick="changeQty(${item.id}, 1)">+</button>
                            </div>
                            <button class="remove-btn" onclick="removeItem(${item.id})">حذف</button>
                        </div>
                    `).join('')}
                </div>

                <div class="cart-summary">
                    <h3 style="margin-bottom: 2rem; font-size: 2rem; font-family: 'Cormorant Garamond', serif; color: var(--black);">ملخص الطلب</h3>
                    <div class="summary-row">
                        <span>المجموع الفرعي:</span>
                        <span>${subtotal.toFixed(2)} ريال</span>
                    </div>
                    <div class="summary-row">
                        <span>الخصم:</span>
                        <span style="color: var(--green);">-${discount.toFixed(2)} ريال</span>
                    </div>
                    <div class="summary-row">
                        <span>الضريبة (15%):</span>
                        <span>${tax.toFixed(2)} ريال</span>
                    </div>
                    <div class="summary-row total">
                        <span>المجموع الإجمالي:</span>
                        <span>${total.toFixed(2)} ريال</span>
                    </div>
                    <button class="btn btn-gold" onclick="goToPage('checkout')" style="width: 100%; padding: 1.5rem; margin-top: 3rem; font-size: 1.3rem;">
                        إتمام الطلب 🎁
                    </button>
                </div>
            `;
        }

        function changeQty(id, change) {
            const item = cart.find(i => i.id === id);
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    removeItem(id);
                } else {
                    saveCart();
                    updateCartCount();
                    displayCart();
                }
            }
        }

        function removeItem(id) {
            cart = cart.filter(item => item.id !== id);
            saveCart();
            updateCartCount();
            displayCart();
            showNotif('تم حذف المنتج من السلة');
        }

        // ========== CHECKOUT ==========
        function updateCheckoutSummary() {
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const discount = cart.reduce((sum, item) => sum + ((item.oldPrice - item.price) * item.quantity), 0);
            const tax = subtotal * 0.15;
            const total = subtotal + tax;

            const elements = {
                checkoutSubtotal: `${subtotal.toFixed(2)} ريال`,
                checkoutDiscount: `-${discount.toFixed(2)} ريال`,
                checkoutTax: `${tax.toFixed(2)} ريال`,
                checkoutTotal: `${total.toFixed(2)} ريال`
            };

            Object.keys(elements).forEach(id => {
                const el = document.getElementById(id);
                if (el) el.textContent = elements[id];
            });
        }

        function processOrder(e) {
            e.preventDefault();
            
            const orderData = {
                customer: {
                    name: e.target[0].value,
                    phone: e.target[1].value,
                    email: e.target[2].value,
                    city: e.target[3].value,
                    address: e.target[4].value,
                    payment: e.target[5].value
                },
                items: cart,
                summary: {
                    subtotal: cart.reduce((sum, item) => sum + (item.price * item.quantity), 0),
                    discount: cart.reduce((sum, item) => sum + ((item.oldPrice - item.price) * item.quantity), 0),
                    tax: cart.reduce((sum, item) => sum + (item.price * item.quantity), 0) * 0.15,
                    total: (cart.reduce((sum, item) => sum + (item.price * item.quantity), 0) * 1.15)
                },
                date: new Date().toLocaleString('ar-SA'),
                orderNum: 'ORD-' + Date.now()
            };

            localStorage.setItem('raghadeLuxuryLastOrder', JSON.stringify(orderData));
            generateReceipt(orderData);
            
            cart = [];
            saveCart();
            updateCartCount();
            
            goToPage('success');
        }

        function generateReceipt(order) {
            const items = order.items.map(item => `
                <div class="receipt-row">
                    <span>${item.name} (x${item.quantity})</span>
                    <span>${(item.price * item.quantity).toFixed(2)} ريال</span>
                </div>
            `).join('');

            const receiptEl = document.getElementById('receiptContent');
            if (receiptEl) {
                receiptEl.innerHTML = `
                    <h3 style="margin-bottom: 2rem; font-size: 2rem; color: var(--gold-dark); font-family: 'Cormorant Garamond', serif;">إيصال الطلب</h3>
                    <div class="receipt-row">
                        <span><strong>رقم الطلب:</strong></span>
                        <span>${order.orderNum}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>التاريخ:</strong></span>
                        <span>${order.date}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>الاسم:</strong></span>
                        <span>${order.customer.name}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>الجوال:</strong></span>
                        <span>${order.customer.phone}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>البريد:</strong></span>
                        <span>${order.customer.email}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>المدينة:</strong></span>
                        <span>${order.customer.city}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>العنوان:</strong></span>
                        <span>${order.customer.address}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>طريقة الدفع:</strong></span>
                        <span>${order.customer.payment}</span>
                    </div>
                    <hr style="margin: 2rem 0; border: 1px solid #ddd;">
                    <h4 style="margin-bottom: 1.5rem; font-size: 1.5rem; color: var(--black);">المنتجات:</h4>
                    ${items}
                    <hr style="margin: 2rem 0; border: 1px solid #ddd;">
                    <div class="receipt-row">
                        <span>المجموع الفرعي:</span>
                        <span>${order.summary.subtotal.toFixed(2)} ريال</span>
                    </div>
                    <div class="receipt-row">
                        <span style="color: var(--green);">الخصم:</span>
                        <span style="color: var(--green);">-${order.summary.discount.toFixed(2)} ريال</span>
                    </div>
                    <div class="receipt-row">
                        <span>الضريبة (15%):</span>
                        <span>${order.summary.tax.toFixed(2)} ريال</span>
                    </div>
                    <div class="receipt-row" style="font-size: 1.8rem; font-weight: 900; color: var(--gold-dark); border-top: 3px solid var(--gold); padding-top: 2rem; margin-top: 1.5rem;">
                        <span>المجموع الإجمالي:</span>
                        <span>${order.summary.total.toFixed(2)} ريال</span>
                    </div>
                `;
            }
        }

        // ========                <button type="submit" class="btn btn-gold" style="width: 100%; padding: 1.5rem; font-size: 1.3rem; margin-top: 3rem;">
                    تأكيد الطلب وإتمام الدفع 🎁
                </button>
            </form>
        </section>
    </div>

    <!-- ========== SUCCESS PAGE ========== -->
    <div id="successPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <div class="success-container">
                <div class="cart-container">
                    <div class="success-icon">✅</div>
                    <h2>تم الدفع بنجاح!</h2>
                    <p style="font-size: 1.4rem; color: var(--gray); margin-bottom: 3rem;">
                        شكراً لثقتك بنا. سيتم توصيل طلبك في أقرب وقت ممكن
                    </p>

                    <div class="receipt" id="receiptContent"></div>

                </div>
            </div>
        </section>
    </div>

    <!-- ========== ABOUT PAGE ========== -->
    <div id="aboutPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <h2 class="section-title">من نحن</h2>
            <div class="about-content">
                <h2>متجر راغدي الفاخر</h2>
                <p>
                    Raghade' Luxury Store هو وجهتك الأولى للحصول على أفخم منتجات المكياج العالمية. 
                    نحن نؤمن بأن كل امرأة تستحق أن تشعر بالجمال والثقة، ولهذا نقدم لك مجموعة مختارة بعناية 
                    من أرقى العلامات التجارية العالمية.
                </p>

                <h2>رؤيتنا</h2>
                <p>
                    نسعى لأن نكون الخيار الأول للمرأة العصرية التي تبحث عن التميز والأناقة في كل تفصيلة.
                    نقدم تجربة تسوق استثنائية تجمع بين الفخامة والراحة والأسعار التنافسية.
                </p>

                <h2>لماذا تختاريننا؟</h2>
                <p>✨ منتجات أصلية 100% من علامات تجارية عالمية معتمدة</p>
                <p>🚚 شحن سريع وآمن لجميع مناطق المملكة</p>
                <p>💎 أسعار تنافسية مع عروض حصرية مستمرة</p>
                <p>🎁 تغليف فاخر يليق بذوقك الرفيع</p>
                <p>💝 خدمة عملاء متميزة على مدار الساعة</p>
                <p>🔒 دفع آمن ومضمون بأحدث تقنيات الحماية</p>
            </div>
        </section>
    </div>

    <!-- ========== CONTACT PAGE ========== -->
    <div id="contactPage" class="page">
        <div style="margin-top: 120px;"></div>
        <section class="section">
            <h2 class="section-title">تواصلي معنا</h2>
            <p class="section-subtitle">نحن دائماً في خدمتك! تواصلي معنا عبر القنوات التالية</p>

            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon-wrap">📧</div>
                    <h3>البريد الإلكتروني</h3>
                    <a href="mailto:raghad.alshawafy2023@icloud.com">raghad.alshawafy2023@icloud.com</a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon-wrap">💻</div>
                    <h3>GitHub</h3>
                    <a href="https://github.com/engraghad20" target="_blank">github.com/engraghad20</a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon-wrap">💼</div>
                    <h3>LinkedIn</h3>
                    <a href="https://www.linkedin.com/in/raghad-alshawafy" target="_blank">Raghad Alshawafy</a>
                </div>

                <div class="contact-card">
                    <div class="contact-icon-wrap">🐦</div>
                    <h3>Twitter</h3>
                    <a href="https://x.com/engraghad02" target="_blank">@engraghad02</a>
                </div>
            </div>
        </section>
    </div>

    <!-- ========== LOGIN MODAL ========== -->
    <div id="loginModal" class="modal">
        <div class="modal-box">
            <button class="modal-close" onclick="closeModal('login')">&times;</button>
            <h2>تسجيل الدخول</h2>
            <form onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" required placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="password" required placeholder="••••••••">
                </div>
                <button type="submit" class="btn btn-gold" style="width: 100%; padding: 1.3rem; font-size: 1.1rem;">دخول</button>
                <p style="text-align: center; margin-top: 2rem; font-size: 1.1rem;">
                    ليس لديك حساب؟ 
                    <a href="#" onclick="closeModal('login'); openModal('register')" style="color: var(--gold-dark); font-weight: 700;">سجلي الآن</a>
                </p>
            </form>
        </div>
    </div>

    <!-- ========== REGISTER MODAL ========== -->
    <div id="registerModal" class="modal">
        <div class="modal-box">
            <button class="modal-close" onclick="closeModal('register')">&times;</button>
            <h2>إنشاء حساب جديد</h2>
            <form onsubmit="handleRegister(event)">
                <div class="form-group">
                    <label>الاسم الكامل</label>
                    <input type="text" required placeholder="أدخلي اسمك الكامل">
                </div>
                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" required placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label>رقم الجوال</label>
                    <input type="tel" required placeholder="+966 XXX XXX XXX">
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="password" required placeholder="••••••••">
                </div>
                <button type="submit" class="btn btn-gold" style="width: 100%; padding: 1.3rem; font-size: 1.1rem;">إنشاء الحساب</button>
                <p style="text-align: center; margin-top: 2rem; font-size: 1.1rem;">
                    لديك حساب بالفعل؟ 
                    <a href="#" onclick="closeModal('register'); openModal('login')" style="color: var(--gold-dark); font-weight: 700;">سجلي الدخول</a>
                </p>
            </form>
        </div>
    </div>

    <!-- ========== FOOTER ========== -->
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-section">
                <h3>Raghade' Luxury</h3>
                <p>متجرك الأول لأفخم منتجات المكياج العالمية</p>
                <p>Luxury Makeup for the Elegant You</p>
                <p>تجربة تسوق فاخرة لا تُنسى</p>
            </div>

            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <a href="#" onclick="goToPage('home')">الرئيسية</a>
                <a href="#" onclick="goToPage('products')">المنتجات</a>
                <a href="#" onclick="goToPage('about')">من نحن</a>
                <a href="#" onclick="goToPage('contact')">تواصل معنا</a>
            </div>

            <div class="footer-section">
                <h3>خدمة العملاء</h3>
                <a href="#">سياسة الإرجاع</a>
                <a href="#">الشحن والتوصيل</a>
                <a href="#">الأسئلة الشائعة</a>
                <a href="#">سياسة الخصوصية</a>
            </div>

            <div class="footer-section">
                <h3>تواصل معنا</h3>
                <p>📧 raghad.alshawafy2023@icloud.com</p>
                <p>📱 خدمة العملاء 24/7</p>
                <p>🌍 نشحن لجميع أنحاء المملكة</p>
                <p>🎁 عروض حصرية يومياً</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Raghade' Luxury Store. جميع الحقوق محفوظة</p>
        </div>
    </footer>

    <script>
        // ========== PRODUCTS DATA ==========
        const products = [
            { id: 1, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-1.jpg', description: 'مظهر عصري وأنيق يدوم طويلاً' },
            { id: 2, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-2.jpg', description: 'لإطلالة لامعة وجذابة' },
            { id: 3, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-3.jpg', description: 'تغطية مثالية وإشراقة طبيعية' },
            { id: 4, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.6, image: 'images/task3-4.jpg', description: 'تحافظ على نعومة الشفاه طوال' },
            { id: 5, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-5.jpg', description: 'توهج طبيعي يدوم طوال اليوم' },
            { id: 6, name: 'KIKO Rouge', brand: 'KIKO', category: 'KIKO', price: 150, oldPrice: 199, rating: 4.5, image: 'images/task3-6.jpg', description: 'عبوة أنيقة تضيف لمسة فخامة لمكياجك' },
            
            { id: 7, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-7.jpg', description: ' لنظهري باجمل اطلاله دون الحاجة لتعديل مستمر' },
            { id: 8, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-8.jpg', description: 'مرطب للعناية بالشفاه الجافة مع لمسة لون طبيعية' },
            { id: 9, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-9.jpg', description: 'لون غني وثبات طويل دون جفاف' },
            { id: 10, name: 'Luxora Rouge', brand: 'Luxora', category: 'Luxora', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-10.jpg', description: 'ملمس مخملي ناعم لإطلالة راقية' },
            
            { id: 11, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-12.jpg', description: 'فخامة إيطالية بتركيبة مغذية' },
            { id: 12, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-13.jpg', description: 'رسم دقيق وثبات احترافي' },
            { id: 13, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-14.jpg', description: 'لإطلالة لامعة وجذابة' },
            { id: 14, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.6, image: 'images/task3-15.jpg', description: 'عناية فاخرة لشفاه ناعمة كالحرير' },
            { id: 15, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-16.jpg', description: 'مظهر عصري وأنيق يدوم طويلاً' },
            { id: 16, name: 'Bellezza Rouge', brand: 'Bellezza', category: 'Bellezza', price: 150, oldPrice: 199, rating: 4.5, image: 'images/task3-17.jpg', description: 'مرطب للعناية بالشفاه الجافة مع لمسة لون طبيعية' },
            
            { id: 17, name: 'YSL Rouge ', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 5.0, image: 'images/task3-18.jpeg', description: 'عبوة أنيقة تضيف لمسة فخامة لمكياجك' },
            { id: 18, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-19.jpeg', description: 'تحضير مثالي لتطبيق سلس وثابت' },
            { id: 19, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 5.0, image: 'images/task3-20.jpeg', description: 'لإطلالة لامعة وجذابة' },
            { id: 20, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.8, image: 'images/task3-22.jpeg', description: 'مرطب للعناية بالشفاه الجافة مع لمسة لون طبيعية' },
            { id: 21, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.9, image: 'images/task3-23.jpeg', description: 'مظهر عصري وأنيق يدوم طويلاً' },
            { id: 22, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 4.7, image: 'images/task3-24.jpeg', description: 'ثبات استثنائي يدوم حتى 8 ساعات' },
            { id: 23, name: 'YSL Rouge', brand: 'Yves Saint Laurent', category: 'YSL', price: 150, oldPrice: 199, rating: 5.0, image: 'images/task3-26.jpeg', description: 'ملمس خفيف منعش لإطلالة طبيعية' }
        ];

        // ========== STATE ==========
        let cart = [];
        let currentFilter = 'all';

        // ========== INITIALIZE ==========
        document.addEventListener('DOMContentLoaded', function() {
            loadCart();
            renderProducts();
            updateCartCount();
            startTimer();
        });

        // ========== LOCAL STORAGE ==========
        function loadCart() {
            const savedCart = localStorage.getItem('raghadeLuxuryCart');
            if (savedCart) {
                try {
                    cart = JSON.parse(savedCart);
                } catch (e) {
                    cart = [];
                }
            }
        }

        function saveCart() {
            localStorage.setItem('raghadeLuxuryCart', JSON.stringify(cart));
        }

        // ========== TIMER ==========
        function startTimer() {
            let hours = 14, minutes = 10, seconds = 1;
            
            setInterval(() => {
                seconds--;
                if (seconds < 0) {
                    seconds = 59;
                    minutes--;
                }
                if (minutes < 0) {
                    minutes = 59;
                    hours--;
                }
                if (hours < 0) {
                    hours = 23;
                    minutes = 59;
                    seconds = 59;
                }
                
                const display = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                const timerEl = document.getElementById('timerDisplay');
                if (timerEl) {
                    timerEl.textContent = display;
                }
            }, 1000);
        }

        // ========== NAVIGATION ==========
        function goToPage(page) {
            document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
            const pageEl = document.getElementById(page + 'Page');
            if (pageEl) {
                pageEl.classList.add('active');
            }
            
            if (page === 'cart') displayCart();
            if (page === 'checkout') updateCheckoutSummary();
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // ========== PRODUCTS ==========
        function renderProducts(category = 'all', search = '') {
            let filtered = products;
            
            if (category !== 'all') {
                filtered = products.filter(p => p.category === category);
            }

            if (search) {
                filtered = filtered.filter(p => 
                    p.name.toLowerCase().includes(search.toLowerCase()) ||
                    p.brand.toLowerCase().includes(search.toLowerCase())
                );
            }

            const html = filtered.map(p => `
                <div class="product-card">
                    <div class="product-img-wrap">
                        <div class="discount-badge">خصم 25%</div>
                        <img src="${p.image}" alt="${p.name}">
                    </div>
                    <div class="product-body">
                        <div class="product-brand">${p.brand}</div>
                        <h3 class="product-name">${p.name}</h3>
                        <p class="product-description">${p.description}</p>
                        <div class="product-rating">${'⭐'.repeat(Math.floor(p.rating))} ${p.rating}</div>
                        <div class="product-price-row">
                            <span class="old-price">${p.oldPrice} ريال</span>
                            <span class="new-price">${p.price} ريال</span>
                        </div>
                        <button class="add-cart-btn" onclick="addToCart(${p.id})">أضف للسلة 🛒</button>
                    </div>
                </div>
            `).join('');

            const homeEl = document.getElementById('homeProducts');
            const allEl = document.getElementById('allProducts');
            if (homeEl) homeEl.innerHTML = html;
            if (allEl) allEl.innerHTML = html;
        }

        function filterProducts(category) {
            currentFilter = category;
            renderProducts(category);
            
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }

        function searchProducts() {
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                const term = searchInput.value;
                renderProducts(currentFilter, term);
                goToPage('products');
            }
        }

        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keypress', e => {
                if (e.key === 'Enter') searchProducts();
            });
        }

        // ========== CART ==========
        function addToCart(id) {
            const product = products.find(p => p.id === id);
            if (!product) return;

            const existing = cart.find(item => item.id === id);

            if (existing) {
                existing.quantity++;
            } else {
                cart.push({...product, quantity: 1});
            }

            saveCart();
            updateCartCount();
            showNotif('تم إضافة المنتج للسلة ✅');
        }

        function updateCartCount() {
            const count = cart.reduce((sum, item) => sum + item.quantity, 0);
            const countEl = document.getElementById('cartCount');
            if (countEl) {
                countEl.textContent = count;
            }
        }

        function displayCart() {
            const content = document.getElementById('cartContent');
            if (!content) return;
            
            if (cart.length === 0) {
                content.innerHTML = `
                    <div class="empty-state">
                        <div class="empty-icon">🛒</div>
                        <h3>سلة التسوق فارغة</h3>
                        <p style="font-size: 1.2rem; color: var(--gray); margin-bottom: 3rem;">ابدأي التسوق الآن واستمتعي بأفخم المنتجات!</p>
                        <button class="btn btn-gold" onclick="goToPage('products')">تسوقي الآن</button>
                    </div>
                `;
                return;
            }

            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const discount = cart.reduce((sum, item) => sum + ((item.oldPrice - item.price) * item.quantity), 0);
            const tax = subtotal * 0.15;
            const total = subtotal + tax;

            content.innerHTML = `
                <div class="cart-container">
                    ${cart.map(item => `
                        <div class="cart-item">
                            <img src="${item.image}" alt="${item.name}" class="cart-item-img">
                            <div>
                                <div class="cart-item-name">${item.name}</div>
                                <div class="cart-item-brand">${item.brand}</div>
                                <div class="cart-item-price">${item.price} ريال</div>
                            </div>
                            <div class="qty-controls">
                                <button class="qty-btn" onclick="changeQty(${item.id}, -1)">-</button>
                                <span class="qty-display">${item.quantity}</span>
                                <button class="qty-btn" onclick="changeQty(${item.id}, 1)">+</button>
                            </div>
                            <button class="remove-btn" onclick="removeItem(${item.id})">حذف</button>
                        </div>
                    `).join('')}
                </div>

                <div class="cart-summary">
                    <h3 style="margin-bottom: 2rem; font-size: 2rem; font-family: 'Cormorant Garamond', serif; color: var(--black);">ملخص الطلب</h3>
                    <div class="summary-row">
                        <span>المجموع الفرعي:</span>
                        <span>${subtotal.toFixed(2)} ريال</span>
                    </div>
                    <div class="summary-row">
                        <span>الخصم:</span>
                        <span style="color: var(--green);">-${discount.toFixed(2)} ريال</span>
                    </div>
                    <div class="summary-row">
                        <span>الضريبة (15%):</span>
                        <span>${tax.toFixed(2)} ريال</span>
                    </div>
                    <div class="summary-row total">
                        <span>المجموع الإجمالي:</span>
                        <span>${total.toFixed(2)} ريال</span>
                    </div>
                    <button class="btn btn-gold" onclick="goToPage('checkout')" style="width: 100%; padding: 1.5rem; margin-top: 3rem; font-size: 1.3rem;">
                        إتمام الطلب 🎁
                    </button>
                </div>
            `;
        }

        function changeQty(id, change) {
            const item = cart.find(i => i.id === id);
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    removeItem(id);
                } else {
                    saveCart();
                    updateCartCount();
                    displayCart();
                }
            }
        }

        function removeItem(id) {
            cart = cart.filter(item => item.id !== id);
            saveCart();
            updateCartCount();
            displayCart();
            showNotif('تم حذف المنتج من السلة');
        }

        // ========== CHECKOUT ==========
        function updateCheckoutSummary() {
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const discount = cart.reduce((sum, item) => sum + ((item.oldPrice - item.price) * item.quantity), 0);
            const tax = subtotal * 0.15;
            const total = subtotal + tax;

            const elements = {
                checkoutSubtotal: `${subtotal.toFixed(2)} ريال`,
                checkoutDiscount: `-${discount.toFixed(2)} ريال`,
                checkoutTax: `${tax.toFixed(2)} ريال`,
                checkoutTotal: `${total.toFixed(2)} ريال`
            };

            Object.keys(elements).forEach(id => {
                const el = document.getElementById(id);
                if (el) el.textContent = elements[id];
            });
        }

        function processOrder(e) {
            e.preventDefault();
            
            const orderData = {
                customer: {
                    name: e.target[0].value,
                    phone: e.target[1].value,
                    email: e.target[2].value,
                    city: e.target[3].value,
                    address: e.target[4].value,
                    payment: e.target[5].value
                },
                items: cart,
                summary: {
                    subtotal: cart.reduce((sum, item) => sum + (item.price * item.quantity), 0),
                    discount: cart.reduce((sum, item) => sum + ((item.oldPrice - item.price) * item.quantity), 0),
                    tax: cart.reduce((sum, item) => sum + (item.price * item.quantity), 0) * 0.15,
                    total: (cart.reduce((sum, item) => sum + (item.price * item.quantity), 0) * 1.15)
                },
                date: new Date().toLocaleString('ar-SA'),
                orderNum: 'ORD-' + Date.now()
            };

            localStorage.setItem('raghadeLuxuryLastOrder', JSON.stringify(orderData));
            generateReceipt(orderData);
            
            cart = [];
            saveCart();
            updateCartCount();
            
            goToPage('success');
        }

        function generateReceipt(order) {
            const items = order.items.map(item => `
                <div class="receipt-row">
                    <span>${item.name} (x${item.quantity})</span>
                    <span>${(item.price * item.quantity).toFixed(2)} ريال</span>
                </div>
            `).join('');

            const receiptEl = document.getElementById('receiptContent');
            if (receiptEl) {
                receiptEl.innerHTML = `
                    <h3 style="margin-bottom: 2rem; font-size: 2rem; color: var(--gold-dark); font-family: 'Cormorant Garamond', serif;">إيصال الطلب</h3>
                    <div class="receipt-row">
                        <span><strong>رقم الطلب:</strong></span>
                        <span>${order.orderNum}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>التاريخ:</strong></span>
                        <span>${order.date}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>الاسم:</strong></span>
                        <span>${order.customer.name}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>الجوال:</strong></span>
                        <span>${order.customer.phone}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>البريد:</strong></span>
                        <span>${order.customer.email}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>المدينة:</strong></span>
                        <span>${order.customer.city}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>العنوان:</strong></span>
                        <span>${order.customer.address}</span>
                    </div>
                    <div class="receipt-row">
                        <span><strong>طريقة الدفع:</strong></span>
                        <span>${order.customer.payment}</span>
                    </div>
                    <hr style="margin: 2rem 0; border: 1px solid #ddd;">
                    <h4 style="margin-bottom: 1.5rem; font-size: 1.5rem; color: var(--black);">المنتجات:</h4>
                    ${items}
                    <hr style="margin: 2rem 0; border: 1px solid #ddd;">
                    <div class="receipt-row">
                        <span>المجموع الفرعي:</span>
                        <span>${order.summary.subtotal.toFixed(2)} ريال</span>
                    </div>
                    <div class="receipt-row">
                        <span style="color: var(--green);">الخصم:</span>
                        <span style="color: var(--green);">-${order.summary.discount.toFixed(2)} ريال</span>
                    </div>
                    <div class="receipt-row">
                        <span>الضريبة (15%):</span>
                        <span>${order.summary.tax.toFixed(2)} ريال</span>
                    </div>
                    <div class="receipt-row" style="font-size: 1.8rem; font-weight: 900; color: var(--gold-dark); border-top: 3px solid var(--gold); padding-top: 2rem; margin-top: 1.5rem;">
                        <span>المجموع الإجمالي:</span>
                        <span>${order.summary.total.toFixed(2)} ريال</span>
                    </div>
                `;
            }
        }

        // ========== MODALS ==========
        function openModal(name) {
            const modal = document.getElementById(name + 'Modal');
            if (modal) {
                modal.style.display = 'flex';
            }
        }

        function closeModal(name) {
            const modal = document.getElementById(name + 'Modal');
            if (modal) {
                modal.style.display = 'none';
            }
        }

        window.onclick = e => {
            if (e.target.classList.contains('modal')) {
                e.target.style.display = 'none';
            }
        };

        // ========== AUTH ==========
        function handleLogin(e) {
            e.preventDefault();
            
            const email = e.target[0].value;
            const password = e.target[1].value;
            
            const users = JSON.parse(localStorage.getItem('raghadeLuxuryUsers') || '[]');
            const user = users.find(u => u.email === email && u.password === btoa(password));
            
            if (user) {
                localStorage.setItem('raghadeLuxuryCurrentUser', JSON.stringify(user));
                showNotif('تم تسجيل الدخول بنجاح! 🎉');
                closeModal('login');
            } else {
                showNotif('البريد الإلكتروني أو كلمة المرور غير صحيحة ❌');
            }
        }

        function handleRegister(e) {
            e.preventDefault();
            
            const name = e.target[0].value;
            const email = e.target[1].value;
            const phone = e.target[2].value;
            const password = e.target[3].value;
            
            const users = JSON.parse(localStorage.getItem('raghadeLuxuryUsers') || '[]');
            
            if (users.find(u => u.email === email)) {
                showNotif('البريد الإلكتروني مسجل مسبقاً ❌');
                return;
            }
            
            const newUser = {
                name,
                email,
                phone,
                password: btoa(password),
                date: new Date().toISOString()
            };
            
            users.push(newUser);
            localStorage.setItem('raghadeLuxuryUsers', JSON.stringify(users));
            localStorage.setItem('raghadeLuxuryCurrentUser', JSON.stringify(newUser));
            
            showNotif('تم إنشاء الحساب بنجاح! 🎉');
            closeModal('register');
        }

        // ========== NEWSLETTER ==========
        function subscribeNewsletter(e) {
            e.preventDefault();
            
            const email = e.target[0].value;
            const subscribers = JSON.parse(localStorage.getItem('raghadeLuxurySubscribers') || '[]');
            
            if (subscribers.includes(email)) {
                showNotif('أنت مشتركة بالفعل في النشرة البريدية');
                return;
            }
            
            subscribers.push(email);
            localStorage.setItem('raghadeLuxurySubscribers', JSON.stringify(subscribers));
            showNotif('تم الاشتراك في النشرة البريدية بنجاح! 📧');
            e.target.reset();
        }

        // ========== NOTIFICATION ==========
        function showNotif(message) {
            const notif = document.createElement('div');
            notif.style.cssText = `
                position: fixed;
                top: 120px;
                right: 30px;
                background: linear-gradient(135deg, var(--gold), var(--gold-light));
                color: var(--black);
                padding: 1.5rem 2.5rem;
                border-radius: 20px;
                box-shadow: 0 10px 40px rgba(212, 175, 55, 0.5);
                z-index: 5000;
                font-weight: 900;
                font-size: 1.15rem;
                animation: slideIn 0.4s ease-out;
                max-width: 450px;
                border: 2px solid var(--gold-dark);
            `;
            notif.textContent = message;
            
            document.body.appendChild(notif);
            
            setTimeout(() => {
                notif.style.animation = 'slideOut 0.4s ease-out';
                setTimeout(() => notif.remove(), 400);
            }, 3500);
        }

        // ========== CONSOLE ==========
        console.log('%c🎨 Raghade\' Luxury Store 💎', 'color: #D4AF37; font-size: 32px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);');
        console.log('%cDeveloped with ❤️ by Raghad Alshawafy', 'color: #8b7355; font-size: 18px; font-weight: bold;');
        console.log('%cWebsite loaded successfully! ✅', 'color: #2D5016; font-size: 16px; font-weight: bold;');
        console.log('%c━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', 'color: #D4AF37;');
        console.log('%cLuxury Makeup for the Elegant You 👑', 'color: #D4AF37; font-size: 14px;');
    </script>
</body>
</html>
                    