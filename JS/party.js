// Security garde
// Check queue of people, if person is older than 18 and younger than 35, admit. Otherwise, apologize.

// write variables to contain the limitations of the age.
const minAge = 18;
const maxAge = 35;

// we will loop through the queue.
do {
    let Age=prompt('How Old Are You');
  // if current person is younger than 18, will print (you are too young)
  if(Age<18){
    console.log("you are too young");
      // if older than 35, will print (you are too old)
  }else if(Age>35){
    console.log("you are too Old");
      // if between 18 and 35, ask for the user name, and welcome the user by his/her name.
  }else{
    let TheName=prompt('Whats Your Name');
    console.log("Welcome To The Party,"+TheName);
  }
} while (confirm("Is there anyone else?"));1712
