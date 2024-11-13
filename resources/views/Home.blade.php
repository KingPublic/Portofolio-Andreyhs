<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Project Portfolioo</title>
    <link rel="icon" type="image/x-icon" href="/assets/fav-icon.jpg" />
    <link rel="stylesheet" href="resources/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    @vite(['resources/js/app.js', 'resources/css/style.css'])

  </head>
  <body>
    <header>
      <h4 class="logo"><a href="">Vercel KingPublic Portfolio</a></h4>
      <nav>
        <ul class="nav_links">
          <li><a href="#about">About</a></li>
          <li><a href="#education">Education</a></li>
          <li><a href="#skill">Skills</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a
        class="nav_btn"
        target="_blank"
        href="{{ asset('_CV - Andrey Hartawan Suwardi.pdf') }}"
      >
        <button><i class=""></i> Download My CV</button>
      </a>
    </header>

    <!-- About Section -->
    <section id="about">
      <div class="about">
        <h3><span>Hello! I'm Andrey Hartawan S. —</span></h3>
        <h1>I'am a Beginner Developer </h1>
        <p>
          I am currently studying at Universitas Ciputra majoring in <br />
          Informatics Engineering specialized Artificial Intelligence. I am aspiring developer <br /> 
          eager to grow my skills in creating modern and user-friendly websites. <br />
          Although I'm just starting out, I'm passionate about learning and <br />
          improving with each project. <br /> 
          This portfolio showcases my journey and some of the projects I’ve worked on so far. <br>
          Thank you for visiting —let’s connect and grow together! 
        </p>

        <a class="about_btn" href="https://github.com/KingPublic">
          <button><i class="fa fa-github" style="padding:0px 5px 0px 0px; color:white"></i> My Github</button>
        </a>
      </div>

      <div class="img_about">
        <img src="{{ asset('andreyisu.webp') }}" alt="about img" />
      </div>

      <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#0284c7"
            fill-opacity="1"
            d="M0,96L60,96C120,96,240,96,360,101.3C480,107,600,117,720,154.7C840,192,960,256,1080,261.3C1200,267,1320,213,1380,186.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
          ></path>
        </svg>
      </div>
    </section>

    <!-- Education Section -->
    <section id="education">
      <div class="education">
        <div class="edu-title">
          <h1>Education</h1>
          <span>———o———</span>
          <p>History of Education</p>
        </div>

        <div class="row">
          <div class="col1">
            <h2>Universitas Ciputra</h2>
            <p class="date-edu">2023 - now</p>
            <p class="desc-edu">Majoring in Informatics Engineering specialized Artificial Intelligence</p>
            <p class="desc-edu">Have been in ISU (Informatics Student Union)</p>
          </div>

          <div class="col2">
            <ul>
              <li></li>
              <br />
              <br />
              <br />
              <li></li>
            </ul>
          </div>

          <div class="col3">
            <h2>SMA Pelita Kasih</h2>
            <p class="date-edu">2020 - 2023</p>
            <p class="desc-edu">Natural Sciences Major</p>
            <p class="desc-edu">Have been in Organization (Head of Citizenship)</p>
          </div>
        </div>

        

        <div class="wave">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
              fill="#0284c7"
              fill-opacity="1"
              d="M0,224L60,202.7C120,181,240,139,360,144C480,149,600,203,720,213.3C840,224,960,192,1080,197.3C1200,203,1320,245,1380,266.7L1440,288L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
            ></path>
          </svg>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skill">
      <div class="skill">
        <div class="skill-title">
          <h1>Skills</h1>
          <span>——o—o——</span>
          <p>Programming languages<br />and tools.</p>
        </div>

        <div class="flex-wrapper">
          <div class="items flex-grid">
            <div class="d-col-1 t-col-4 m-col-12">
                
                <p>HTML</p>
                <p class="medium">medium</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>CSS</p>
              <p class="medium">medium</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>JavaScript</p>
              <p class="medium">medium</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
                
                <p>PHP</p>
                <p class="basic">basic</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>Bootstrap</p>
              <p class="medium">medium</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
             
              <p style="margin-left: -5px">VScode</p>
              <p class="medium">medium</p>
            </div>
          </div>

          <div class="items flex-grid">
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>Laravel</p>
              <p class="basic">basic</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>ReactJS</p>
              <p class="basic">basic</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p style="margin-left: -14px">phpMyAdmin</p>
              <p class="basic">basic</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>Github</p>
              <p class="medium">medium</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>Postman</p>
              <p class="basic">basic</p>
            </div>
            <div class="d-col-1 t-col-4 m-col-12">
              
              <p>Figma</p>
              <p class="medium">medium</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="contact">
        <div class="contact-title">
          <h1>Contact</h1>
          <span>——o—o—o——</span>
          <p>Contact for more</p>
        </div>
      </div>

      <div class="row">
        <div class="col left">
          <h2 class="forismail"><span>Special Thanks To Muhammad Ismail.—</span></h2> <br>
          <p class="pfor">Thank you so much for providing this fantastic template! <br>I used it for my portfolio, and it’s been a game-changer and also got a lot of references to it.<br>The layout and features are perfect, and it was easy to implement. <br>I’m really grateful for your generosity in sharing it with the github community.<br>It has made a huge difference for me, thank you so much !</p>
          <a class="about_btn" href="https://www.instagram.com/muhh.ismail__/">
            <button><i></i>Contact Referee</button>
            </a>
        </div>

        <div class="col right">
          <form action="javascript:" method="post">
            <label for="name">Fullname</label>
            <input type="text" name="name" id="name" />
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" />
            <label for="topic">Topic</label>
            <select name="topic" id="topic">
              <option value="information">Information</option>
              <option value="feedback">Feedback</option>
              <option value="other">Others</option>
            </select>

            <div class="btn-form">
              <input type="submit" name="submit" id="submit" value="Submit" />
            </div>
          </form>
        </div>
      </div>
    </section>

   
    <footer>
      <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#0284c7"
            fill-opacity="1"
            d="M0,128L48,117.3C96,107,192,85,288,85.3C384,85,480,107,576,101.3C672,96,768,64,864,69.3C960,75,1056,117,1152,117.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </div>

      <div class="foot-content">
        <p>Interest with me ?</p>
        <p>Follow My Social Media</p>

        <div class="social-icons">
          <a href="#" target="_blank">
            <i class="fa fa-facebook square" style="padding-top: 4px;"></i>
          </a>
          <a href="https://www.instagram.com/andreyhs_/" target="_blank">
            <i class="fa fa-instagram"></i>
          </a>
        </div>

        <div class="createby">
          <p>&copy; Andrey Hartawan Suwardi, 2024.</p>
          <p>All rights reserved.</p>
        </div>
      </div>
    </footer>
   

  </body>
</html>
