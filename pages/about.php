<?php
  require_once '../includes/header.php';
?>

  <div class="header__about">
    <h1 class="heading-primary"><a href="../index.php" class="about__heading--back">Harry Wijnschenk</a></h1>
    <ul class="header__list">
      <li class="header__item">Software Developer</li>
      <span class="header__seperator">/</span>
      <li class="header__item">Student</li>
    </ul>
  </div>
</header>

<main class="about">
  <!-- About -->
  <section class="about__me">
    <h2 class="sub-heading text-shadow">Hi, I'm Harry!</h2>
    <p class="paragraph">I am a passionate programmer building a career in Software Engineering, whilst designing 
      and developing high quality websites and web applications from the ground up. You can see my most recent 
      project <a href="projects.php" class="in-text-link">here</a>!</p>
    <p class="paragraph">I have developed projects for myself, friends, family and am branching out to anyone 
      who needs websites. I will be developing many more projects, both at a job and freelancing. Make sure to 
      <a href="contact.php" class="in-text-link">Contact</a> me for the best deals whilst I am gaining valuable 
      experience.</p>
    <p class="paragraph">As a person, I work effectively whether as part of a team, or as an individual. I am a 
      natural problem solver, motivated and hard-working person with a desire to achieve the best out of life.</p>
  </section>

  <!-- Skills -->
  <section class="about__skills">
    <h2 class="sub-heading">Skills</h2>
    <p class="paragraph">I have dipped in and out of many different languages and technologies. I have enjoyed it all and although I love learning new things, 
    I have stuck with a few for my Web Development, which are shown below.</p>
    <h3 class="skills__title">Front-end</h3>
    <div class="skills__icons">
      <img src="../imgs/html.png" alt="HTML" class="skills__icons--img">
      <img src="../imgs/css.png" alt="CSS" class="skills__icons--img">
    </div>
    <h3 class="skills__title">Back-end</h3>
    <div class="skills__icons">
      <img src="../imgs/django.png" alt="Django" class="skills__icons--img">
      <!-- <img src="../imgs/php.png" alt="PHP" class="skills__icons--img">
      <img src="../imgs/cplusplus.png" alt="C++" class="skills__icons--img"> -->
    </div>
    <h3 class="skills__title">Other technologies</h3>
    <div class="skills__icons">
      <img src="../imgs/mysql.png" alt="MySQL" class="skills__icons--img">
    </div>
    <p class="paragraph">This is just what I have decided to go with for my Full-Stack Development, and is in no way a comprehensive list. I am always up for 
    learning new stuff! Other languages and technologies I am familiar with include: PHP, Laravel, C#, C++, Java and JavaScript.</p>
  </section>

  <!-- Experience -->
  <section class="about__experience">
    <h2 class="sub-heading text-shadow pb-tiny">Experience</h2>

    <!-- Vava Project -->
    <div class="experience">
      <div class="experience__title">
        <h3 class="experience__title--name">Vava Rush</h3>
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
  </section>
  
  <!-- Education -->
  <section class="about__education">
    <h2 class="sub-heading">Education</h2>
    <!-- <img src="../imgs/book.png" alt="Self education logo" class="education__img"> -->
    <div class="education__container">
      <p class="paragraph">Self education - <span class="text-dark">I enjoy</span></p>
    </div>
    <div class="education__container">
      <p class="paragraph">University of huddersfield - </p>
    </div>
    <div class="education__container">
      <p class="paragraph">Cambridge regional college - </p>
    </div>
  </section>
  <section class="about__hobbies">
    <h2 class="sub-heading">Hobbies</h2>
  </section>
</main>

<?php
  require_once '../includes/footer.php';
?>