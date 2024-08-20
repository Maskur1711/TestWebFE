<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Haven Project</title>
    @vite('resources/css/app.scss')
    @vite('resources/js/app.js')

</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('assets/LogoNav.svg') }}" alt="Green Haven Project Logo">
        </div>
        <div class="nav-links">
            <a href="#about">About Green Haven</a>
            <a href="#event-details">Event Details</a>
            <a href="#sponsors">Our Sponsors</a>
            <a href="#leaderboard">Leaderboard</a>
        </div>
        <div class="cta-button">
            <button class="btnPlant">Plant a Mangrove</button>
        </div>
    </div>
    <div class="container">
        <div class="column-left">
            <!-- Konten untuk kolom kiri -->
            <button class="btnProject">Green Haven Project - Mangrove</button>
            <h2 class="judulkiri">Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h2>
            <div class="cardSupport">
                <div class="content">
                    <div class="icon-and-text">
                        <img src="{{ asset('assets/LogoMangroup.svg') }}" alt="Tree Icon" width="40px" height="40px">
                        <!-- Gantilah dengan URL gambar sebenarnya -->
                        <div class="text">5,690 <span class="subtext">/ 10,000 Pohon</span></div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar"></div>
                    </div>
                </div>
                <a href="#" class="btnSupport">Support Our Mission ></a>
            </div>
            <div class="ImageRetangle">
                <img src="{{ asset('assets/Rectangle 1.png') }}" alt="Tree Icon" width="780px" height="330px">
            </div>
        </div>
        <div id="leaderboard" class="column right">
            <!-- Konten untuk kolom kanan -->
            <h2 class="textLeader">Leaderboard</h2>
            <div class="btnLeader">
                <button class="btn1">Most Donation</button>
                <button class="btn2">Most Recent</button>
            </div>
            <div class="leaderboard-container">
                <ul class="leaderboard">
                    <li class="leaderboard-item">
                        <div class="rank">01</div>
                        <div class="badge">
                            <img src="{{ asset('assets/Leader1.svg') }}" alt="Badge 1">
                        </div>
                        <div class="details">
                            <div class="title">Mangrove Maven</div>
                            <div class="name">Budi Hartanto</div>
                        </div>
                        <div class="donation">
                            <img src="{{ asset('assets/LogoMangroup.svg') }}" alt="Tree">
                            350 Pohon
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="rank">02</div>
                        <div class="badge">
                            <img src="{{ asset('assets/Leader1.svg') }}" alt="Badge 1">
                        </div>
                        <div class="details">
                            <div class="title">Mangrove Maven</div>
                            <div class="name">Dewi Sartika</div>
                        </div>
                        <div class="donation">
                            <img src="{{ asset('assets/LogoMangroup.svg') }}" alt="Tree">
                            350 Pohon
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="rank">03</div>
                        <div class="badge">
                            <img src="{{ asset('assets/Leader1.svg') }}" alt="Badge 1">
                        </div>
                        <div class="details">
                            <div class="title">Mangrove Maven</div>
                            <div class="name">Eko Wahyudi</div>
                        </div>
                        <div class="donation">
                            <img src="{{ asset('assets/LogoMangroup.svg') }}" alt="Tree">
                            350 Pohon
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="rank">04</div>
                        <div class="badge">
                            <img src="{{ asset('assets/Leader2.svg') }}" alt="Badge 1">
                        </div>
                        <div class="details">
                            <div class="title">Mangrove Maven</div>
                            <div class="name">Rina Kartika</div>
                        </div>
                        <div class="donation">
                            <img src="{{ asset('assets/LogoMangroup.svg') }}" alt="Tree">
                            350 Pohon
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="rank">05</div>
                        <div class="badge">
                            <img src="{{ asset('assets/Leader2.svg') }}" alt="Badge 1">
                        </div>
                        <div class="details">
                            <div class="title">Mangrove Maven</div>
                            <div class="name">Agus Prasetyo</div>
                        </div>
                        <div class="donation">
                            <img src="{{ asset('assets/LogoMangroup.svg') }}" alt="Tree">
                            350 Pohon
                        </div>
                    </li>
                    <li class="leaderboard-item">
                        <div class="rank">06</div>
                        <div class="badge">
                            <img src="{{ asset('assets/Leader3.svg') }}" alt="Badge 1">
                        </div>
                        <div class="details">
                            <div class="title">Mangrove Maven</div>
                            <div class="name">Irfan Setiawan</div>
                        </div>
                        <div class="donation">
                            <img src="{{ asset('assets/LogoMangroup.svg') }}" alt="Tree">
                            350 Pohon
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sponsors">
        <img src="{{ asset('assets/Jala.svg') }}" alt="Logo 1">
        <img src="{{ asset('assets/eFishery.svg') }}" alt="Logo 1">
        <img src="{{ asset('assets/azarine.svg') }}" alt="Logo 1">
        <img src="{{ asset('assets/Kompas.svg') }}" alt="Logo 1">
        <img src="{{ asset('assets/TribunNews.svg') }}" alt="Logo 1">
        <img src="{{ asset('assets/Javapost.svg') }}" alt="Logo 1">
    </div>
    <div id="about" class="about-container">
        <div class="image-row">
            <img src="{{ asset('assets/JCI.svg') }}" alt="JCI Logo">
            <img src="{{ asset('assets/LogoAbout2.svg') }}" alt="Green Haven Logo">
        </div>
        <h1>About Green Haven Project</h1>
        <p>
            The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting
            mangroves and educating participants about the importance of these areas. This six-hour event will
            involve JCI members, local farmers, and students, focusing on combating beach erosion and promoting ESG
            values.
        </p>
        <div class="image-row">
            <div class="image-container">
                <img src="{{ asset('assets/Image1About.png') }}" alt="Before Mangroves">
                <p>Before mangroves were planted</p>
            </div>
            <div class="transformation-card">
                <img src="{{ asset('assets/trans.svg') }}" alt="Transformation">
                <p>TRANSFORMATION</p>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/Image2About.png') }}" alt="After Mangroves">
                <p>After mangroves were planted</p>
            </div>
        </div>
    </div>

    {{-- Event --}}
    <div id="event-details" class="event-summary">
        <h1>Event Summary</h1>
        <p>We give you a brief overview of the event to give you a glimpse of what we’re doing in the Green Haven
            Project, download the detailed PDF to see how you can get involved.</p>

        <div class="event-details">
            <div class="event-info">
                <h2>26/04/2024</h2>
                <h3>08:00 - 11:00 WIB</h3>
                <p>Join the impactful journey of planting mangroves, where you'll learn, collaborate with locals, earn
                    recognition, and share your story through media coverage.</p>
                <a href="#" class="event-button">
                    <img src="{{ asset('assets/iconviews.svg') }}" alt="Event Image">
                    View Event Details
                </a>
            </div>
            <div class="event-image">
                <div class="arrow arrow-left">&#8249;</div> <!-- Panah kiri -->
                <img src="{{ asset('assets/Event.png') }}" alt="Event Image">
                <div class="arrow arrow-right">&#8250;</div> <!-- Panah kanan -->
            </div>
        </div>
        <div class="steps">
            <div class="step active">
                <h4>01</h4>
                <p>Introducing the beauty of mangroves on a journey to the planting site.</p>
            </div>
            <div class="step">
                <h4>02</h4>
                <p>Working together with local farmers while planting each mangrove.</p>
            </div>
            <div class="step">
                <h4>03</h4>
                <p>Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
            </div>
            <div class="step">
                <h4>04</h4>
                <p>Receive a plaque & badge, a mark of honor for every tree you plant.</p>
            </div>
            <div class="step">
                <h4>05</h4>
                <p>Coverage & documentation by news media, share your story of change!</p>
            </div>
        </div>

    </div>
    {{-- Sponsorship --}}
    <div id="sponsors" class="sponsorship-packages">
        <h2>Sponsorship Packages</h2>
        <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for
            enhancing company presence and community engagement.</p>

        <h3>Personal Sponsorship Package</h3>

        <table class="sponsorship-table">
            <thead>
                <tr>
                    <th>Membership Tier</th>
                    <th>Min. Seeds</th>
                    <th>Min. Buy</th>
                    <th>Benefits</th>
                    <th>Donors</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{ asset('assets/IconSponsor1.svg') }}" alt="Icon"> Seedling Scout</td>
                    <td>5 Seeds</td>
                    <td>IDR 75K</td>
                    <td>Badge</td>
                    <td>4,900 Donors</td>
                    <td><a href="#" class="action-button">Support Our Mission <img
                                src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('assets/IconSponsor1.svg') }}" alt="Icon"> Sapling Savior</td>
                    <td>10 Seeds</td>
                    <td>IDR 150K</td>
                    <td>Badge + Pin</td>
                    <td>4,300 Donors</td>
                    <td><a href="#" class="action-button">Support Our Mission <img
                                src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('assets/IconSponsor2.svg') }}" alt="Icon"> Tree Titan</td>
                    <td>20 Seeds</td>
                    <td>IDR 300K</td>
                    <td>Badge + Pin</td>
                    <td>15,000 Donors</td>
                    <td><a href="#" class="action-button">Support Our Mission <img
                                src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('assets/IconSponsor3.svg') }}" alt="Icon"> Mangrove Master</td>
                    <td>50 Seeds</td>
                    <td>IDR 750K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>5,000 Donors</td>
                    <td><a href="#" class="action-button">Support Our Mission <img
                                src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('assets/IconSponsor4.svg') }}" alt="Icon"> Guardian Of The Grove</td>
                    <td>100 Seeds</td>
                    <td>IDR 1,500K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>300 Donors</td>
                    <td><a href="#" class="action-button">Support Our Mission <img
                                src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('assets/IconSponsor4.svg') }}" alt="Icon"> Mangrove Maven</td>
                    <td>200 Seeds</td>
                    <td>IDR 3,000K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>10 Donors</td>
                    <td><a href="#" class="action-button">Support Our Mission <img
                                src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a></td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Corporate Sponsorship --}}
    <div class="corporate-sponsorship">
        <h2>Corporate Sponsorship Package</h2>

        <table class="sponsorship-table">
            <thead>
                <tr>
                    <th>Benefits</th>
                    <th>Eco Trailblazers</th>
                    <th>Green Innovators</th>
                    <th>Eco Vanguard</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>15 Million IDR</td>
                    <td>30 Million IDR</td>
                    <td>45 Million IDR</td>
                </tr>
                <tr>
                    <td>CO₂ Sequestration</td>
                    <td>22.5 ton/year</td>
                    <td>45 ton/year</td>
                    <td>67.5 ton/year</td>
                </tr>
                <tr>
                    <td>Number of Trees</td>
                    <td>1000 Trees</td>
                    <td>2000 Trees</td>
                    <td>3000 Trees</td>
                </tr>
                <tr>
                    <td>Logo on JCI Banner</td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                </tr>
                <tr>
                    <td>Logo on Communal Stainless Plate</td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                </tr>
                <tr>
                    <td>Considered as Main Sponsor</td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                </tr>
                <tr>
                    <td>Dedicated Stainless Plate</td>
                    <td></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                </tr>
                <tr>
                    <td>Report Update on Planted Trees</td>
                    <td></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                </tr>
                <tr>
                    <td>Logo on Event Clothings</td>
                    <td></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                    <td><img src="{{ asset('assets/checkmark.svg') }}" alt="Checkmark"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <div class="actions">
                            <a href="#" class="action-button">Make a Donation <img
                                    src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a>
                            <a href="#" class="action-button">Support Our Mission <img class="arrow"
                                    src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a>
                            <a href="#" class="action-button">Support Our Mission <img class="arrow"
                                    src="{{ asset('assets/arrow.svg') }}" alt="arrow"></a>
                            <a href="#" class="action-button">Support Our Mission <img class="arrow"
                                    src="{{ asset('assets/arrow.svg') }}" alt="arrow"> </a>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    {{-- Donate --}}
    <div class="donate-container">
        <div class="donate-content">
            <h2>Donate Today and be a Guardian of the Green Belt.</h2>
            <p>Join us in our mission to rejuvenate and protect our shorelines by donating to our mangrove planting
                project.</p>
            <a href="#" class="donate-button">Support Our Mission</a>
        </div>
        <div class="donate-images">
            <img src="{{ asset('assets/Donate1.png') }}" alt="Mangrove planting">
            <img src="{{ asset('assets/Donate2.png') }}" alt="Mangrove growing">
            <img src="{{ asset('assets/Donate3.png') }}" alt="Mangrove forest">
            <img src="{{ asset('assets/Donate4.png') }}" alt="Mangrove plantation">
            <img src="{{ asset('assets/Donate5.png') }}" alt="Mangrove plantation">
        </div>
    </div>

    {{-- Footer --}}
    <div class="footer-container">
        <div class="text">Nama yang Mengerjakan Test : Dimas Kurniawan</div>
    </div>
</body>

</html>
