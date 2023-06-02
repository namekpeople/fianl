// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyCXAV2h4O2gkURHQ4Xui1LWrRwI_XZFTj0",
    authDomain: "baidoxe-44d53.firebaseapp.com",
    databaseURL: "https://baidoxe-44d53-default-rtdb.firebaseio.com",
    projectId: "baidoxe-44d53",
    storageBucket: "baidoxe-44d53.appspot.com",
    messagingSenderId: "812470731185",
    appId: "1:812470731185:web:956fd571ea61b5b4a47d90",
    measurementId: "G-W72E1BEC8L"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Set database variable
var database = firebase.database().ref('baidoxe');

function save() {
  var name = document.getElementById('name').value
  var phone = document.getElementById('phone').value
  var time = document.getElementById('time').value
  var place = document.getElementById('place').value
  var car = document.getElementById('car').value

  database.push().set({
    name : name,
    phone : phone,
    time : time,
    place : place,
    car : car
  })
  alert('Đăng kí thành công')
}