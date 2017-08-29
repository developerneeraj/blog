<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
	

	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/contact.js"></script>

</head>
<body>
<div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
        <h2>Contact</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
        {!! Form::open(['url' => '/contact','method' => 'post','file'=>true]) !!}

              <div class="form-group">
                  <label class="form-label" for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="email">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="message">Message</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>                                 
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">Send Message</button>
              </div>
       {!! Form::close() !!}
      </div>
  </div>
</div>

</body>
</html>