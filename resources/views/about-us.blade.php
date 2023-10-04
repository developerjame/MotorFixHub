<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a70663aaec.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script type="text/javascript" src="{{ URL::asset('js/template.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/about-us.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/template.css') }}" />
  <title>About Us</title>
</head>
<body>
  <div class="hero-container">
    <my-header></my-header>
    <h1>About Us</h1>
  </div>

  <!--About Us Section-->
  <div class="about-us">
    <div class="about-us-text">
      <h3>About Us</h3>
      <p>I started painting as a hobby when I was little. I didn't know I had any talent. I believe talent is just a pursued interest. Anybody can do what I do. Just go back and put one little more happy tree in there. Everybody's different. Trees are different. Let them all be individuals. We'll put some happy little leaves here and there. These things happen automatically. All you have to do is just let them happen. Everyone wants to enjoy the good parts - but you have to build the framework first. Let's do that again.</p>
    </div>
    <img src="{{ URL::asset('images/about-us.png') }}" alt="mechanic">
  </div>

  <!--Our Team Section-->
  <div class="our-team">
    <h3>Our Team</h3>
    <div class="team-container">
      <div class="team-item">
        <img src="{{ URL::asset('images/staff.png') }}" alt="staff">
        <div class="team-item-text">
          <h4>John Doe</h4>
          <h5>10 Years Experience</h5>
          <hr>
          <p>Expert in European Engines and Transmission<br>Certified by Volkswagen Group</p>
        </div>
      </div>
      <div class="team-item">
        <img src="{{ URL::asset('images/staff.png') }}" alt="staff">
        <div class="team-item-text">
          <h4>John Doe</h4>
          <h5>10 Years Experience</h5>
          <hr>
          <p>Expert in European Engines and Transmission<br>Certified by Volkswagen Group</p>
        </div>
      </div>
      <div class="team-item">
        <img src="{{ URL::asset('images/staff.png') }}" alt="staff">
        <div class="team-item-text">
          <h4>John Doe</h4>
          <h5>10 Years Experience</h5>
          <hr>
          <p>Expert in European Engines and Transmission<br>Certified by Volkswagen Group</p>
        </div>
      </div>
      <div class="team-item">
        <img src="{{ URL::asset('images/staff.png') }}" alt="staff">
        <div class="team-item-text">
          <h4>John Doe</h4>
          <h5>10 Years Experience</h5>
          <hr>
          <p>Expert in European Engines and Transmission<br>Certified by Volkswagen Group</p>
        </div>
      </div>
      <div class="team-item">
        <img src="{{ URL::asset('images/staff.png') }}" alt="staff">
        <div class="team-item-text">
          <h4>John Doe</h4>
          <h5>10 Years Experience</h5>
          <hr>
          <p>Expert in European Engines and Transmission<br>Certified by Volkswagen Group</p>
        </div>
      </div>
      <div class="team-item">
        <img src="{{ URL::asset('images/staff.png') }}" alt="staff">
        <div class="team-item-text">
          <h4>John Doe</h4>
          <h5>10 Years Experience</h5>
          <hr>
          <p>Expert in European Engines and Transmission<br>Certified by Volkswagen Group</p>
        </div>
      </div>
    </div>
  </div>
  <my-footer></my-footer> 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>