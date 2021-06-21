<?php
  $page = "projects";
  require_once 'includes/header.php';
?>
</header>
<main class="projects-main">
  <div class="container">
    <h2 class="sub-heading projects-heading">Projects</h2>
    <p class="paragraph">Here is a collection of the websites I have developed, feel free to visit them by clicking on them!</p>

    <div class="projects">
      <ul class="projects__list">

        <li class="projects__item">
          <a href="./projects/sunset-holidays" target="_blank"><img src="imgs/projects/tuinaanleg.JPG" alt="Sunset Holidays Image" class="projects__img" style="object-position: left;">
            <div class="projects__item--content">
              <p class="project__item--title">Tuinaanleg4u</p>
              <p class="project__item--desc">Website designed and developed for a high-end garden constuctor. (Netherlands)</p>
              <div class="projects__item--tags">
                <span class="tag-small tag__blue">CSS</span>
                <span class="tag-small tag__purple">PHP</span>
              </div>
            </div>
          </a>
        </li>

        <li class="projects__item">
          <a href="https://www.valeurrush.com" target="_blank"><img src="imgs/projects/vava-1.JPG" alt="Photography portfolio project" class="projects__img">
            <div class="projects__item--content">
              <p class="project__item--title">Valeur Rush</p>
              <p class="project__item--desc">Photography portfolio designed for a high-rated undergraduate photographer.</p>
              <div class="projects__item--tags">
                <span class="tag-small tag__blue">CSS</span>
                <span class="tag-small tag__purple">PHP</span>
              </div>
            </div>
          </a>
        </li>

        <li class="projects__item">
          <a href="./projects/sunset-holidays" target="_blank"><img src="imgs/projects/sunset-holidays.JPG" alt="Sunset Holidays Image" class="projects__img" style="object-position: left;">
            <div class="projects__item--content">
              <p class="project__item--title">Sunset Holidays</p>
              <p class="project__item--desc">My first "professional" website project for a new travel agent.</p>
              <div class="projects__item--tags">
                <span class="tag-small tag__blue">CSS</span>
              </div>
            </div>
          </a>
        </li>


      </ul>
    </div>
  </div>
  <div class="push"></div>
</main>
</div>

<?php
  require_once 'includes/footer.php';
?>