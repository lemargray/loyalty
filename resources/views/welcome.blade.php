<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style>
            body{
                background-color: #d0a7ff;
                padding-top: 20px;
            }
            header{
                height: 86px;
                padding-top: 15px;
            }
            .logo{
                max-width: 250px;
            }
            .page{
                background-color: #FFFFFF;
            }
            .header-seperator{
                width: 95%;;
            }
            .form{
                width: 75%;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container page">
                <div class="form">
                    <header>
                        <img class="img-responsive logo" src="{{ asset('img/logo.png') }}" alt="Progressive Grocers Ja Ltd.">
                    </header>
                    <hr class="header-seperator">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        {{'ijijijeijoieihihoiehrihoiehritherihoiherit'}}    

                    @endif
                    <form class="col-xs-12 well" method="POST" action="{{url('/create')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <fieldset class="">
                            <legend><h3>Loyalty Application Form</h3></legend>
                            <!-- Firstname Form Input -->
                            <div class="col-md-6 form-group">
                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter first name" required>
                            </div>
                            <!-- Lastname Form Input -->
                            <div class="col-md-6 form-group">
                                <label for="lastname">Last Name:</label>
                                <input type="text" name="lastname" class="form-control" id="lastname"
                                       placeholder="Enter last name" required>
                            </div>
                            <!-- Dob Form Input -->
                            <div class="col-md-6 form-group">
                                <label for="dob">Date Of Birth:</label>
                                <input type="text" name="dob" class="form-control datepicker" id="" placeholder="Enter dob" required>
                            </div>
                            <!-- Email Form Input -->
                            <div class="col-md-6 form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" required>
                            </div>
                            <!-- Address Form Input -->
                            <div class=" col-md-12 form-group">
                                <label for="address">Address:</label>
                                <textarea name="address" class="form-control" id="address" cols="30" rows="5" required></textarea>
                            </div>
                            <!-- Parish Form Select -->
                            <div class="col-md-12 form-group">
                                <label for="parish">Parish:</label>
                                <select class="form-control" name="parish" id="parish">
                                    <option value="0">Please select a parish</option>
                                    <option value="1">Clarendon</option>
                                    <option value="2">Hanover</option>
                                    <option value="3">Kingston</option>
                                    <option value="4">Manchester</option>
                                    <option value="5">Portland</option>
                                    <option value="6">St. Andrew</option>
                                    <option value="7">St. Ann</option>
                                    <option value="8">St. Catherine</option>                                    
                                    <option value="9">St. Elizabeth</option>
                                    <option value="10">St. James</option>
                                    <option value="11">St. Mary</option>
                                    <option value="12">St. Thomas</option>
                                    <option value="13">Trelawny</option>
                                    <option value="14">Westmoreland</option>
                                </select>
                            </div>
                            <!-- Telephone Form Input -->
                            <div class="col-md-6 form-group">
                                <label for="telephone">Telephone Number:</label>
                                <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Enter Telephone Number" required>
                            </div>
                            <!-- Mobile Form Input -->
                            <div class="col-md-6 form-group">
                                <label for="mobile">Mobile Number:</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
                            </div>
                            <!-- Stores Form Select -->
                            <div class="col-md-12 form-group">
                                <label for="store">Pick the store you want to pickup your Loyalty Card:</label>
                                <select class="form-control" name="store" id="store">                                    
                                    <option value="0">Please select a store</option>
                                    <option value="1">Shoppers Fair Harbour View</option>
                                    <option value="2">Shoppers Fair Liguanea</option>
                                    <option value="3">Shoppers Fair Duhaney Park</option>
                                    <option value="4">Shoppers Fair Burke Road</option>
                                    <option value="5">Shoppers Fair Brunswick</option>
                                    <option value="6">Shoppers Fair Portmore Mall</option>
                                    <option value="7">Shoppers Fair Greater Portmore</option>
                                    <option value="8">Shoppers Fair Westgate</option>                                    
                                    <option value="9">Shoppers Fair Manchester</option>
                                    <option value="10">Shoppers Fair Mandeville</option>
                                    <option value="11">Shoppers Fair Sav</option>
                                    <option value="12">Shoppers Fair Blue Diamond</option>
                                    <option value="13">Shoppers Fair Junction</option>
                                    <option value="14">Super Shoppers Fair Boulevard</option>
                                    <option value="15">Super Shoppers Fair Maypen</option>
                                    <option value="16">Progressive Foods Bogue</option>
                                    <option value="17">Progressive Foods Ocho Rios</option>
                                    <option value="18">Progressive Foods Whitter Village</option>
                                    <option value="19">Progressive Foods Portmore</option>
                                </select>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-info">Submit</button>
                            <!-- Cancel Button -->
                            <button type="submit" class="btn btn-warning">Cancel</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script>
            $(function() {
                $(".datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1900:2137',
                    dateFormat: 'yy-mm-dd',
                    defaultDate: null
                }).on('changeDate', function(ev) {
                    if($('.datepicker').valid()){
                        $('.datepicker').removeClass('invalid').addClass('success');
                    }
                });
            });
        </script>
    </body>
</html>
