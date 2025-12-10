<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Piano || POWERED BY NEXTGEN INC DESIGNERS</title>
    <meta name="description" content="Experience the magic of Christmas through beautiful piano melodies. Play, listen, and celebrate the season with our web-based Christmas Piano application.">
    <meta name="author" content="Royal Tech Owner">
    <meta content="keywords" content="christmas piano, holiday music, web audio, piano melodies, festive songs, online piano, christmas carols, piano player, music visualization, responsive design">
    <link rel="shortcut icon" href="https://royaltech254.co.ke/img/logo.png" type="image/x-icon">
    <link rel="icon" href="https://royaltech254.co.ke/img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://royaltech254.co.ke/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="https://royaltech254.co.ke/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="https://royaltech254.co.ke/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="https://royaltech254.co.ke/img/logo.png">


</head>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Snowflakes -->
    <div class="snowflakes" id="snowflakes"></div>

    <!-- Header -->
    <header>
        <!-- Logo Row -->
        <div class="header-logo-row">
            <a href="#hero" class="logo">
                <span class="logo-icon">🎄</span>
                Christmas Piano
            </a>
        </div>
        <!-- Navigation Row -->
        <div class="header-nav-row">
            <div class="nav-container">
                <div class="nav-decor">
                    <span class="ornament">🔔</span>
                    <span>•</span>
                    <span class="ornament">🎁</span>
                </div>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#songs">Songs</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#features">Our Works</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
                <div class="nav-decor">
                    <span class="ornament">🎁</span>
                    <span>•</span>
                    <span class="ornament">🔔</span>
                </div>
                <div class="nav-toggle" id="navToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <span class="hero-badge">✨ Holiday Season <span id="year">Loading...</span></span>
            <h1>Christmas Piano</h1>
            <p class="hero-subtitle">Experience the magic of Christmas through beautiful piano melodies. Play, listen, and celebrate the season.</p>
        </div>

        <!-- Mini Piano Player -->
        <div class="mini-player">
            <div class="player-header">
                <div class="song-info">
                    <div class="now-playing">Now Playing</div>
                    <div class="song-title" id="currentSongTitle">Last Christmas</div>
                </div>
                <div class="player-controls">
                    <button class="control-btn nav-btn" id="prevBtn">◀</button>
                    <button class="control-btn play-btn" id="playBtn">▶</button>
                    <button class="control-btn nav-btn" id="nextBtn">▶</button>
                </div>
            </div>

            <div class="song-selector">
                <button class="song-tab active" data-song="0">Last Christmas</button>
                <button class="song-tab" data-song="1">Jingle Bells</button>
                <button class="song-tab" data-song="2">We Wish You...</button>
            </div>

            <div class="progress-container">
                <div class="progress-bar" id="progressBar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
                <div class="time-display">
                    <span id="currentTime">0:00</span>
                    <span id="totalTime">0:00</span>
                </div>
            </div>

            <div class="mini-piano-container">
                <div class="mini-piano" id="miniPiano"></div>
            </div>

            <div class="player-controls-row">
                <div class="control-group">
                    <span class="control-label">Speed</span>
                    <input type="range" class="control-slider" id="speedSlider" min="0.5" max="2" step="0.1" value="1">
                    <span class="control-value" id="speedValue">1.0x</span>
                </div>
                <div class="control-group">
                    <span class="control-label">Volume</span>
                    <input type="range" class="control-slider" id="volumeSlider" min="0" max="1" step="0.1" value="0.7">
                    <span class="control-value" id="volumeValue">70%</span>
                </div>
                <div class="repeat-toggle" id="repeatToggle">
                    <span class="repeat-icon">🔁</span>
                    <div class="toggle-switch" id="repeatSwitch"></div>
                </div>
            </div>

            <div class="keyboard-hint">
                🎹 Play with keyboard: Z-M (lower) • Q-U (upper) • Space (play/pause)
            </div>
        </div>
    </section>
    <!-- Songs Section -->
    <section id="songs">
        <div class="section-header">
            <span class="section-badge">Library</span>
            <h2>Christmas Classics</h2>
            <p class="section-desc">A curated collection of beloved holiday melodies</p>
        </div>
        <div class="songs-grid">
            <a href="https://www.youtube.com/watch?v=E8gmARGvPlI" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">🎄</div>
                <div class="song-card-info">
                    <div class="song-card-title">Last Christmas</div>
                    <div class="song-card-meta">Wham! • Classic Pop</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
            <a href="https://www.youtube.com/results?search_query=jingle+bells+piano" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">🔔</div>
                <div class="song-card-info">
                    <div class="song-card-title">Jingle Bells</div>
                    <div class="song-card-meta">Traditional • Classic</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
            <a href="https://www.youtube.com/watch?v=g-OF7KGyDis" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">🎁</div>
                <div class="song-card-info">
                    <div class="song-card-title">We Wish You a Merry Christmas</div>
                    <div class="song-card-meta">Traditional • Carol</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
            <a href="https://www.youtube.com/results?search_query=silent+night+piano+instrumental" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">🌟</div>
                <div class="song-card-info">
                    <div class="song-card-title">Silent Night</div>
                    <div class="song-card-meta">Traditional • Hymn</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
            <a href="https://www.youtube.com/results?search_query=white+christmas+piano" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">❄️</div>
                <div class="song-card-info">
                    <div class="song-card-title">White Christmas</div>
                    <div class="song-card-meta">Bing Crosby • Classic</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
            <a href="https://www.youtube.com/results?search_query=o+christmas+tree+piano" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">🌲</div>
                <div class="song-card-info">
                    <div class="song-card-title">O Christmas Tree</div>
                    <div class="song-card-meta">Traditional • German Carol</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
            <a href="https://www.youtube.com/results?search_query=all+i+want+for+christmas+is+you+piano" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">💝</div>
                <div class="song-card-info">
                    <div class="song-card-title">All I Want for Christmas Is You</div>
                    <div class="song-card-meta">Mariah Carey • Pop</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
            <a href="https://www.youtube.com/results?search_query=let+it+snow+piano+instrumental" target="_blank" rel="noopener" class="song-card">
                <div class="song-card-icon">☃️</div>
                <div class="song-card-info">
                    <div class="song-card-title">Let It Snow</div>
                    <div class="song-card-meta">Dean Martin • Classic</div>
                </div>
                <div class="song-card-duration">↗</div>
            </a>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <div class="section-header">
            <span class="section-badge">Memories</span>
            <h2>Christmas Gallery</h2>
            <p class="section-desc">Capture the festive moments and holiday spirit</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item" data-index="0">
                <img src="images/christmas-pic-01.jpg" alt="Christmas Tree">
                <div class="gallery-icon">+</div>
            </div>
            <div class="gallery-item" data-index="1">
                <img src="images/christmas-pic-02.jpg" alt="Christmas Decorations">
                <div class="gallery-icon">+</div>
            </div>
            <div class="gallery-item" data-index="2">
                <img src="images/christmas-pic-03.jpg" alt="Christmas Lights">
                <div class="gallery-icon">+</div>
            </div>
            <div class="gallery-item" data-index="3">
                <img src="images/christmas-pic-04.jpg" alt="Christmas Snow">
                <div class="gallery-icon">+</div>
            </div>
            <div class="gallery-item" data-index="4">
                <img src="images/christmas-pic-05.jpg" alt="Christmas Gifts">
                <div class="gallery-icon">+</div>
            </div>
            <div class="gallery-item" data-index="5">
                <img src="images/christmas-pic-06.jpg" alt="Christmas Cookies">
                <div class="gallery-icon">+</div>
            </div>
            <div class="gallery-item" data-index="6">
                <img src="images/christmas-pic-07.jpg" alt="Christmas Candles">
                <div class="gallery-icon">+</div>
            </div>
            <div class="gallery-item" data-index="7">
                <img src="images/christmas-pic-08.jpg" alt="Christmas Piano">
                <div class="gallery-icon">+</div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="section-header">
            <span class="section-badge">About</span>
            <h2>About Us</h2>
            <p class="section-desc">Innovating the future, one smart solution at a time</p>
        </div>

        <div class="about-grid">
            <div class="about-media">
                <img src="images/about-piano.jpg" alt="NEXTGEN ROYALTECH">
                <a href="https://www.youtube.com/watch?v=E8gmARGvPlI" target="_blank" rel="noopener" class="youtube-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                    </svg>
                    Watch on YouTube
                </a>
            </div>

            <div class="about-content">
                <h3>Who We Are</h3>
                <p>NEXTGEN ROYALTECH is a forward-thinking tech company dedicated to building modern digital experiences. From websites to intelligent systems, we focus on creating solutions that are fast, secure, and user-friendly.</p>

                <p>Our mission is to empower businesses and individuals through smart innovation — making technology simple, accessible, and impactful. Whether it's automation, responsive web design, or digital tools, we bring creativity and technical excellence together.</p>

                <p class="about-credits">NEXTGEN ROYALTECH — Tech solutions for a better wlrd.</p>

                <div class="about-stats">
                    <div class="stat">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>

                    <div class="stat">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>

                    <div class="stat">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section id="features">
        <div class="section-header">
            <span class="section-badge">Our Works</span>
            <h2>What We Build at NEXTGEN ROYALTECH</h2>
            <p class="section-desc">Smart, innovative, and user-focused digital solutions</p>
        </div>

        <div class="features-grid">

            <!-- Christmas Counter -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="32" cy="32" r="28" stroke-opacity="0.3" />
                        <path d="M32 8v48M8 32h48" stroke-opacity="0.2" />
                        <circle cx="32" cy="32" r="6" fill="currentColor" opacity="0.3" />
                    </svg>
                </div>
                <h3>Christmas Counter</h3>
                <p>A beautiful and accurate countdown experience designed to track the days, hours, and seconds to Christmas in real-time.</p>
            </div>

            <!-- Kilimo Smart AI -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="8" y="20" width="48" height="32" rx="4" />
                        <path d="M16 36c4-8 12-12 20-8 6 3 10 9 12 16" stroke-opacity="0.6" />
                    </svg>
                </div>
                <h3>Kilimo Smart AI</h3>
                <p>An intelligent assistant for farmers that analyzes data and gives smart recommendations for planting, pests, soil, and yields.</p>
            </div>

            <!-- Nextgen Paper Vault -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="6" y="18" width="52" height="32" rx="4" />
                        <path d="M20 24h24v16H20z" opacity="0.4" />
                    </svg>
                </div>
                <h3>Nextgen Paper Vault</h3>
                <p>A secure digital vault for storing, organising, and retrieving school notes, exams, and documents with ease.</p>
            </div>

            <!-- Nextgen Link Shortener -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M26 22L14 34c-4 4-4 10 0 14s10 4 14 0l6-6" />
                        <path d="M38 42l12-12c4-4 4-10 0-14s-10-4-14 0l-6 6" />
                    </svg>
                </div>
                <h3>Nextgen Link Shortener</h3>
                <p>A fast, reliable, and clean URL shortener for sharing links professionally and tracking engagement.</p>
            </div>

            <!-- Daily Quotes -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="32" cy="32" r="24" stroke-opacity="0.3" />
                        <path d="M22 26h20M22 34h16M22 42h10" stroke-width="2" />
                    </svg>
                </div>
                <h3>Daily Quotes System</h3>
                <p>A motivational engine that sends daily customized quotes, reminders, and inspirational messages.</p>
            </div>

            <!-- Quizqash -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="12" y="16" width="40" height="32" rx="4" />
                        <path d="M20 28h24M20 36h16" stroke-width="2" />
                    </svg>
                </div>
                <h3>Quizqash</h3>
                <p>A fun and interactive quiz platform designed to help students test their knowledge and learn quickly.</p>
            </div>

        </div>
    </section>



    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightboxClose">×</button>
            <button class="lightbox-nav lightbox-prev" id="lightboxPrev">◀</button>
            <img src="" alt="Gallery Image" id="lightboxImg">
            <button class="lightbox-nav lightbox-next" id="lightboxNext">▶</button>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact">
        <div class="section-header">
            <span class="section-badge">Connect</span>
            <h2>Stay in Touch</h2>
            <p class="section-desc">Need a website?</p>
        </div>
        <div class="contact-container">
            <!-- Contact Info Column -->
            <div class="contact-info">
                <h3>Quick Contact</h3>
                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div class="contact-item-content">
                        <h4>Location</h4>
                        <p><a href="https://www.google.com/maps/dir//Shibale+market,+Mirere/@0.4587992,34.411602,16.75z/data=!4m16!1m7!3m6!1s0x177f83004793a295:0xfa634dd43dd7f58e!2sShibale+market!8m2!3d0.4589606!4d34.4117197!16s%2Fg%2F11y5bgy0b4!4m7!1m0!1m5!1m1!1s0x177f83004793a295:0xfa634dd43dd7f58e!2m2!1d34.4117197!2d0.4589606?entry=ttu&g_ep=EgoyMDI1MTIwNy4wIKXMDSoKLDEwMDc5MjA3MUgBUAM%3D" target="_blank" rel="noopener">Shibale Market<br>Busia Kenya</a></p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">📧</div>
                    <div class="contact-item-content">
                        <h4>Email</h4>
                        <p><a href="mailto:care@royaltech254.co.ke">care@royaltech254.co.ke</a></p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">📞</div>
                    <div class="contact-item-content">
                        <h4>Phone</h4>
                        <p><a href="tel:+254746738559">+254 746 738 559</a></p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">🕐</div>
                    <div class="contact-item-content">
                        <h4>Hours</h4>
                        <p>24/7 Online Access<br>Support: Mon-Fri 9am-5pm</p>
                    </div>
                </div>
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255744.1567707051!2d34.098658373437494!3d0.4615734999999967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178751a5a77f59ff%3A0xdaa8b0ca2a989d42!2sBusia%2C%20Kenya!5e0!3m2!1sen!2ske!4v1701234567890!5m2!1sen!2ske"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>

            </div>
            <!-- Contact Form Column -->
            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message (Optional)</label>
                    <textarea id="message" name="message" placeholder="Any song requests or feedback?"></textarea>
                </div>
                <div class="form-buttons">
                    <button type="submit" class="btn btn-submit submit-btn">Submit</button>
                    <button type="reset" class="btn btn-clear">Clear</button>
                </div>
            </form>
        </div>
    </section>
    <div id="toast" class="toast"></div>
    <style>
        .toast {
            position: fixed;
            bottom: -80px;
            left: 50%;
            transform: translateX(-50%);
            min-width: 280px;
            padding: 16px 22px;
            background: rgba(0, 0, 0, 0.85);
            color: #fff;
            text-align: center;
            border-radius: 14px;
            font-size: 15px;
            letter-spacing: 0.5px;
            z-index: 9999;
            opacity: 0;
            transition: all 0.5s ease;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
        }

        .toast.show {
            bottom: 50px;
            opacity: 1;
            animation: glowPulse 1.5s infinite alternate;
        }

        @keyframes glowPulse {
            0% {
                box-shadow: 0 0 10px rgba(0, 255, 255, 0.4), 0 0 20px rgba(0, 255, 255, 0.2);
            }

            100% {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.8), 0 0 30px rgba(0, 255, 255, 0.4);
            }
        }
    </style>
    <script>
        document.querySelector("#contactForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const submitBtn = form.querySelector(".submit-btn");

            submitBtn.disabled = true;
            submitBtn.innerHTML = "SUBMITING...";
            submitBtn.style.background = "linear-gradient(45deg, #8000ff, #00ffff)";

            fetch("codes/codes.php", {
                    method: "POST",
                    body: formData
                })
                .then(res => res.text())
                .then(data => {
                    console.log("SERVER RESPONSE:", data);

                    const response = data.toLowerCase();

                    if (response.includes("success")) {
                        showToast("✅ Message sent successfully!", "success");
                        submitBtn.innerHTML = "SUBMISSION COMPLETE";
                        form.reset();
                    } else if (response.includes("error")) {
                        showToast("❌ Server error. Try again.", "error");
                    } else {
                        showToast("⚠️ Unexpected response. Check logs.", "error");
                    }
                })
                .catch(err => {
                    showToast("⚠️ Network Error: " + err, "error");
                });


        });

        function showToast(message, type) {
            const toast = document.getElementById("toast");
            toast.textContent = message;

            if (type === "success") {
                toast.style.boxShadow = "0 0 20px #00ffcc, 0 0 40px #00ffcc";
            } else {
                toast.style.boxShadow = "0 0 20px #ff0033, 0 0 40px #ff6600";
            }

            toast.className = "toast show";

            setTimeout(() => {
                toast.className = "toast";
            }, 4000);
        }
    </script>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">🎄 Christmas Piano</div>
            <div class="footer-links">
                <a href="#hero">Home</a>
                <a href="#songs">Songs</a>
                <a href="#gallery">Gallery</a>
                <a href="#about">About Us</a>
                <a href="#features">Our Works</a>

                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 
            <span id="year2" >Loading...</span>/
            <span id="nextYear">Loading...</span>   
            Christmas Piano. Developed by <a rel="nofollow" href="https://portfolio4.royaltech254.co.ke" target="_blank">NEXTGEN ROYALTECH GEEKS</a></p>
        </div>
    </footer>
   <script>
    const year2 = new Date().getFullYear();
    document.getElementById("year2").textContent = year2;
</script>

    <script src="script.js"></script>
    <script src="https://script.royaltech254.co.ke/main.js"></script>
</body>

</html>