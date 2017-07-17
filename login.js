(function() {
  // Initialize Firebase
  const config = {
    apiKey: "AIzaSyCbpxNKFUQgeqwNVhYqTYza5pNhIdAovRU",
    authDomain: "takeit-3a302.firebaseapp.com",
    databaseURL: "https://takeit-3a302.firebaseio.com",
    projectId: "takeit-3a302",
    storageBucket: "takeit-3a302.appspot.com",
    messagingSenderId: "171700086797"
  };
  firebase.initializeApp(config);

  // Get elements
  const txtEmail = document.getElementById('txtEmail');
  const txtPassword = document.getElementById('txtPassword');
  const btnSignin = document.getElementById('btnSignin');
  const btnSignup = document.getElementById('btnSignup');

  // Add login event
  btnSignin.addEventListener('click', e =>{
    // Get email and password
    const email = txtEmail.value;
    const pass = txtPassword.value;
    const auth = firebase.auth();

    //Sign in
    const promise = auth.signInWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));
  });

  // Add login event
  btnSignup.addEventListener('click', e =>{
    // Get email and password
    const email = txtEmail.value;
    const pass = txtPassword.value;
    const auth = firebase.auth();

    //Sign up
    const promise = auth.createUserWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));
  });

  // Add a realtime listener
  firebase.auth().onAuthStateChanged(firebaseUser => {
    if(firebaseUser) {
      console.log(firebaseUser);
    } else {
      console.log('not logged in');
    }
  });

}());
