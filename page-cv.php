<?php
/*
Template name: Page cv 
Description:  Page cv 
*/
?>
<?php get_header(); ?>

<div id="main">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div id="experience">
          <div class="cv-wrapper">
            <header>
              <h2 class="section-heading text-center">Work Experience</h2>
            </header>
            <section class="info">
              <ul class="experience-list">
                <li class="experience-list-item">
                  <a href="https://www.hogia.se/" title="Hogia group">Hogia group, Stenungsund</a>
                  <span>January 2019 - current</span>
                  <p>Frontend developer building web tools for Human Resource. HTML5, SCSS, LESS, Javascript/Typescript, Aurelia framework, Azure DevOps, Git.
                  </p>
                </li>

                <li class="experience-list-item">
                  <a href="https://boozang.com" title="Boozang">Boozang, Montreal</a>
                  <span>May 2016 - January 2019</span>
                  <p>Web Development for SaaS company.
                    Design, Implementation, Site Maintenance - custom WordPress theme. <br>
                    <a href="http://thelab.boozang.com/" class="site">theLab: </a>
                    Site in React.js for teaching the Boozang tool. <br>
                    In collaboration designing and UX of test tool, frontend development of
                    <a href="https://ai.boozang.com/" class="site">Management GUI</a>
                  </p>
                </li>

                <li class="experience-list-item">
                  <a href="https://jgl.se/" title="JGL webbyrå">JGL webbyrå, Göteborg</a>
                  <span>April 2018 - September 2018</span>
                  <p>Frontend development in WordPress and WooCommerce. Team based projects. </p>
                </li>

                <li class="experience-list-item">
                  <a href="http://www.ebelingwebb.se/" title="Ebeling Webbyrå">Ebeling Webbyrå, Göteborg</a>
                  <span>November 2017 - January 2018</span>
                  <p>Internship 10 weeks - Frontend development focusing on Responsive web.</p>
                </li>

                <li class="experience-list-item">
                  <p class="linkstyle">T.Karlsson Entreprenad AB</p>
                  <span>July -2014 - August 2017</span>
                  <p>Working at recycling station. Interim employment.</p>
                </li>

                <li class="experience-list-item">
                  <a href="https://ale.se/" title="Ale Kommun">Ale Kommun</a>
                  <span>September 2012 - May 2017</span>
                  <p>Preschool teacher. Interim employment.</p>
                </li>

                <li class="experience-list-item">
                  <a href="http://www.folkuniversitetet.se/" title="Folkuniversitetet">Folkuniversitetet, Kungälv</a>
                  <span>2006 – 2013</span>
                  <p>Teaching Italian. Evening courses.</p>
                </li>

                <li class="experience-list-item">
                  <a href="https://www.medborgarskolan.se/" title="Medborgarskolan">Medborgarskolan, Kungälv</a>
                  <span>2005 – 2012 </span>
                  <p>Teaching Italian. Evening courses.</p>
                </li>
              </ul>
            </section>
          </div>
        </div>
        <!--/experience-->

        <div id="education">
          <div class="cv-wrapper">
            <header>
              <h2 class="section-heading text-center">Education</h2>
              <!--<p class="underline white"></p>-->
            </header>
            <section class="info">
              <ul class="education-list">

                <li class="education-list-item">
                  <div>
                    <button id="getmoreinfo1" title="läs mer">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </button>
                    <a href="https://lnu.se/en/" title="Linnéuniversitetet">Linnéuniversitetet</a>
                    <span>August 2016 - november 2016</span>
                    <p>Web Technology 3, 7.5hp (JavaScript, Ajax, SEO).</p>
                    <ul id="moreinfo1" class="moreinfo">
                      <li>Web publishing.</li>
                      <li>Managing Asynchronous information updates with JavaScript and AJAX.</li>
                      <li>Structuring of information in XML and JSON using JavaScript.</li>
                      <li>Website optimization and how to measure site usage.</li>
                    </ul>
                  </div>
                </li>

                <li class="education-list-item">
                  <div><a href="https://www.hv.se/" title="Högskolan Väst">Högskolan Väst</a>
                    <span>August 2016 - November 2016</span>
                    <p>Web development program.</p>
                    <ul>
                      <li><button id="getmoreinfo7" title="läs mer"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>Web development with HTML5 and CSS3, 7.5hp.

                        <ul id="moreinfo7" class="moreinfo">
                          <li>HTML: syntax, structure and rules.</li>
                          <li>CSS3 and its rules.</li>
                          <li>Testing of HTML and CSS customization for different browsers.</li>
                          <li>Responsive Design.</li>
                        </ul>
                      </li>
                      <li> <button id="getmoreinfo5" title="läs mer"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                        </button>Basic programming with an object-oriented language, 7.5hp (JavaScript).

                        <ul id="moreinfo5" class="moreinfo">
                          <li>Algorithm construction, methods and features in JavaScript.</li>
                          <li>Control structures and variables.</li>
                          <li>Classes and objects.</li>
                          <li>Arrays.</li>
                          <li>Error management and debugging.</li>
                        </ul>
                      </li>

                      <li> <button id="getmoreinfo6" title="läs mer"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                        </button>Intranet / Internet services, 7.5hp (Linux-kommandon, Apache, My SQL).

                        <ul id="moreinfo6" class="moreinfo">
                          <li>OSI model and the most common protocols in the TCP / IP family.</li>
                          <li>Easier Linux commands.</li>
                          <li>Configure, install and use Web server (Apache), database (MYSQL) and script engine (PHP).</li>
                          <li>DNS services, firewalls, packet filtering, proxy servers and electronic mail.</li>
                          <li>Security, digital signatures and encryption.</li>
                        </ul>
                      </li>
                      <li><button id="getmoreinfo4" title="läs mer"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                        </button>Web programming, 7.5hp (jQuery, PHP, ASP.NET ).

                        <ul id="moreinfo4" class="moreinfo">
                          <li>Develop web pages in PHP, ASP.NET (C #) AND AJAX.</li>
                          <li>How web servers work.</li>
                          <li>How sessions and cookies work.</li>
                          <li>Database access via server script.</li>
                        </ul>
                      </li>

                      <li> <button id="getmoreinfo2" title="läs mer"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>Web programming II, 7.5hp (Wordpress, PHP).

                        <ul id="moreinfo2" class="moreinfo">
                          <li>Installation and configuration of Content Management Systems.</li>
                          <li>CMS technical and functional structure.</li>
                          <li>Customizing a DMS functionality and graphic layout.</li>
                          <li>Safety aspects.</li>
                          <li>Design, programming, implementation and publication of plug-ins.</li>
                        </ul>
                      </li>
                      <li><button id="getmoreinfo3" title="läs mer"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                        </button>Development of mobile web applications, 7.5hp (AngularJs, node.js, Cordova).
                        <ul id="moreinfo3" class="moreinfo">
                          <li>HTML, JavaScript and CSS in a mobile environment.</li>
                          <li>Server programming and backend for mobile web applications.</li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="education-list-item">
                  <div>
                    <button id="getmoreinfo8" title="läs mer">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </button>
                    <a href="https://lnu.se/en/" title="Linnéuniversitetet">Linnéuniversitetet</a>
                    <span>January 2015 - June 2015</span>
                    <p>Web Design, 15hp (HTML, CSS, JavaScript, XML).</p>
                    <ul id="moreinfo8" class="moreinfo">
                      <li>Information architecture for websites.</li>
                      <li>Image editing for digital publishing.</li>
                      <li>Layout, style, and use of different digital media.</li>
                      <li>HTML5, CSS3, XML and DTD with applications such as RSS.</li>
                      <li>Search Engine Optimization (SEO)</li>
                      <li>Script programming - focus on JavaScript.</li>
                      <li>Dynamic HTML: An introduction to HTML, CSS, JavaScript and DOM.</li>
                      <li>Interactivity and dynamic effects on web pages.</li>
                    </ul>
                  </div>
                </li>

                <li class="education-list-item">
                  <div>
                    <button id="getmoreinfo9" title="läs mer">
                      <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </button>
                    <a href="https://www.gu.se/english" title="Göteborgs Universitet">Göteborgs Universitet</a>
                    <span>January 2012</span>
                    <p>Degree of Bachelor of Arts in modern languages.</br> Major subject: Italian.</br>Minor subject: Spanish.</br> Erasmus exchange programme in Viterbo, Italy 9 months.</p>

                    <ul id="moreinfo9" class="moreinfo">
                      <li>Studies of the italian language, literature and culture.</li>
                      <li>Studied C-course in Italy, 9 months, Erasmus-exchange programme.</li>
                      <li>Studies of the spanish language, literature and culture.</li>
                    </ul>
                  </div>
                </li>
              </ul>
            </section>
          </div>
        </div>
        <!--/education-->

        <?php get_footer(); ?>

      </div>
    </div>
  </div>
</div>
