<!DOCTYPE html>
<html lang="en">

<head>
    <title>SLIUF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/getforum.js"></script>
     <script src="js/setmytreads.js"></script>
    <script src="js/typewriter.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // wait for the DOM to be loaded 
        $(document).ready(function () {
            // bind 'myForm' and provide a simple callback function 
            showforumsdata();
            setinterest1();
            setinterest2();
            setinterest3();
            setfieldset();
            setmyinterest();
            $("#mnew").hide();
            $('#posttread').ajaxForm(function () {
                document.getElementById("posttread").reset();
                document.getElementById("postbtn").click();

                // alert("Thank you for your comment!"); 
                swal("SUCCESSFULLY!", "Your tread has bean Posted!", "success");
            });
        });

       
    </script>

    <style>
        /* Set black background color, white text and some padding */
        /* .navbar-inverse {
    background-color:bg-primary !important;
} */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
    </style>
      <?php
       
        session_start();
      //  $key=$_SESSION['kkey'];
        $key="studjnknzld646dnknd4knsfd5454j";
     //   $index= $_SESSION['ind'];
        $index="142000";
        $_SESSION['index']=$index;
     //   $password=$_SESSION['passd'];
        $password="Cmisismy1st@life";
        function profilefind($index,$password,$key)
        {
             include('../../php/config.php');
            $key2="studjnknzld646dnknd4knsfd5454j";
          //  $sql1='SELECT * FROM reg_data WHERE index_number='.$index;
            $sql2='SELECT * FROM user_data WHERE index_number_fk='.$index;
                if ($key2 == $key) {
                    //  $result1= mysqli_query($conn,$sql1);
                      $result2= mysqli_query($conn,$sql2);
                        if (mysqli_num_rows($result2) > 0)
                        {
                    
                            while($row = mysqli_fetch_assoc($result2))
                                    {
                                    $fname=$row["first_name"];
                                    $lname=$row["last_name"];
                                    $phone_num=$row["phone_num"];
                                    $birthday=$row['birthday'];
                                    $univercity=$row['university'];
                                    $description=$row['description'];
                                    $address=$row['address'];
                                    $image=$row['image'];
                                    }
                            
                                return $arrayName = array('fname' =>$fname ,'lname'=>$lname,'pnum'=>$phone_num,'bday'=>$birthday,'uni'=>$univercity,'des'=>$description,'add'=>$address,'image'=>$image );
                        
                                }
                         else
                        {
                            $error="error";
                                return $arrayName = array('error' =>$error);
                        }
                }
        
        }

    ?>
</head>

<body  >


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img alt="SLIUF" src="...">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Profile
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="text-primary" id="indexId">
                               <?php echo $index;  ?> 
                        </p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-log-in"></span> Log Out</a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-cog"></span>Settings</a>

                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
       <?php
        $prodata = profilefind($index,$password,$key);

        ?> 
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3 well">
                <div class="well">
                    <p>
                        <a href="#"> Hello...
                            <br/>
                                <?php echo $prodata['fname']." ".$prodata['lname'] ?> 
                        </a>
                    </p>
                    <img src="../../img/profilepics/142000.png" class="img-circle" height="120" width="120" alt="Avatar">
                    <p>
                              <?php echo $prodata['pnum'] ?> 
                    </p>
                    <p>
                             <?php echo $prodata['bday'] ?> 
                    </p>
                    <p>
                              <?php echo $prodata['uni'] ?> 
                    </p>
                    <p>
                            <?php echo $prodata['add'] ?> 
                    </p>

                </div>
                <div class="well" id="myinterest">
                   
                    
                        <!-- <span class="label label-default">News</span>
                       
                        <span class="label label-success">Labels</span>
                        <span class="label label-info">Football</span>
                        
                        
                    </p> -->
                </div>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>
                        <strong>pleace edit your profile!</strong>
                    </p>

                </div>
                <p>
                         <?php echo $prodata['des'] ?> 
                </p>
                <p>
                    <a href="#">Ad your state</a>
                </p>
                <p>
                    <a href="#">Add your Job field</a>
                </p>
                <p>
                    <a href="#">Add your nick name</a>
                </p>
            </div>
            <div class="col-sm-7">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left">
                            <div class="panel-body">

                                <p>Post Any Thing....</p>
                                <h1 class="h1w">
                                    <a style="color: #be6529; font:Monospace;" href="" class="typewrite" data-period="500" data-type='[ "Have any problems..? ", "Ask from audience.......","Have any solution......... ", "Say audience......."]'>
                                        <span class="wrap"></span>
                                    </a>
                                </h1>
                                <div class="panel-group">
                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <h4 class="panel-title text-center">
                                                <button class="btn btn-primary" onclick="showfields()">
                                                    <a style="color:white;" data-toggle="collapse" id="postbtn" href="#collapse1">Click to Post</a>
                                                </button>
                                            </h4>
                                        </div>

                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <form action="php/storetread.php" method="post" id="posttread">
                                                    <div class="form-group">
                                                        <div id="fieldset"></div>
                                                        <br>
                                                        <div id="txtHint"></div>
                                                        <div id="mnew">
                                                            <br/>
                                                            <label for="f_new">Add new Forum Name:</label>
                                                            <input type="text" class="form-control" id="f_new" value="test" name="f_new" required/>
                                                        </div>
                                                        <br/>
                                                        <label for="Title">Tread Title:</label>
                                                        <input type="text" class="form-control" id="tread_title" name="tread_title" required/>
                                                        <br/>
                                                        <label for="tread_data">Write Your status:</label>
                                                        <textarea class="form-control" rows="8" id="tread_data" name="tread_data" required></textarea>
                                                        <br/>
                                                        <button type="submit" class="btn btn-primary" id="submit_tread" name="submit_trad">POST
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="mytreads">
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">Treads by you
                            <button type="button" class="btn pull-right" style="background:transparent;" data-toggle="collapse" data-target="#one">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                        <div id="one" class="collapse in">
                            <div class="panel-body">
                                <div class="row" id="mytreads"> -->
                                    <!-- <div class="col-sm-3">
                                        <div class="well">
                                            <p>
                                                <a href="">user name</a>
                                            </p>
                                            <img src="img/3.png" class="img-circle" height="55" width="55" alt="Avatar">
                                            <p>2017-11-12 10.00am</p>
                                            <p>Comments:20</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="well">
                                            <h4>
                                                <a href="">Tread Title</a>
                                            </h4>
                                            <p>Just Forgot that I had to mention something about someone to someone about how
                                                I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember....
                                                no I don't.</p>
                                            <p>
                                                <a href="">last comment:</a>
                                            </p>
                                        </div>
                                    </div> -->
                                <!-- </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row" id="interestone">
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">Interest One
                            <button type="button" class="btn pull-right" style="background:transparent;" data-toggle="collapse" data-target="#inone">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                        <div id="inone" class="collapse in">
                            <div class="panel-body">
                                <div class="row" id="interestone"> -->
                                    <!-- <div class="col-sm-3">
                                        <div class="well">
                                            <p>
                                                <a href="">user name</a>
                                            </p>
                                            <img src="img/3.png" class="img-circle" height="55" width="55" alt="Avatar">
                                            <p>2017-11-12 10.00am</p>
                                            <p>Comments:20</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="well">
                                            <h4>
                                                <a href="">Tread Title</a>
                                            </h4>
                                            <p>Just Forgot that I had to mention something about someone to someone about how
                                                I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember....
                                                no I don't.</p>

                                            <p>
                                                <a href="">last comment:</a>
                                            </p>
                                        </div>
                                    </div> -->

                                <!-- </div>
                            </div>


                        </div>
                    </div> -->
                </div>
                <div class="row" id="interesttwo">
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">Interest two
                            <button type="button" class="btn pull-right" style="background:transparent;" data-toggle="collapse" data-target="#intwo">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                        <div id="intwo" class="collapse in">
                            <div class="panel-body">
                                <div class="row" id="interesttwo"> -->
                                    <!-- <div class="col-sm-3">
                                        <div class="well">
                                            <p>
                                                <a href="">user name</a>
                                            </p>
                                            <img src="img/3.png" class="img-circle" height="55" width="55" alt="Avatar">
                                            <p>2017-11-12 10.00am</p>
                                            <p>Comments:20</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="well">
                                            <h4>
                                                <a href="">Tread Title</a>
                                            </h4>
                                            <p>Just Forgot that I had to mention something about someone to someone about how
                                                I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember....
                                                no I don't.</p>

                                            <p>
                                                <a href="">last comment:</a>
                                            </p>
                                        </div>
                                    </div> -->

                                <!-- </div>
                            </div>


                        </div>
                    </div> -->
                </div>
                <div class="row" id="interestthree" >
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">Interest three
                            <button type="button" class="btn pull-right" style="background:transparent;" data-toggle="collapse" data-target="#inthree">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                        <div id="inthree" class="collapse in">
                            <div class="panel-body">
                                <div class="row" id="interestthree"> -->
                                    <!-- <div class="col-sm-3">
                                        <div class="well">
                                            <p>
                                                <a href="">user name</a>
                                            </p>
                                            <img src="img/3.png" class="img-circle" height="55" width="55" alt="Avatar">
                                            <p>2017-11-12 10.00am</p>
                                            <p>Comments:20</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="well">
                                            <h4>
                                                <a href="">Tread Title</a>
                                            </h4>
                                            <p>Just Forgot that I had to mention something about someone to someone about how
                                                I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember....
                                                no I don't.</p>

                                            <p>
                                                <a href="">last comment:</a>
                                            </p>
                                        </div>
                                    </div> -->
<!-- 
                                </div>
                            </div>


                        </div>
                    </div> -->
                </div>

                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Other Fields
                            <button type="button" class="btn pull-right" style="background:transparent;" data-toggle="collapse" data-target="#otherfields">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                        <div id="otherfields" class="collapse in">
                            <div class="panel-body">
                                <div class="row" id="allfieldset">
                                    <!-- <div class="col-sm-12">
                                        <ul class="list-group text-left">
                                            <li class="list-group-item">Field one
                                                <span class="badge">Treads: 12</span>
                                            </li>
                                            <li class="list-group-item">Field two
                                                <span class="badge">Treads: 5</span>
                                            </li>
                                            <li class="list-group-item">Field three
                                                <span class="badge">Treads: 3</span>
                                            </li>
                                        </ul>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 well">
                <div class="thumbnail">
                    <p>Upcoming Events:</p>
                    <img src="img/3.jpg" alt="Paris" width="400" height="300">
                    <p>
                        <strong>Paris</strong>
                    </p>
                    <p>Fri. 27 November 2017</p>
                    <button type="button" class="btn btn-primary" >Info</button>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Powerd by PantherCodes</p>
    </footer>

</body>

</html>