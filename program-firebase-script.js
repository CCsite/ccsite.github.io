
// Initialize Firebase
var config = {
  apiKey: "AIzaSyB4aqvYyI3NMtd4CCVjJaOyrkNhdSaYt-4",
  authDomain: "opt-in-page.firebaseapp.com",
  databaseURL: "https://opt-in-page.firebaseio.com",
  projectId: "opt-in-page",
  storageBucket: "opt-in-page.appspot.com",
  messagingSenderId: "622031480435"
};
firebase.initializeApp(config);

// Reference to the subsribers object in your Firebase database
var subscribers = firebase.database().ref("subscribers");
$("#thank-container").hide();

$("#send").click(function () {
  var name = $("#name").val();
  var email = $("#email").val();
  var address = $("#address").val();
  var link = $("#link").val();

  // Push a new recommendation to the database using those values
if(name!=="" && email!=="" && address!=="" && link!==""){
  subscribers.push({
    "name": name,
    "email": email,
    "address": address,
    "link": link,
});
$("#thank-container").show();
$("#title-container").hide();
$("#form-container").hide();
$("#button-container").hide();
return false;
}
});
