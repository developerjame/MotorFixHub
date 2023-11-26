<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/a70663aaec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    
    <title>Vehicle Mechanics/services</title>
    
    <script type="text/javascript" src="{{ URL::asset('js/template.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/section.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/section.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/template.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
</head>
<body>
    <div class="section">
        <my-header></my-header>
        <!-- <div id="engine-image"></div> -->
        <div class="sect-wrd">
            <h1>Get over 500 car repair services at your<br> home or office</h1>
        </div>
        <div class="sect">
            <div class="Eng-check">
                <div id="im-eng">
                    <img src="{{ URL::asset('images/4422629.png') }}" alt="#" height="100px" width="100px">
                    <h3>Car Doesnt Start</h3>
                </div>
                <div class="pb">
                    <p>Our certified mobile<br> mechanics come to you 7 days<br> a week between 7 AM<br>and 11.30PM</p>
                    <form action="mailto:webmaster@example.com">
                        <a href=""><button id="btn-estimate">ORDER SERVICE</button></a>
                    </form>
                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <img src="{{ URL::asset('images/4632985.png') }}" alt="#" height="100px" width="100px">
                    <h3>Brake/Tire Replacement</h3>
                </div>
                <div class="pb">
                    <p>Our certified mobile<br> mechanics come to you 7 days<br> a week between 7 AM<br>and 11.30PM</p>
                    <form action="mailto:webmaster@example.com">
                        <a href=""><button id="btn-estimate">ORDER SERVICE</button></a>
                    </form>
                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <img src="{{ URL::asset('images/5686838.png') }}" alt="#" height="100px" width="100px">
                    <h3>Engine-oil/Filter</h3>
                </div>
                <div class="pb">
                    <p>Our certified mobile<br> mechanics come to you 7 days<br> a week between 7 AM<br>and 11.30PM</p>
                    <form action="mailto:webmaster@example.com">
                        <a href=""><button id="btn-estimate">ORDER SERVICE</button></a>
                    </form>
                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <img src="{{ URL::asset('images/3503646.png') }}" alt="#" height="100px" width="100px">
                    <h3>Axle/Cv sharft check</h3>
                </div>
                <div class="pb">
                    <p>Our certified mobile<br> mechanics come to you 7 days<br> a week between 7 AM<br>and 11.30PM</p>
                    <form action="mailto:webmaster@example.com">
                        <a href=""><button id="btn-estimate">ORDER SERVICE</button></a>
                    </form>
                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <img src="{{ URL::asset('images/5670421.png') }}" alt="#" height="100px" width="100px">
                    <h3>Transmission isues</h3>
                </div>
                <div class="pb">
                    <p>Our certified mobile<br> mechanics come to you 7 days<br> a week between 7 AM<br>and 11.30PM</p>
                    <form action="mailto:webmaster@example.com">
                        <a href=""><button id="btn-estimate">ORDER SERVICE</button></a>
                    </form>
                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <img src="{{ URL::asset('images/5757907.png') }}" alt="#" height="100px" width="100px">
                    <h3>Engine check</h3>
                </div>
                <div class="pb">
                    <p>Our certified mobile<br> mechanics come to you 7 days<br> a week between 7 AM<br>and 11.30PM</p>
                    <form action="mailto:webmaster@example.com">
                        <a href=""><button id="btn-estimate">ORDER SERVICE</button></a>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- popup content -->
    <div id="estimate" class="modal fade" role="">
        <div class="modal-dialog">
            <div id="mdl" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">GET AN ESTIMATE</h3>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <form name="priceestimate" action="" onsubmit="return serviceprice()" >
                            <label for=""><span>Select Service Below</span></label> <br>
                            <select name="services" id="services">
                                <option value="brake">Brake-pad & Tire replacement</option>
                                <option value="filter">Engine oil/filter</option>
                                <option value="shaft">Axle/Cv Shaft check</option>
                                <option value="transmition">Transmission issues</option>
                                <option value="engine">Engine Check</option>
                            </select> <br>
                            <input class="mnubtn" type="submit" name="submit" value="Get Estimate">
                            <p id="p1"></p>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="mnubtn" type="button" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>

    </div>
    <my-footer></my-footer>
</body>
<script src="{{ URL::asset('js/estimate.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>