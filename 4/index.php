<!DOCTYPE html>

<html lang="en">
<head>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Example 4 | CodeGround</title>
</head>
<body>

  <header>
    <h1>Simple List</h1>
  </header>
  
  <section>
    <ul id="my_list" contenteditable="true">
      <li></li>
    </ul>
  </section>
  
  <p>Add some items and refresh the page.</p>
  
  <p><button id="reset_it" name="reset_it" onClick="javascript:reset_me();" />Reset Local Storage</button></p>
  
  <p>Back to the post <a href="http://php.quicoto.com/html5-local-storage/">HTML5 Local Storage</a></p>
  
  <script type="text/javascript">

$(function() {
  
  var my_list = document.getElementById('my_list');
  
  $(my_list).blur(function() {
    localStorage.setItem('my_data', this.innerHTML);
  });
  
  // when the page loads
  if ( localStorage.getItem('my_data') ) {
    my_list.innerHTML = localStorage.getItem('my_data');
  } 
  
  
});

function reset_me(){
 localStorage.clear();
 window.location="/examples/4/";

}
</script>

</body>
</html>  
