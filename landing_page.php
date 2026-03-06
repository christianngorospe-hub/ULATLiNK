<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULATLINK | Landing Page</title>
    <!-- Font Awesome, Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="landing_page.css">
</head>

<body>

    <header>
        <div class="logo-area">
            <img src="../assets/banayoyo-logo.png" alt="Banayoyo Logo">
            <img src="../assets/logo1.webp" alt="DILG Logo">
            <img class="ulatlink" src="../assets/Ulatlink-logo1.png" alt="ULATLINK Logo">
        </div>
        <nav class="nav-links">
            <a href="#home">Homepage</a>
            <a href="#org-chart">Organizational Chart</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact Us</a>
        </nav>
        <div class="login-dropdown">
        <button class="login-btn" id="loginDropdownBtn">Login <i class="fas fa-chevron-down"></i></button>
        <div class="dropdown-content" id="loginDropdown">
        <a href="../auth/admin_auth.php">Admin</a>
        <a href="../auth/secretary_auth.php">Barangay Secretary</a>
    </div>
</div>
    </header>

    <main>
        <!-- Hero Image Section (below header) -->
        <section id="home" class="hero">
                <h1 class="hero-title">Welcome to Banayoyo</h1>
            </div>
        </section>

        <!-- Tagline Section (70px height) -->
        <section class="tagline">
            MATINO, MAHUSAY, AT MAAASAHAN
        </section>

        <!-- Organizational Chart + Aside -->
        <div class="org-aside-wrapper">
            <!-- Left side: Org Chart -->
            <section id="org-chart" class="org-chart">
            <h3>DEPARTMENT OF INTERIOR AND LOCAL GOVERNMENT</h3>
            <h3>MUNICIPAL OPERATIONS OFFICE</h3>
            <h5>BANAYOYO, ILOCOS SUR</h5>
            <h2>𝓞𝓻𝓰𝓪𝓷𝓲𝔃𝓪𝓽𝓲𝓸𝓷𝓪𝓵 𝓒𝓱𝓪𝓻𝓽</h2>
                <!-- Top middle person -->
                <div class="top-person">
                    <img src="../assets/remulla.jpg" alt="Head">
                    <div class="name">HON. JUANITO VICTOR "JONVIC" REMULLA JR.</div>
                    <div class="position">Secretary</div>
                </div>
                <!-- 3x3 grid below -->
                <div class="grid-3x3">
                    <!-- Row 1 -->
                    <div class="org-member">
                        <img src="../assets/jonathan.png" alt="regional director">
                        <div class="name">JONATHAN PAUL M. LEUSEN, JR. CESO III</div>
                        <div class="position">Regional Director</div>
                    </div>
                    <div class="org-member">
                        <img src="../assets/lalata.png" alt="assistant regional director">
                        <div class="name">PAULINO G. LALATA, JR. CESO V</div>
                        <div class="position">Assistant Regional Director</div>
                    </div>
                    <div class="org-member">
                        <img src="../assets/delarosa.jpg" alt="provincial director">
                        <div class="name">RANDY S. DELA ROSA, JR. CESO V</div>
                        <div class="position">Provincial Director</div>
                    </div>
                    <!-- Row 2 -->
                    <div class="org-member">
                        <img src="../assets/jonathan.png" alt="cluster leader">
                        <div class="name">APRILLE REGINA P. GUERRERO, OIC</div>
                        <div class="position">Cluster Leader</div>
                    </div>
                    <div class="org-member">
                        <img src="../assets/supnet.jpg" alt="mlgoo">
                        <div class="name">MAVELYN S. SUPNET</div>
                        <div class="position">MLGOO</div>
                    </div>
                    <div class="org-member">
                        <img src="../assets/gray.jpg" alt="mlgoo">
                        <div class="name">KAREN JOY V. GRAY</div>
                        <div class="position">Admin Aide/LGU Staff Assigned to DILG</div>
                    </div>

                    <!-- Services Section (full width) -->
                    <div class="services-wrapper">
                        <h2>Services</h2>
                        <div class="services-folder">
                        <div class="service-item">Registry of Barangay Inhabitants</div>
                        <div class="service-item">Compliance Reports</div>
                        </div>
                    </div>
                    </div>
            </section>

            <!-- Right side: Aside -->
            <aside class="aside-content">
                <!-- Mission Card -->
                <div class="card" id="about">
                    <h3>MISSION</h3>
                    <p>A highly trusted Department and partner in nurturing local governments and sustaining peaceful, safe, progressive, resilient, and inclusive communities towards a comfortable and secure life for Filipinos by 2040.</p>
                </div>
                <!-- Vision Card -->
                <div class="card">
                    <h3>VISION</h3>
                    <p>The Department shall promote peace and order, public safety and security, uphold excellence in local governance and enable resilient and inclusive communities.</p>
                </div>
                <!-- Mandate Card -->
                <div class="card">
                    <h3>MANDATE</h3>
                    <p>To promote peace and order, ensure public safety, and further strengthen local government capability aimed towards the effective delivery of basic services to the citizenry.</p>
                </div>
                <!-- Quality Policy Image -->
                <div class="quality-policy">
                    <img src="../assets/qpms.jpg" alt="Quality Policy">
                </div>
            </aside>
        </div>

        <!-- Contact Section (target for footer link) -->
        <section id="contact" style="scroll-margin-top: 80px;"></section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <!-- DILG Websites and Social Media -->
            <div class="footer-col">
                <h4>DILG Websites & Social Media</h4>
                <ul>
                    <li><a href="https://www.dilg.gov.ph" target="_blank">www.dilg.gov.ph</a></li>
                    <li><a href="https://region1.dilg.gov.ph/" target="_blank">region1.dilg.gov.ph</a></li>
                    <li><a href="https://www.facebook.com/DILGNatin" target="_blank">Facebook: DILG Natin</a></li>
                    <li><a href="https://www.facebook.com/dilg.philippines" target="_blank">Facebook: DILG Philippines</a></li>
                    <li><a href="https://www.facebook.com/nboo2015" target="_blank">Facebook: NBOO 2015</a></li>
                    <li><a href="https://www.facebook.com/dilgilocossurpage" target="_blank">Facebook: DILG Ilocos Sur</a></li>
                </ul>
            </div>
            <!-- Government Links -->
            <div class="footer-col">
                <h4>Government Links</h4>
                <ul>
                    <li><a href="https://www.president.gov.ph/" target="_blank">Office of the President</a></li>
                    <li><a href="https://ovp.gov.ph/" target="_blank">Office of the Vice President</a></li>
                    <li><a href="https://www.senate.gov.ph/" target="_blank">Senate of the Philippines</a></li>
                    <li><a href="https://www.congress.gov.ph/" target="_blank">House of Representatives</a></li>
                    <li><a href="https://sc.judiciary.gov.ph/" target="_blank">Supreme Court</a></li>
                    <li><a href="https://ca.judiciary.gov.ph/" target="_blank">Court of Appeals</a></li>
                    <li><a href="https://sb.judiciary.gov.ph/" target="_blank">Sandiganbayan</a></li>
                    <li><a href="https://www.gppb.gov.ph/" target="_blank">Government Procurement Policy Board</a></li>
                    <li><a href="https://www.philhealth.gov.ph/" target="_blank">PhilHealth</a></li>
                </ul>
            </div>
            <!-- Connect With Us -->
            <div class="footer-col">
                <h4>Connect With Us</h4>
                <p>DILG Banayoyo Municipal Operations Office<br>
                2nd Floor, Municipal Hall, Barangay Casilagan Norte,<br>
                Banayoyo, Ilocos Sur</p>
            </div>
        </div>
        <div class="copyright">
            © 2026 ULATLINK. All rights reserved.
        </div>
    </footer>


</body>
</html>