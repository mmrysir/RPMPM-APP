const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function signin() {
  location.replace("register")
}

function signup() {
  location.replace("login")
}

function add() {
  location.replace("addEmployee.blade.php")
}

function addproject() {
  location.replace("addProject.html")
}

function addTeam() {
  location.replace("addTeam.html")
}

function logout() {
  location.replace("login.html")
}

const myForm = document.getElementById('myForm');
myForm.addEventListener('submit', function(e){
 e.preventDefault();
  const formData = new FormData(this);
  fetch('http://127.0.0.1:8000/api/users',{

      method:'post',
      body:myForm

  }).then(function (response){
      return response.text("success");
  }).then(function(text){
      console.log(text)
  }).catch(function(errr){
      console.error(error);
  })

});