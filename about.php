<?php
  require_once 'includes/header.php';
?>

  <div class="header__about">
    <h1 class="heading-name"><a href="index.php" class="about__heading--back">Harry Wijnschenk</a></h1>
    <ul class="header__list">
      <li class="header__item">Software Engineer</li>
      <span class="header__seperator">/</span>
      <li class="header__item">Student</li>
    </ul>
  </div>
</header>

<main class="about">
  <!-- About -->
  <section class="about__me">
    <div class="container">
      <h2 class="about__me--text text-shadow">Hi, I'm Harry!</h2>
      <p class="paragraph">I am a passionate programmer building a career in Software Engineering, whilst designing 
        and developing high quality websites and web applications from the ground up or using reputable frameworks. 
        You can see my most recent project <a href="projects.php" class="in-text-link">here</a>!</p>
        <p class="paragraph">If I had to describe myself with 3 words, I would say I am approachable, creative and a 
        problem-solver. I am motivated by many parts of programming with its creative freedom, the opportunity to make 
        a difference to people and the feeling of overcoming challenges by implementing well-thought-out solutions.</p>
      <p class="paragraph">I have developed projects for myself, friends, family and clients. I will professionally  
        design and develop to your websites needs. I will be developing many more projects at jobs, freelancing and 
        for fun. Make sure to <a href="#footer" class="in-text-link">Contact</a> me for the best deals whilst I 
        am gaining valuable experience.</p>
    </div>
  </section>

  <!-- Skills -->
  <section class="about__skills">
    <div class="container">
      <h2 class="sub-heading">Skills</h2>
      <p class="paragraph">I have dipped in and out of many different languages and technologies. I have enjoyed it all and although I love learning new things, 
      I have stuck with a few for my Web Development, which are shown below.</p>
      <h3 class="skills__title">Front-end</h3>
      <div class="skills__icons">
        <img src="imgs/html.png" alt="HTML" class="skills__icons--img">
        <img src="imgs/css.png" alt="CSS" class="skills__icons--img">
      </div>
      <h3 class="skills__title">Back-end</h3>
      <div class="skills__icons">
        <img src="imgs/django.png" alt="Django" class="skills__icons--img">
        <!-- <img src="imgs/php.png" alt="PHP" class="skills__icons--img">
        <img src="imgs/cplusplus.png" alt="C++" class="skills__icons--img"> -->
      </div>
      <h3 class="skills__title">Other technologies</h3>
      <div class="skills__icons">
        <img src="imgs/mysql.png" alt="MySQL" class="skills__icons--img">
      </div>
      <p class="paragraph">These are my chosen web development technologies, and I am still expanding. It is in no way a comprehensive list, and I am always up for 
      learning new stuff! Other languages and technologies I am familiar with include: PHP, Laravel, C#, C++, Java and JavaScript.</p>
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
  <section class="about__education">
    <div class="container">
      <h2 class="sub-heading">Education</h2>
      <!-- <img src="imgs/book.png" alt="Self education logo" class="education__img"> -->
      <div class="education__container">
        <p class="paragraph">Self education - <span class="text-dark">A lot of my free time is devoted to studying and improving on myself, especially with a pandemic 
        going on I feel my time is best spent improving. I have learnt web technologies by myself using online courses, tutorials and experimenting. I love what I do 
        which helps me to stay motivated and persistent with times like this.</span></p>
      </div>
      <div class="education__container">
        <p class="paragraph">University of huddersfield - <span class="text-dark">Uni has developed many of my skills for both software engineering and in general. I 
        have changed in many ways as a person for the better. I have had a great experience where possible, and gained a great arsenal of programming relating skills, 
        including problem solving with algorithms and data structures, working as a team to develop software, and much more.</span></p>
      </div>
      <div class="education__container">
        <p class="paragraph">Cambridge regional college - <span class="text-dark">My college experience was not the greatest, but introduced me to a range of computing 
        topics. This lead me to choosing a career in Software Engineering, and how to work efficiently as I had to teach myself many of the subjects.</span></p>
      </div>
      <p class="paragraph text-dark">Overall my education has given be an amazing passion and strong mentality towards achieving the best that I can out of my chosen 
      field. I always aim to improve and push myself beyond my limits.</p>
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