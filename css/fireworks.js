function send_to_backend(id,time){
var data = {euroji:id,timestamp:time.getMinutes()+":"+time.getSeconds()}

$.ajax({
  url: "https://script.google.com/macros/s/AKfycbzvGl8_oL3Ft03Ln67iKqcdUvVqdBkLJQezB-vfoqiA1t6W46qN/exec",
  type: "POST",
  data: data,
  contentType: "application/javascript",
  dataType: 'jsonp'
})
.done(function(res) {
  console.log('success')
})
.fail(function(e) {
  console.log("error")
});

window.receipt = function(res) {
  // this function will execute upon finish
}
}