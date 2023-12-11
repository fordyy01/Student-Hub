<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Hub</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
<body>

     

    <nav class="container-fluid nav">
        <div class="container cf">
          <div class="brand">
          <a href="logout.php" class="btn-logout">Logout</a>
            <a href="#splash">Student Hub</a>
  
          </div>
          <i class="fa fa-bars nav-toggle"></i>
          <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#skills">Resources</a></li>
            <li><a href="#portfolio">Additional Tools</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      
      <div class="container-fluid splash" id="splash">
        <div class="container">
          <img src="" alt="" class="profile-image">
          <h1>Worry Less,Do More</h1>
          <span class="lead">Realize your full potential and prepare for a succesful future.</span>
          <span class="continue"><a href="#about"><i class="fa fa-angle-down"></i></a></span>
        </div>
      </div>
      
      <div class="container-fluid intro" id="about">
        <div class="container">
          <h2>About Us</h2>
          <p>At <a href="#">Student Hub</a>, we're more than just a website; we're your digital companion on the journey of education and personal growth. Our platform is designed to empower students and learners of all ages, from high school to higher education and beyond. We believe in the transformative power of education, and we're here to support your academic endeavors and personal development in every way possible.</p>
            <p>Our mission is to create a dynamic online ecosystem where students can thrive academically, access valuable resources, and connect with a community of like-minded individuals. We are dedicated to helping students make the most of their educational experiences, realize their full potential, and prepare for a successful future.</p>
        </div>
      </div>
      
      
      <div class="container-fluid features" id="skills">
        <h1>Resources</h1>
        <h5>These tools can be used individually or in combination, depending on the complexity and nature of the project or personal tasks.</h5>
        <h5> Many digital platforms and apps offer integrated solutions, allowing users to manage resources, calendars, budgets, and to-do lists in a seamless and interconnected way.</h5>
        <div class="container cf col-3">
      
          <!-- Column 1: Google Calendar -->
          <div class="calendar" style="text-align: left; width: 32%; margin-right: 5px;">
            <!-- Embed the Google Calendar here -->
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=UTC&src=a2F5a2F5bmFjYXJpb0BnbWFpbC5jb20&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043" style="border:solid 1px #777" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
          </div>
      
          <!-- Column 2: Planner -->
          <div class="planner-container" style="width: 32%; margin-right: 5px;">
            <h3>Planner</h3>
            <!-- Add your planner content here -->
            <ul id="plannerList">
              <!-- No initial tasks -->
            </ul>
            <form id="addPlannerTaskForm">
              <label for="newPlannerTask">New Planner Task:</label>
              <input type="text" id="newPlannerTask" name="newPlannerTask" required>
              <button type="button" id="addPlannerTaskButton">Add Task</button>
            </form>
          </div>
      
          <!-- Column 3: Budget Tracker -->
          <div class="budget-container" style="width: 32%; ">
            <h3>Budget Tracker</h3>
            <div class="budget-form">
              <label for="budgetAmount">Budget Amount:</label>
              <input type="number" id="budgetAmount" name="budgetAmount" min="0" step="0.01" placeholder="Enter your budget">
              <button type="button" id="setBudgetButton">Set Budget</button>
            </div>
            <div class="expense-list">
              <h4>Expense List</h4>
              <ul id="expenseList">
                <!-- Expense items will be added dynamically here -->
              </ul>
            </div>
            <div class="expense-form">
              <label for="expenseName">Expense Name:</label>
              <input type="text" id="expenseName" name="expenseName" placeholder="Enter expense name">
              <label for="expenseAmount">Expense Amount:</label>
              <input type="number" id="expenseAmount" name="expenseAmount" min="0" step="0.01" placeholder="Enter expense amount">
              <button type="button" id="addExpenseButton">Add Expense</button>
            </div>
            <div class="remaining-budget">
              <h4>Remaining Budget</h4>
              <p id="remainingBudget">-</p>
            </div>
            <div class="budget-options">
              <button type="button" id="refreshButton">Refresh</button>
              <button type="button" id="createNewButton">Create New</button>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="container-fluid portfolio" id="portfolio">
        <div class="container">
          <div class="row services-link-container">
            <h1>Here are some tools that can help you with your studies.</h1>
            <h4>Click any of these according to your needs.</h4>
              
              <div class="col-sm-4 col-xs-6">
                <a href="https://cheatography.com/" class="service-link">
                  <figure class="service-link web-design">
                    <i class="fa fa-laptop"></i>
                    <h3 class="service-title">Visit Cheatography</h3>
                  </figure>
                </a>
              </div> 
              
              <div class="col-sm-4 col-xs-6">
                <a href="https://www.wolframalpha.com/" class="service-link">
                  <figure class="service-link responsive-design">
                    <i class="fa fa-mobile"></i>
                    <h3 class="service-title">Hate Math?</h3>
                  </figure>
                </a>
              </div> 
              
              <div class="col-sm-4 col-xs-6">
                <a href="https://www.canva.com/" class="service-link">
                  <figure class="service-link branding">
                    <i class="fa fa-lightbulb-o"></i>
                    <h3 class="service-title">Be Creative</h3>
                  </figure>
                </a>
              </div> 
            
              <div class="col-sm-4 col-xs-6">
                <a href="https://www.scribbr.com/" class="service-link">
                  <figure class="service-link seo">
                    <i class="fa fa-search"></i>
                    <h3 class="service-title">Cite References</h3>
                  </figure>
                </a>
              </div> 
            
              <div class="col-sm-4 col-xs-6">
                <a href="https://www.grammarly.com/" class="service-link">
                  <figure class="service-link digital-marketing">
                    <i class="fa fa-line-chart"></i>
                    <h3 class="service-title">Check your Grammar</h3>
                  </figure>
                </a>
              </div> 
            
              <div class="col-sm-4 col-xs-6">
                <a href="https://untools.co/" class="service-link">
                  <figure class="service-link domains">
                    <i class="fa fa-globe"></i>
                    <h3 class="service-title">Visit Untools</h3>
                  </figure>
                </a>
              </div> 
          </div>
        </div>

    </div>
</div>
    </div>   

      <div class="container-fluid contact" id="contact">
        <div class="container">
          <form>
            <h2>Contact Us</h2>
            <input type="text" placeholder="Name" id="name" name="name" class="full-half">
            <input type="email" placeholder="Email" id="email" name="email" class="full-half">
            <input type="text" placeholder="Subject" id="subject" name="subject">
            <textarea placeholder="Message" id="message" name="message"></textarea>
            <input type="submit" value="Send">
          </form>
        </div>
      </div>
      
      <footer class="container-fluid footer">
        <div class="container">
        </div>
      </footer>
     
</body>
</html>