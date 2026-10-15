<footer class="site-footer">

    <link rel="stylesheet" href="/css/footer.css">
    <div class="container">
        <div class="footer-top">

            <div class="footer-col">
                <a href="/" class="footer-logo">
                    <h2 class="footer-heading-text">AstraMedic Solutions</h2>
                </a>
                <p class="footer-description">
                    AstraMedic Solutions is a multi-dimensional service provider dedicated to transforming the
                    healthcare, design, and digital landscapes in Pakistan.
                </p>
            </div>

            <div class="footer-col">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="footer-nav">
                    <li><a href="/" class="footer-link">Home</a></li>
                    <li><a href="/about.php" class="footer-link">About Us</a></li>
                    <li><a href="/consultants.php" class="footer-link">Consultants</a></li>
                    <li><a href="https://shop.astramedicsolutions.com" class="footer-link" target="_blank"
                            rel="noopener noreferrer">Shop</a></li>
                    <li><a href="/astracrew.php" class="footer-link">AstraCrew</a></li>
                    <li><a href="/careers.php" class="footer-link">Careers</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5 class="footer-heading">Digital Solutions</h5>
                <ul class="footer-nav">
                    <li><a href="/digital-marketing.php" class="footer-link">Digital Marketing</a></li>
                    <li><a href="/web-development.php" class="footer-link">Web Development</a></li>
                    <li><a href="/healthcare-softwares.php" class="footer-link">Healthcare Softwares</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5 class="footer-heading">Get In Touch</h5>
                <ul class="footer-contact-info">
                    <li>
                        <strong>Address:</strong><br>
                        Office#13-F, First Floor, Noor Mobile Mall, 6th Road, Satellite Town, Rawalpindi, 46300
                    </li>
                    <li>
                        <strong>Phone:</strong><br>
                        <a href="tel:+923441347681" class="footer-link">+92 344 1347681</a><br>
                        <a href="tel:+923167743868" class="footer-link">+92 316 7743868</a><br>
                        <a href="tel:+923075149503" class="footer-link">+92 307 5149503</a>
                    </li>
                    <li>
                        <strong>Email:</strong><br>
                        <a href="mailto:info@astramedicsolutions.com"
                            class="footer-link">info@astramedicsolutions.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-flex-container">
            <p class="copyright-text">&copy; <?php echo date("Y"); ?> AstraMedic Solutions. All rights reserved.</p>
            <div class="social-links">
                <a href="#" class="social-icon facebook" aria-label="Facebook" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="#" class="social-icon instagram" aria-label="Instagram" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="social-icon tiktok" aria-label="TikTok" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="#" class="social-icon youtube" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="#" class="social-icon linkedin" aria-label="LinkedIn" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="#" class="social-icon whatsapp" aria-label="WhatsApp" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- AstraMedic Solutions WhatsApp Widget -->
    <div class="wa-widget-container" id="astra-wa-widget">

        <span class="wa-badge" id="waBadge">1</span>

        <button class="wa-floating-btn" id="waBtn" type="button" aria-label="Open WhatsApp chat" aria-expanded="false">
            <i class="fab fa-whatsapp wa-icon-main" aria-hidden="true"></i>
            <span class="wa-icon-close" aria-hidden="true" style="display:none;">&times;</span>
        </button>

        <div class="wa-popup-box" id="waPopup" aria-label="WhatsApp chat">

            <div class="wa-popup-header">
                <div class="wa-avatar" id="waAvatar" role="button" tabindex="0" aria-label="Start WhatsApp chat">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    <span class="wa-online-status"></span>
                </div>

                <div class="wa-header-text">
                    <h4>AstraMedic Solutions</h4>
                    <p>How can we help you today?</p>
                </div>
            </div>

            <div class="wa-popup-body">
                <div class="wa-chat-bubble">
                    <p class="wa-bot-name">AstraMedic Support</p>
                    <p class="wa-message-text">
                        Assalam-o-Alaikum! 👋 Welcome to AstraMedic Solutions.
                        How can we assist you?
                    </p>
                    <span class="wa-chat-time" id="waChatTime"></span>
                </div>
            </div>

            <div class="wa-popup-footer">
                <input type="text" id="waInput" placeholder="Type your message..." autocomplete="off"
                    aria-label="Type your WhatsApp message">
                <button id="waSendBtn" type="button" aria-label="Send message">
                    <i class="fas fa-paper-plane" aria-hidden="true"></i>
                    <span class="wa-send-fallback" aria-hidden="true">➤</span>
                </button>
            </div>

        </div>
    </div>

    <script>
        (function () {
            function initAstraWhatsApp() {
                const container = document.getElementById("astra-wa-widget");

                // Prevent duplicate initialization.
                if (!container || container.dataset.initialized === "true") return;
                container.dataset.initialized = "true";

                const PHONE_NUMBER = "923441347681";
                const DEFAULT_MESSAGE =
                    "Assalam-o-Alaikum! I would like to know more about AstraMedic Solutions services.";

                const waBtn = container.querySelector("#waBtn");
                const waPopup = container.querySelector("#waPopup");
                const waBadge = container.querySelector("#waBadge");
                const waInput = container.querySelector("#waInput");
                const waSendBtn = container.querySelector("#waSendBtn");
                const waChatTime = container.querySelector("#waChatTime");
                const waAvatar = container.querySelector("#waAvatar");
                const iconMain = container.querySelector(".wa-icon-main");
                const iconClose = container.querySelector(".wa-icon-close");

                if (!waBtn || !waPopup || !waInput || !waSendBtn) return;

                if (waChatTime) {
                    waChatTime.textContent = new Date().toLocaleTimeString([], {
                        hour: "2-digit",
                        minute: "2-digit"
                    });
                }

                function togglePopup(forceState) {
                    const isOpen = typeof forceState === "boolean"
                        ? forceState
                        : !waPopup.classList.contains("show");

                    waPopup.classList.toggle("show", isOpen);
                    waBtn.setAttribute("aria-expanded", String(isOpen));

                    if (iconMain) iconMain.style.display = isOpen ? "none" : "inline-block";
                    if (iconClose) iconClose.style.display = isOpen ? "block" : "none";
                    if (waBadge && isOpen) waBadge.style.opacity = "0";

                    if (isOpen) waInput.focus();
                }

                function redirectToWhatsApp(useDefaultOnly) {
                    const typedMessage = waInput.value.trim();
                    const message = useDefaultOnly || !typedMessage
                        ? DEFAULT_MESSAGE
                        : typedMessage;

                    const targetURL =
                        "https://wa.me/" + PHONE_NUMBER +
                        "?text=" + encodeURIComponent(message);

                    window.open(targetURL, "_blank", "noopener,noreferrer");
                    waInput.value = "";
                }

                waBtn.addEventListener("click", function () {
                    togglePopup();
                });

                waSendBtn.addEventListener("click", function () {
                    redirectToWhatsApp(false);
                });

                waInput.addEventListener("keydown", function (event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        redirectToWhatsApp(false);
                    }
                });

                if (waAvatar) {
                    waAvatar.addEventListener("click", function () {
                        redirectToWhatsApp(true);
                    });

                    waAvatar.addEventListener("keydown", function (event) {
                        if (event.key === "Enter" || event.key === " ") {
                            event.preventDefault();
                            redirectToWhatsApp(true);
                        }
                    });
                }

                // Reveal the floating widget after two seconds.
                window.setTimeout(function () {
                    container.classList.add("active");
                }, 2000);
            }

            if (document.readyState === "loading") {
                document.addEventListener("DOMContentLoaded", initAstraWhatsApp);
            } else {
                initAstraWhatsApp();
            }
        })();
    </script>
</footer>

</body>

</html>