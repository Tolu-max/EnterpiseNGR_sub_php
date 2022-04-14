<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/main.css" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
/>
  <title>Our Agenda</title>
</head>

<body>
  <header class="header">
    <div class="Nav-wrapper">
      <div class="logo">
        <a href="index.html"
          ><img src="/images/EnterpriseNGRLogo.png" alt=""
        /></a>
      </div>
      <nav>
        <input type="checkbox" id="show-search" />
        <input type="checkbox" id="show-menu" />
        <label for="show-menu" class="menu-icon"
          ><i class="fas fa-bars"></i>
        </label>
        <div class="content">
          <ul class="links">
            <li>
              <a href="about.html">About Us </a>
            </li>
            <li><a href="agenda.html">Our Agenda</a></li>
            <li><a href="member.html">Membership</a></li>
            <li><a href="policy.html">Policy & Research</a></li>
            <li><a href="greenstart.html">Youth Of Enterprise</a></li>
            <li><a href="news.html">Media & Events</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="landing_page">
      <div class="heading">Where</div>
      <div class="heading">Growth</div>
      <div class="heading">Starts.</div>
      <p>
        EnterpriseNGR is a member-focused group that promotes the growth
        and development of Nigeria’s financial, and professional services
        ecosystem.
      </p>
      <div>
        <a href="about.html"><button class="big_btn">
          <span class="iconify-inline" data-icon="bi:arrow-right-circle" style="color: #40ba7b" data-width="29"
            data-height="29"></span>
          <span class="btn_text">More About Us</span>
        </button></a>
        <a href="#our-work"><button class="btn_work">Our Work</button></a>
        
      </div>
    </div>
  </header>

  <section class="economy">
    <div class="sm_heading">An economy with exponential potential.</div>
    <div class="md_heading">Nigeria is the Largest Economy in Africa.</div>

    <div class="economy_grid">
      <div class="img">
        <img src="/images/economy.png" alt="Economy" />
      </div>

      <div class="economy_description">
        <div class="bold">
          The Financial and Professional Services sector has the potential to
          be the largest tax payer, largest employer, biggest exporting
          industry and largest contributor to total economic output after
          agriculture. The sector working in unison can help achieve this
          goal.
        </div>
        <div class="thin">
          To succeed and attain its potential as the center for financial
          services in Africa, the Financial and Professional Services sector
          requires an enabling policy environment and collaborative
          transformational growth effort.
        </div>
        <a href="about.html">  <button class="big_btn">
          <span class="iconify-inline" data-icon="bi:arrow-right-circle" style="color: #40ba7b" data-width="29"
            data-height="29"></span>
          <span class="btn_text">Learn More</span>
        </button></a>
      
      </div>
    </div>
  </section>

  <section class="what_we_do">
    <div class="sm_heading">WHAT WE DO</div>
    <div class="md_heading">
      Promoting the Nigerian Financial Professional Services Sector.
    </div>
    <div class="thin">
      EnterpriseNGR is positioned to foster a favorable environment for
      engagement with policy makers and business sector advocacy, both
      domestically and internationally- working in concert with government
      authorities and other key stakeholders.
    </div>
    <a href="about.html"><button class="md_btn">
      <span class="iconify-inline" data-icon="bi:arrow-right-circle" style="color: #40ba7b" data-width="29"
        data-height="29"></span>
      <span class="btn_text">Learn More</span>
    </button></a>
    
  </section>

  <section class="latest_news">
    <div class="news">
      <div class="sm_heading">KEEP UP TO DATE</div>
      <div class="md_heading">Latest News</div>
      <div class="thin">
        The latest news from EnterpriseNGR and the financial services sector.
      </div>
      <div class="cards">
        <div class="card">
          <div class="image">
            <img src="/images/Rectangle 83.png" alt="" />
          </div>
          <div class="sm_heading text">19 May 2022</div>
          <div class="bold text">New Report: 2022 State of Enterprise</div>
          <div class="text">
            <a href="newsitem.html"><button class="md_btn">
              <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;" data-width="26"></span>
              <span class="btn_text">Read More</span>
            </button></a>
            
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="/images/Rectangle 87.png" alt="" />
          </div>
          <div class="sm_heading text">19 May 2022</div>
          <div class="bold text">New Report: 2022 State of Enterprise</div>
          <div class="text">
            <a href="newsitem.html"><button class="md_btn">
              <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;" data-width="26"></span>
              <span class="btn_text">Read More</span>
            </button></a>
            
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="/images/Rectangle 91.png" alt="" />
          </div>
          <div class="sm_heading text">19 May 2022</div>
          <div class="bold text">New Report: 2022 State of Enterprise</div>
          <div class="text">
            <a href="newsitem.html"><button class="md_btn">
              <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;" data-width="26"></span>
              <span class="btn_text">Read More</span>
            </button></a>
            
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img src="/images/Rectangle 95.png" alt="" />
          </div>
          <div class="sm_heading text">19 May 2022</div>
          <div class="bold text">New Report: 2022 State of Enterprise</div>
          <div class="text">
            <a href="newsitem.html"><button class="md_btn">
              <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;" data-width="26"></span>
              <span class="btn_text">Read More</span>
            </button></a>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="industry_insight">
    <div class="sm_heading">INDUSTRY INSIGHT</div>
    <div class="md_heading">Policy and Research</div>
    <div class="description">
      <div class="thin">
        The latest research and thought leadership on important topics
        impacting the Nigerian financial professional servicess sector.
      </div>
      <a href="policy.html"> <button class="md_btn">
        <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;" data-width="26"></span><span
          class="btn_text">View All</span>
      </button></a>
     
    </div>

    <div class="cards">
      <div class="card">
        <div class="sm_heading">19 May 2022</div>
        <div class="report">New Report: 2022 State of Enterprise</div>

        <div class="btns">
          <button class="btn">POLICY SUBMISSIONS</button>
          <button class="btn">FINANCIAL SERVICES</button>
        </div>
        <div>
          <a href="newsitem.html"><button class="md_btn">
            <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;"
              data-width="26"></span><span class="btn_text">Read More</span>
          </button></a>
          
        </div>
      </div>
      <div class="card">
        <div class="sm_heading">19 May 2022</div>
        <div class="report">New Report: 2022 State of Enterprise</div>
        <div class="btns">
          <button class="btn">POLICY SUBMISSIONS</button>
          <button class="btn">FINANCIAL SERVICES</button>
        </div>
        <div>
          <a href="newsitem.html"><button class="md_btn">
            <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;"
              data-width="26"></span><span class="btn_text">Read More</span>
          </button></a>
          
        </div>
      </div>
      <div class="card">
        <div class="sm_heading">19 May 2022</div>
        <div class="report">New Report: 2022 State of Enterprise</div>
        <div class="btns">
          <button class="btn">POLICY SUBMISSIONS</button>
          <button class="btn">FINANCIAL SERVICES</button>
        </div>
        <div>
          <a href="newsitem.html"><button class="md_btn">
            <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;"
              data-width="26"></span><span class="btn_text">Read More</span>
          </button></a>
          
        </div>
      </div>
  </section>

  <section class="enterprise_voice">
    <div class="voice">
      <div class="md_heading">
        <div>EnterpriseNGR |</div>
        <div>Voice of Enterprise</div>
      </div>
      <div class="thin">
        Annual EnterpriseNGR event to engage key industry stakeholders (both
        globally and in Nigeria) as well as policymakers at all levels of
        government.
      </div>
      <a href="greenstart.html"><button class="md_btn">
        <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;" data-width="26"></span><span
          class="btn_text">Learn More</span>
      </button></a>
      
    </div>
    <div class="green">
      <div>JOIN NOW</div>
      <div class="md_heading">Monthly Newsletter</div>
      <form action="sub.php" method="post">
        <input type="email" name="email" placeholder="Enter your email address" />
        <input type="text" name="fname" placeholder="Enter your First Name" />
        <input type="text" name="lname" placeholder="Enter your email address" />
        <button name="submit" class="md_btn"><span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: #40ba7b;" data-width="26"></span><span
          class="btn_text">Subscribe</span></button>
      </form>
    </div>
  </section>

  <section id="our-work" class="our_work">
    <div class="sm_heading">Our Work</div>
    <div class="md_heading">EnterpriseNGR Initiatives</div>
    <div class="cards">
      <div class="card">
        <div class="md_heading">Youth of Enterprise</div>
        <div class="card_description">
          EnterpriseNGR Internship programme aimed at empowering the next
          generation of workplace talent.
        </div>
        <button class="md_btn">
          <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;"
            data-width="26"></span><span class="btn_text">View All</span>
        </button>
      </div>
      <div class="card">
        <div class="md_heading">LEAD-P</div>
        <div class="card_description">
          Our top talent training program for civil servants with high
          potential for leadership. In partnership with the Office of the Head
          of Civil Service of the Federation (“OHCSF”) and the AIG Foundation.
        </div>
        <button class="md_btn">
          <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;"
            data-width="26"></span><span class="btn_text">View All</span>
        </button>
      </div>
      <div class="card">
        <div class="md_heading">In Focus: Series</div>
        <div class="card_description">
          Ourofficial roundtable for curated voices in the Nigerian financial
          and processional services sector.
        </div>
        <button class="md_btn">
          <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: black;"
            data-width="26"></span><span class="btn_text">View All</span>
        </button>
      </div>
    </div>
  </section>

  <section class="member">
    <div class="membership">
      <div class="md_heading">Membership</div>
      <div class="membership_text">
        <div class="text">
          Join our network of members at the forefront of advancing the
          development and transformation of Nigeria.
        </div>
        <a href="member.html"><button class="md_btn">
          <span class="iconify" data-icon="bi:arrow-right-circle-fill" style="color: #40ba7b;"
            data-width="26"></span><span class="btn_text">Learn More</span>
        </button></a>
        
      </div>
    </div>
  </section>


  <footer>
    <div class="contact_info">
      <div><img src="/images/EnterpriseNGRLogo.png" /></div>
      <div class="column">
        <div class="phone">+234 812 235 0250</div>
        <div>contact@enterprisengr.com</div>
        <div>
          106 1B Abagbon Close, Off Adeola Odeku Victoria Island, Lagos.
        </div>
      </div>
      <div class="column">
        <div>Our Interventions</div>
        <div><a href="member.html"></a>Membership</div>
        <div><a href="policy.html"></a>Policy & Research</div>
        <div><a href="news.html"></a>News & Events</div>
      </div>
      <div class="column">
        <div><a href="contact.html">Contact Us</a></div>
        <div><a href="about.html">About EnterpriseNGR</a></div>
        <div class="social_icons">
          <div class="item">
            <a href=""><img src="/images/Vector.png" alt="" /></a>
          </div>
          <div class="item">
            <a href=""><img src="/images/ig.png" alt="" /></a>
          </div>
          <div class="item">
            <a href=""><img src="/images/twitter.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="privacy_policy">
      <div>Terms & Conditions - Privacy Policy</div>
      <div>© 2022 EnterpriseNGR - All Rights Reserved</div>
    </div>
  </footer>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>