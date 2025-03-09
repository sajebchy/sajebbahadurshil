<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sajib Bahadur Shil | Portfolio</title>
  <style>
    /* Global Styles */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      line-height: 1.6;
      color: #333;
    }
    .container {
      width: 90%;
      max-width: 1100px;
      margin: auto;
      padding: 20px;
      background-color: #fff;
    }
    header, footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
    }
    header h1, footer p {
      margin: 0;
      text-align: center;
    }
    nav ul {
      display: flex;
      justify-content: center;
      list-style: none;
      padding: 0;
      margin-top: 10px;
    }
    nav ul li {
      margin: 0 15px;
    }
    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    section {
      margin: 20px 0;
      padding: 20px 0;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    /* Services Section */
    .services {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .service {
      flex: 1;
      min-width: 250px;
      background-color: #e2e2e2;
      margin: 10px;
      padding: 20px;
      border-radius: 8px;
    }
    /* Portfolio Items */
    .portfolio-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    .portfolio-item {
      flex: 1;
      min-width: 250px;
      margin: 10px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background-color: #fafafa;
    }
    /* Contact Section */
    .contact-info a {
      color: #333;
      text-decoration: none;
      font-weight: bold;
    }
    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .services, .portfolio-items {
        flex-direction: column;
        align-items: center;
      }
      nav ul {
        flex-direction: column;
      }
      nav ul li {
        margin: 5px 0;
      }
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="container">
      <h1>Sajib Bahadur Shil</h1>
      <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="container">
    <h2>About Me</h2>
    <p>
      Hello, I am Sajib Bahadur Shil, a freelancer with diverse skills. I specialize in video editing, digital marketing, and WordPress website development. I am passionate about delivering high-quality solutions and helping businesses enhance their online presence.
    </p>
  </section>

  <!-- Services Section -->
  <section id="services" class="container">
    <h2>Services</h2>
    <div class="services">
      <div class="service">
        <h3>Video Editing</h3>
        <p>
          Professional video editing services that bring your vision to life. I provide creative and engaging video content tailored to your needs.
        </p>
      </div>
      <div class="service">
        <h3>Digital Marketing</h3>
        <p>
          Expert digital marketing strategies including SEO, social media marketing, and content creation to help your business reach its target audience.
        </p>
      </div>
      <div class="service">
        <h3>WordPress Development</h3>
        <p>
          Custom WordPress website development that is visually appealing and functional, ensuring a seamless user experience.
        </p>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="container">
    <h2>Portfolio</h2>
    <p>
      Below are some of my recent projects. Click on any project for more details or visit the project link.
    </p>
    <div class="portfolio-items">
      <div class="portfolio-item">
        <h3>Project One</h3>
        <p>A brief description of the project goes here.</p>
      </div>
      <div class="portfolio-item">
        <h3>Project Two</h3>
        <p>A brief description of the project goes here.</p>
      </div>
      <!-- Add more portfolio items as needed -->
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="container">
    <h2>Contact Me</h2>
    <p class="contact-info">
      If you are interested in working together or have any questions, please reach out via email at
      <a href="mailto:your-email@example.com">your-email@example.com</a>.
    </p>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <p>&copy; 2025 Sajib Bahadur Shil. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
