<?php
  $page = "about";
  require_once 'includes/header.php';
?>

  <div class="header__about">
    <h1 class="heading-name"><a href="index.php" class="about__heading--back">Harry Wijnschenk</a></h1>
    <ul class="header__list">
      <li class="header__item">Full-Stack Developer</li>
      <span class="header__seperator">/</span>
      <li class="header__item">Student</li>
    </ul>
  </div>
</header>

<main class="about">
  <!-- About -->
  <section class="about__me">
    <div class="container">
      <h2 class="about__me--container"><span class="about__me--text about__me--big">Hi!</span>
      <span class="about__me--text about__me--main">I'm<br />Harry</span></h2>
      <p class="paragraph">Current studying Software Engineering, I am determined for a successful career 
      as a Software Engineer, a full-stack web developer or a combination of the two. I want to make a 
      difference and help make this world a better place, and am working hard to gain the right skills 
      to achieve this!</p>
      <p class="paragraph">I enjoy designing and developing websites, this brings out my creative and 
      problem solving mindset. My recent projects can be seen <a href="projects.php" class="in-text-link">here.</a> 
      I plan on developing many more, and if you want to get in touch then make sure to 
      <a href="#footer" class="in-text-link">Contact</a> me!</p>
    </div>
  </section>

  <!-- Skills -->
  <section class="about__skills clip-path-section">
    <div class="container">
      <h2 class="sub-heading">Skills</h2>
      <p class="paragraph">I am a fan of learning new skills, which has improved my ability to learn new 
        language quickly. I am now focusing on front end languages with Django for full-stack development. 
      </p>
      <h3 class="skills__title">Front-end</h3>
      <!-- HTML -->
      <div class="skills__container">
        <div class="skills__img--container">
          <img src="imgs/html.png" alt="HTML icon" class="skills__icons--img">
        </div>
        <div class="skills__bar html">100%</div>
      </div>
      <!-- CSS -->
      <div class="skills__container">
      <div class="skills__img--container">
          <img src="imgs/css.png" alt="CSS icon" class="skills__icons--img">
        </div>
        <div class="skills__bar css">80%</div>
      </div>
      <!-- JS -->
      <!-- <div class="skills__container">
      <div class="skills__img--container">
          <img src="imgs/css.png" alt="CSS icon" class="skills__icons--img">
        </div>
        <div class="skills__bar css">80%</div>
      </div> -->
      <h3 class="skills__title">Back-end</h3>
      <!-- Django -->
      <div class="skills__container">
        <div class="skills__img--container">
          <img src="imgs/django.png" alt="Django icon" class="skills__icons--img">
        </div>
        <div class="skills__bar django">50%</div>
      </div>
      <h3 class="skills__title">Other skills</h3>
      <!-- MySQL -->
      <div class="skills__container">
        <div class="skills__img--container">
          <img src="imgs/mysql.png" alt="MySQL icon" class="skills__icons--img">
        </div>
        <div class="skills__bar mysql">60%</div>
      </div>
      <!-- PHP -->
      <div class="skills__container">
        <div class="skills__img--container">
          <img src="imgs/php.png" alt="PHP icon" class="skills__icons--img">
        </div>
        <div class="skills__bar php">80%</div>
      </div>
      <!-- C++ -->
      <div class="skills__container">
        <div class="skills__img--container">
          <img src="imgs/cplusplus.png" alt="C++ icon" class="skills__icons--img">
        </div>
        <div class="skills__bar cplusplus">50%</div>
      </div>
      <!-- C++ -->
      <div class="skills__container">
        <div class="skills__img--container">
          <img src="imgs/c-sharp.png" alt="C# icon" class="skills__icons--img">
        </div>
        <div class="skills__bar csharp">80%</div>
      </div>
    </div>
  </section>

  <!-- Experience -->
  <section class="about__experience" id="projects">
    <div class="container">
      <h2 class="sub-heading text-shadow">Experience</h2>

      <!-- Vava Project -->
      <div class="experience">
        <div class="experience__title">
          <h3 class="experience__title--name">Valeur Rush</h3>
          <p class="experience__title--date">January - February 2021</p>
        </div>
        <div class="experience__description">
          <div class="experience__description--tags">
            <span class="tag tag__orange">HTML5</span>
            <span class="tag tag__blue">CSS</span>
            <span class="tag tag__purple">PHP</span>          
          </div>
          <p class="experience__description--text">My first official website. I developed this for a friend as a photography portfolio. 
            The website uses a database to store images and using PHP to display all the projects and images. This project improved my 
            understanding of development, project analysis, time management and problem solving skills.</p>
        </div>
      </div>

      <!-- Django Project -->
      <div class="experience">
        <div class="experience__title">
          <h3 class="experience__title--name">Django project</h3>
          <p class="experience__title--date">November - December 2020</p>
        </div>
        <div class="experience__description">
          <div class="experience__description--tags">
            <span class="tag tag__orange">HTML5</span>
            <span class="tag tag__purple">Bootstrap</span>
            <span class="tag tag__green">Django</span>
          </div>
          <p class="experience__description--text">For one of my job applications, I had to develop a project in Django which was my 
            introduction to the MVT framework. Now with my free time, I am reading the Tango with Django book to get a better understanding 
            of the framework and plan to make some bigger projects in the coming months.
          </p>
        </div>
      </div>

      <!-- Rush Game -->
      <div class="experience">
        <div class="experience__title">
          <h3 class="experience__title--name">Rush</h3>
          <p class="experience__title--date">March - October 2017</p>
        </div>
        <div class="experience__description">
          <div class="experience__description--tags">
            <span class="tag tag__grey">Unity</span>
            <span class="tag tag__purple">C#</span>
          </div>
          <p class="experience__description--text">My first project I ever took on was a game called Rush. Briefly featured on the 
          play store. The objective was simple, the player controls a circle which could move up or down, and the aim was to reach 
          the end of the level without being stopped by obstacles.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Education -->
  <section class="about__education clip-path-section">
    <div class="container">
      <h2 class="sub-heading">Education</h2>
      <!-- <img src="imgs/book.png" alt="Self education logo" class="education__img"> -->
      <div class="education__container">
        <p class="paragraph"><span class="education-title">Self education</span> - I spend the majority of my time studying 
        and learning new technology, and improving on myself. With the pandemic going on, I realise my time can be better 
        spent improving and pushing myself.</p>
      </div>
      <div class="education__container">
        <p class="paragraph"><span class="education-title">University of huddersfield</span> - Uni has been life-changing 
        for me. I have developed many skills for software engineering and have become much more independant and responsible. 
        I have generally had a great experience, pandemic aside.</p>
      </div>
      <div class="education__container">
        <p class="paragraph"><span class="education-title">CRC</span> - My college experience was not the greatest, 
        however, introduced me to a range of computing topics, which lead me to strive for a career in Software Engineering.
      </div>
      <p class="paragraph text-dark">Overall my education has given be an amazing passion and determined mindset towards 
        Software Engineering/Full-Stack Development. I always aim to improve and push myself beyond my limits.</p>
    </div>
  </section>

  <!-- Hobbies -->
  <!-- <section class="about__hobbies">
    <div class="container">
      <h2 class="sub-heading">Hobbies</h2>
      <div class="hobbies__container">
        <h3 class="hobbies__container--hobby">Snowboarding</h3>
        <p class="paragraph hobbies__container--description">Travelling at high speeds, fantastic views, and a great challenge, snowboarding is an amazing Hobby.</p>
      </div>
      <div class="hobbies__container">
        <h3 class="hobbies__container--hobby">Cooking</h3>
        <p class="paragraph hobbies__container--description">Being vegetarian, it is a struggle to find good food. So, instead I make it! Great for myself and others.</p>
      </div>
      <div class="hobbies__container">
        <h3 class="hobbies__container--hobby">Socialising</h3>
        <p class="paragraph hobbies__container--description">Socialising has helped me gain confidence, make friends and to be an all round better person.</p>
      </div>
      <div class="hobbies__container">
        <h3 class="hobbies__container--hobby">Coding</h3>
        <p class="paragraph hobbies__container--description">And of course, coding. If it isn't apparant already, I love to code. Solving challenging problems 
        gives a great amount of satisfaction.</p>
      </div>
    </div>
  </section> -->
  <div class="push"></div>
  </div>
</main>

<?php
  require_once 'includes/footer.php';
?>