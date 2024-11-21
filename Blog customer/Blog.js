var isParagraph1Loaded = false;
var isParagraph2Loaded = false;
var isParagraph3Loaded = false;

function readMore() {
    if (!isParagraph1Loaded) {
        var readmore_blog = document.getElementById('readMore');
        var new_paragraph = document.createElement('p');
        new_paragraph.innerText = 'Contrary to its name, the Panama Hat finds its roots in Ecuador. Crafted from the fibers of the Toquilla palm, this lightweight and breathable hat became popular in the mid-19th century. It gained international recognition during the construction of the Panama Canal, where workers wore it for its ability to protect against the scorching sun. The Panama Hat became a symbol of elegance and tropical flair, associated with adventurers and explorers. Its timeless appeal lies in its craftsmanship and the meticulous process of weaving each hat by hand.';
        readmore_blog.appendChild(new_paragraph);
        isParagraph1Loaded = true;
    }
}

function readMore1() {
    if (!isParagraph2Loaded) {
        var readmore_blog = document.getElementById('readMore1');
        var new_paragraph = document.createElement('p');
        new_paragraph.innerText = 'Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.';
        readmore_blog.appendChild(new_paragraph);
        isParagraph2Loaded = true;
    }
}

function readMore2() {
    if (!isParagraph2Loaded) {
        var readmore_blog = document.getElementById('readMore2');
        var new_paragraph = document.createElement('p');
        new_paragraph.innerText = 'Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.Another iconic hat design is the Trilby Hat, which has long been associated with coolness and effortless style. Popularized in the 1920s and further embraced in the 1960s by rebellious youth culture, the Trilby Hat became a symbol of charisma and a touch of mystery. Worn by influential figures such as Frank Sinatra and Michael Jackson, this hat remains a timeless accessory that effortlessly transitions from formal occasions to casual settings, adding a dash of sophistication to any outfit.';
        readmore_blog.appendChild(new_paragraph);
        isParagraph2Loaded = true;
    }
}




function Admin() {
  var username = prompt("Enter your username:");
  var password = prompt("Enter your password:");
    
  // Replace these values with your desired username and password patterns
  const namePattern = /^[a-zA-Z\s]{3,40}$/; // Letters and spaces allowed, 3-40 characters (js validation)
  const passwordPattern = /^[a-zA-Z0-9!@#$%^&*]{8,}$/; // Letters or numbers allowed, minimum 8 characters allowed
  const adminPassword = "welcome123"; // Hardcoded password

  if (namePattern.test(username) && passwordPattern.test(password)) {
    if (password === adminPassword ) {
      // Redirect to the PHP page
      window.location.href = "/Online Fashion Store/Blog admin/Blog_admin.php";
    } else {
      alert("Invalid password. Please try again.");
    }
  } else {
    alert("Invalid username or password format. Please try again.");
  }
}




