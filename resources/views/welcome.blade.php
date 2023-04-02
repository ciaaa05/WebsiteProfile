<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
<body>
    <nav id="navbar-example2" class="navbar px-3 sticky-top" style="background: #000 no-repeat">
        <a class="navbar-brand text-white" href="#">ALIS</a>
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About Me
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#about_me">Profile</a></li>
              <li><a class="dropdown-item" href="#skill">Skill</a></li>
              <li><a class="dropdown-item" href="#personality">Personality</a></li>
              <li><a class="dropdown-item" href="#interest">Interest</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Contact</a>
          </li>
        </ul>
    </nav>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
        <section id="home">
            <div class="container-fluid align-items-center" style="min-height: 91vh; background-image: url('assets/bg2.png');">
                <div class="container" style="max-height: 91vh;">
                    <div class="row align-item-center  d-flex flex-row">
                        <div class="col-6 description text-center text-lg-left">
                            <h3 class="text-white font-weight-normal mb-3">Hello, My Name is</h3>
                            <h1 class="display-3 text-uppercase text-primary mb-0" style="-webkit-text-stroke:4px #ffffff;">Alicia Josephine Ekosputri</h1>
                            <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
            
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                                <a href="#about_me" class="btn btn-white mr-4"> Let's Explore My World</a>
                            </div>
                        </div>
        
                        <div class="about-img col-4" >
                            <img src="assets/img1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about_me">
            <div class="about-me container">
                <div class="section-title">
                  <h2>Profile</h2>
                </div>
                <div class="row">
                  <div class="col-lg-4" >
                    <img src="assets/about-img.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-7 pt-4 pt-lg-0 content">
                    <h3>Alicia Josephine Ekosputri</h3>
                    <p class="font-italic">
                      Hi! I'm just an ordinary girl who will always work hard. There's no "give up" in my dictionary. I like to learn new things, such as languages, guitar, design, etc. Here is my biodata~
                    </p>
                    
                    <div class="col-lg-6">
                        <ul>
                          <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 5 October 2003</li>
                          <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 19 years old</li>
                          <li><i class="icofont-rounded-right"></i> <strong>Religion:</strong> Catholic</li>
                          <li><i class="icofont-rounded-right"></i> <strong>Occupation:</strong> College Student</li>
                          <li><i class="icofont-rounded-right"></i> <strong>Location:</strong> Jember, Indonesia</li>
                        </ul>
                    </div>

                    <p>
                      "No matter what the problem, still be royal to the original intention. Treat the world gently, treat everyone with kindness. Be Brave. Be Strong. Never Give Up. God will always with you."
                    </p>
                  </div>
                </div>
        </section>

        <section id="skill">
            <div class="skills">
                <div class="section-title">
                  <h2>Skills</h2>
                </div>
          
                <div class="row skills-content">
                  <div class="col-lg-6">
                    <div class="progresses">
                      <span class="skill">HTML <i class="val">85%</i></span>
                      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: 0%" aria-valuenow="85"></div>
                      </div>
                    </div>
          
                    <div class="progresses">
                      <span class="skill">CSS <i class="val">75%</i></span>
                      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: 0%" aria-valuenow="75"></div>
                      </div>
                    </div>
          
                    <div class="progresses">
                      <span class="skill">JavaScript <i class="val">45%</i></span>
                      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: 0%" aria-valuenow="40"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="progresses">
                      <span class="skill">PHP <i class="val">55%</i></span>
                      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: 0%" aria-valuenow="50"></div>
                      </div>
                    </div>
          
                    <div class="progresses">
                      <span class="skill">C/C++ <i class="val">75%</i></span>
                      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: 0%" aria-valuenow="75"></div>
                      </div>
                    </div>

                    <div class="progresses">
                      <span class="skill">Python <i class="val">75%</i></span>
                      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: 0%" aria-valuenow="65"></div>
                      </div>
                    </div>
          
                  </div>
                </div>
              </div>
        </section>

        <section id="personality">
            <div class="personalities">
                <div class="section-title">
                    <h2>Personality</h2>
                </div>
                <div class="section-desc">
                    <div class="mbti">
                      <h2 class="text-center mb-3">INFJ-A</h2>
                      <img src="assets/infj.png" alt="">
                      <h2 class="text-center mt-4">ADVOCATE</h2>
                    </div>
                    <div class="persentase">
                        <div class="progress-wrapper">
                            <div class="first-wrapper">
                                <h6 class="left-percentage">29%</h6>
                                <div class="progress-bar-container">
                                    <div class="progress-bar progress-bar-right" data-value="71">
                                      <div class="progress-bar-fill"></div>
                                    </div>
                                </div>
                                <h6 class="right-percentage">71%</h6>
                            </div>
                            
                            <div class="second-wrapper d-flex flex-row justify-content-between">
                                <h6 class="desc-left">Extrovert</h6>
                                <h6 class="desc-right">Introvert</h6>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class="progress-wrapper">
                            <div class="first-wrapper">
                                <h6 class="left-percentage">70%</h6>
                                <div class="progress-bar-container">
                                    <div class="progress-bar progress-bar-left" data-value="70">
                                      <div class="progress-bar-fill"></div>
                                    </div>
                                </div>
                                <h6 class="right-percentage">30%</h6>
                            </div>
                            
                            <div class="second-wrapper d-flex flex-row justify-content-between">
                                <h6 class="desc-left">Sensing</h6>
                                <h6 class="desc-right">Intuition</h6>
                            </div>
                        </div>

                        <hr>

                        <div class="progress-wrapper">
                            <div class="first-wrapper">
                                <h6 class="left-percentage">28%</h6>
                                <div class="progress-bar-container">
                                    <div class="progress-bar progress-bar-right" data-value="72">
                                      <div class="progress-bar-fill"></div>
                                    </div>
                                </div>
                                <h6 class="right-percentage">72%</h6>
                            </div>
                            
                            <div class="second-wrapper d-flex flex-row justify-content-between">
                                <h6 class="desc-left">Thinking</h6>
                                <h6 class="desc-right">Feeling</h6>
                            </div>
                        </div>

                        <hr>

                        <div class="progress-wrapper">
                            <div class="first-wrapper">
                                <h6 class="left-percentage">60%</h6>
                                <div class="progress-bar-container">
                                    <div class="progress-bar progress-bar-left" data-value="60">
                                      <div class="progress-bar-fill"></div>
                                    </div>
                                </div>
                                <h6 class="right-percentage">40%</h6>
                            </div>
                            
                            <div class="second-wrapper d-flex flex-row justify-content-between">
                                <h6 class="desc-left">Judging</h6>
                                <h6 class="desc-right">Perceiving</h6>
                            </div>
                        </div>

                        <hr>

                        <div class="progress-wrapper">
                            <div class="first-wrapper">
                                <h6 class="left-percentage">57%</h6>
                                <div class="progress-bar-container">
                                    <div class="progress-bar progress-bar-left" data-value="57">
                                      <div class="progress-bar-fill"></div>
                                    </div>
                                </div>
                                <h6 class="right-percentage">43%</h6>
                            </div>
                            
                            <div class="second-wrapper d-flex flex-row justify-content-between">
                                <h6 class="desc-left">Assertive</h6>
                                <h6 class="desc-right">Turbulent</h6>
                            </div>
                        </div>
                          
                    </div>
                </div>
            </div>
        </section>

        <section id="interest">
          <div class="interests">
            <div class="section-title">
              <h2>Interests</h2>
            </div>

            <div class="interest-wrapper d-flex flex-row justify-content-evenly">
              <div class="interest-desc">
                <img src="assets/language.png" alt="">
                <h3>Languages</h3>
                <hr>
                <p>I'm interested with Japanese, Chinese, and Korean Language</p>
              </div>
              
              <div class="interest-desc">
                <img src="assets/music.png" alt="">
                <h3>Music</h3>
                <hr>
                <p>I like Indonesian, Chinese, Korean, and English songs</p>
              </div>

              <div class="interest-desc">
                <img src="assets/art.png" alt="">
                <h3>Arts</h3>
                <hr>
                <p>I like free drawing & wanna learn Mandhala Art </p>
              </div>

            </div>
          </div>
        </section>
        
        <section id="resume" class="resume">
          <div>
            <div class="section-title">
              <h2>Resume</h2>
            </div>
    
            <div class="row">
              <div class="col-lg-4">    
                <h3 class="resume-title">Educations</h3>
                <div class="resume-item">
                  <h4>Computer Science of Bina Nusantara University</h4>
                  <h5>2021 - Present</h5>
                </div>
                <div class="resume-item">
                  <h4>Saint Paul Catholic Senior High School</h4>
                  <h5>2018 - 2021</h5>
                </div>
                <div class="resume-item">
                  <h4>Maria Fatima Catholic Junior School</h4>
                  <h5>2015 - 2018</h5>
                </div>
                <div class="resume-item">
                  <h4>Maria Fatima Catholic Elementary School</h4>
                  <h5>2009 - 2015</h5>
                </div>
                <div class="resume-item">
                  <h4>TKK Siswa Rini I</h4>
                  <h5>2006 - 2009</h5>
                </div>
              </div>
              <div class="col-lg-4">
                <h3 class="resume-title">Organizations</h3>
                <div class="resume-item">
                  <h4>Event Section of Mudika PPA/PPTI/PPBP</h4>
                  <h5>2022 - 2023</h5>
                </div>
                <div class="resume-item">
                  <h4>High School Library Ambassador</h4>
                  <h5>2018 - 2019</h5>
                </div>
                <h3 class="resume-title">Experiences</h3>
                <div class="resume-item">
                  <h4>Front End Developer For Final Project Lab HCI PPTI 12 [FuGemy]</h4>
                  <h5>2022</h5>
                </div>
                <div class="resume-item">
                  <h4>Back End Developer For Project Software engineering [ZInfo]</h4>
                  <h5>2023</h5>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="contact">
          <div class="contact"  style="background: #000 no-repeat">
            <div class="section-title">
              <h2 class="text-white">Contact Me</h2>
            </div>
            <div class="contact-desc d-flex flex-row">
                <div class="social d-flex flex-row">
                  <img src="assets/phone-icon.png" alt="">
                  <p>+62 8155212255</p>
                </div>
                <div class="social d-flex flex-row">
                  <img src="assets/gmail-icon.png" alt="">
                  <p>alicia.josephine03@gmail.com</p>
                </div>
                <div class="social d-flex flex-row">
                  <img src="assets/instagram-icon.png" alt="">
                  <p>@aliciaje03</p>
                </div>
                <div class="social d-flex flex-row">
                  <img src="assets/twitter-icon.png" alt="">
                  <p>@xiumei05</p>
                </div>
            </div>
          </div>
        </section>
        
      </div>
      


    
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>