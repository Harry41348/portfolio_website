<?php
  $page = "about";
  require_once 'includes/header.php';
?>

  <div class="header__about">
    <h1 class="heading-name"><a href="index.php" class="about__heading--back">Harry Wijnschenk</a></h1>
    <ul class="header__list">
      <li class="header__item">Software Engineer</li>
      <span class="header__seperator">/</span>
      <li class="header__item">Web Developer</li>
    </ul>
  </div>
</header>

<main class="about">
  <!-- About -->
  <section class="about__me">
    <div class="container">
      <h2 class="about__me--container"><span class="about__me--text about__me--big">Hi!</span>
      <span class="about__me--text about__me--main">I'm<br />Harry</span></h2>
      <p class="paragraph">Working hard towards a degree in Software Engineering, I am determined for a successful career. 
      I want to make a difference and help make this world a better place, and will work hard to gain the right skills 
      to achieve this.</p>
      <p class="paragraph">I enjoy designing and developing websites, this brings out my creative side and 
      gives me the opportunity to problem solve. My recent projects can be seen <a href="projects.php" class="in-text-link">here.</a> 
      I plan on developing many more, and if you want to get in touch then make sure to 
      <a href="#footer" class="in-text-link">Contact</a> me!</p>
    </div>
  </section>

  <!-- Skills -->
  <section class="about__skills clip-path-section">
    <div class="container">
      <h2 class="sub-heading">Skills</h2>
      <p class="paragraph">I love learning about anything technical, and want a deep understanding 
      into a variety of technologies, both software and hardware. The following is how I would judge 
      my understanding of some languages I am familiar with.</p>
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
      <div class="skills__container">
        <div class="skills__img--container">
          <img src="imgs/javascript.png" alt="JS icon" class="skills__icons--img">
        </div>
        <div class="skills__bar js">40%</div>
      </div>
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
        <div class="skills__bar mysql">70%</div>
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
        <div class="skills__bar cplusplus">70%</div>
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

      <!-- Game Development -->
      <div class="experience">
        <div class="experience__title">
          <h3 class="experience__title--name">Games Development</h3>
          <p class="experience__title--date">2015 - 2018</p>
        </div>
        <div class="experience__description">
          <div class="experience__description--tags">
            <span class="tag tag__grey">Unity</span>
            <span class="tag tag__purple">C#</span>
          </div>
          <p class="experience__description--text">This is where my personal projects started. I developed 
          games which my friends would play and test. I created top down shooters and arcade-style games and 
          bought them in with a cheap laptop. I quickly moved onto Unity and developed a game which I released 
          to the play store briefly.</p>
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
          <p class="experience__description--text">For one of my job applications, I had to develop a project 
          in Django which was my introduction to the MVT framework. I had fun learning and developing for this 
          project, and was fed up of wasting time during the lockdown, so I decided to start developing more 
          projects and learning new skills in my free time.
          </p>
        </div>
      </div>

      <!-- Vava Project -->
      <div class="experience">
        <div class="experience__title">
          <h3 class="experience__title--name">Web Development</h3>
          <p class="experience__title--date">March 2020 - Present</p>
        </div>
        <div class="experience__description">
          <div class="experience__description--tags">
            <span class="tag tag__orange">HTML5</span>
            <span class="tag tag__blue">CSS</span>
            <span class="tag tag__purple">PHP</span>          
          </div>
          <p class="experience__description--text">I took it onto myself to learn web development during the 
          first lockdown. It was going well before my procrastination took over. But the content stuck, and during 
          the second lockdown I started developing again. I have since developed and released a website, and in the 
          process of designing and developing my next project.</p>
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
        <p class="paragraph"><span class="education-title">CRC</span> - I was not a fan of college, but it did 
        introduce me to many core topics in Computing. I spent a lot of time to myself and realized that college 
        did not prepare me enough for a career in Software Engineering, and decided to apply for University.
      </div>
      <div class="education__container">
        <p class="paragraph"><span class="education-title">University of huddersfield</span> - Uni was the best 
        decision I made. I have developed so many skills, made life-long friends and found out more about myself 
        in my first and second year than I have in my whole life.</p>
      </div>
      <div class="education__container">
        <p class="paragraph"><span class="education-title">Self education</span> - I want to get a grasp on many 
        different aspects of Computer Science, so instead of watching YouTube or Netflix, I enjoy learning more 
        about how the computer works, networks, AI, security, etc.</p>
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