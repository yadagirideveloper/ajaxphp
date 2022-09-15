<div id="demo">
</div>

<script type="text/javascript">


var xhr = new XMLHttpRequest();
var method = 'head';
var url = 'https://www.example.com/';
xhr.open(method,url,true);
xhr.send(null);

xhr.onreadystatechange = function()
{
 if (xhr.readyState === 4)
 {
  console.log(xhr.getAllResponseHeaders())
 }
}




</script>